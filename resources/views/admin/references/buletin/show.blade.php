@extends('layouts.dashboard')

@section('title', 'Detail Buletin')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="flex flex-wrap gap-0">
            <!-- Judul Buletin -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Buletin</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide">{{ $buletin->nama }}</p>
                </div>
            </div>

            <!-- Tahun -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tahun</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide">{{ $buletin->tahun }}</p>
                </div>
            </div>

            <!-- Deskripsi -->
            <div class="w-full p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Deskripsi</label>
                    <p class="text-[var(--sub-text)] text-base tracking-wide">{{ $buletin->deskripsi }}</p>
                </div>
            </div>

            <!-- Preview -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-gray-300 flex flex-col gap-4">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">File Buletin</label>
                    <div class="relative w-full aspect-[3/4] border border-gray-300 rounded-lg overflow-hidden bg-gray-100 flex items-center justify-center">
                        @if($buletin->foto)
                            <img src="{{ asset('/files/' . $buletin->foto) }}" alt="Cover Buletin" class="w-full h-full object-cover">
                        @else
                            <p class="text-gray-500">Tidak ada cover</p>
                        @endif
                    </div>
                    @if($buletin->url)
                        <a href="{{ asset('/files/' . $buletin->pdf) }}" 
                           target="_blank"
                           class="mt-2 bg-[var(--button)] text-white font-semibold py-2 px-4 rounded-xl hover:bg-[#65A6C6] transition text-center w-fit">
                            Download PDF
                        </a>
                    @endif
                </div>
            </div>

            <!-- Button Section -->
            <div class="w-full px-4 flex justify-end gap-3">
                <a href="{{ route('admin.buletin.edit', $buletin->id_produk) }}" 
                   class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Edit
                </a>
                <a href="{{ route('admin.buletin.index') }}" 
                   class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection