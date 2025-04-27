@extends('layouts.dashboard')

@section('title', 'Tambah Client')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <form action="{{ route('admin.crm.data-client.store') }}" method="POST">
            @csrf
            <div class="flex flex-wrap gap-0">
                <!-- Nama Perusahaan -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Nama Perusahaan</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" 
                                    name="nama" 
                                    required
                                    value="{{ old('nama') }}"
                                    placeholder="Nama Perusahaan" 
                                    class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Email</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="email" 
                                    name="email" 
                                    required
                                    value="{{ old('email') }}"
                                    placeholder="Email Perusahaan" 
                                    class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Penanggung Jawab -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Penanggung Jawab</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <select name="id_user" 
                                        required
                                        class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">
                                    <option value="">Pilih Penanggung Jawab</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id_user }}" 
                                                {{ old('id_user') == $user->id_user ? 'selected' : '' }}>
                                            {{ $user->nama }} ({{ $user->divisi }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('id_user')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Telepon -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Telepon</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" 
                                    name="telepon" 
                                    required
                                    value="{{ old('telepon') }}"
                                    placeholder="Nomor Telepon" 
                                    class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('telepon')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Alamat -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Alamat Perusahaan</label>
                        <div class="relative w-full">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center">
                                <textarea 
                                    name="alamat_perusahaan" 
                                    required
                                    rows="3"
                                    placeholder="Alamat Lengkap Perusahaan" 
                                    class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">{{ old('alamat_perusahaan') }}</textarea>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('alamat_perusahaan')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Status Project -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Status Project</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <select name="status_project" 
                                        required
                                        class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">
                                    <option value="">Pilih Status</option>
                                    <option value="current" {{ old('status_project') == 'current' ? 'selected' : '' }}>Current</option>
                                    <option value="past" {{ old('status_project') == 'past' ? 'selected' : '' }}>Past</option>
                                    <option value="potential" {{ old('status_project') == 'potential' ? 'selected' : '' }}>Potential</option>
                                </select>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('status_project')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Submit
                    </button>
                    <a href="{{ route('admin.crm.data-client') }}" 
                       class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection