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

        <!-- Button 2 -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-white rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.position') }}" class="text-[var(--sub-text)] text-base font-normal text-center">
                    Brand Positioning
                </a>
            </div>
        </div>

        <!-- Button 3 (Active) -->
        <div class="h-16 flex justify-center items-center">
            <div class="w-full h-full bg-[var(--button)] rounded-[30px] outline-1 outline-[var(--button)] flex justify-center items-center px-3">
                <a href="{{ route('survey.cse') }}" class="text-white text-base font-normal text-center">
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

@endsection