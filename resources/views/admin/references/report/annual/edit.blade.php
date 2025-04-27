@extends('layouts.dashboard')

@section('title', 'Edit Annual Report')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <form action="{{ route('admin.annual.update', $annualReport->id_produk) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap gap-0">

                <!-- Judul Laporan -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="nama" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Laporan</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" id="nama" name="nama" value="{{ $annualReport->nama }}" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                                <select id="tahun" name="tahun" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" required>
                                    @for ($year = 2000; $year <= date('Y'); $year++)
                                        <option value="{{ $year }}" {{ $year == $annualReport->tahun ? 'selected' : '' }}>
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
                        <div class="relative w-full">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center min-h-12">
                                <textarea id="deskripsi" name="deskripsi" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none py-3" rows="3">{{ $annualReport->deskripsi }}</textarea>
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
                        <label for="url" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah File</label>
                        <div class="relative w-full">
                            <input type="file" id="url" name="url" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" />
                            @if($annualReport->url)
                                <p class="mt-2 text-sm text-gray-600">File saat ini: {{ basename($annualReport->url) }}</p>
                            @endif
                        </div>
                        @error('url')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Upload Foto -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="foto" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah Foto Cover Laporan</label>
                        <div class="relative w-full">
                            <input type="file" id="foto" name="foto" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" />
                            @if($annualReport->foto)
                                <div class="mt-2">
                                    <p class="text-sm text-gray-600 mb-1">Cover saat ini:</p>
                                    <img src="{{ asset('files/' . $annualReport->foto) }}" alt="Cover" class="h-24 object-cover rounded-md">
                                </div>
                            @endif
                        </div>
                        @error('foto')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="cursor-pointer bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Update
                    </button>
                    <a href="{{ route('admin.annual.index') }}" class="cursor-pointer bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition inline-block">
                        Cancel
                    </a>                    
                </div>
            </div>
        </form>
    </div>
</div>
@endsection