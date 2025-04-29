@extends('layouts.dashboard')

@section('title', 'Tambah Template Presentasi')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <form action="{{ route('admin.presentasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap gap-0">

                <!-- Judul Template -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="nama" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Template</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" name="nama" id="nama" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Upload File -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label for="url" class="text-[var(--judul)] text-lg font-bold leading-[22px]">Unggah File</label>
                        <div class="relative w-full">
                            <input type="file" name="url" id="url" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" />
                        </div>
                        @error('url')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="cursor-pointer bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Submit
                    </button>
                    <a href="{{ route('admin.presentasi.index') }}" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition flex items-center justify-center">
                        Cancel
                    </a>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection