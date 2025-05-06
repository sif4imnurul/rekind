@extends('layouts.dashboard')

@section('title', 'Detail Agenda Perusahaan')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <div class="flex flex-wrap gap-0">

            <!-- Judul Proyek -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Proyek</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">Contoh judul proyek</p>
                </div>
            </div>

            <!-- Divisi -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Divisi</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">Divisi pertama</p>
                </div>
            </div>

            <!-- Status -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Status</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">Tinggi</p>
                </div>
            </div>

            <!-- Catatan -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Catatan</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">Contoh catatan project</p>
                </div>
            </div>

            <!-- Tanggal Mulai -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Mulai</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">2025-05-06</p>
                </div>
            </div>

            <!-- Tanggal Deadline -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Deadline</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">2025-05-13</p>
                </div>
            </div>

            <!-- Button Section -->
            <div class="w-full px-4 flex justify-end gap-3">
                <button class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Edit
                </button>
                <button class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                    Kembali
                </button>
            </div>

        </div>
    </div>
</div>
@endsection