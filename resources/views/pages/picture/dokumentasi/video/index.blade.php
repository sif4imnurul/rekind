@extends('layouts.employee')

@section('title', 'Video | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden flex flex-col gap-6">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Koleksi Video</div>
        <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Kumpulan video yang mendokumentasikan berbagai kegiatan, pencapaian, dan perjalanan perusahaan kami.</div>
        </div>
    </div>

    <!-- line -->
    <div class="">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="w-full h-full flex flex-col md:flex-row items-center justify-between gap-y-4 md:gap-[30px]">
        <!-- Kiri: Search Box -->
        <div class="w-full max-w-[510px] h-[62px] flex items-center gap-[10px]">
            <form action="{{ route('video.index') }}" method="GET" class="w-full">
                <div class="w-full h-[56px] bg-[#D6E4F5] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                    <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari video..."
                               class="w-full bg-transparent text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px] focus:outline-none px-4" />
                        <button type="submit" class="w-[48px] h-[48px] flex items-center justify-center">
                            <div class="w-[24px] h-[24px] text-[#737373]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <input type="hidden" name="sort" value="{{ request('sort', 'newest') }}" />
            </form>
        </div>

        <!-- Kanan: Sort Box -->
        <div class="w-full max-w-[510px] overflow-hidden rounded-full flex items-center justify-end gap-[4px]">
            <form action="{{ route('video.index') }}" method="GET" class="w-[130px] h-[56px]">
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
    
    <div class="w-full flex justify-center">
        <div class="flex flex-wrap justify-center gap-6 max-w-screen-xl">
            @foreach ($videos as $video)
                <div class="relative group border border-[#7BB7D1] w-full h-full overflow-hidden">
                    <video controls class="w-full h-full object-cover">
                        <source src="{{ asset($video->foto) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="absolute inset-0 bg-[var(--button)]/90 flex flex-col items-center justify-center text-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg font-semibold mb-1">{{ $video->nama }}</h3>
                        <p class="text-white text-sm">{{ $video->deskripsi }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('components.pagination')

</div>

@endsection
