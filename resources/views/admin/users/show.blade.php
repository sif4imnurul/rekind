@extends('layouts.dashboard')

@section('title', 'View User')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-[var(--judul)]">User Details: {{ $user->nama }}</h2>
            <a href="{{ route('admin.users.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-xl hover:bg-gray-400 transition">
                Back to User List
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-1 flex flex-col items-center">
                    @if($user->image_url)
                        <img src="{{ asset('files/' . $user->image_url) }}" alt="{{ $user->nama }}" class="w-40 h-40 rounded-full object-cover mb-4 border-2 border-[var(--button)]">
                    @else
                        <div class="w-40 h-40 rounded-full bg-gray-300 flex items-center justify-center text-white text-5xl font-bold mb-4 border-2 border-[var(--button)]">
                            {{ strtoupper(substr($user->nama, 0, 1)) }}
                        </div>
                    @endif
                    <h3 class="text-xl font-semibold text-[var(--judul)]">{{ $user->nama }}</h3>
                    <p class="text-gray-600">{{ $user->email }}</p>
                    @php
                        $roleDetailClass = '';
                        $roleDetailName = '';
                        if ($user->role === 'admin') {
                            $roleDetailClass = 'bg-green-200 text-green-800';
                            $roleDetailName = 'Admin';
                        } elseif ($user->role === 'userb') {
                            $roleDetailClass = 'bg-blue-200 text-blue-800';
                            $roleDetailName = 'User Biasa';
                        } elseif ($user->role === 'userk') {
                            $roleDetailClass = 'bg-purple-200 text-purple-800'; // Or another distinct color
                            $roleDetailName = 'User Khusus';
                        } else {
                            $roleDetailName = ucfirst($user->role); // Fallback
                        }
                    @endphp
                    <span class="mt-2 px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full {{ $roleDetailClass }}">
                        {{ $roleDetailName }}
                    </span>
                </div>

                <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-6">
                    <div>
                        <strong class="block text-gray-700">NPK:</strong>
                        <p class="text-gray-900">{{ $user->npk ?? '-' }}</p>
                    </div>
                    <div>
                        <strong class="block text-gray-700">Unit:</strong>
                        <p class="text-gray-900">{{ $user->unit ?? '-' }}</p>
                    </div>
                    <div>
                        <strong class="block text-gray-700">Divisi:</strong>
                        <p class="text-gray-900">{{ $user->divisi ?? '-' }}</p>
                    </div>
                    <div>
                        <strong class="block text-gray-700">Telepon:</strong>
                        <p class="text-gray-900">{{ $user->telepon ?? '-' }}</p>
                    </div>
                    <div>
                        <strong class="block text-gray-700">Tanggal Lahir:</strong>
                        <p class="text-gray-900">{{ $user->tanggal_lahir ? \Carbon\Carbon::parse($user->tanggal_lahir)->format('d F Y') : '-' }}</p>
                    </div>
                    <div>
                        <strong class="block text-gray-700">Member Since:</strong>
                        <p class="text-gray-900">{{ $user->created_at ? $user->created_at->format('d F Y') : '-' }}</p>
                    </div>
                    <div class="sm:col-span-2">
                        <strong class="block text-gray-700">Alamat:</strong>
                        <p class="text-gray-900">{{ $user->alamat ?? '-' }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <a href="{{ route('admin.users.edit', $user->id_user) }}" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Edit User
                </a>
                <form action="{{ route('admin.users.destroy', $user->id_user) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this user?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-6 rounded-xl hover:bg-red-600 transition">
                        Delete User
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
