@extends('layouts.dashboard')

@section('title', 'Persetujuan Akses CRM')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">

        <!-- Request Details Section -->
        <div class="flex flex-wrap gap-0">

            <!-- Nama -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>
            
            <!-- NPK -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">NPK</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Unit -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Unit</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
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
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="w-full md:w-1/2 p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Email</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
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
                            <input type="text" value="misal" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

            <!-- Alasan -->
            <div class="w-full p-4">
                <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                    <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Alasan</label>
                    <div class="relative w-full h-14">
                        <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                            <input type="text" value="misal mau lihat lihat" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" readonly />
                        </div>
                        <hr class="border-[1px] text-[var(--judul)]">
                    </div>
                </div>
            </div>

        </div>

        <!-- Approval Section -->
        <div class="w-full px-4 flex justify-end gap-3 mt-6">
            <form method="POST" action="#">
                @csrf
                <div class="flex gap-4">
                    <!-- Approve Button -->
                    <button type="submit" name="action" value="approve" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Setujui Akses
                    </button>

                    <!-- Reject Button -->
                    <button type="submit" name="action" value="reject" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Tolak Akses
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection