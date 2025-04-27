@extends('layouts.dashboard')

@section('title', 'Tambah Sustainability Report')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <form action="{{ route('admin.sustain.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap gap-0">

                <!-- Judul Laporan -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="nama" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Laporan</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" id="nama" name="nama" placeholder="Masukkan judul laporan" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" required />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Tahun -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="tahun" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tahun</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <select id="tahun" name="tahun" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">
                                    @for($year = date('Y'); $year >= 1900; $year--)
                                        <option value="{{ $year }}" {{ old('tahun', $sustainReport->tahun ?? '') == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('tahun')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="deskripsi" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Deskripsi</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" required />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('deskripsi')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Upload File -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="url" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Unggah File PDF</label>
                        <div class="relative w-full">
                            <input type="file" id="url" name="url" accept=".pdf" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" required />
                        </div>
                        @error('url')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Upload Foto -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="foto" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Unggah Foto Cover Laporan</label>
                        <div class="relative w-full">
                            <input type="file" id="foto" name="foto" accept="image/*" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" required />
                        </div>
                        @error('foto')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <input type="hidden" name="kategori" value="laporanA">

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="cursor-pointer bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Submit
                    </button>
                    <a href="{{ route('admin.sustain.index') }}" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition text-center">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection