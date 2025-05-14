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
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.awareness') }}" class="text-white text-base font-normal text-center">
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

        <!-- Button 4 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.skl') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    SKL (Survey Kepuasan Layanan)
                </a>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col md:flex-row justify-start items-center gap-12 p-6">
    <!-- Pie Chart bikin manual wkwkwkwk, ini aku bikinnya kaya jadi icon, nanti kalian logic lagi wkwkwk js ajaa, sorry yaa banyak chart gini -->
    <div class="w-72 h-72 relative">
        <!-- Lingkaran Good -->
        <div class="w-full h-full bg-sky-400 rounded-full"></div>

        <!-- Potongan Bad (sekitar 18.55% = ~67deg) -->
        <div
        class="w-full h-full absolute top-0 left-0 rounded-full overflow-hidden transform rotate-[67deg]"
        >
        <div class="w-full h-full bg-orange-500 origin-center transform -rotate-[67deg] clip-pie"></div>
        </div>

        <!-- Label Bad -->
        <div class="absolute right-0 top-10 text-sm text-orange-500 font-medium">
        <span class="block text-gray-700">Bad</span>
        <span class="block">82,000</span>
        <span class="block">18.55%</span>
        </div>

        <!-- Label Good -->
        <div class="absolute left-0 bottom-10 text-sm text-sky-500 font-medium text-right">
        <span class="block text-gray-700">Good</span>
        <span class="block">360,000</span>
        <span class="block">81.45%</span>
        </div>
    </div>

    <!-- Detail -->
    <div class="max-w-md">
        <h2 class="text-sky-900 text-2xl font-semibold mb-4">Detail</h2>
        <p class="text-gray-600 text-sm mb-2">
        Bisa menampilkan sumber awareness, bisa dibikin poin-poin, seperti contoh berikut:
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-sm space-y-1">
        <li>Media Sosial</li>
        <li>Iklan TV</li>
        <li>Word of Mouth</li>
        <li>Marketplace</li>
        </ul>
    </div>
    </div>

    <div class="h-96 px-4 pt-8 pb-4 bg-white flex flex-col justify-center items-center gap-4">
        <h2 class="text-sky-900 text-2xl font-medium text-center leading-loose tracking-tight">
            Produk Kami dari tahun ke tahun
        </h2>
        <div class="w-80 h-80 flex justify-center items-center">
            <!-- ini naro chart chart yg satu lagi ehe (bingung jujur frontend doang gimana:cry -->
            <canvas id="namaChart" class="w-full h-full"></canvas> <!-- itu contoh bikin chartnya, atur sisanya di script ehe -->
        </div>
    </div>

</div>

@endsection