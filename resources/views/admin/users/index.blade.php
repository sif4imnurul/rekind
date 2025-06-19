@extends('layouts.dashboard')

@section('title', 'User Management')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-[var(--judul)]">User List</h2>
            <a href="{{ route('admin.users.create') }}" class="bg-[var(--button)] text-white font-semibold py-2 px-4 rounded-xl hover:bg-[#65A6C6] transition">
                Create New User
            </a>
        </div>

        <!-- Search Form -->
        <form action="{{ route('admin.users.index') }}" method="GET" class="mb-4">
            <div class="flex">
                <input type="text" name="search" placeholder="Search by name, email, unit, NPK..." value="{{ request('search') }}" class="w-full px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                <button type="submit" class="bg-[var(--button)] text-white px-4 py-2 rounded-r-md hover:bg-[#65A6C6] transition">Search</button>
            </div>
        </form>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Avatar</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Unit</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">NPK</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Role</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($users as $index => $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $users->firstItem() + $index }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($user->image_url)
                                    <img src="{{ asset('files/' . $user->image_url) }}" alt="{{ $user->nama }}" class="w-10 h-10 rounded-full object-cover">
                                @else
                                    <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center text-white">
                                        {{ strtoupper(substr($user->nama, 0, 1)) }}
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->unit ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->npk ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @php
                                    $roleClass = '';
                                    $roleName = '';
                                    if ($user->role === 'admin') {
                                        $roleClass = 'bg-green-100 text-green-800';
                                        $roleName = 'Admin';
                                    } elseif ($user->role === 'userb') {
                                        $roleClass = 'bg-blue-100 text-blue-800';
                                        $roleName = 'User Biasa';
                                    } elseif ($user->role === 'userk') {
                                        $roleClass = 'bg-purple-100 text-purple-800'; // Or another distinct color
                                        $roleName = 'User Khusus';
                                    } else {
                                        $roleName = ucfirst($user->role); // Fallback, though should not happen
                                    }
                                @endphp
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $roleClass }}">
                                    {{ $roleName }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.users.show', $user->id_user) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">View</a>
                                <a href="{{ route('admin.users.edit', $user->id_user) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                                <form action="{{ route('admin.users.destroy', $user->id_user) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $users->links('components.pagination') }}
        </div>
    </div>
</div>
@endsection
