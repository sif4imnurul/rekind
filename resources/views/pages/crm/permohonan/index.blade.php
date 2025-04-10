@extends('layouts.employee')

@section('title', 'Permohonan Akses CRM | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Form Permohonan Akses CRM</div>
        </div>

        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
        </div>
    </div>

    <!-- line -->
    <hr class="border-[2px] text-[var(--line)] rounded-2xl">

    <!-- FORM -->
    <div class="w-full flex justify-center py-6">
        <div class="max-w-6xl w-full bg-transparent rounded-xl p-2"> <!-- Container Luar -->

            <form action="{{ route('crm.store') }}" method="POST">
                @csrf <!-- Add CSRF token for security -->

                <div class="flex flex-wrap gap-0">

                    <!-- Nama -->
                    <div class="w-full md:w-1/2 p-4">
                        <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                            <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama</label>
                            <div class="relative w-full h-14">
                                <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                    <input type="text" name="nama" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" required />
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
                                    <input type="text" name="npk" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" required />
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
                                    <input type="text" name="unit" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                                    <input type="text" name="divisi" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                                    <input type="email" name="email" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                                    <input type="text" name="telepon" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
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
                                    <input type="text" name="alasan" placeholder="Input" class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                                </div>
                                <hr class="border-[1px] text-[var(--judul)]">
                            </div>
                        </div>
                    </div>

                    <!-- Button Section -->
                    <div class="w-full px-4 flex justify-end gap-3">
                        <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                            Submit
                        </button>
                        <button type="reset" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                            Cancel
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection