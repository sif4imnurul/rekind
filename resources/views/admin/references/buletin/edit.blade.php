@extends('layouts.dashboard')

@section('title', 'Edit Buletin')

@section('content')
<div class="w-full overflow-x-hidden">
    <form action="{{ route('admin.buletin.update', $buletin->id_produk) }}" method="POST" enctype="multipart/form-data" class="w-full">
        @csrf
        @method('PUT')
        <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
            <div class="flex flex-wrap gap-0">
                <!-- Judul Buletin -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Buletin</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" 
                                       name="nama"
                                       value="{{ old('nama', $buletin->nama) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tahun</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="number" 
                                       name="tahun"
                                       min="2000"
                                       max="2100"
                                       value="{{ old('tahun', $buletin->tahun) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Deskripsi</label>
                        <div class="relative w-full">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md">
                                <textarea name="deskripsi" 
                                          rows="4"
                                          class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none resize-none">{{ old('deskripsi', $buletin->deskripsi) }}</textarea>
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
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah File PDF (opsional)</label>
                        <div class="relative w-full">
                            <input type="file" 
                                   name="file"
                                   accept=".pdf"
                                   class="block w-full text-sm text-gray-500
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-md file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-[var(--button)] file:text-white
                                   hover:file:bg-[#65A6C6]" />
                        </div>
                        @error('file')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        @if($buletin->url)
                            <p class="text-sm text-gray-600">File saat ini: {{ basename($buletin->url) }}</p>
                        @endif
                    </div>
                </div>

                <!-- Upload Foto -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah Foto Cover (opsional)</label>
                        <div class="relative w-full">
                            <input type="file" 
                                   name="foto"
                                   accept="image/*"
                                   class="block w-full text-sm text-gray-500
                                   file:mr-4 file:py-2 file:px-4
                                   file:rounded-md file:border-0
                                   file:text-sm file:font-semibold
                                   file:bg-[var(--button)] file:text-white
                                   hover:file:bg-[#65A6C6]" />
                        </div>
                        @error('foto')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        @if($buletin->foto)
                            <div class="mt-2">
                                <p class="text-sm text-gray-600 mb-2">Cover saat ini:</p>
                                <img src="{{ asset('/files/' . $buletin->foto) }}" alt="Current cover" class="w-32 h-32 object-cover rounded">
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" 
                            class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Update
                    </button>
                    <a href="{{ route('admin.buletin.index') }}" 
                       class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection