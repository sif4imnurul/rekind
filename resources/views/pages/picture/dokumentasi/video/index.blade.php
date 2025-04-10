@extends('layouts.employee')

@section('title', 'Video | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden flex flex-col gap-6">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[#1D3A6D] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Koleksi Video</div>
        <div class="text-[#737373] text-[14px] font-normal leading-[20px] tracking-[0.20px] font-montserrat">Kumpulan video yang mendokumentasikan berbagai kegiatan, pencapaian, dan perjalanan perusahaan kami.</div>
        </div>
    </div>

    <!-- line -->
    <div class="">
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
    
    <div class="w-full flex justify-center">
        <div class="flex flex-wrap justify-center gap-6 max-w-screen-xl">
            @for ($i = 0; $i < 6; $i++)
                <div class="w-[327px] relative flex flex-col gap-2">
                    <!-- Container video -->
                    <div class="relative w-full h-[184px] rounded-xl overflow-hidden border border-[#7BB7D1] shadow-md">
                        <video
                            class="w-full h-full object-cover"
                            controls
                            playsinline
                            preload="metadata"
                            muted
                        >
                            <source src="{{ asset('vid/video.mp4') }}" type="video/mp4" />
                            Browser kamu tidak mendukung video ini.
                        </video>

                        <!-- Durasi di pojok kanan bawah -->
                        <div class="absolute bottom-2 right-2 bg-black bg-opacity-80 text-white text-xs leading-5 rounded-md px-2 py-0.5 font-mono z-10">
                            12:28
                        </div>
                    </div>

                    <!-- Judul -->
                    <div class="text-center text-[#1D3A6D] text-sm leading-6 tracking-wider h-[85px]">
                        Judul Video
                    </div>
                </div>
            @endfor
        </div>
    </div>

    @include('components.pagination')

</div>

@endsection
