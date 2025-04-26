@extends('layouts.dashboard')

@section('title', 'Home | Rekind')

@section('content')

<div class="p-6 space-y-6">
    <!-- Welcome -->
    <div class="bg-white rounded-xl shadow p-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-[var(--judul)]">Selamat datang, Admin 👋</h1>
            <p class="text-gray-500">Kelola Berkas berkas dengan mudah dan cepat!</p>
        </div>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-4 rounded-xl shadow flex items-center gap-4">
            <div class="bg-blue-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.024 11.536 10 10l-2 3h9l-3.5-5z"></path><circle cx="9.503" cy="7.497" r="1.503"></circle><path d="M19 2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.988 5 19.806 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2zm0 14H5V5c0-.806.55-.988 1-1h13v12z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500">Foto</p>
                <p class="text-lg font-bold text-[var(--judul)]">120</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow flex items-center gap-4">
            <div class="bg-green-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18 11c0-.959-.68-1.761-1.581-1.954C16.779 8.445 17 7.75 17 7c0-2.206-1.794-4-4-4-1.517 0-2.821.857-3.5 2.104C8.821 3.857 7.517 3 6 3 3.794 3 2 4.794 2 7c0 .902.312 1.727.817 2.396A1.994 1.994 0 0 0 2 11v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-2.638l4 2v-7l-4 2V11zm-5-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM6 5c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2zM4 19v-8h12l.002 8H4z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500">Video</p>
                <p class="text-lg font-bold text-[var(--judul)]">32</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow flex items-center gap-4">
            <div class="bg-yellow-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zm-4.5 7a1.5 1.5 0 1 1-.001 3.001A1.5 1.5 0 0 1 8.5 11zm.5 5 1.597 1.363L13 13l4 6H7l2-3z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500">Twibbon</p>
                <p class="text-lg font-bold text-[var(--judul)]">18</p>
            </div>
        </div>
        <div class="bg-white p-4 rounded-xl shadow flex items-center gap-4">
            <div class="bg-red-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19 2H9c-1.103 0-2 .897-2 2v6H5c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4c0-1.103-.897-2-2-2zM5 12h6v8H5v-8zm14 8h-6v-8c0-1.103-.897-2-2-2H9V4h10v16z"></path><path d="M11 6h2v2h-2zm4 0h2v2h-2zm0 4.031h2V12h-2zM15 14h2v2h-2zm-8 .001h2v2H7z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-500">Data Client</p>
                <p class="text-lg font-bold text-[var(--judul)]">45</p>
            </div>
        </div>
    </div>

    <!-- Aksi Cepat -->
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-[var(--judul)] mb-4">Aksi Cepat</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <a href="#" class="bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white p-4 rounded-xl text-center font-semibold transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"></path>
                </svg>
                Tambah Foto
            </a>
            <a href="#" class="bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white p-4 rounded-xl text-center font-semibold transition flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M6 22h15v-2H6.012C5.55 19.988 5 19.805 5 19s.55-.988 1.012-1H21V4c0-1.103-.897-2-2-2H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3zM5 8V5c0-.805.55-.988 1-1h13v12H5V8z"></path><path d="M8 6h9v2H8z"></path></svg>
                Tambah Buku
            </a>
        </div>
    </div>

    <!-- Update Terakhir -->
    <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-xl font-semibold text-[var(--judul)] mb-4">Update Terbaru</h2>
        <ul class="space-y-3">
            <li class="flex items-center justify-between border-b pb-2">
                <div>
                    <p class="font-semibold text-gray-700">Flyer Idul Fitri</p>
                    <p class="text-xs text-gray-400">2 jam lalu</p>
                </div>
                <a href="#" class="text-blue-500 text-sm">Lihat ➔</a>
            </li>
            <li class="flex items-center justify-between border-b pb-2">
                <div>
                    <p class="font-semibold text-gray-700">Video Webinar</p>
                    <p class="text-xs text-gray-400">1 hari lalu</p>
                </div>
                <a href="#" class="text-blue-500 text-sm">Lihat ➔</a>
            </li>
            <li class="flex items-center justify-between">
                <div>
                    <p class="font-semibold text-gray-700">Twibbon Anniversary</p>
                    <p class="text-xs text-gray-400">3 hari lalu</p>
                </div>
                <a href="#" class="text-blue-500 text-sm">Lihat ➔</a>
            </li>
        </ul>
    </div>
</div>

@endsection