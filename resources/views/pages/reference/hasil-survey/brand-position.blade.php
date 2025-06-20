{{-- @extends('layouts.employee')

@section('title', 'Hasil Survey | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Hasil Survey</div>
            <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Analisis Data dan Wawasan dari Responden</div>
        </div>

        
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full py-2">
        <!-- Button 1 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.awareness') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Brand Awareness
                </a>
            </div>
        </div>

        <!-- Button 2 (Active) -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.position') }}" class="text-white text-base font-normal text-center">
                    Brand Positioning
                </a>
            </div>
        </div>

        <!-- Button 3 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.cse') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Customer Satisfaction & Engagement
                </a>
            </div>
        </div>

        <!-- Button 4 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.skl') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    SKL (Survey Kepuasan Layanan)
                </a>
            </div>
        </div>
    </div>

    <!-- pertanyaan -->
    <div class="w-[1050px] inline-flex justify-center items-center gap-2.5">
        <div class="w-[997px] h-14 justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Bagaimana pelanggan membandingkan produk dengan pesaing?</div>
    </div>

    <!-- Chart batang -->
    <div class="w-[1050px] flex justify-center items-center">
        <div class="w-[997px] h-80 bg-white rounded-xl flex justify-center items-center p-4">
            <canvas id="NamaChart" class="w-full h-full"></canvas>
        </div>
    </div>

    <!-- pertanyaan -->
    <div class="w-[1050px] inline-flex justify-center items-center gap-2.5">
        <div class="w-[997px] h-14 justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Bagaimana pelanggan membandingkan produk dengan pesaing?</div>
    </div>
    
    <!-- Chart batang -->
    <div class="w-[1050px] flex justify-center items-center">
        <div class="w-[997px] h-80 bg-white rounded-xl flex justify-center items-center p-4">
            <canvas id="NamaChart" class="w-full h-full"></canvas>
        </div>
    </div>

    <!-- dan seterusnya jika ada pertanyaan -->

</div>

@endsection --}}

{{-- @extends('layouts.employee')

@section('title', 'Hasil Survey | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Hasil Survey</div>
            <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Analisis Data dan Wawasan dari Responden</div>
        </div>

        
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="grid grid-cols-5 gap-4 w-full py-2">
        <!-- Button 1 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.awareness') }}" class="text-white text-base font-normal text-center">
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
                    Customer Satisfaction & Engagement
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

        <!-- Button 5 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.dokumen_survey') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Dokumen Survey
                </a>
            </div>
        </div>
    </div>

    <!-- pertanyaan -->
    <div class="w-[1050px] inline-flex justify-center items-center gap-2.5">
        <div class="w-[997px] h-14 justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Bagaimana pelanggan membandingkan produk dengan pesaing?</div>
    </div>

    <div class="w-full h-80 flex justify-center items-center gap-2.5">
        <div class="rounded-[10px] outline-1 outline-offset-[-1px] outline-blue-300 flex flex-col justify-center items-center p-5">
            <div class="w-full px-10 py-10 rounded outline-offset-[-1px] flex flex-col justify-start items-center gap-4 overflow-hidden">
    
                <!-- Rating Angka -->
                <div class="w-24 h-12 flex items-center justify-center text-black text-5xl font-bold leading-tight">
                    4.5
                </div>

                <!-- Wrapper Bintang + Jumlah Review -->
                <div class="flex flex-col justify-start items-center gap-3 w-full">

                    <!-- Stars -->
                    <div class="px-3 py-2.5 bg-gray-50 rounded-md flex justify-start items-center gap-2.5">
                        <div data-ratings="4.5" data-stroke="False" class="flex justify-start items-center gap-1">
                            
                            <!-- Full Stars -->
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Jumlah Review -->
                    <div class="text-center text-slate-400 text-xs font-normal leading-tight">
                        1,230,482 User Reviews
                    </div>
                </div>
            </div>

        </div>
        
        <div class="w-[596px] h-72 px-4 pt-8 pb-4 bg-white inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <!-- grafik batang ke samping -->
            <div class="w-[1050px] flex justify-center items-center">
                <div class="w-[997px] h-80 bg-white rounded-xl flex justify-center items-center p-4">
                    <canvas id="NamaChart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- pertanyaan -->
    <div class="w-[1050px] inline-flex justify-center items-center gap-2.5">
        <div class="w-[997px] h-14 justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Bagaimana pelanggan membandingkan produk dengan pesaing?</div>
    </div>

    <div class="w-full h-80 flex justify-center items-center gap-2.5">
        <div class="rounded-[10px] outline-1 outline-offset-[-1px] outline-blue-300 flex flex-col justify-center items-center p-5">
            <div class="w-full px-10 py-10 rounded outline-offset-[-1px] flex flex-col justify-start items-center gap-4 overflow-hidden">
    
                <!-- Rating Angka -->
                <div class="w-24 h-12 flex items-center justify-center text-black text-5xl font-bold leading-tight">
                    4.5
                </div>

                <!-- Wrapper Bintang + Jumlah Review -->
                <div class="flex flex-col justify-start items-center gap-3 w-full">

                    <!-- Stars -->
                    <div class="px-3 py-2.5 bg-gray-50 rounded-md flex justify-start items-center gap-2.5">
                        <div data-ratings="4.5" data-stroke="False" class="flex justify-start items-center gap-1">
                            
                            <!-- Full Stars -->
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>
                            <div class="w-4 h-4 relative overflow-hidden">
                                <div class="w-4 h-4 absolute left-0 top-0 text-yellow-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Jumlah Review -->
                    <div class="text-center text-slate-400 text-xs font-normal leading-tight">
                        1,230,482 User Reviews
                    </div>
                </div>
            </div>

        </div>
        
        <div class="w-[596px] h-72 px-4 pt-8 pb-4 bg-white inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <!-- grafik batang ke samping -->
            <div class="w-[1050px] flex justify-center items-center">
                <div class="w-[997px] h-80 bg-white rounded-xl flex justify-center items-center p-4">
                    <canvas id="NamaChart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection --}}














@extends('layouts.employee')

@section('title', 'Hasil Survey | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Hasil Survey</div>
            <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Analisis Data dan Wawasan dari Responden</div>
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

        <!-- Button 2 - Active -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.position') }}" class="text-white text-base font-normal text-center">
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

        <!-- Button 5 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.dokumen_survey') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Dokumen Survey
                </a>
            </div>
        </div>
    </div>

    <!-- New 3-Column Layout -->
    <div class="pt-8">
        <div class="w-full text-center mb-8">
            <h2 class="text-sky-900 text-2xl font-medium leading-loose tracking-tight">Peta Persaingan Industri EPC</h2>
            <p class="text-gray-600 text-sm">Bagaimana posisi Rekind dibandingkan dengan kompetitor utama di mata klien.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Column 1: Persepsi Pemimpin Pasar -->
            <div class="p-6 bg-white rounded-lg border border-gray-200 flex flex-col items-center text-center">
                <h3 class="font-semibold text-lg text-sky-900 mb-4">Persepsi Pemimpin Pasar</h3>
                <div class="w-48 h-48">
                    <canvas id="marketLeaderChart"></canvas>
                </div>
                <p class="mt-4 text-sm text-gray-600">
                    <span class="font-bold text-sky-800">45%</span> responden menganggap Rekind sebagai salah satu dari 3 pemimpin utama di industri EPC nasional.
                </p>
            </div>

            <!-- Column 2: Perbandingan Kompetensi Inti -->
            <div class="p-6 bg-white rounded-lg border border-gray-200 flex flex-col items-center text-center">
                <h3 class="font-semibold text-lg text-sky-900 mb-4">Perbandingan Kompetensi Inti</h3>
                <div class="w-full h-48">
                     <canvas id="coreCompetenciesChart"></canvas>
                </div>
                <p class="mt-4 text-sm text-gray-600">
                   Rekind dinilai unggul dalam <span class="font-bold text-sky-800">Kualitas Engineering</span> dan <span class="font-bold text-sky-800">Manajemen Proyek</span>, namun perlu meningkatkan <span class="font-bold text-orange-600">Efisiensi Biaya</span>.
                </p>
            </div>

            <!-- Column 3: Keunggulan Kompetitif -->
            <div class="p-6 bg-white rounded-lg border border-gray-200 flex flex-col items-center text-center">
                <h3 class="font-semibold text-lg text-sky-900 mb-4">Atribut Keunggulan</h3>
                <ul class="text-sm text-gray-700 list-disc list-inside text-left w-full mt-4 space-y-2">
                    <li>
                        <span class="font-semibold">Portofolio Proyek:</span> Dianggap memiliki rekam jejak proyek besar & kompleks yang paling solid.
                    </li>
                     <li>
                        <span class="font-semibold">Inovasi & Teknologi:</span> Diakui sebagai yang terdepan dalam penerapan teknologi baru.
                    </li>
                     <li>
                        <span class="font-semibold">Kemitraan Strategis:</span> Memiliki jaringan kemitraan lokal dan internasional yang kuat.
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Chart 1: Market Leader (Doughnut)
    const marketLeaderCtx = document.getElementById('marketLeaderChart').getContext('2d');
    new Chart(marketLeaderCtx, {
        type: 'doughnut',
        data: {
            labels: ['Rekind (Top 3)', 'Lainnya'],
            datasets: [{
                data: [45, 55],
                backgroundColor: [
                    'rgb(2, 132, 199)',
                    'rgb(229, 231, 235)'
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                     callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.raw}%`;
                        }
                    }
                }
            }
        }
    });

    // Chart 2: Core Competencies (Vertical Bar)
    const coreCompetenciesCtx = document.getElementById('coreCompetenciesChart').getContext('2d');
    new Chart(coreCompetenciesCtx, {
        type: 'bar',
        data: {
            labels: ['Kualitas Engineering', 'Manajemen Proyek', 'Efisiensi Biaya'],
            datasets: [{
                label: 'Rekind',
                data: [4.8, 4.6, 4.2],
                backgroundColor: 'rgba(2, 132, 199, 0.7)',
                borderColor: 'rgb(2, 132, 199)',
                borderWidth: 1
            }, {
                label: 'Rata-rata Pesaing',
                data: [4.4, 4.3, 4.5],
                 backgroundColor: 'rgba(156, 163, 175, 0.7)',
                borderColor: 'rgb(156, 163, 175)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 5,
                     title: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 12
                    }
                }
            }
        }
    });
});
</script>

@endsection
