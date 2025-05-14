@extends('layouts.dashboard')

@section('title', 'Edit Profile')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="flex flex-wrap gap-0">
                <!-- Email -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Email</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="email" 
                                       name="email"
                                       value="{{ old('email', auth()->user()->email) }}" 
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Current Password -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Current Password</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="password" 
                                       name="current_password"
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('current_password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- New Password -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">New Password</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="password" 
                                       name="new_password"
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('new_password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Confirm New Password</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="password" 
                                       name="new_password_confirmation"
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Update
                    </button>
                    <a href="{{ route('admin.dashboard.index') }}" class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection