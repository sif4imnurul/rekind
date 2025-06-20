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

    <div class="py-10  flex justify-center items-center gap-10">

        <!-- Kartu Review -->
        <div class="px-10 py-10 bg-white rounded shadow-[0_2px_4px_rgba(52,66,81,0.05)] outline-1 outline-gray-300 flex flex-col items-center gap-7">
            <div class="w-24 h-24 relative overflow-hidden">
                <img class="w-24 h-24 absolute rounded-full" src="https://placehold.co/100x100" />
            </div>
            <div class="flex flex-col items-center gap-3">
                <div class="text-center text-gray-800 text-lg font-bold leading-normal">Merk 1</div>
                <div class="px-3 py-2.5 bg-gray-50 rounded-md flex items-center gap-2.5">
                    <div class="flex items-center gap-1" data-ratings="4.5">
                        <!-- Bintang Penuh -->
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <!-- Bintang Setengah -->
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M5.025 20.775A.998.998 0 0 0 6 22a1 1 0 0 0 .555-.168L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107-1.491 6.452zM12 5.429l2.042 4.521.588.047h.001l3.972.315-3.271 2.944-.001.002-.463.416.171.597v.003l1.253 4.385L12 15.798V5.429z"></path></svg>
                        </div>
                    </div>
                    <div class="text-slate-500 text-sm font-semibold leading-tight">4.5/5</div>
                </div>
                <div class="text-center text-slate-400 text-xs leading-tight">1,230,482 User Reviews</div>
            </div>
        </div>

        <!-- Salin blok di atas untuk kartu 2 dan 3 -->
        <div class="px-10 py-10 bg-white rounded shadow-[0_2px_4px_rgba(52,66,81,0.05)] outline-1 outline-gray-300 flex flex-col items-center gap-7">
            <div class="w-24 h-24 relative overflow-hidden">
                <img class="w-24 h-24 absolute rounded-full" src="https://placehold.co/100x100" />
            </div>
            <div class="flex flex-col items-center gap-3">
                <div class="text-center text-gray-800 text-lg font-bold leading-normal">Merk 2</div>
                <div class="px-3 py-2.5 bg-gray-50 rounded-md flex items-center gap-2.5">
                    <div class="flex items-center gap-1" data-ratings="4.5">
                        <!-- Bintang Penuh -->
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <!-- bintang kosong -->
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z"></path></svg>
                        </div>
                    </div>
                    <div class="text-slate-500 text-sm font-semibold leading-tight">4/5</div>
                </div>
                <div class="text-center text-slate-400 text-xs leading-tight">1,230,482 User Reviews</div>
            </div>
        </div>

        <div class="px-10 py-10 bg-white rounded shadow-[0_2px_4px_rgba(52,66,81,0.05)] outline-1 outline-gray-300 flex flex-col items-center gap-7">
            <div class="w-24 h-24 relative overflow-hidden">
                <img class="w-24 h-24 absolute rounded-full" src="https://placehold.co/100x100" />
            </div>
            <div class="flex flex-col items-center gap-3">
                <div class="text-center text-gray-800 text-lg font-bold leading-normal">Merk 3</div>
                <div class="px-3 py-2.5 bg-gray-50 rounded-md flex items-center gap-2.5">
                    <div class="flex items-center gap-1" data-ratings="4.5">
                        <!-- Bintang Penuh -->
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                        <div class="w-6 h-6 text-yellow-400 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                        </div>
                    </div>
                    <div class="text-slate-500 text-sm font-semibold leading-tight">5/5</div>
                </div>
                <div class="text-center text-slate-400 text-xs leading-tight">1,230,482 User Reviews</div>
            </div>
        </div>

    </div>

    <div class="w-full h-80 flex justify-center items-center gap-2.5">
        <div class="rounded-[10px] outline-1 outline-offset-[-1px] outline-blue-300 flex flex-col justify-center items-center p-5">
            <div class="rounded-[10px] flex flex-col justify-center items-center gap-3.5">
                <div class="flex justify-center items-center gap-2.5">
                    <div data-ratings="5" data-stroke="True" class="flex justify-start items-center gap-1">
                            <!-- Bintang Penuh -->
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                    </div>
                    <div class="w-28 h-3 justify-center text-neutral-500 text-xs font-medium leading-loose tracking-tight">500.000</div>
                </div>
                <div class="inline-flex justify-center items-center gap-2.5">
                    <div data-ratings="4" data-stroke="True" class="flex justify-start items-center gap-1">
                            <!-- Bintang Penuh -->
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                    </div>
                    <div class="w-28 h-3 justify-center text-neutral-500 text-xs font-medium leading-loose tracking-tight">200.000 </div>
                </div>
                <div class="inline-flex justify-center items-center gap-2.5">
                    <div data-ratings="3" data-stroke="True" class="flex justify-start items-center gap-1">
                            <!-- Bintang Penuh -->
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                    </div>
                    <div class="w-28 h-3 justify-center text-neutral-500 text-xs font-medium leading-loose tracking-tight">100.000 </div>
                </div>
                <div class="inline-flex justify-center items-center gap-2.5">
                    <div data-ratings="2" data-stroke="True" class="flex justify-start items-center gap-1">
                            <!-- Bintang Penuh -->
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                    </div>
                    <div class="w-28 h-3 justify-center text-neutral-500 text-xs font-medium leading-loose tracking-tight">20.000 </div>
                </div>
                <div class="inline-flex justify-center items-center gap-2.5">
                    <div data-ratings="1" data-stroke="True" class="flex justify-start items-center gap-1">
                            <!-- Bintang Penuh -->
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                            <div class="w-6 h-6 text-yellow-400 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                            </div>
                    </div>
                    <div class="w-28 h-3 justify-center text-neutral-500 text-xs font-medium leading-loose tracking-tight">10.000 </div>
                </div>
            </div>
        </div>
        <div class="w-[596px] h-72 px-4 pt-8 pb-4 bg-white inline-flex flex-col justify-start items-start gap-2 overflow-hidden">
            <div class="self-stretch h-6 text-center justify-center text-sky-900 text-xl font-medium leading-loose tracking-tight">
                Persentase Rating
            </div>
            <!-- grafik batang ke samping -->
            <div class="w-[1050px] flex justify-center items-center">
                <div class="w-[997px] h-80 bg-white rounded-xl flex justify-center items-center p-4">
                    <canvas id="NamaChart" class="w-full h-full"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full inline-flex justify-center items-center gap-2.5">
        <div class="h-14 text-center justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Testimoni Pelanggan</div>
    </div>

    <div class=" w-full h-full rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5">

        <!-- Testimoni Box -->
        <div class="w-full p-6 rounded-[20px] outline-1 outline-offset-[-1px] outline-blue-300 flex flex-col justify-start items-start gap-2">
            <!-- Stars -->
            <div data-ratings="5" data-stroke="True" class="w-full inline-flex justify-start items-center gap-1">
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
            </div>
            <!-- Testimoni Text -->
            <div class="w-[1003px] justify-start">
                <span class="text-slate-400 text-3xl font-bold">“</span>
                <span class="text-neutral-500 text-xl font-normal">Contoh testimoni.</span>
                <span class="text-neutral-500 text-3xl font-normal"> </span>
                <span class="text-slate-400 text-3xl font-bold">”</span>
            </div>
        </div>

        <!-- Ulangi 3 Box Testimoni Lainnya -->
        <div class="w-full p-6 rounded-[20px] outline-1 outline-offset-[-1px] outline-blue-300 flex flex-col justify-start items-start gap-2">
            <!-- Stars -->
            <div data-ratings="5" data-stroke="True" class="w-full inline-flex justify-start items-center gap-1">
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
                <div class="w-4 h-4 relative overflow-hidden">
                    <div class="absolute text-yellow-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="w-full" height="h-full" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                    </div>
                </div>
            </div>
            <!-- Testimoni Text -->
            <div class="w-[1003px] justify-start">
                <span class="text-slate-400 text-3xl font-bold">“</span>
                <span class="text-neutral-500 text-xl font-normal">Contoh testimoni.</span>
                <span class="text-neutral-500 text-3xl font-normal"> </span>
                <span class="text-slate-400 text-3xl font-bold">”</span>
            </div>
        </div>

        <!-- Link Selengkapnya -->
        <a href="{{ route('survey.testimoni') }}" class="flex items-center gap-2 mx-auto mt-4 text-[#4AA0C4] text-base font-roboto font-normal leading-6 tracking-[0.5px]">
            Selengkapnya
            <div class="w-[24px] h-[20px] text-[#7BB7D1]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg>
            </div>
        </a>
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

        <!-- Button 3 - Active -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.cse') }}" class="text-white text-base font-normal text-center">
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

    <!-- Konten Kepuasan Klien & Mitra -->
    <div class="py-10">
        <!-- Bagian Atas: Ringkasan dan Grafik Tingkat Kepuasan -->
        <div class="w-full flex flex-col md:flex-row justify-start items-center gap-12 p-6">
            <!-- Doughnut Chart -->
            <div class="w-80 h-80 flex justify-center items-center">
                 <canvas id="tingkatKepuasanChart" class="w-full h-full"></canvas>
            </div>

            <!-- Detail Formal -->
            <div class="max-w-xl">
                <h2 class="text-sky-900 text-2xl font-semibold mb-4">Tingkat Kepuasan Klien Terhadap Proyek</h2>
                <p class="text-gray-600 text-sm mb-4">
                    Hasil survei menunjukkan bahwa mayoritas klien dan mitra strategis merasa puas dengan eksekusi proyek dan layanan EPC yang diberikan. Analisis mendalam mengungkapkan beberapa area kunci yang mendorong kepuasan ini, serta beberapa aspek yang memerlukan perhatian untuk peningkatan di masa depan.
                </p>
                <ul class="list-disc pl-5 text-gray-700 text-sm space-y-2">
                    <li><span class="font-semibold">Kualitas Manajemen Proyek:</span> Sebagian besar responden memberikan nilai tinggi untuk profesionalisme, perencanaan, dan eksekusi proyek.</li>
                    <li><span class="font-semibold">Komunikasi & Koordinasi:</span> Kecepatan respons dan transparansi komunikasi dari tim proyek menjadi faktor yang paling sering diapresiasi.</li>
                    <li><span class="font-semibold">Kualitas Teknik & Konstruksi:</span> Kepatuhan terhadap spesifikasi teknis dan standar kualitas konstruksi dinilai sangat positif.</li>
                    <li><span class="font-semibold">Area Peningkatan:</span> Beberapa masukan diterima terkait efisiensi biaya dan fleksibilitas dalam penyesuaian jadwal proyek.</li>
                </ul>
            </div>
        </div>

        <!-- Bagian Bawah: Grafik Faktor Kepuasan -->
        <div class="mt-12 h-96 px-4 pt-8 pb-4 bg-white flex flex-col justify-center items-center gap-4">
            <h2 class="text-sky-900 text-2xl font-medium text-center leading-loose tracking-tight">
                Faktor Kunci dalam Keberhasilan Proyek
            </h2>
            <div class="w-full max-w-4xl h-80 flex justify-center items-center">
                <canvas id="faktorKepuasanChart" class="w-full h-full"></canvas>
            </div>
        </div>
    </div>
    <!-- End Konten -->


    <div class="w-full inline-flex justify-center items-center gap-2.5 mt-8">
        <div class="h-14 text-center justify-center text-sky-900 text-2xl font-medium leading-loose tracking-tight">Umpan Balik dari Klien & Mitra</div>
    </div>

    <div class=" w-full h-full rounded-[10px] inline-flex flex-col justify-center items-center gap-2.5">
        <!-- Testimoni Box 1 -->
        <div class="w-full p-6 rounded-[20px] border border-gray-200 flex flex-col justify-start items-start gap-2">
            <!-- Stars -->
            <div class="w-full inline-flex justify-start items-center gap-1">
                @for ($i = 0; $i < 5; $i++)
                <div class="w-4 h-4 text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                </div>
                @endfor
            </div>
            <!-- Testimoni Text -->
            <div class="w-full justify-start">
                <span class="text-slate-400 text-3xl font-bold align-top">“</span>
                <span class="text-neutral-500 text-base italic">Manajemen proyek dari Rekind sangat luar biasa. Mereka berhasil menyelesaikan proyek kompleks kami tepat waktu dan sesuai dengan standar kualitas tertinggi. Sangat direkomendasikan.</span>
                <span class="text-slate-400 text-3xl font-bold align-bottom">”</span>
            </div>
        </div>

        <!-- Testimoni Box 2 -->
        <div class="w-full p-6 rounded-[20px] border border-gray-200 flex flex-col justify-start items-start gap-2">
            <!-- Stars -->
            <div class="w-full inline-flex justify-start items-center gap-1">
                 @for ($i = 0; $i < 4; $i++)
                <div class="w-4 h-4 text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                </div>
                @endfor
                 <div class="w-4 h-4 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current"><path d="M21.947 9.179a1.001 1.001 0 0 0-.868-.676l-5.701-.453-2.467-5.461a.998.998 0 0 0-1.822-.001L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.213 4.107-1.49 6.452a1 1 0 0 0 1.53 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082c.297-.268.406-.686.278-1.065z"></path></svg>
                </div>
            </div>
            <!-- Testimoni Text -->
            <div class="w-full justify-start">
                 <span class="text-slate-400 text-3xl font-bold align-top">“</span>
                <span class="text-neutral-500 text-base italic">Secara teknis sudah sangat baik, namun kami berharap ada laporan progres yang lebih detail dan frekuentif untuk beberapa item pekerjaan kritis.</span>
                <span class="text-slate-400 text-3xl font-bold align-bottom">”</span>
            </div>
        </div>

        <!-- Link Selengkapnya -->
        <a href="{{ route('survey.testimoni') }}" class="flex items-center gap-2 mx-auto mt-4 text-[#4AA0C4] text-base font-roboto font-normal leading-6 tracking-[0.5px] hover:underline">
            Lihat Semua Umpan Balik
            <div class="w-[24px] h-[20px] text-[#7BB7D1]">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg>
            </div>
        </a>
    </div>

</div> 

{{-- Chart.js Script --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Data untuk Doughnut Chart Tingkat Kepuasan
        const tingkatKepuasanCtx = document.getElementById('tingkatKepuasanChart').getContext('2d');
        new Chart(tingkatKepuasanCtx, {
            type: 'doughnut',
            data: {
                labels: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas'],
                datasets: [{
                    label: 'Tingkat Kepuasan Klien',
                    data: [40, 38, 17, 5],
                    backgroundColor: [
                        '#0284c7', // sky-600
                        '#38bdf8', // sky-400
                        '#7dd3fc', // sky-300
                        '#fb923c'  // orange-400
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

        // Data untuk Bar Chart Faktor Kepuasan
        const faktorKepuasanCtx = document.getElementById('faktorKepuasanChart').getContext('2d');
        new Chart(faktorKepuasanCtx, {
            type: 'bar',
            data: {
                labels: ['Manajemen Proyek', 'Ketepatan Waktu', 'Kualitas Konstruksi', 'Kepatuhan HSE', 'Manajemen Biaya'],
                datasets: [{
                    label: 'Tingkat Kepentingan (skala 1-5)',
                    data: [4.8, 4.5, 4.7, 4.6, 4.3],
                    backgroundColor: [
                        'rgba(2, 132, 199, 0.7)',
                        'rgba(56, 189, 248, 0.7)',
                        'rgba(125, 211, 252, 0.7)',
                        'rgba(14, 165, 233, 0.7)',
                        'rgba(59, 130, 246, 0.7)'
                    ],
                    borderColor: [
                        '#0284c7',
                        '#38bdf8',
                        '#7dd3fc',
                        '#0ea5e9',
                        '#3b82f6'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                indexAxis: 'y', // Membuat bar chart menjadi horizontal
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 5,
                        grid: {
                            display: false
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
                    }
                }
            }
        });
    });
</script>

@endsection