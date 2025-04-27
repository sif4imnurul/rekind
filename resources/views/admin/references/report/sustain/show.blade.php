@extends('layouts.dashboard')

@section('title', 'Detail Sustainability Report')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <div class="flex flex-wrap gap-0">

            <!-- Judul Laporan -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Laporan</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $sustainReport->nama }}</p>
                </div>
            </div>

            <!-- Tahun -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tahun</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $sustainReport->tahun }}</p>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="w-full p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Deskripsi</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide font-medium">{{ $sustainReport->deskripsi }}</p>
                </div>
            </div>

            <!-- Foto Cover Preview -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-4">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Foto Cover Laporan</label>
                    <div class="relative w-full aspect-[3/4] border border-gray-300 rounded-lg overflow-hidden bg-gray-100 flex items-center justify-center">
                        <div class="text-center px-4">
                            <img src="{{ asset('/files/' . $sustainReport->foto) }}" alt="Cover Image" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <a href="{{ asset('/files/' . $sustainReport->foto) }}" target="_blank"
                        class="mt-2 bg-[var(--button)] text-white font-semibold py-2 px-4 rounded-xl hover:bg-[#65A6C6] transition text-center w-fit">
                        Lihat Foto Lengkap
                    </a>
                </div>
            </div>

            <!-- Button Section -->
            <div class="w-full px-4 flex justify-end gap-3">
                <a href="{{ route('admin.sustain.edit', ['id' => $sustainReport->id_produk]) }}" 
                    class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition text-center">
                    Edit
                </a>
                <a href="{{ route('admin.sustain.index') }}" 
                    class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition text-center">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection