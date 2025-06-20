@extends('layouts.employee')

@section('title', 'Dokumen Survey | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Dokumen Survey</div>
            <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Pusat Arsip dan Laporan Hasil Survey</div>
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="grid grid-cols-5 gap-4 w-full py-2">
        <!-- Button 1 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.awareness') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Brand Awareness
                </a>
            </div>
        </div>

        <!-- Button 2 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.position') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Brand Positioning
                </a>
            </div>
        </div>

        <!-- Button 3 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.cse') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Kepuasan Klien & Mitra
                </a>
            </div>
        </div>

        <!-- Button 4 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.skl') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    SKL (Survey Kepuasan Layanan)
                </a>
            </div>
        </div>

        <!-- Button 5 - Active -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.dokumen_survey') }}" class="text-white text-base font-normal text-center">
                    Dokumen Survey
                </a>
            </div>
        </div>
    </div>
    
    <!-- Search and Sort controls -->
    <div class="py-6 w-full h-full flex flex-col md:flex-row items-center justify-between gap-y-4 md:gap-[30px]">
        <!-- Kiri: Search Box -->
        <div class="w-full max-w-[510px] h-[62px] flex items-center gap-[10px]">
            <form action="{{ route('survey.dokumen_survey') }}" method="GET" class="w-full">
                <div class="w-full h-[56px] min-w-[280px] max-w-[720px] bg-[#D6E4F5] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                    <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                        <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                        <div class="flex-1 h-full flex items-center justify-start gap-[10px]">
                            <input type="text" name="search" placeholder="Cari dokumen survey..." value="{{ $search ?? '' }}" class="w-full bg-transparent border-none outline-none text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                        </div>
                        <button type="submit" class="w-[48px] h-[48px] cursor-pointer flex items-center justify-center rounded-full hover:bg-[#C5D7EB] transition-colors">
                            <div class="p-[8px] flex items-center justify-center">
                                <div class="w-[24px] h-[24px] relative">
                                    <div class="absolute text-[#737373]">
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
            <div class="w-auto h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
                <select id="sort-select" class="bg-transparent border-none text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px] cursor-pointer pr-8 appearance-none">
                    <option value="terbaru" {{ (request('sort') == 'terbaru' || !request('sort')) ? 'selected' : '' }}>Urutkan: Terbaru</option>
                    <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Urutkan: Terlama</option>
                    <option value="a-z" {{ request('sort') == 'a-z' ? 'selected' : '' }}>Urutkan: A-Z</option>
                    <option value="z-a" {{ request('sort') == 'z-a' ? 'selected' : '' }}>Urutkan: Z-A</option>
                </select>
            </div>
        </div>
    </div>

    <div class="w-full px-4 py-6">
        <div class="max-w-[1600px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($dokumenSurveys as $dokumen)
            <div class="w-full p-4 bg-white overflow-hidden rounded-[20px] border border-gray-200 flex flex-col gap-[13px] shadow-sm hover:shadow-md transition-shadow">
                <img src="{{ asset('files/' . $dokumen->display_image) }}" alt="{{ $dokumen->nama }}" class="w-full h-[416px] rounded-[16px] object-cover" />
                <div class="flex justify-between items-center">
                    <div class="text-[#1D3A6D] text-[18px] font-bold leading-[22px] font-montserrat truncate" title="{{ $dokumen->nama }}">{{ $dokumen->nama }}</div>
                    <a href="{{ asset('files/' . $dokumen->url) }}" download class="w-[33px] h-[33px] relative flex-shrink-0">
                        <div class="w-[22px] h-[22px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 text-[var(--button)]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="h-[16px] flex items-start gap-2">
                    <div class="text-[#BDBDBD] text-[13px] font-normal leading-[16px] font-montserrat truncate">{{ $dokumen->deskripsi }}</div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">Tidak ada dokumen yang ditemukan.</p>
            </div>
            @endforelse
        </div>
    </div>
    
    <div class="w-full flex justify-center mt-8">
        {{ $dokumenSurveys->appends(request()->query())->links('components.pagination') }}
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sortSelect = document.getElementById('sort-select');
    
    sortSelect.addEventListener('change', function() {
        const sortValue = this.value;
        const currentUrl = new URL(window.location.href);
        const searchParam = currentUrl.searchParams.get('search');
        
        currentUrl.searchParams.set('sort', sortValue);
        
        if (searchParam) {
            currentUrl.searchParams.set('search', searchParam);
        } else {
            currentUrl.searchParams.delete('search');
        }
        
        // Go to first page on sort change
        currentUrl.searchParams.delete('page');

        window.location.href = currentUrl.toString();
    });

    // To ensure the form submits with the correct sort parameter
    const searchForm = document.querySelector('form');
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const sortValue = document.getElementById('sort-select').value;
        const searchInput = e.target.querySelector('input[name="search"]');
        
        const currentUrl = new URL(window.location.origin + window.location.pathname);
        currentUrl.searchParams.set('search', searchInput.value);
        currentUrl.searchParams.set('sort', sortValue);

        window.location.href = currentUrl.toString();
    });
});
</script>

@endsection