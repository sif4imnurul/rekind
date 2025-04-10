@extends('layouts.app')

@section('title', 'Home | Rekind')

@section('content')

@include('components.hero')

    <div>
        <!-- About Section -->
        <div class="w-full bg-white">
            <div class="max-w-[1050px] mx-auto px-6 md:px-0 py-16 flex flex-col md:flex-row justify-between items-center gap-10">
                <div>
                    <img class="w-[180px] md:w-[200px] h-auto" src="{{ asset('img/logo.jpg') }}" alt="About image">
                </div>
                <div class="w-full md:w-[664px] flex flex-col gap-6">
                    <div class="w-20 md:w-24 h-1.5 md:h-2 bg-[#E77215]"></div>
                    <h2 class="text-[var(--judul)] text-3xl md:text-[40px] font-bold font-montserrat leading-tight">Rekind</h2>
                    <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat leading-relaxed">
                        PT Rekayasa Industri (Rekind) berkomitmen untuk memberikan solusi rekayasa terbaik melalui inovasi teknologi dan keahlian dalam industri energi, pengolahan, dan infrastruktur. Temukan berbagai produk dan dokumentasi korporat yang mendukung efisiensi dan transparansi perusahaan.
                    </p>
                </div>
            </div>
        </div>

        <!-- Business Fields -->
        <div class="w-full bg-white">
            <div class="max-w-[1050px] mx-auto px-6 md:px-0 pt-10 pb-16 flex flex-col items-start gap-8">
                <div class="flex flex-col items-start gap-2 w-full">
                    <h3 class="text-[var(--judul)] text-lg md:text-xl font-bold font-montserrat">Bidang Utama Bisnis Kami</h3>
                    <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat">
                        Di Rekayasa Industri (Rekind), kami mengkhususkan diri dalam menyediakan solusi rekayasa canggih di berbagai industri, dengan fokus kuat pada energi, pengolahan, dan infrastruktur.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                    <!-- Card -->
                    @php
                        $fields = [
                            [
                                'title' => 'Power & Mining',
                                'image' => 'img/pict-1.jpg'
                            ],
                            [
                                'title' => 'Refinery, Oil & Gas',
                                'image' => 'img/pict-2.jpg'
                            ],
                            [
                                'title' => 'Industrial Infrastructure',
                                'image' => 'img/pict-3.jpeg'
                            ]
                        ];
                    @endphp

                    @foreach ($fields as $field)
                        <div class="w-full bg-white shadow-md rounded-2xl overflow-hidden">
                            <div class="h-[184px]">
                                <img class="w-full h-full object-cover" src="{{ asset($field['image']) }}" alt="{{ $field['title'] }}">
                            </div>
                            <div class="px-6 py-6 text-center">
                                <div class="text-[var(--judul)] text-base font-bold font-montserrat">
                                    {{ $field['title'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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

        <!-- Buletin Section -->
        <div class="w-full bg-white pt-12 md:pt-16 pb-20">
            <div class="max-w-[1050px] mx-auto px-6 md:px-0 flex flex-col gap-10">
                <!-- Judul -->
                <div class="flex flex-col md:flex-row justify-between items-start gap-6">
                    <div class="w-full md:w-[662px]">
                        <h3 class="text-[var(--judul)] text-2xl md:text-[28px] font-bold font-montserrat tracking-wide">
                            Buletin Rekind
                        </h3>
                    </div>
                </div>

                <!-- Buletin Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $buletins = [
                            [
                                'judul' => 'Inovasi Energi Terbarukan',
                                'gambar' => 'img/book-1.jpg',
                            ],
                            [
                                'judul' => 'Strategi Bisnis 2025',
                                'gambar' => 'img/book-2.jpg',
                            ],
                            [
                                'judul' => 'Transformasi Digital Rekind',
                                'gambar' => 'img/book-3.jpg',
                            ],
                        ];
                    @endphp

                    @foreach ($buletins as $buletin)
                        <div class="bg-white p-4 rounded-[20px] outline-1 outline-[var(--button)] outline-offset-[-1px] flex flex-col gap-4">
                            <img
                                class="w-full h-[416px] object-cover rounded-[16px] border border-[var(--button)]"
                                src="{{ asset($buletin['gambar']) }}"
                                alt="{{ $buletin['judul'] }}"
                            >
                            <div class="flex justify-between items-center">
                                <div class="text-[#1D3A6D] text-lg font-bold font-montserrat leading-tight">
                                    {{ $buletin['judul'] }}
                                </div>
                                <div class="w-[33px] h-[33px] flex items-center justify-center">
                                    <div class="w-[22px] h-[22px] text-[var(--button)] rounded-full">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                            <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Business Fields -->
        <div class="w-full bg-white">
            <div class="max-w-[1050px] mx-auto px-6 md:px-0 pt-10 pb-16 flex flex-col items-start gap-8">
                <div class="flex flex-col items-start gap-2 w-full">
                    <h3 class="text-[var(--judul)] text-lg md:text-xl font-bold font-montserrat">Logo Resmi</h3>
                    <p class="text-[#737373] text-sm md:text-base font-normal font-montserrat">
                        Kumpulan logo resmi untuk Rekind dan anak perusahaan, tersedia untuk keperluan branding, dokumentasi, dan acara perusahaan.
                    </p>
                </div>

                <!-- Logo Images -->
                <!-- Logo Images with spacing from top -->
                <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 justify-items-center">
                    <img class="w-[150px] h-auto object-contain self-end" src="{{ asset('img/logo.jpg') }}" alt="Logo 1" />
                    <img class="w-[150px] h-auto object-contain self-end" src="{{ asset('img/logo-pupuk-utilitas.png') }}" alt="Logo 2" />
                    <img class="w-[150px] h-auto object-contain self-end" src="{{ asset('img/Logo-RDM.jpg') }}" alt="Logo 3" />
                    <img class="w-[150px] h-auto object-contain self-end" src="{{ asset('img/logo-puspetindo.jpg') }}" alt="Logo 4" />
                </div>
            </div>
        </div>
        
        <!-- Kontak -->
        <div class="w-full h-full overflow-hidden px-4 py-6">
            <div class="flex flex-col md:flex-row justify-center items-start md:items-center gap-10 md:gap-20">
                <!-- Kolom 1 -->
                <div class="w-full md:w-[321px] flex flex-col items-start gap-5 not-optional:text-[var(--button)]">
                    <h4 class="text-[#1D3A6D] text-base font-bold font-montserrat leading-6 tracking-[0.10px]">
                        Get In Touch
                    </h4>
                    <div class="flex flex-col items-start gap-3">
                        <!-- Phone -->
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z"></path></svg>
                            <div class="text-sm text-[#737373] font-montserrat font-bold leading-6 tracking-[0.20px]">
                                <span>Phone: </span>
                                <span class="underline">+62 (21) 7988700</span>
                            </div>
                        </div>
                        <!-- Fax -->
                        <div class="flex items-center gap-2">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-5 h-5 fill-current">
                            <path d="M40,13V7c0-1.654-1.346-3-3-3h-15c-1.654,0-3,1.346-3,3v6h-2c0-1.654-1.346-3-3-3h-4c-1.654,0-3,1.346-3,3v.101c-2.279,.465-4,2.484-4,4.899v21c0,2.757,2.243,5,5,5H40c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5ZM21,7c0-.551,.449-1,1-1h15c.551,0,1,.449,1,1v6H21V7Zm-12,6c0-.551,.449-1,1-1h4c.551,0,1,.449,1,1v21c0,.552-.449,1-1,1h-4c-.551,0-1-.448-1-1V13Zm34,26c0,1.654-1.346,3-3,3H8c-1.654,0-3-1.346-3-3V18c0-1.302,.839-2.402,2-2.816v18.816c0,1.654,1.346,3,3,3h4c1.654,0,3-1.346,3-3V15h23c1.654,0,3,1.346,3,3v21Z"/>
                            <path d="M39,17H21c-1.103,0-2,.897-2,2v3c0,1.103,.897,2,2,2h18c1.103,0,2-.897,2-2v-3c0-1.103-.897-2-2-2Zm-18,5v-3h18v3s-18,0-18,0Z"/>
                            <path d="M23,26h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                            <path d="M31,26h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                            <path d="M39,26h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                            <path d="M23,34h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                            <path d="M31,34h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                            <path d="M39,34h-2c-1.103,0-2,.897-2,2v2c0,1.103,.897,2,2,2h2c1.103,0,2-.897,2-2v-2c0-1.103-.897-2-2-2Zm-2,4v-2h2v2s-2,0-2,0Z"/>
                        </svg>
                            <div class="text-sm text-[#737373] font-montserrat font-bold leading-6 tracking-[0.20px]">
                                Fax: +62 (21) 7988701/02
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="w-full md:w-[421px] flex flex-col items-start gap-5 text-[var(--button)]">
                    <h4 class="text-transparent text-base font-bold font-montserrat leading-6 tracking-[0.10px]">.</h4>
                    <div class="flex flex-col items-start gap-3">
                        <!-- Alamat -->
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
                            <div class="text-sm text-[#737373] font-montserrat font-bold leading-6 tracking-[0.20px]">
                                Jl. Kalibata Timur 1 No. 36 Jakarta Selatan
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z"></path></svg>
                            <div class="text-sm text-[#737373] font-montserrat font-bold leading-6 tracking-[0.20px] break-words">
                                corsec@rekayasa.co.id
                            </div>
                        </div>
                    </div>
                </div>
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
