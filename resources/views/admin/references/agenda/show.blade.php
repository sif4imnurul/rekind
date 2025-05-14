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
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $agenda->nama_agenda }}</p>
                </div>
            </div>

            <!-- Divisi -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Divisi</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $agenda->divisi }}</p>
                </div>
            </div>

            <!-- Status -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Prioritas</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ ucfirst($agenda->prioritas) }}</p>
                </div>
            </div>

            <!-- Catatan -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Catatan</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $agenda->catatan ?? '-' }}</p>
                </div>
            </div>

            <!-- Tanggal Mulai -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Mulai</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">
                        {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d M, Y') }}
                    </p>
                </div>
            </div>

            <!-- Tanggal Deadline -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Deadline</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">
                        {{ \Carbon\Carbon::parse($agenda->tanggal_deadline)->format('d M, Y') }}
                    </p>
                </div>
            </div>

            <!-- Button Section -->
            <div class="w-full px-4 flex justify-end gap-3">
                <a href="{{ route('admin.agenda.edit', $agenda->id_agenda) }}" 
                   class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Edit
                </a>
                <a href="{{ route('admin.agenda.index') }}" 
                   class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection