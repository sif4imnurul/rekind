@extends('layouts.app')

@section('title', 'Login | Rekind')

@section('content')

<!-- Hero Background with Login Box -->
<div class="relative w-full min-h-screen">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover" src="{{ asset('img/hero.png') }}" alt="Hero Image">
        <div class="absolute inset-0 bg-[var(--judul)]/60"></div>
    </div>

    <!-- Login Box -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-[20px] border-2 border-[#7BB7D1] p-8 w-full max-w-md shadow-xl">
                   <!-- Success message -->
                    @if(session('success'))
                        <div class="mb-5 p-4 bg-green-200 border-2 border-green-600 rounded-lg shadow-sm transform transition-all duration-300 animate-fadeIn" style="background-color: #c6f6d5; border-color: #38a169;">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #2f855a;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-green-800 font-semibold" style="color: #276749;">{{ session('success') }}</p>
                                </div>
                                <!-- Close button remains the same -->
                            </div>
                        </div>
                    @endif

                    <!-- Error message -->
                    @if(session('error') || $errors->any())
                        <div class="mb-5 p-4 bg-red-200 border-2 border-red-600 rounded-lg shadow-sm transform transition-all duration-300 animate-fadeIn" style="background-color: #fed7d7; border-color: #e53e3e;">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-red-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: #c53030;">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-red-800 font-semibold" style="color: #9b2c2c;">{{ session('error') ?? $errors->first() }}</p>
                                </div>
                                <!-- Close button remains the same -->
                            </div>
                        </div>
                    @endif

            <!-- Judul -->
            <div class="text-center text-[#1D3A6D] text-[24px] font-bold font-montserrat mb-6">Login</div>

            <!-- Login Form -->
            <form action="{{ route('login.submit') }}" method="POST" autocomplete="off">
                @csrf
                
                <!-- Label Nama -->
                <div class="mb-4">
                    <label for="nama" class="text-[#1D3A6D] text-[18px] font-bold font-montserrat">Nama</label>
                    <div class="mt-2 bg-[#D6E4F5] rounded-t-md px-4 py-2">
                        <input type="text" id="nama" name="nama" class="w-full bg-transparent text-[#1D3A6D] text-[16px] font-roboto leading-[24px] tracking-[0.5px] outline-none" placeholder="Masukkan nama" autocomplete="new-nama" readonly onfocus="this.removeAttribute('readonly');">
                    </div>
                    <div class="h-[1px] bg-[#1D3A6D] mt-[-1px]"></div>
                </div>

                <!-- Label NPK -->
                <div class="mb-6">
                    <label for="npk" class="text-[#1D3A6D] text-[18px] font-bold font-montserrat">NPK</label>
                    <div class="mt-2 bg-[#D6E4F5] rounded-t-md px-4 py-2">
                        <input type="password" id="npk" name="npk" class="w-full bg-transparent text-[#1D3A6D] text-[16px] font-roboto leading-[24px] tracking-[0.5px] outline-none" placeholder="Masukkan NPK" autocomplete="new-password" readonly onfocus="this.removeAttribute('readonly');">
                    </div>
                    <div class="h-[1px] bg-[#1D3A6D] mt-[-1px]"></div>
                </div>

                <!-- Tombol -->
                <div class="flex justify-end gap-4">
                    <button type="submit" class="px-6 py-2 bg-[#7BB7D1] rounded-[12px] text-white text-[16px] font-poppins font-semibold hover:bg-[#5a9dbd] active:bg-[#4a8dab] transition-colors duration-200 cursor-pointer">
                        Submit
                    </button>
                    <button type="reset" class="px-6 py-2 bg-[#E77215] rounded-[12px] text-white text-[16px] font-poppins font-semibold hover:bg-[#c9610e] active:bg-[#b5570d] transition-colors duration-200 cursor-pointer">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out;
    }
</style>

@endsection