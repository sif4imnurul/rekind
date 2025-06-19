@extends('layouts.employee')

@section('title', 'Edit Profil | Rekind')

@section('content')

<div class="w-full px-4 md:px-25 py-6 overflow-hidden">
    <div class="max-w-full flex justify-between items-start mb-4">
        <div class="flex flex-col justify-start items-start gap-[10px]">
            <div class="text-[var(--judul)] text-[24px] font-bold leading-[32px] tracking-[0.10px] font-montserrat">Edit Profil</div>
        </div>
    </div>

    <hr class="border-[2px] text-[var(--line)] rounded-2xl">

    <div class="w-full flex justify-center py-6">
        <div class="max-w-6xl w-full bg-transparent rounded-xl p-2">

            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
                    <span class="block sm:inline font-semibold">{{ session('status') }}</span>
                </div>
            @endif
             @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl relative mb-6" role="alert">
                    <strong class="font-bold">Oops! Terjadi kesalahan.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex flex-col md:flex-row gap-8">

                    {{-- Kolom Kiri: Foto Profil dan Info Statis --}}
                    <div class="w-full md:w-1/3 flex flex-col gap-6">
                        <div class="w-full p-6 bg-white rounded-[20px] flex flex-col items-center text-center gap-4">
                            <label class="text-[var(--judul)] text-lg font-bold">Foto Profil</label>

                            {{-- Tampilan Kondisional untuk Foto Profil atau SVG Default --}}
                            @if ($user->image_url)
                                <img src="{{ asset('files/' .  $user->image_url) }}" alt="Foto Profil" class="w-40 h-40 rounded-full object-cover border-4 border-[var(--highlight-text-box)]">
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-40 h-40 rounded-full object-cover border-[var(--highlight-text-box)] text-gray-400 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 2C6.579 2 2 6.579 2 12s4.579 10 10 10 10-4.579 10-10S17.421 2 12 2zm0 5c1.727 0 3 1.272 3 3s-1.273 3-3 3c-1.726 0-3-1.272-3-3s1.274-3 3-3zm-5.106 9.772c.897-1.32 2.393-2.2 4.106-2.2h2c1.714 0 3.209.88 4.106 2.2C15.828 18.14 14.015 19 12 19s-3.828-.86-5.106-2.228z"></path>
                                </svg>
                            @endif

                            <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[var(--button)] file:text-white hover:file:bg-[#65A6C6] file:cursor-pointer">
                            <p class="text-xs text-[var(--sub-text)]">Biarkan kosong jika tidak ingin mengubah foto.</p>
                        </div>
                         <div class="w-full p-6 bg-white rounded-[20px] flex flex-col gap-2">
                            <label class="text-[var(--judul)] text-lg font-bold">NPK</label>
                            <p class="text-[var(--sub-text)] text-base bg-gray-100 px-3 py-2 rounded-md">{{ $user->npk }}</p>
                        </div>
                        <div class="w-full p-6 bg-white rounded-[20px] flex flex-col gap-2">
                            <label class="text-[var(--judul)] text-lg font-bold">Role</label>
                            <p class="text-[var(--sub-text)] text-base bg-gray-100 px-3 py-2 rounded-md">{{ ucfirst($user->role) }}</p>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Detail Profil (Read-Only) --}}
                    <div class="w-full md:w-2/3">
                        <div class="w-full p-6 bg-white rounded-[20px] flex flex-col gap-6">
                            <div>
                                <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama</label>
                                <p class="mt-2 text-[var(--sub-text)] text-base bg-gray-100 px-4 py-3 rounded-md">{{ $user->nama }}</p>
                            </div>
                            <div>
                                <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Email</label>
                                <p class="mt-2 text-[var(--sub-text)] text-base bg-gray-100 px-4 py-3 rounded-md">{{ $user->email }}</p>
                            </div>
                            <div>
                                <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Telepon</label>
                                <p class="mt-2 text-[var(--sub-text)] text-base bg-gray-100 px-4 py-3 rounded-md">{{ $user->telepon ?: '-' }}</p>
                            </div>
                            <div>
                                <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Lahir</label>
                                <p class="mt-2 text-[var(--sub-text)] text-base bg-gray-100 px-4 py-3 rounded-md">{{ $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('d F Y') : '-' }}</p>
                            </div>
                            <div>
                                <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Alamat</label>
                                <p class="mt-2 text-[var(--sub-text)] text-base bg-gray-100 px-4 py-3 rounded-md h-24">{{ $user->alamat ?: '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-8 flex justify-end gap-4">
                     <a href="{{ url()->previous() }}" class="cursor-pointer bg-gray-400 text-white font-semibold py-2 px-6 rounded-xl hover:bg-gray-500 transition">
                         Batal
                     </a>
                    <button type="submit" class="cursor-pointer bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection