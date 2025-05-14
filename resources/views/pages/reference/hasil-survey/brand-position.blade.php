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

@endsection