@extends('layouts.dashboard')

@section('title', 'Edit Zoom Virtual Background')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <div class="flex flex-wrap gap-0">

            <!-- Judul Zoom Virtual Background -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Zoom Virtual Background</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="Judul sebelumnya" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Upload File -->
            <div class="w-full p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah File</label>
                    <div class="relative w-full">
                        <input type="file" class="block w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-md file:border-0
                            file:text-sm file:font-semibold
                            file:bg-[var(--button)] file:text-white
                            hover:file:bg-[#65A6C6]" />
                    </div>
                </div>
            </div>

            <!-- Button Section -->
            <div class="w-full px-4 flex justify-end gap-3">
                <button class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Update
                </button>
                <button class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                    Cancel
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
@extends('layouts.dashboard')

@section('title', 'Edit Zoom Virtual Background')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <div class="flex flex-wrap gap-0">
            <form action="{{ route('admin.zoom-background.update', $background->id_produk) }}" method="POST" enctype="multipart/form-data" class="w-full">
                @csrf
                @method('PUT')

                <!-- Judul Zoom Virtual Background -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Zoom Virtual Background</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" name="nama" value="{{ $background->nama }}" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                    </div>
                </div>

                <!-- Upload File -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Ubah File</label>
                        <div class="relative w-full">
                            <input type="file" name="url" class="block w-full text-sm text-gray-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-md file:border-0
                                file:text-sm file:font-semibold
                                file:bg-[var(--button)] file:text-white
                                file:cursor-pointer
                                hover:file:bg-[#65A6C6]" />
                        </div>
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="cursor-pointer bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Update
                    </button>
                    <a href="{{ route('admin.zoom-background.index') }}" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection