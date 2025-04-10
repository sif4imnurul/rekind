{{-- @extends('layouts.employee')

@section('title', 'Background Zoom | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Zoom Virtual Background</div>
        <div class="text-[var(--sub-text)] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Unduh Latar Belakang Zoom Resmi Rekind untuk Acara Virtual Anda.</div>
        </div>

        
        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="w-full h-full flex flex-col md:flex-row items-center justify-between gap-y-4 md:gap-[30px]">
        <!-- Kiri: Search Box -->
        <div class="w-full max-w-[510px] h-[62px] flex items-center gap-[10px]">
            <div class="w-full h-[56px] min-w-[280px] max-w-[720px] bg-[var(--highlight-text-box)] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                    <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                    <div class="flex-1 h-full flex items-center justify-start gap-[10px]">
                        <div class="text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                            Hinted search text
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <div class="w-[48px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]">
                            <div class="overflow-hidden rounded-full flex items-center justify-center gap-[10px]">
                                <div class="p-[8px] flex items-center justify-center gap-[10px]">
                                    <div class="w-[24px] h-[24px] relative">
                                        <div class="absolute text-[var(--sub-text)]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanan: Sort Box -->
        <div class="w-full max-w-[510px] overflow-hidden rounded-full flex items-center justify-end gap-[4px]">
            <div class="w-[130px] h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
            <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
            <div class="w-[62px] h-full flex items-center justify-start gap-[10px]">
                <div class="text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                Sort by
                </div>
            </div>
            <div class="w-[16px] h-[20px] text-[var(--sub-text)]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path></svg>
            </div>
            </div>
            <div class="w-[24px] h-[24px] relative"></div>
        </div>
    </div>
<!-- Grid -->
<div class="w-full px-4 py-6">
    <div class="max-w-screen-xl mx-auto grid justify-center gap-6 grid-cols-[repeat(auto-fit,minmax(327px,1fr))]">
        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Card -->
        <div class="w-full max-w-[371px] p-4 bg-white rounded-[20px] border border-[var(--button)] flex flex-col gap-[13px] shadow-sm">
            <img
                src="{{ asset('img/pict-2.jpg') }}"
                alt="Zoom BG"
                class="w-full h-full rounded-[16px] border border-[var(--button)] object-cover"
            />

            <div class="flex justify-between items-center">
                <div class="text-[var(--judul)] text-[18px] font-bold leading-[22px] font-montserrat">
                    Nama Zoom VBG
                </div>
                <a href="#" class="w-[33px] h-[33px] flex items-center justify-center text-[var(--button)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" class="fill-current">
                        <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                        <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>


    @include('components.pagination')

</div>

@endsection --}}
@extends('layouts.employee')

@section('title', 'Background Zoom | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Zoom Virtual Background</div>
            <div class="text-[var(--sub-text)] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Unduh Latar Belakang Zoom Resmi Rekind untuk Acara Virtual Anda.</div>
        </div>
        
        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="w-full h-full flex flex-col md:flex-row items-center justify-between gap-y-4 md:gap-[30px]">
        <!-- Kiri: Search Box -->
        <div class="w-full max-w-[510px] h-[62px] flex items-center gap-[10px]">
            <form action="{{ route('zoom-background.search') }}" method="GET" class="w-full">
                <div class="w-full h-[56px] min-w-[280px] max-w-[720px] bg-[var(--highlight-text-box)] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                    <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                        <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                        <div class="flex-1 h-full flex items-center justify-start gap-[10px]">
                            <input 
                                type="text" 
                                name="search" 
                                placeholder="Cari background zoom..." 
                                value="{{ $search ?? '' }}" 
                                class="w-full bg-transparent border-none outline-none text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]"
                            >
                        </div>
                        <button type="submit" class="w-[48px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]">
                            <div class="overflow-hidden rounded-full flex items-center justify-center gap-[10px]">
                                <div class="p-[8px] flex items-center justify-center gap-[10px]">
                                    <div class="w-[24px] h-[24px] relative">
                                        <div class="absolute text-[var(--sub-text)]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Kanan: Sort Box -->
        <div class="w-full max-w-[510px] overflow-hidden rounded-full flex items-center justify-end gap-[4px]">
            <form id="sort-form" method="GET" class="w-[130px] h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
                <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                <select 
                    name="sort" 
                    onchange="document.getElementById('sort-form').submit()" 
                    class="bg-transparent border-none text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px] cursor-pointer"
                >
                    <option value="terbaru" {{ (request('sort') == 'terbaru' || !request('sort')) ? 'selected' : '' }}>Terbaru</option>
                    <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
                    <option value="a-z" {{ request('sort') == 'a-z' ? 'selected' : '' }}>A-Z</option>
                    <option value="z-a" {{ request('sort') == 'z-a' ? 'selected' : '' }}>Z-A</option>
                </select>
                <div class="w-[16px] h-[20px] text-[var(--sub-text)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path></svg>
                </div>
                @if(request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif
            </form>
            <div class="w-[24px] h-[24px] relative"></div>
        </div>
    </div>

    <!-- Grid -->
    <div class="w-full px-4 py-6">
        <div class="mx-auto max-w-screen-xl grid justify-center grid-cols-[repeat(auto-fit,minmax(327px,1fr))] gap-6">
            @forelse($items as $item)
                <!-- Card -->
                <div class="w-[327px] space-y-2">
                    <div class="relative w-full h-[184px] rounded-[16px] overflow-hidden border border-[var(--button)]">
                        <img 
                            src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('img/pict-2.jpg') }}" 
                            alt="{{ $item->nama }}" 
                            class="w-full h-full object-cover"
                            onerror="this.onerror=null;this.src='{{ asset('img/pict-2.jpg') }}';"
                        />
                        <div class="absolute bottom-2 right-2 w-[38px] h-[38px] bg-[var(--highlight-text-box)] rounded-[12px] shadow flex items-center justify-center">
                            <a 
                                href="{{ $item->gambar ? asset('storage/' . $item->gambar) : '#' }}" 
                                download 
                                class="w-[24px] h-[24px] text-[var(--button)]"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24">
                                    <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                    <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-[var(--judul)] text-[16px] font-medium px-2 py-1 rounded-lg bg-[var(--highlight-text-box)] inline-block">
                            {{ $item->nama }}
                        </h3>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-[var(--sub-text)] text-lg">Tidak ada background zoom yang ditemukan</p>
                    @if(request('search'))
                        <a href="{{ route('zoom.background') }}" class="text-[var(--button)] underline mt-2 inline-block">
                            Tampilkan semua
                        </a>
                    @endif
                </div>
            @endforelse
        </div>
    </div>

    <!-- Pagination -->
    @if($items->hasPages())
    <div class="w-full flex justify-center mt-8">
        {{ $items->appends(request()->query())->links('components.pagination') }}
    </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form submission
    const searchForm = document.querySelector('form[action="{{ route('zoom-background.search') }}"]');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const url = this.action + '?' + new URLSearchParams(formData).toString();
            
            // Regular form submission
            window.location.href = url;
        });
    }

    // Handle sort change
    const sortSelect = document.querySelector('select[name="sort"]');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const form = document.getElementById('sort-form');
            form.submit();
        });
    }
});
</script>

@endsection