@extends('layouts.employee')

@section('title', 'Company Profile | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Judul Besar -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Company Profile</div>
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="w-full px-4 py-6">
        <!-- Judul -->
        <h3 class="text-[var(--judul)] text-xl md:text-2xl font-bold font-montserrat py-6">
            Kumpulan Buku Kami
        </h3>
        <div class="max-w-[1600px] mx-auto flex flex-wrap justify-center gap-6">
            <!-- Card -->
            <div class="w-[327px] p-4 bg-white overflow-hidden rounded-[20px] outline-1 outline-[#7BB7D1] outline-offset-[-1px] flex flex-col gap-[13px]">
                <img src="{{ asset('img/book-1.jpg') }}" alt="Buku" class="w-full h-[416px] rounded-[16px] border border-[#7BB7D1]" />
                <div class="flex justify-between items-center">
                    <div class="text-[#1D3A6D] text-[18px] font-bold leading-[22px] font-montserrat">Judul Buku</div>
                    <div class="w-[33px] h-[33px] relative">
                        <a href="#">
                            <div class="w-[22px] h-[22px] absolute left-[5.5px] top-[5.5px] text-[var(--button)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="h-[16px] flex items-start gap-2">
                    <div class="text-[#BDBDBD] text-[13px] font-normal leading-[16px] font-montserrat">Caption</div>
                </div>
            </div>

            <!-- Card -->
            <div class="w-[327px] p-4 bg-white overflow-hidden rounded-[20px] outline-1 outline-[#7BB7D1] outline-offset-[-1px] flex flex-col gap-[13px]">
                <img src="{{ asset('img/book-4.jpg') }}" alt="Buku" class="w-full h-[416px] rounded-[16px] border border-[#7BB7D1]" />
                <div class="flex justify-between items-center">
                    <div class="text-[#1D3A6D] text-[18px] font-bold leading-[22px] font-montserrat">Judul Buku</div>
                    <div class="w-[33px] h-[33px] relative">
                        <a href="#">
                            <div class="w-[22px] h-[22px] absolute left-[5.5px] top-[5.5px] text-[var(--button)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="h-[16px] flex items-start gap-2">
                    <div class="text-[#BDBDBD] text-[13px] font-normal leading-[16px] font-montserrat">Caption</div>
                </div>
            </div>

            <!-- Card -->
            <div class="w-[327px] p-4 bg-white overflow-hidden rounded-[20px] outline-1 outline-[#7BB7D1] outline-offset-[-1px] flex flex-col gap-[13px]">
                <img src="{{ asset('img/SR2023.png') }}" alt="Buku" class="w-full h-[416px] rounded-[16px] border border-[#7BB7D1]" />
                <div class="flex justify-between items-center">
                    <div class="text-[#1D3A6D] text-[18px] font-bold leading-[22px] font-montserrat">Judul Buku</div>
                    <div class="w-[33px] h-[33px] relative">
                        <a href="#">
                            <div class="w-[22px] h-[22px] absolute left-[5.5px] top-[5.5px] text-[var(--button)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="h-[16px] flex items-start gap-2">
                    <div class="text-[#BDBDBD] text-[13px] font-normal leading-[16px] font-montserrat">Caption</div>
                </div>
            </div>
        </div>

        <!-- Link Selengkapnya -->
        <a href="{{ route('buku.grid') }}" class="flex items-center justify-center gap-2 mt-4 mx-auto w-fit text-[#4AA0C4] text-base font-roboto font-normal leading-6 tracking-[0.5px]">
            Selengkapnya
            <div class="w-[24px] h-[20px] text-[#7BB7D1]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg>
            </div>
        </a>
    </div>

    <!-- About Us -->
    <div class="w-full bg-white">
        <div class="max-w-[1050px] mx-auto px-6 md:px-0 py-10 flex flex-col gap-8">
            <div class="flex flex-col gap-2 w-full">
                <!-- Judul -->
                <h3 class="text-[var(--judul)] text-xl md:text-2xl font-bold font-montserrat py-6">
                    Tentang Kami
                </h3>

                <!-- Container Video -->
                <div class="relative w-full aspect-[16/9] rounded-[20px] overflow-hidden">
                    <iframe
                        class="w-full h-full rounded-[20px]"
                        src="https://www.youtube.com/embed/2Krf6o9FKzY"
                        title="Tentang Kami"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Template Presentasi -->
    <div class="w-full bg-white">
        <div class="max-w-[1050px] mx-auto px-6 md:px-0 pt-10 pb-16 flex flex-col items-start gap-8">
            
            <!-- Judul dan Deskripsi -->
            <div class="flex flex-col items-start gap-2 w-full">
                <h3 class="text-[var(--judul)] text-lg md:text-xl font-bold font-montserrat">
                    Koleksi Template Presentasi
                </h3>
                <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat">
                    Koleksi template untuk membantu Anda mempersiapkan presentasi dengan cepat dan efektif.
                </p>
            </div>

            <!-- Grid Card -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full justify-items-center">
            
                <!-- Card -->
                <div class="relative w-[327px] h-[184px]">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-[16px] border border-[var(--button)]" />
                    <div class="absolute bottom-2 right-2 w-[38px] h-[38px] bg-[var(--highlight-text-box)] rounded-[12px] shadow flex items-center justify-center">
                        <div class="w-[24px] h-[24px] text-[var(--button)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="m12 16 4-5h-3V4h-2v7H8z"/><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card (copy) -->
                <div class="relative w-[327px] h-[184px]">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-[16px] border border-[var(--button)]" />
                    <div class="absolute bottom-2 right-2 w-[38px] h-[38px] bg-[var(--highlight-text-box)] rounded-[12px] shadow flex items-center justify-center">
                        <div class="w-[24px] h-[24px] text-[var(--button)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="m12 16 4-5h-3V4h-2v7H8z"/><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Card (copy) -->
                <div class="relative w-[327px] h-[184px]">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-[16px] border border-[var(--button)]" />
                    <div class="absolute bottom-2 right-2 w-[38px] h-[38px] bg-[var(--highlight-text-box)] rounded-[12px] shadow flex items-center justify-center">
                        <div class="w-[24px] h-[24px] text-[var(--button)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="m12 16 4-5h-3V4h-2v7H8z"/><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Link Selengkapnya -->
            <a href="{{ route('presentasi.index') }}" class="flex items-center gap-2 mx-auto mt-4 text-[#4AA0C4] text-base font-roboto font-normal leading-6 tracking-[0.5px]">
                Selengkapnya
                <div class="w-[24px] h-[20px] text-[#7BB7D1]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg>
                </div>
            </a>
            
        </div>
    </div>

</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("videoTentangKami");
        const overlay = document.getElementById("playOverlay");

        overlay.addEventListener("click", function () {
            overlay.style.display = "none"; // Sembunyikan overlay
            video.play(); // Putar video
        });
    });
</script>
@endsection
