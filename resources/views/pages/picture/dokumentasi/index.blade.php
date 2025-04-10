@extends('layouts.employee')

@section('title', 'Photo and Video | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden flex flex-col gap-6">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Official Photo and Video Stock</div>
        <div class="text-[var(--sub-text)] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Arsip visual perjalanan dan pencapaian kami.</div>
        </div>

    </div>

    <!-- line -->
    <div class="">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <!-- galeri foto -->
    <div class="w-full flex flex-col-reverse md:flex-row justify-center items-center gap-6 md:gap-[74px] px-4">
        <!-- Box Teks -->
        <div class="w-full md:w-[354px] h-auto md:h-[246px] p-[11px] bg-white flex flex-col justify-between">
            <!-- Judul -->
            <div class="text-[#1D3A6D] text-[24px] font-medium leading-[32px] tracking-[0.10px] font-montserrat">
                Galeri Foto
            </div>

            <!-- Deskripsi -->
            <div class="text-[#737373] text-[14px] font-light leading-[20px] tracking-[0.20px] font-montserrat mt-2">
                Jelajahi koleksi foto yang menangkap setiap momen berharga dalam perjalanan kami.
            </div>

            <!-- Link Selengkapnya -->
            <a href="{{ route('photo.index') }}" class="flex items-center gap-2 text-[var(--button)] text-[16px] leading-[22px] tracking-[0.5px] font-roboto mt-4">
                <div class="h-[40px] flex items-center">
                    Selengkapnya
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </a>
        </div>

        <!-- Box Gambar Responsive -->
        <div class="w-full max-w-[454px] h-auto md:h-[246px] p-[11px] bg-white overflow-hidden">
            <div class="flex flex-row gap-[10px] justify-center">
                <img src="{{ asset('img/pict-1.jpg') }}" alt="Image 1" class="w-[136px] h-[224px] object-cover" />
                <img src="{{ asset('img/pict-2.jpg') }}" alt="Image 2" class="w-[136px] h-[224px] object-cover" />
                <img src="{{ asset('img/pict-3.jpeg') }}" alt="Image 3" class="w-[136px] h-[224px] object-cover" />
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col md:flex-row justify-center items-center gap-6 md:gap-[74px] px-4">
        <!-- preview -->
        <div class="w-full flex justify-center px-4">
            <div class="relative w-full max-w-[394px] aspect-[16/9] md:aspect-auto md:w-[394px] md:h-[280px]">
                <!-- Layer paling bawah -->
                <div class="absolute top-[12px] left-[18px] md:top-[20px] md:left-[30px] w-full h-full rounded-[15px] overflow-hidden z-0">
                    <img src="{{ asset('img/pict-2.jpg') }}" alt="Layer 3" class="w-full h-full object-cover" />
                </div>

                <!-- Layer tengah -->
                <div class="absolute top-[6px] left-[9px] md:top-[10px] md:left-[15px] w-full h-full rounded-[15px] overflow-hidden z-10">
                    <img src="{{ asset('img/pict-3.jpeg') }}" alt="Layer 2" class="w-full h-full object-cover" />
                </div>

                <!-- Layer atas (gambar utama) -->
                <div class="relative w-full h-full rounded-[15px] overflow-hidden z-20">
                    <img src="{{ asset('img/photo.jpg') }}" alt="Main Image" class="w-full h-full object-cover" />

                    <!-- Icon pojok kanan bawah -->
                    <div class="absolute bottom-[8px] right-[8px] bg-[rgba(0,0,0,0.5)] w-[30px] h-[30px] rounded-[5px] flex items-center justify-center text-[var(--button)]">
                        <!-- Icon playlist style -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path fill-rule="evenodd" d="M2.25 6A.75.75 0 0 1 3 5.25h18a.75.75 0 0 1 0 1.5H3A.75.75 0 0 1 2.25 6m0 4A.75.75 0 0 1 3 9.25h18a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m0 4a.75.75 0 0 1 .75-.75h8a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75m0 4a.75.75 0 0 1 .75-.75h8a.75.75 0 0 1 0 1.5H3a.75.75 0 0 1-.75-.75" clip-rule="evenodd"/><path fill="currentColor" d="M18.875 14.118c1.654.955 2.48 1.433 2.602 2.121a1.5 1.5 0 0 1 0 .521c-.121.69-.948 1.167-2.602 2.122s-2.48 1.432-3.138 1.193a1.5 1.5 0 0 1-.451-.26c-.536-.45-.536-1.405-.536-3.315s0-2.864.536-3.314c.134-.113.287-.2.451-.26c.657-.24 1.484.238 3.138 1.192"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- text box -->
        <div class="w-full max-w-[454px] h-auto md:h-[246px] p-[11px] bg-white flex flex-col justify-between">
            <!-- Judul -->
            <div class="text-[#1D3A6D] text-[24px] font-medium leading-[32px] tracking-[0.10px] font-montserrat">
                Koleksi Video
            </div>

            <!-- Deskripsi -->
            <div class="text-[#737373] text-[14px] font-light leading-[20px] tracking-[0.20px] font-montserrat mt-2">
                Kumpulan video yang mendokumentasikan berbagai kegiatan, pencapaian, dan perjalanan perusahaan kami.
            </div>

            <!-- Link Selengkapnya -->
            <a href="{{ route('video.index') }}" class="flex items-center gap-2 text-[var(--button)] text-[16px] leading-[22px] tracking-[0.5px] font-roboto mt-4">
                <div class="h-[40px] flex items-center">
                    Selengkapnya
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </a>
        </div>
        
    </div>

</div>

@endsection
