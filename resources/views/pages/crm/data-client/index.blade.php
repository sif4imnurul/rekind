@extends('layouts.employee')

@section('title', 'Data Client | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-x-hidden">
    <div class="max-w-full flex justify-between items-start">
        <!-- Kiri -->
        <div class="w-[662px] overflow-hidden flex flex-col justify-start items-start gap-[10px]">
        <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Data Client</div>
        </div>

        <!-- Kanan -->
        <div class="w-[207px] h-[48px] flex justify-end items-center">
        </div>
    </div>

    <!-- line -->
    <hr class="border-[2px] text-[var(--line)] rounded-2xl">

    <!-- List Data Client -->
    <div class="py-6 flex flex-col gap-6">
        
        <!-- Loop through client_data -->
        @foreach ($client_data as $client)
        <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[#7BB7D1] flex flex-col items-center gap-4">
            <!-- Title -->
            <div class="w-full flex justify-center">
                <h2 class="text-[#1D3A6D] text-2xl font-bold leading-[22px] text-center">Data Client {{ $loop->iteration }}</h2>
            </div>

            <!-- Field Item -->
            <div class="w-full flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                <div class="md:w-[190px] text-[#1D3A6D] text-lg font-bold">Nama Perusahaan</div>
                <div class="flex-1 relative">
                    <div class="bg-[#D6E4F5] rounded-t px-4 py-2 h-12 flex items-center">
                        <div class="text-[#1D3A6D] text-base tracking-wide">{{ $client->nama }}</div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-px outline-1 outline-[#1D3A6D]"></div>
                </div>
            </div>

            <!-- Field Item -->
            <div class="w-full flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                <div class="md:w-[190px] text-[#1D3A6D] text-lg font-bold">Divisi</div>
                <div class="flex-1 relative">
                    <div class="bg-[#D6E4F5] rounded-t px-4 py-2 h-12 flex items-center">
                        <div class="text-[#1D3A6D] text-base tracking-wide">{{ $client->user->divisi ?? 'N/A' }}</div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-px outline-1 outline-[#1D3A6D]"></div>
                </div>
            </div>

            <!-- Field Item -->
            <div class="w-full flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                <div class="md:w-[190px] text-[#1D3A6D] text-lg font-bold">Penanggung Jawab</div>
                <div class="flex-1 relative">
                    <div class="bg-[#D6E4F5] rounded-t px-4 py-2 h-12 flex items-center">
                        <div class="text-[#1D3A6D] text-base tracking-wide">{{ $client->user->nama ?? 'N/A' }}</div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-px outline-1 outline-[#1D3A6D]"></div>
                </div>
            </div>

            <!-- Field Item -->
            <div class="w-full flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                <div class="md:w-[190px] text-[#1D3A6D] text-lg font-bold">Telepon</div>
                <div class="flex-1 relative">
                    <div class="bg-[#D6E4F5] rounded-t px-4 py-2 h-12 flex items-center">
                        <div class="text-[#1D3A6D] text-base tracking-wide">{{ $client->telepon ?? 'N/A' }}</div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-px outline-1 outline-[#1D3A6D]"></div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection