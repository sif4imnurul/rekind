@extends('layouts.employee')

@section('title', 'Twibbon | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Koleksi Twibbon</div>
            <div class="text-[var(--sub-text)] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Rayakan acara perusahaan dengan Twibbon resmi yang bisa dibagikan di media sosial.</div>
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
            <form action="{{ route('twibbon.index') }}" method="GET" class="w-full">
                <input type="hidden" name="sort" value="{{ request('sort', 'newest') }}">
                <div class="w-full h-[56px] min-w-[280px] max-w-[720px] bg-[var(--highlight-text-box)] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                    <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                        <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                        <div class="flex-1 h-full flex items-center justify-start gap-[10px]">
                            <input type="text" 
                                   name="search" 
                                   value="{{ request('search') }}"
                                   placeholder="Cari Twibbon..."
                                   class="w-full bg-transparent border-none outline-none text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]" />
                        </div>
                        <button type="submit" class="w-[48px] h-[48px] cursor-pointer flex items-center justify-center rounded-full hover:bg-[#C5D7EB] transition-colors">
                            <div class="p-[8px] flex items-center justify-center">
                                <div class="w-[24px] h-[24px] relative">
                                    <div class="absolute text-[var(--sub-text)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
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
            <div class="w-[130px] h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
                <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                <select id="sort-select" class="bg-transparent border-none text-[var(--sub-text)] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px] cursor-pointer">
                    <option value="newest" {{ (request('sort') == 'newest' || !request('sort')) ? 'selected' : '' }}>Terbaru</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Terlama</option>
                    <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Nama (A-Z)</option>
                    <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Nama (Z-A)</option>
                </select>
                <div class="w-[16px] h-[20px] text-[var(--sub-text)]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path></svg>
                </div>
            </div>
            <div class="w-[24px] h-[24px] relative"></div>
        </div>
    </div>

    <!-- Grid -->
    <div class="w-full px-4 py-6">
        <div class="mx-auto grid place-items-center grid-cols-[repeat(auto-fit,minmax(240px,1fr))] gap-6 max-w-screen-xl">
            @foreach ($twibbons as $twibbon)
                <div class="w-[240px] h-[300px] px-[10px] py-[11px] bg-white rounded-[15px] flex flex-col items-center gap-[10px]">
                    <img src="{{ $twibbon->preview_image }}" alt="{{ $twibbon->nama }}" class="w-[220px] h-[220px] rounded-[5px] object-cover" />
                    <div class="text-center text-[#1D3A6D] text-[18px] font-bold leading-[22px] font-montserrat">{{ $twibbon->nama }}</div>
                    <a href="{{ $twibbon->url }}" target="_blank">
                        <div class="text-center text-[#737373] text-[12px] underline leading-[16px] font-montserrat">Link Twibbon</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="w-full flex justify-center mt-6">
        {{ $twibbons->appends(request()->query())->links() }}
    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle sort functionality
        const sortSelect = document.getElementById('sort-select');
        
        sortSelect.addEventListener('change', function() {
            const sortValue = this.value;
            const currentUrl = new URL(window.location.href);
            
            // Simpan parameter search jika ada
            const searchParam = currentUrl.searchParams.get('search');
            
            // Set parameter sort baru
            currentUrl.searchParams.set('sort', sortValue);
            
            // Pastikan parameter search tetap ada
            if (searchParam) {
                currentUrl.searchParams.set('search', searchParam);
            }
            
            window.location.href = currentUrl.toString();
        });
                
        // Mengurutkan berdasarkan dropdown 
        const urlParams = new URLSearchParams(window.location.search);
        const currentSort = urlParams.get('sort');

        if (currentSort) {
            sortSelect.value = currentSort;
        }
    });
</script>

@endsection