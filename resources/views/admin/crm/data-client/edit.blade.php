@extends('layouts.dashboard')

@section('title', 'Edit Data Client')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <div class="flex flex-wrap gap-0">

            <!-- Nama client -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Perusahaan</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="nama sebelumnya" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Divisi -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Divisi</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="kesatu" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Nama Penanggung jawab -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Penanggung Jawab</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="nama sebelumnya" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Telepon -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Telepon</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="081387256534" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
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
