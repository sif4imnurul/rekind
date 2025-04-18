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

@endsection