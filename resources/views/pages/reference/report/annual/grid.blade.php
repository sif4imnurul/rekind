@extends('layouts.employee')

@section('title', 'Annual Report | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Annual Report & Sustainability Report</div>
        <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Dokumen tahunan dan keberlanjutan terbaru.</div>
        </div>

        
        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
            <!-- Left Button -->
            <div class="flex-1 h-[48px] py-[4px] flex justify-center items-center">
                <div class="flex-1 self-stretch bg-[#D6E4F5] overflow-hidden rounded-l-full outline-1 outline-[#7BB7D1] outline-offset-[-1px] flex flex-col justify-center items-center">
                    <a href="{{ route('annual.grid') }}">
                        <div class="self-stretch flex-1 px-[12px] py-[10px] flex justify-center items-center gap-[8px]">
                            <div class="w-[24px] h-[24px] relative">
                                <div class="absolute text-[#1D3A6D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path></svg>
                                </div>
                            </div>
                            <div class="w-[24px] h-[24px] relative">
                                <div class="absolute text-[#1D3A6D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm5 2h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4h-4V5zM3 20a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6zm2-5h4v4H5v-4zm8 5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6zm2-5h4v4h-4v-4z"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Right Button -->
            <div class="flex-1 h-[48px] py-[4px] flex justify-center items-center">
                <div class="flex-1 self-stretch overflow-hidden rounded-r-full outline-1 outline-[#7BB7D1] outline-offset-[-1px] flex flex-col justify-center items-center gap-[10px]">
                    <div class="self-stretch flex-1 px-[12px] py-[10px] flex justify-center items-center gap-[8px]">
                        <a href="{{ route('annual.list') }}">
                            <div class="w-[24px] h-[24px] relative">
                                <div class="absolute text-[#1D3A6D]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- line -->
    <div class="py-6">
        <hr class="border-[2px] text-[var(--line)] rounded-2xl">
    </div>

    <div class="w-full h-full flex flex-col md:flex-row items-center justify-between gap-y-4 md:gap-[30px]">
        <!-- Kiri: Search Box -->
        <div class="w-full max-w-[510px] h-[62px] flex items-center gap-[10px]">
            <div class="w-full h-[56px] min-w-[280px] max-w-[720px] bg-[#D6E4F5] overflow-hidden rounded-full flex items-center justify-center gap-[4px]">
                <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                    <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
                    <div class="flex-1 h-full flex items-center justify-start gap-[10px]">
                        <div class="text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                            Hinted search text
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <div class="w-[48px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]">
                            <div class="overflow-hidden rounded-full flex items-center justify-center gap-[10px]">
                                <div class="p-[8px] flex items-center justify-center gap-[10px]">
                                    <div class="w-[24px] h-[24px] relative">
                                        <div class="absolute text-[#737373]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanan: Sort Box -->
        <div class="w-full max-w-[510px] overflow-hidden rounded-full flex items-center justify-end gap-[4px]">
            <div class="w-[130px] h-[56px] p-[4px] flex items-center justify-start gap-[4px]">
            <div class="w-[22px] h-[48px] inline-flex flex-col items-center justify-center gap-[10px]"></div>
            <div class="w-[62px] h-full flex items-center justify-start gap-[10px]">
                <div class="text-[#737373] text-[16px] font-roboto font-normal leading-[24px] tracking-[0.5px]">
                Sort by
                </div>
            </div>
            <div class="w-[16px] h-[20px] text-[#737373]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M8 16H4l6 6V2H8zm6-11v17h2V8h4l-6-6z"></path></svg>
            </div>
            </div>
            <div class="w-[24px] h-[24px] relative"></div>
        </div>
    </div>

    <!-- Button pilih report annual atau sustain -->
    <div class="flex flex-wrap gap-0">
        <div class="w-full md:w-1/2 p-4">
            <a href="{{ route('annual.grid') }}">
                <div class="w-full h-full px-3 py-2 inline-flex justify-center items-center bg-[var(--button)] border rounded-full border-[var(--button)] gap-2">
                    <div class="w-[183px] h-5 text-center justify-center flex flex-col text-white text-base font-normal leading-6 tracking-[0.5px]">
                        Annual Report
                    </div>
                </div>
            </a>
        </div>

        <div class="w-full md:w-1/2 p-4">
            <a href="{{ route('sustain.grid') }}">
                <div class="w-full h-full px-3 py-2 inline-flex justify-center items-center border rounded-full border-[var(--button)] gap-2">
                    <div class="w-[183px] h-5 text-center justify-center flex flex-col text-[#1D3A6D] text-base font-normal leading-6 tracking-[0.5px]">
                        Sustainability Report
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- grid -->
    <div class="w-full py-6">
        <div class="flex flex-wrap justify-center gap-6 px-4 max-w-7xl mx-auto">
            
            <!-- Loop through Annual Reports -->
            @foreach ($annualReports as $report)
                <div class="flex flex-col items-center gap-2">
                    <!-- Tahun di atas card -->
                    <div class="text-[#1D3A6D] text-3xl font-bold text-center">{{ $report->created_at->format('Y') ?? 'N/A' }}</div>

                    <!-- Card -->
                    <div class="bg-white rounded-[20px] outline-1 outline-[#7BB7D1] p-4 flex flex-col gap-2 w-full max-w-[320px]">
                        <!-- Gambar -->
                        <div class="w-full h-[416px] overflow-hidden rounded-[16px] border border-[#7BB7D1]">
                            <img src="{{ $report->foto ?? asset('img/book-2.jpg') }}" alt="laporan"
                                class="w-full h-full object-cover rounded-[16px]" />
                        </div>

                        <!-- Judul & Icon -->
                        <div class="flex justify-between items-center w-full">
                            <div class="text-[#1D3A6D] text-base font-bold">{{ $report->nama }}</div>
                            <a href="{{ $report->url }}" target="_blank">
                                <div class="w-[25px] h-[25px] relative">
                                    <div class="w-[24px] h-[24px] text-[#7BB7D1] absolute rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                            viewBox="0 0 24 24" class="fill-current">
                                            <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                            <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('components.pagination')

</div>

@endsection
