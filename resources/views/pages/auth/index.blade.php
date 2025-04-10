@extends('layouts.app')

@section('title', 'Home | Rekind')

@section('content')

<!-- Hero Background with Login Box -->
<div class="relative w-full min-h-screen">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" src="{{ asset('img/hero.png') }}" alt="Hero Image">
        <div class="absolute inset-0 bg-[var(--judul)]/60"></div> <!-- Overlay untuk kontras -->
    </div>

    <!-- Login Box -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-[20px] border-2 border-[#7BB7D1] p-8 w-full max-w-md shadow-xl">
            <!-- Judul -->
            <div class="text-center text-[#1D3A6D] text-[24px] font-bold font-montserrat mb-6">Login</div>

            <!-- Label Nama -->
            <div class="mb-4">
                <label class="text-[#1D3A6D] text-[18px] font-bold font-montserrat">Nama</label>
                <div class="mt-2 bg-[#D6E4F5] rounded-t-md px-4 py-2">
                    <input type="text" class="w-full bg-transparent text-[#1D3A6D] text-[16px] font-roboto leading-[24px] tracking-[0.5px] outline-none" placeholder="Input">
                </div>
                <div class="h-[1px] bg-[#1D3A6D] mt-[-1px]"></div>
            </div>

            <!-- Label NPK -->
            <div class="mb-6">
                <label class="text-[#1D3A6D] text-[18px] font-bold font-montserrat">NPK</label>
                <div class="mt-2 bg-[#D6E4F5] rounded-t-md px-4 py-2">
                    <input type="text" class="w-full bg-transparent text-[#1D3A6D] text-[16px] font-roboto leading-[24px] tracking-[0.5px] outline-none" placeholder="Input">
                </div>
                <div class="h-[1px] bg-[#1D3A6D] mt-[-1px]"></div>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-4">
                <button class="px-6 py-2 bg-[#7BB7D1] rounded-[12px] text-white text-[16px] font-poppins font-semibold">Submit</button>
                <button class="px-6 py-2 bg-[#E77215] rounded-[12px] text-white text-[16px] font-poppins font-semibold">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection
