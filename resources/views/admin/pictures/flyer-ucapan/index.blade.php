@extends('layouts.dashboard')

@section('title', 'Flyer Ucapan')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-6 rounded-md">
        
        <!-- Search + Button -->
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <div class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" class="flex-1 px-4 py-2 text-sm text-gray-700 focus:outline-none" placeholder="Cari Flyer Ucapan...">
                    <button class="p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a8 8 0 1 0-6.32-3.16l-4.39 4.39 1.42 1.42 4.39-4.39A8 8 0 0 0 10 18zm0-14a6 6 0 1 1-4.24 10.24A6 6 0 0 1 10 4z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Button Tambah -->
            <a href="#" class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Flyer Ucapan
            </a>
        </div>

        <!-- List Flyer Ucapan -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <!-- Card Flyer -->
            <div class="bg-white border border-[var(--button)] rounded-[16px] shadow overflow-hidden flex flex-col transition hover:shadow-lg">
                <!-- Gambar Flyer -->
                <div class="w-full aspect-[3/4] relative">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Flyer" class="w-full h-full object-cover" />
                    
                    <!-- Action Buttons -->
                    <div class="absolute top-2 right-2 flex flex-col gap-2">
                        <a href="#" class="w-[32px] h-[32px] bg-sky-300 rounded-[8px] shadow flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-[32px] h-[32px] bg-red-300 rounded-[8px] shadow flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black">
                                <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Isi Card (opsional) -->
                <div class="p-2">
                    <h3 class="text-sm font-semibold text-[var(--judul)] truncate text-center">Judul Flyer Ucapan</h3>
                </div>
            </div>

            <!-- Card Flyer -->
            <div class="bg-white border border-[var(--button)] rounded-[16px] shadow overflow-hidden flex flex-col transition hover:shadow-lg">
                <!-- Gambar Flyer -->
                <div class="w-full aspect-[3/4] relative">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Flyer" class="w-full h-full object-cover" />
                    
                    <!-- Action Buttons -->
                    <div class="absolute top-2 right-2 flex flex-col gap-2">
                        <a href="#" class="w-[32px] h-[32px] bg-sky-300 rounded-[8px] shadow flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black">
                                <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                            </svg>
                        </a>
                        <a href="#" class="w-[32px] h-[32px] bg-red-300 rounded-[8px] shadow flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="black">
                                <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Isi Card (opsional) -->
                <div class="p-2">
                    <h3 class="text-sm font-semibold text-[var(--judul)] truncate text-center">Judul Flyer Ucapan</h3>
                </div>
            </div>


            <!-- Card lain bisa tinggal copy paste -->
        </div>


        @include('components.pagination')

    </div>
</div>
@endsection
