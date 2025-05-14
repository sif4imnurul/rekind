@extends('layouts.employee')

@section('title', 'Detail Agenda | Rekind')

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
        <a href="{{ route('agenda.grid') }}" class="w-36 h-36 border-b border-neutral-500/50 flex justify-center items-center">
            <div class="w-36 h-36 py-1 flex justify-center items-center">
                <div class="w-36 self-stretch bg-white rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5 overflow-hidden">
                    <div class="self-stretch flex-1 px-3 py-2.5 inline-flex justify-center items-center gap-2">
                        <div class="w-20 h-20 relative">
                            <div class="w-16 h-16 absolute left-[6.33px] top-[6.33px] text-neutral-500/50">
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
        <a href="{{ route('agenda.list') }}" class="w-36 h-36 py-1 border-b border-neutral-500 flex justify-center items-center">
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

    <!-- Header tanggal yang dipilih -->
    <div class="flex items-center justify-center gap-8 py-4">
        <h2 class="text-base font-bold text-sky-900">{{ $date->format('d F Y') }}</h2>
    </div>

    <!-- Container Agenda -->
    <div class="relative flex flex-col items-center justify-center gap-6 w-full">
        @if($agendas->count() > 0)
            @foreach($agendas as $agenda)
                <!-- Card Container -->
                <div class="w-full max-w-[969px] bg-white rounded-[10px] border border-blue-300 relative p-6">
                    <!-- Content Inside Card -->
                    <div class="flex flex-col justify-start gap-4">
                        <!-- Judul Projek -->
                        <h2 class="text-sky-900 text-xl font-medium leading-loose">{{ $agenda->nama_agenda }}</h2>

                        <!-- Detail Projek -->
                        <div class="flex items-start gap-2.5">
                            <div class="w-5 h-5 text-slate-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-curent w-full h-full"><circle cx="12" cy="6" r="1" fill="currentColor"/><path fill="currentColor" d="M6 17h12v2H6zm4-5.17l2.792 2.794l3.932-3.935L18 12V8h-4l1.31 1.275l-2.519 2.519L10 9l-4 4l1.414 1.414z"/><path fill="currentColor" d="M19 3h-3.298a5 5 0 0 0-.32-.425l-.01-.012a4.43 4.43 0 0 0-2.89-1.518a2.6 2.6 0 0 0-.964 0a4.43 4.43 0 0 0-2.89 1.518l-.01.012a5 5 0 0 0-.32.424V3H5a3.003 3.003 0 0 0-3 3v14a3.003 3.003 0 0 0 3 3h14a3.003 3.003 0 0 0 3-3V6a3.003 3.003 0 0 0-3-3m1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.55a2.5 2.5 0 0 1 4.9 0H19a1 1 0 0 1 1 1Z"/></svg>
                            </div>

                            <p class="text-black text-sm font-normal leading-tight tracking-tight">{{ $agenda->catatan ?? 'Detail Agenda' }}</p>
                        </div>

                        <!-- Divisi -->
                        <div class="flex items-start gap-2.5">
                            <div class="w-5 h-5 text-slate-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-curent w-full h-full" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1850 688q45 25 82 61t62 80t40 93t14 102h-128q0-52-20-99t-55-81t-82-55t-99-21q-53 0-99 20t-81 55t-55 82t-21 99q0 91-41 173t-115 136q65 33 117 81t90 108t57 128t20 142h-128q0-79-30-149t-83-122t-122-82t-149-31q-79 0-149 30t-122 83t-82 122t-31 149H512q0-73 20-141t57-128t89-108t118-82q-73-54-114-136t-42-173q0-52-20-99t-55-81t-82-55t-99-21q-53 0-99 20t-81 55t-55 82t-21 99H0q0-52 14-101t39-93t63-80t82-62q-33-35-51-81t-19-95q0-52 20-99t55-81t81-55t100-21q52 0 99 20t81 55t55 82t21 99q0 49-18 95t-52 81q82 45 134 124q54-80 138-126t182-46q97 0 181 46t139 126q52-79 134-124q-33-35-51-81t-19-95q0-52 20-99t55-81t81-55t100-21q52 0 99 20t81 55t55 82t21 99q0 49-18 95t-52 81M256 512q0 27 10 50t27 40t41 28t50 10q27 0 50-10t40-27t28-41t10-50q0-27-10-50t-27-40t-41-28t-50-10q-27 0-50 10t-40 27t-28 41t-10 50m768 768q52 0 99-20t81-55t55-81t21-100q0-52-20-99t-55-81t-82-55t-99-21q-53 0-99 20t-81 55t-55 82t-21 99q0 53 20 99t55 81t81 55t100 21m512-768q0 27 10 50t27 40t41 28t50 10q27 0 50-10t40-27t28-41t10-50q0-27-10-50t-27-40t-41-28t-50-10q-27 0-50 10t-40 27t-28 41t-10 50"/></svg>
                            </div>

                            <p class="text-black text-sm font-normal leading-tight tracking-tight">{{ $agenda->divisi ?? 'Divisi' }}</p>
                        </div>

                        <!-- Waktu Agenda -->
                        <div class="flex items-start gap-2.5">
                            <div class="w-5 h-5 text-slate-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-curent w-full h-full" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1"><circle cx="12" cy="12" r="9" stroke-linecap="round" stroke-width="2"/><path stroke-width="3" d="M12 8h.01v.01H12z"/><path stroke-linecap="round" stroke-width="2" d="M12 12v4"/></g></svg>
                            </div>

                            <p class="text-black text-sm font-normal leading-tight tracking-tight">
                                {{ Carbon\Carbon::parse($agenda->tanggal_mulai)->format('H:i') }} - 
                                {{ Carbon\Carbon::parse($agenda->tanggal_deadline)->format('H:i') }}
                            </p>
                        </div>
                        
                        <!-- Priority Badge -->
                        <div class="mt-2">
                            <span class="px-3 py-1 bg-{{ 
                                $agenda->prioritas === 'tinggi' ? 'red' : 
                                ($agenda->prioritas === 'sedang' ? 'yellow' : 'green')
                            }}-100 rounded text-sm">
                                Prioritas {{ ucfirst($agenda->prioritas ?? 'normal') }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="w-full max-w-[969px] bg-white rounded-[10px] border border-blue-300 relative p-6 text-center">
                <p class="text-gray-500">Tidak ada agenda untuk tanggal ini</p>
            </div>
        @endif
    </div>

    <!-- Back button -->
    <div class="mt-8 flex justify-center">
        <a href="{{ route('agenda.grid') }}" class="px-4 py-2 bg-sky-700 text-white rounded-md hover:bg-sky-800 transition-colors">
            Kembali ke Kalender
        </a>
    </div>
</div>

@endsection