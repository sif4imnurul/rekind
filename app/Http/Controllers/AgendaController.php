<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function grid(Request $request)
    {
        // Ambil bulan dan tahun dari request atau gunakan bulan saat ini
        $month = $request->input('month', Carbon::now()->month);
        $year = $request->input('year', Carbon::now()->year);
        
        // Ambil semua agenda untuk bulan tersebut
        $agendas = Agenda::whereMonth('tanggal_mulai', $month)
                        ->whereYear('tanggal_mulai', $year)
                        ->orWhere(function($query) use ($month, $year) {
                            $query->whereMonth('tanggal_deadline', $month)
                                  ->whereYear('tanggal_deadline', $year);
                        })
                        ->get();
        
        // Buat kalender untuk bulan tersebut
        $calendar = $this->generateCalendar($month, $year, $agendas);
        
        return view('pages.reference.agenda.grid', [
            'calendar' => $calendar,
            'currentMonth' => Carbon::create($year, $month, 1)->format('F Y'),
            'month' => $month,
            'year' => $year,
            'agendas' => $agendas
        ]);
    }
    
    private function generateCalendar($month, $year, $agendas)
    {
        $daysInMonth = Carbon::create($year, $month, 1)->daysInMonth;
        $firstDay = Carbon::create($year, $month, 1)->dayOfWeek;
        $firstDay = $firstDay === 0 ? 6 : $firstDay - 1; // Adjust so Monday is 0
        
        $calendar = [];
        $dayCount = 1;
        
        // Hari dari bulan sebelumnya
        $prevMonth = $month - 1 < 1 ? 12 : $month - 1;
        $prevYear = $month - 1 < 1 ? $year - 1 : $year;
        $daysInPrevMonth = Carbon::create($prevYear, $prevMonth, 1)->daysInMonth;
        
        // Hari dari bulan berikutnya
        $nextMonth = $month + 1 > 12 ? 1 : $month + 1;
        $nextYear = $month + 1 > 12 ? $year + 1 : $year;
        
        // Isi hari dari bulan sebelumnya
        for ($i = 0; $i < $firstDay; $i++) {
            $calendar[] = [
                'day' => $daysInPrevMonth - $firstDay + $i + 1,
                'month' => 'prev',
                'agendas' => [],
                'date' => Carbon::create($prevYear, $prevMonth, $daysInPrevMonth - $firstDay + $i + 1)->format('Y-m-d')
            ];
        }
        
        // Isi hari dari bulan ini
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $date = Carbon::create($year, $month, $day)->format('Y-m-d');
            $dayAgendas = $agendas->filter(function ($agenda) use ($date) {
                return Carbon::parse($agenda->tanggal_mulai)->format('Y-m-d') == $date || 
                       Carbon::parse($agenda->tanggal_deadline)->format('Y-m-d') == $date;
            });
            
            $calendar[] = [
                'day' => $day,
                'month' => 'current',
                'agendas' => $dayAgendas,
                'date' => $date
            ];
        }
        
        // Isi hari dari bulan berikutnya
        $remainingDays = 42 - count($calendar); // 6 weeks x 7 days
        for ($i = 1; $i <= $remainingDays; $i++) {
            $calendar[] = [
                'day' => $i,
                'month' => 'next',
                'agendas' => [],
                'date' => Carbon::create($nextYear, $nextMonth, $i)->format('Y-m-d')
            ];
        }
        
        return array_chunk($calendar, 7); // Dibagi per minggu
    }

    // public function list(Request $request)
    // {
    //     // Ambil bulan dan tahun dari request atau gunakan bulan saat ini
    //     $month = $request->input('month', Carbon::now()->month);
    //     $year = $request->input('year', Carbon::now()->year);
        
    //     // Ambil semua agenda untuk bulan tersebut
    //     $agendas = Agenda::whereMonth('tanggal_mulai', $month)
    //                     ->whereYear('tanggal_mulai', $year)
    //                     ->orWhere(function($query) use ($month, $year) {
    //                         $query->whereMonth('tanggal_deadline', $month)
    //                             ->whereYear('tanggal_deadline', $year);
    //                     })
    //                     ->orderBy('tanggal_mulai')
    //                     ->get();
        
    //     return view('pages.reference.agenda.list', [
    //         'agendas' => $agendas,
    //         'month' => $month,
    //         'year' => $year
    //     ]);
    // }

    public function list(Request $request)
    {
        // Ambil bulan dan tahun dari request atau gunakan bulan saat ini
        $month = $request->input('month', Carbon::now()->month);
        $year = $request->input('year', Carbon::now()->year);
        
        // Ambil semua agenda untuk bulan tersebut
        $agendas = Agenda::whereMonth('tanggal_mulai', $month)
                        ->whereYear('tanggal_mulai', $year)
                        ->orWhere(function($query) use ($month, $year) {
                            $query->whereMonth('tanggal_deadline', $month)
                                ->whereYear('tanggal_deadline', $year);
                        })
                        ->orderBy('tanggal_mulai')
                        ->get();
        
        // Generate all dates in the month
        $daysInMonth = Carbon::create($year, $month, 1)->daysInMonth;
        $allDates = [];
        
        for ($day = 1; $day <= $daysInMonth; $day++) {
            $currentDate = Carbon::create($year, $month, $day)->format('Y-m-d');
            
            // Filter agendas for this date
            $dayAgendas = $agendas->filter(function ($agenda) use ($currentDate) {
                return Carbon::parse($agenda->tanggal_mulai)->format('Y-m-d') == $currentDate || 
                    Carbon::parse($agenda->tanggal_deadline)->format('Y-m-d') == $currentDate;
            });
            
            $allDates[] = [
                'date' => Carbon::create($year, $month, $day),
                'agendas' => $dayAgendas
            ];
        }
        
        return view('pages.reference.agenda.list', [
            'allDates' => $allDates,
            'month' => $month,
            'year' => $year,
            'agendas' => $agendas,
            'hasAgendas' => $agendas->count() > 0
        ]);
    }
        
    public function show(Request $request, $date = null)
    {
        // Use provided date or default to today
        $date = $date ?? Carbon::now()->format('Y-m-d');
        $selectedDate = Carbon::parse($date);
        
        // Fetch agendas for the selected date
        $agendas = Agenda::whereDate('tanggal_mulai', $date)
                        ->orWhere(function($query) use ($date) {
                            $query->whereDate('tanggal_deadline', $date);
                        })
                        ->get();
        
        return view('pages.reference.agenda.show', [
            'date' => $selectedDate,
            'agendas' => $agendas
        ]);
    }
}