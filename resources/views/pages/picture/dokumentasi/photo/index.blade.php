@extends('layouts.employee')

@section('title', 'Photo | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden flex flex-col">
    <div class="max-w-full flex justify-between items-start">
        <!-- Judul Besar -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Galeri Foto</div>
            <div class="text-[var(--sub-text)] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Jelajahi koleksi foto yang menangkap setiap momen berharga dalam perjalanan kami.</div>
        </div>
        
        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
        <!-- Sort Box -->
            <div class="w-full max-w-[510px] overflow-hidden rounded-full flex items-center justify-end gap-[4px]">
                <div class="w-[130px] h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
                    <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                    <div class="w-[62px] h-full flex items-center justify-start gap-[10px]">
                        <div class="text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                        Sort by
                        </div>
                    </div>
                    <div class="w-[16px] h-[20px] text-[#737373]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path></svg>
                    </div>
                </div>
                <div class="w-[24px] h-[24px] relative"></div>
            </div>
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <!-- GRID -->
    <div class="w-full px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 auto-rows-[330px]">
            @for ($i = 0; $i < 9; $i++)
                <div class="relative group border border-[#7BB7D1] w-full h-full overflow-hidden {{ $i === 4 ? 'lg:col-span-2 lg:row-span-2' : '' }}">
                    <img src="{{ asset('img/photo.jpg') }}" class="w-full h-full object-cover transition duration-300" />

                    <!-- Hover overlay biru transparan -->
                    <div class="absolute inset-0 bg-[var(--button)]/90 flex flex-col items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg font-semibold mb-1">Judul Foto</h3> <!-- misal berdiskusi -->
                        <p class="text-white text-sm">Kategori Foto</p> <!-- misal proyek balongan -->
                    </div>
                </div>
            @endfor
        </div>
    </div>

    @include('components.pagination')

</div>

@endsection
