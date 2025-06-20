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

        <!-- Button 2 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.position') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
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

        <!-- Button 4 (Active) -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.skl') }}" class="text-white text-base font-normal text-center">
                    SKL (Survey Kepuasan Layanan)
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

        <!-- Button 4 - Active -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.skl') }}" class="text-white text-base font-normal text-center">
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

    <!-- Section 1: Kepuasan Layanan Teknis & Engineering -->
    <div class="w-full flex justify-center items-center pt-8">
        <div class="text-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Kepuasan Terhadap Layanan Teknis & Engineering</div>
    </div>

    <div class="w-full flex flex-col md:flex-row justify-center items-center gap-8 py-6">
        <!-- Rating Card -->
        <div class="w-full md:w-auto p-8 border border-gray-200 rounded-[10px] flex flex-col justify-start items-center gap-4">
            <div class="text-black text-5xl font-bold leading-tight">4.6</div>
            <div class="flex flex-col justify-start items-center gap-3">
                <div class="px-3 py-2.5 bg-gray-50 rounded-md flex justify-start items-center gap-1">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="w-5 h-5 text-yellow-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg></div>
                    @endfor
                    <div class="w-5 h-5 text-yellow-400 relative"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M5.025 20.775A.998.998 0 0 0 6 22a1 1 0 0 0 .555-.168L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107-1.491 6.452zM12 5.429l2.042 4.521.588.047h.001l3.972.315-3.271 2.944-.001.002-.463.416.171.597v.003l1.253 4.385L12 15.798V5.429z"></path></svg></div>
                </div>
                <div class="text-center text-slate-400 text-xs font-normal leading-tight">Rata-rata Penilaian Layanan</div>
            </div>
        </div>
        
        <!-- Bar Chart -->
        <div class="w-full md:w-[600px] h-72 p-4 bg-white rounded-lg border border-gray-200">
            <canvas id="layananTeknisChart"></canvas>
        </div>
    </div>

    <!-- Section 2: Kepuasan Terhadap Manajemen & Komunikasi Proyek -->
    <div class="w-full flex justify-center items-center pt-8 mt-8">
        <div class="text-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Kepuasan Terhadap Manajemen & Komunikasi Proyek</div>
    </div>

    <div class="w-full flex flex-col md:flex-row justify-center items-center gap-8 py-6">
        <!-- Rating Card -->
        <div class="w-full md:w-auto p-8 border border-gray-200 rounded-[10px] flex flex-col justify-start items-center gap-4">
            <div class="text-black text-5xl font-bold leading-tight">4.5</div>
            <div class="flex flex-col justify-start items-center gap-3">
                 <div class="px-3 py-2.5 bg-gray-50 rounded-md flex justify-start items-center gap-1">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="w-5 h-5 text-yellow-400"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg></div>
                    @endfor
                    <div class="w-5 h-5 text-yellow-400 relative"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M5.025 20.775A.998.998 0 0 0 6 22a1 1 0 0 0 .555-.168L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107-1.491 6.452zM12 5.429l2.042 4.521.588.047h.001l3.972.315-3.271 2.944-.001.002-.463.416.171.597v.003l1.253 4.385L12 15.798V5.429z"></path></svg></div>
                </div>
                <div class="text-center text-slate-400 text-xs font-normal leading-tight">Rata-rata Penilaian Layanan</div>
            </div>
        </div>
        
        <!-- Bar Chart -->
        <div class="w-full md:w-[600px] h-72 p-4 bg-white rounded-lg border border-gray-200">
            <canvas id="manajemenChart"></canvas>
        </div>
    </div>
</div>

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const chartOptions = {
        indexAxis: 'y',
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                beginAtZero: true,
                max: 5,
                title: {
                    display: true,
                    text: 'Rating Kepuasan (skala 1-5)'
                }
            },
            y: {
                 grid: {
                    display: false
                }
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        return `${context.dataset.label}: ${context.raw}`;
                    }
                }
            }
        }
    };

    // Chart Layanan Teknis & Engineering
    const layananTeknisCtx = document.getElementById('layananTeknisChart').getContext('2d');
    new Chart(layananTeknisCtx, {
        type: 'bar',
        data: {
            labels: ['Kualitas Desain', 'Inovasi Solusi', 'Dukungan Teknis', 'Kepatuhan Spesifikasi'],
            datasets: [{
                label: 'Rating Kepuasan',
                data: [4.7, 4.5, 4.8, 4.4],
                backgroundColor: 'rgba(2, 132, 199, 0.7)',
                borderColor: '#0284c7',
                borderWidth: 1
            }]
        },
        options: chartOptions
    });

    // Chart Manajemen & Komunikasi Proyek
    const manajemenCtx = document.getElementById('manajemenChart').getContext('2d');
    new Chart(manajemenCtx, {
        type: 'bar',
        data: {
            labels: ['Kualitas Pelaporan', 'Responsivitas Tim', 'Manajemen Jadwal', 'Transparansi Komunikasi'],
            datasets: [{
                label: 'Rating Kepuasan',
                data: [4.4, 4.7, 4.3, 4.6],
                backgroundColor: 'rgba(56, 189, 248, 0.7)',
                borderColor: '#38bdf8',
                borderWidth: 1
            }]
        },
        options: chartOptions
    });
});
</script>

@endsection
