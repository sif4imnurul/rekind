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
                <form action="{{ route('photo.index') }}" method="GET" class="w-[130px] h-[56px]">
                    @if(request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}" />
                    @endif
                    <select name="sort" 
                            onchange="this.form.submit()"
                            class="w-full h-full px-4 bg-transparent text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px] focus:outline-none cursor-pointer">
                        <option value="newest" {{ request('sort', 'newest') === 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </form>
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
            @foreach ($photos as $photo)
                <div class="relative group border border-[#7BB7D1] w-full h-full overflow-hidden">
                    <img src="{{ asset($photo->foto) }}" class="w-full h-full object-cover transition duration-300" alt="{{ $photo->nama }}" />
                    <div class="absolute inset-0 bg-[var(--button)]/90 flex flex-col items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg font-semibold mb-1">{{ $photo->nama }}</h3>
                        <p class="text-white text-sm">{{ $photo->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('components.pagination')

</div>

@endsection
