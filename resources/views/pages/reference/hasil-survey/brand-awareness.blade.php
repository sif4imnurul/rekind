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
        <!-- Button 1 - Active -->
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

    <!-- Section 1: Sumber Kesadaran Merek -->
    <div class="w-full flex flex-col md:flex-row justify-start items-center gap-12 p-6">
        <!-- Pie Chart -->
        <div class="w-80 h-80">
            <canvas id="sumberAwarenessChart"></canvas>
        </div>

        <!-- Detail Formal -->
        <div class="max-w-md">
            <h2 class="text-sky-900 text-2xl font-semibold mb-4">Sumber Utama Kesadaran Merek</h2>
            <p class="text-gray-600 text-sm mb-4">
                Berdasarkan hasil survei, reputasi industri dan referensi dari mulut ke mulut menjadi kanal paling signifikan dalam membangun kesadaran merek Rekind. Ini menunjukkan kuatnya portofolio dan hubungan klien.
            </p>
            <ul class="list-disc pl-5 text-gray-700 text-sm space-y-2">
                <li><span class="font-semibold">Reputasi Industri (35%):</span> Pengakuan melalui proyek-proyek yang telah berhasil diselesaikan.</li>
                <li><span class="font-semibold">Referensi Klien (30%):</span> Rekomendasi dari klien atau mitra bisnis yang sudah ada.</li>
                <li><span class="font-semibold">Publikasi Media & Acara (20%):</span> Liputan di media industri dan partisipasi dalam pameran/konferensi.</li>
                <li><span class="font-semibold">Digital (15%):</span> Penemuan melalui website perusahaan, berita online, dan media sosial.</li>
            </ul>
        </div>
    </div>

    <!-- Section 2: Tingkat Pengenalan Merek vs Pesaing -->
    <div class="mt-12 h-96 px-4 pt-8 pb-4 bg-white flex flex-col justify-center items-center gap-4">
        <h2 class="text-sky-900 text-2xl font-medium text-center leading-loose tracking-tight">
            Tingkat Pengenalan Merek (Brand Recall)
        </h2>
        <div class="w-full max-w-4xl h-80 flex justify-center items-center">
            <canvas id="brandRecallChart"></canvas>
        </div>
    </div>
</div>

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Chart 1: Sumber Awareness (Pie Chart)
    const sumberAwarenessCtx = document.getElementById('sumberAwarenessChart').getContext('2d');
    new Chart(sumberAwarenessCtx, {
        type: 'pie',
        data: {
            labels: ['Reputasi Industri', 'Referensi Klien', 'Publikasi & Acara', 'Digital'],
            datasets: [{
                label: 'Sumber Kesadaran Merek',
                data: [35, 30, 20, 15],
                backgroundColor: [
                    '#0369a1', // sky-700
                    '#0ea5e9', // sky-500
                    '#7dd3fc', // sky-300
                    '#e0f2fe'  // sky-100
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
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

    // Chart 2: Brand Recall (Bar Chart)
    const brandRecallCtx = document.getElementById('brandRecallChart').getContext('2d');
    new Chart(brandRecallCtx, {
        type: 'bar',
        data: {
            labels: ['Rekind', 'Kompetitor A', 'Kompetitor B', 'Kompetitor C'],
            datasets: [{
                label: 'Tingkat Pengenalan Merek (%)',
                data: [78, 65, 62, 55],
                backgroundColor: [
                    'rgba(2, 132, 199, 0.8)',
                    'rgba(156, 163, 175, 0.8)',
                    'rgba(156, 163, 175, 0.8)',
                    'rgba(156, 163, 175, 0.8)'
                ],
                borderColor: [
                     '#0284c7',
                     '#9ca3af',
                     '#9ca3af',
                     '#9ca3af'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    title: {
                        display: true,
                        text: 'Persentase Responden (%)'
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});
</script>

@endsection
