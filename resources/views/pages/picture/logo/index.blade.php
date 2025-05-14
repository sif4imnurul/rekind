{{-- @extends('layouts.employee')

@section('title', 'Official Logo | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full bg-white">
        <div class="max-w-[1050px] mx-auto px-6 md:px-0 pt-10 pb-16 flex flex-col items-start gap-8">
            <div class="flex flex-col items-start gap-2 w-full">
                <h3 class="text-[var(--judul)] text-lg md:text-xl font-bold font-montserrat">Logo Resmi</h3>
                <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat">
                    Kumpulan logo resmi untuk Rekind dan anak perusahaan, tersedia untuk keperluan branding, dokumentasi, dan acara perusahaan.
                </p>
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 justify-items-center">
                @foreach($logos as $logo)
                    <img class="w-[150px] h-auto object-contain self-end" 
                         src="{{ asset('img/' . $logo->foto) }}" 
                         alt="{{ $logo->nama }}" />
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection --}}

@extends('layouts.employee')

@section('title', 'Official Logo | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full bg-white">
        <div class="max-w-[1050px] mx-auto px-6 md:px-0 pt-10 pb-16 flex flex-col items-start gap-8">
            <div class="flex flex-col items-start gap-2 w-full">
                <h3 class="text-[var(--judul)] text-lg md:text-xl font-bold font-montserrat">Logo Resmi</h3>
                <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat">
                    Kumpulan logo resmi untuk Rekind dan anak perusahaan, tersedia untuk keperluan branding, dokumentasi, dan acara perusahaan.
                </p>
            </div>

            <!-- Grid of logos with overlay download buttons -->
            <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 justify-items-center">
                @foreach($logos as $logo)
                    <div class="relative group w-[150px] h-[150px]">
                        <img class="w-full h-full object-contain" 
                             src="{{ asset('img/' . $logo->foto) }}" 
                             alt="{{ $logo->nama }}" />
                        <!-- Download button overlay -->
                        <a href="{{ asset('img/' . $logo->foto) }}" download 
                           class="absolute bottom-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200
                                  bg-[var(--button)] text-white rounded-full p-2 hover:bg-[var(--button-hover)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="fill-current">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection