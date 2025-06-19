@extends('layouts.dashboard')

@section('title', 'Edit User')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <h2 class="text-2xl font-semibold text-[var(--judul)] mb-4">Edit User: {{ $user->nama }}</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.users.update', $user->id_user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-2">
                <!-- Nama -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="nama" class="block text-[var(--judul)] text-sm font-bold mb-1">Name <span class="text-red-500">*</span></label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Email -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="email" class="block text-[var(--judul)] text-sm font-bold mb-1">Email <span class="text-red-500">*</span></label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Unit -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="unit" class="block text-[var(--judul)] text-sm font-bold mb-1">Unit</label>
                    <input type="text" name="unit" id="unit" value="{{ old('unit', $user->unit) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- NPK -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="npk" class="block text-[var(--judul)] text-sm font-bold mb-1">NPK</label>
                    <input type="text" name="npk" id="npk" value="{{ old('npk', $user->npk) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Divisi -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="divisi" class="block text-[var(--judul)] text-sm font-bold mb-1">Divisi</label>
                    <input type="text" name="divisi" id="divisi" value="{{ old('divisi', $user->divisi) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Telepon -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="telepon" class="block text-[var(--judul)] text-sm font-bold mb-1">Telepon</label>
                    <input type="tel" name="telepon" id="telepon" value="{{ old('telepon', $user->telepon) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Tanggal Lahir -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="tanggal_lahir" class="block text-[var(--judul)] text-sm font-bold mb-1">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Alamat -->
                <div class="w-full px-2 mb-4">
                    <label for="alamat" class="block text-[var(--judul)] text-sm font-bold mb-1">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('alamat', $user->alamat) }}</textarea>
                </div>

                <!-- Role -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="role" class="block text-[var(--judul)] text-sm font-bold mb-1">Role <span class="text-red-500">*</span></label>
                    <select name="role" id="role" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="userb" {{ old('role', $user->role) == 'userb' ? 'selected' : '' }}>User Biasa</option>
                        <option value="userk" {{ old('role', $user->role) == 'userk' ? 'selected' : '' }}>User Khusus</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

                <!-- Profile Picture -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="image" class="block text-[var(--judul)] text-sm font-bold mb-1">Profile Picture (Optional)</label>
                    <input type="file" name="image" id="image" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 mb-2">
                    @if($user->image_url)
                        <img src="{{ asset('storage/' . $user->image_url) }}" alt="{{ $user->nama }}" class="w-24 h-24 rounded-full object-cover">
                        <small class="text-gray-500">Current profile picture. Upload a new one to replace it.</small>
                    @else
                        <small class="text-gray-500">No profile picture set.</small>
                    @endif
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-4">
                <a href="{{ route('admin.users.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-6 rounded-xl hover:bg-gray-400 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Update User
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
