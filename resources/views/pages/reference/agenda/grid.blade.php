<?php
    use Carbon\Carbon;
?>

@extends('layouts.employee')

@section('title', 'Agenda | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Agenda Perusahaan</div>
            <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Jadwal hari-hari dan event penting perusahaan</div>
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>
    <div class="self-stretch h-36 py-px inline-flex justify-start items-center gap-5 overflow-hidden">    
        <!-- Card 1-->
        <a href="{{ route('agenda.grid') }}" class="w-36 h-36 border-b border-neutral-500 flex justify-center items-center">
            <div class="w-36 h-36 py-1 flex justify-center items-center">
                <div class="w-36 self-stretch bg-white rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5 overflow-hidden">
                    <div class="self-stretch flex-1 px-3 py-2.5 inline-flex justify-center items-center gap-2">
                        <div class="w-20 h-20 relative">
                            <div class="w-16 h-16 absolute left-[6.33px] top-[6.33px] text-neutral-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" class="fill-current">
                                    <path d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3m1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Card 2 -->
        <a href="{{ route('agenda.list') }}" class="w-36 h-36 py-1 border-b border-neutral-500/50 flex justify-center items-center">
            <div class="w-36 self-stretch bg-white rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5 overflow-hidden">
                <div class="self-stretch flex-1 px-3 py-2.5 inline-flex justify-center items-center gap-2">
                    <div class="w-6 h-6 relative">
                        <div class="w-16 h-16 absolute left-[-20px] top-[-20px] text-neutral-500/50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" class="fill-current">
                                <path fill-rule="evenodd" d="M20 4H4a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1M4 2a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3zm2 5h2v2H6zm5 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2zm-3 4H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1m-2 3H6v2h2zm2 1a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2h-6a1 1 0 0 1-1-1" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Header Navigasi Bulan -->
    <div class="flex items-center justify-center gap-8 py-4">
        <!-- Tombol Sebelumnya -->
        <a href="{{ route('agenda.grid', ['month' => $month - 1 < 1 ? 12 : $month - 1, 'year' => $month - 1 < 1 ? $year - 1 : $year]) }}" class="w-6 h-6 rotate-180 text-sky-900">
            <div class="transform mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
            </div>
        </a>

        <!-- Bulan -->
        <h2 class="text-base font-bold text-sky-900">{{ $currentMonth }}</h2>

        <!-- Tombol Selanjutnya -->
        <a href="{{ route('agenda.grid', ['month' => $month + 1 > 12 ? 1 : $month + 1, 'year' => $month + 1 > 12 ? $year + 1 : $year]) }}" class="w-6 h-6 text-sky-900">
            <div class="ransform mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
            </div>
        </a>
    </div>

    <!-- Header Hari -->
    <div class="grid grid-cols-7 gap-0 text-center text-xs font-medium text-zinc-600 mb-2">
        <div>Senin</div>
        <div>Selasa</div>
        <div>Rabu</div>
        <div>Kamis</div>
        <div>Jum'at</div>
        <div>Sabtu</div>
        <div>Minggu</div>
    </div>

    <!-- Grid Kalender -->
    <div class="grid grid-cols-7 gap-0 text-center">
        @foreach($calendar as $week)
            @foreach($week as $day)
                @php
                    $dayClass = 'text-sky-900';
                    if ($day['month'] === 'prev' || $day['month'] === 'next') {
                        $dayClass = 'text-stone-400';
                    } elseif (Carbon::now()->month == $month && Carbon::now()->year == $year && Carbon::now()->day == $day['day'] && $day['month'] === 'current') {
                        $dayClass = 'text-zinc-950 font-bold';
                    }
                    
                    $roundedClass = '';
                    if ($loop->parent->first && $loop->first) {
                        $roundedClass = 'rounded-tl-lg';
                    } elseif ($loop->parent->first && $loop->last) {
                        $roundedClass = 'rounded-tr-lg';
                    } elseif ($loop->parent->last && $loop->first) {
                        $roundedClass = 'rounded-bl-lg';
                    } elseif ($loop->parent->last && $loop->last) {
                        $roundedClass = 'rounded-br-lg';
                    }
                @endphp
                
                <div class="h-36 border border-blue-100 {{ $roundedClass }} flex flex-col items-start p-2 overflow-y-auto">
                    <a href="{{ route('agenda.show', ['date' => $day['date']]) }}" class="cursor-pointer">
                        <span class="text-2xl font-medium {{ $dayClass }}">{{ $day['day'] }}</span>
                    </a>
                    
                    @foreach($day['agendas'] as $agenda)
                        <div class="mt-1 w-full text-left">
                            <div class="px-2 py-1 bg-{{ 
                                $agenda->prioritas === 'tinggi' ? 'red' : 
                                ($agenda->prioritas === 'sedang' ? 'yellow' : 'green')
                            }}-100 rounded text-xs truncate" title="{{ $agenda->nama_agenda }}">
                                {{ $agenda->nama_agenda }}
                            </div>
                            <div class="text-xs text-gray-500 mt-1">
                                {{ Carbon::parse($agenda->tanggal_mulai)->format('H:i') }} - 
                                {{ Carbon::parse($agenda->tanggal_deadline)->format('H:i') }}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endforeach
    </div>

    <div class="w-full flex justify-center mt-8">
        @include('components.pagination')
    </div>
</div>

@endsection