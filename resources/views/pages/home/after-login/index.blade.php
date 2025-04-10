@extends('layouts.employee')

@section('title', 'Home | Rekind')

@section('content')
<!-- Hero Section -->
<div class="relative w-full min-h-screen">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ asset('img/hero.png') }}" alt="Hero Image">
        <div class="absolute inset-0 bg-[var(--judul)]/50"></div>
    </div>

    <div class="relative z-10 w-full px-6 md:px-0 pt-24 pb-16 md:pt-36 h-auto md:m-20">
        <div class="max-w-screen-xl mx-auto flex flex-col-reverse md:flex-row justify-between items-center gap-10">
            <div class="w-full md:w-[573px] flex flex-col justify-center items-start gap-3">
                <span class="text-[var(--button)] text-xs md:text-sm font-bold font-montserrat">Welcome</span>
                <h1 class="text-white text-4xl md:text-5xl font-bold font-montserrat leading-snug">REKIND</h1>
                <p class="text-white text-base md:text-lg font-semibold font-montserrat leading-7 md:leading-8">
                    INTEGRATED ENGINEERING, PROCUREMENT<br class="hidden md:block"/>
                    CONSTRUCTION & INDUSTRIAL SOLUTION
                </p>
            </div>
            <div class="w-full md:w-[704px] h-auto">
                <!-- Bisa tambahkan ilustrasi di sini -->
            </div>
        </div>
    </div>
</div>


<div class="relative w-full h-full">
    <div class="absolute inset-0 z-10 pointer-events-none"
        style="background: radial-gradient(ellipse 50.00% 50.00% at 50.00% 50.00%, rgba(251.81, 251.81, 251.81, 0) 65%, rgba(255, 255, 255, 0.50) 80%, white 92%)">
    </div>


    <div class="w-full h-full py-10 flex flex-col justify-start items-center gap-[10px]">
        <div class="w-full h-full py-10 flex flex-col items-center gap-[10px]">
            <!-- Baris 1 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>

            <!-- Baris 2 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
        
                <!-- Kotak dengan Teks -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Annual Report & Sustainability Report
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Buletin
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Company Profile
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Agenda Perusahaan
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Buku Terbitan Coorporate
                    </p>
                </div>
        
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>

            <!-- Baris 3 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
              <!-- Kotak Kosong -->
              <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            
              <!-- Kotak dengan Teks -->
              <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                  Zoom Background Official
                </p>
              </div>
            
              <!-- Kotak Panjang -->
              <div class="bg-[var(--highlight-text-box)] rounded-[16px] flex-[2_2_340px] max-w-[530px] h-auto aspect-[3/1] p-4 flex flex-col justify-center items-center text-center gap-2">
                <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(12px,2.5vw,16px)]">
                  Pusat Akses Layanan
                </p>
                <p class="text-[var(--judul)] text-[clamp(10px,2vw,14px)] leading-tight font-normal">
                  Temukan berbagai layanan dan informasi penting perusahaan Rekind dengan mudah. Klik pada tombol di bawah untuk mengakses buku terbitan, template presentasi, data kontak, laporan, dan banyak lagi.
                </p>
              </div>
            
              <!-- Kotak dengan Teks -->
              <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                  Template Presentasi
                </p>
              </div>
            
              <!-- Kotak Kosong -->
              <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>
            
            <!-- Baris 4 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
        
                <!-- Kotak dengan Teks -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Occasional Twibbon
                    </p>
                </div>
        
                <div class="bg-[var(--button)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--6)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Reference
                    </p>
                </div>
        
                <div class="bg-[var(--button)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--6)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Picture
                    </p>
                </div>
        
                <div class="bg-[var(--button)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--6)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    CRM
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Official Photo & Video Stock
                    </p>
                </div>
        
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>

            <!-- Baris 5 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
        
                <!-- Kotak dengan Teks -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Official Logo Rekin & Anak Perusahaan
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Data Client
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Flyer Ucapan
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Hasil Survey
                    </p>
                </div>
        
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px] flex items-center justify-center text-center px-2">
                    <p class="text-[var(--judul)] font-bold leading-tight text-[clamp(10px,3.5vw,16px)]">
                    Media Monitoring
                    </p>
                </div>
        
                <!-- Kotak Kosong -->
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>

            <!-- Baris 6 -->
            <div class="w-full flex flex-wrap justify-center gap-[10px]">
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
                <div class="bg-[var(--highlight-text-box)] rounded-[16px] aspect-square flex-1 min-w-[100px] max-w-[170px]"></div>
            </div>
        </div>
    </div>
    
</div>   

@endsection
