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
        <!-- Card 1 -->
        <a href="{{ route('agenda.grid') }}" class="w-36 h-36 py-1 flex justify-center items-center">
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
        </a>

        <!-- Card 2 -->
        <a href="{{ route('agenda.list') }}" class="w-36 h-36 border-b border-neutral-500 flex justify-center items-center">
            <div class="w-36 self-stretch bg-white rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5 overflow-hidden">
                <div class="self-stretch flex-1 px-3 py-2.5 inline-flex justify-center items-center gap-2">
                    <div class="w-6 h-6 relative">
                        <div class="w-16 h-16 absolute left-[-20px] top-[-20px] text-neutral-500">
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
        <a href="{{ route('agenda.list', ['month' => $month - 1 < 1 ? 12 : $month - 1, 'year' => $month - 1 < 1 ? $year - 1 : $year]) }}" class="w-6 h-6 rotate-180 text-sky-900">
            <div class="transform mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
            </div>
        </a>

        <!-- Bulan -->
        <h2 class="text-base font-bold text-sky-900">{{ Carbon::create($year, $month, 1)->translatedFormat('F Y') }}</h2>

        <!-- Tombol Selanjutnya -->
        <a href="{{ route('agenda.list', ['month' => $month + 1 > 12 ? 1 : $month + 1, 'year' => $month + 1 > 12 ? $year + 1 : $year]) }}" class="w-6 h-6 text-sky-900">
            <div class="transform mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path></svg>
            </div>
        </a>
    </div>

    <div class="w-full flex flex-col gap-3">
        <!-- First divider -->
        <div class="w-full h-px bg-[var(--button)]"></div>

        @if(count($allDates) > 0)
            @foreach($allDates as $dateInfo)
                <div class="w-full flex flex-col gap-2.5">
                    <!-- Konten kalender -->
                    <div class="w-full flex justify-between items-center">
                        <!-- Tanggal -->
                        <div class="p-2.5 flex justify-center items-center">
                            <a href="{{ route('agenda.show', ['date' => $dateInfo['date']->format('Y-m-d')]) }}" class="relative w-9 h-9 flex justify-center items-center cursor-pointer">
                                <div class="absolute w-9 h-9 bg-neutral-500 rounded"></div>
                                <span class="absolute text-white text-xl font-normal leading-loose">{{ $dateInfo['date']->day }}</span>
                            </a>
                        </div>

                        <!-- Kartu proyek -->
                        <div class="flex flex-col gap-2 w-80">
                            @if($dateInfo['agendas']->count() > 0)
                                @foreach($dateInfo['agendas'] as $agenda)
                                    <a href="{{ route('agenda.show', ['date' => $dateInfo['date']->format('Y-m-d')]) }}" class="relative h-24 cursor-pointer">
                                        <div class="absolute inset-0 bg-[var(--highlight-text-box)] rounded-[10px]"></div>
                                        <div class="absolute inset-0 flex flex-col justify-center items-start px-4">
                                            <div class="text-sky-900 text-xl font-medium">{{ $agenda->nama_agenda }}</div>
                                            <div class="text-sky-900 text-sm font-light leading-tight">
                                                Prioritas: {{ ucfirst($agenda->prioritas) }}<br/>
                                                {{ Carbon::parse($agenda->tanggal_mulai)->format('H:i') }} - 
                                                {{ Carbon::parse($agenda->tanggal_deadline)->format('H:i') }}<br/>
                                                {{ $agenda->divisi }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            @else
                                <div class="text-gray-500 text-sm py-2">Tidak ada agenda untuk tanggal ini</div>
                            @endif
                        </div>
                    </div>
                    <div class="w-full h-px bg-[var(--button)]"></div>
                </div>
            @endforeach
        @else
            <div class="w-full py-8 text-center text-gray-500">
                Tidak ada tanggal untuk bulan ini
            </div>
            <div class="w-full h-px bg-[var(--button)]"></div>
        @endif
    </div>
</div>

@endsection