@extends('layouts.dashboard')

@section('title', 'Galery Photo')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-6 rounded-md">
        
        <!-- Search + Button -->
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.photo.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" 
                           name="search"
                           value="{{ request('search') }}"
                           class="flex-1 px-4 py-2 text-sm text-gray-700 focus:outline-none" 
                           placeholder="Cari Foto...">
                    <button type="submit" class="p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a8 8 0 1 0-6.32-3.16l-4.39 4.39 1.42 1.42 4.39-4.39A8 8 0 0 0 10 18zm0-14a6 6 0 1 1-4.24 10.24A6 6 0 0 1 10 4z"/>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.photo.create') }}" 
               class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Foto
            </a>
        </div>

        <!-- List Foto -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($photos as $photo)
                <!-- Card -->
                <div class="relative h-[280px] transition group">
                    <!-- Image -->
                    <img src="{{ asset('files/' . $photo->foto) }}" 
                         alt="{{ $photo->nama }}" 
                         class="w-full h-full object-cover rounded-[16px] border border-[var(--button)]" />

                    <!-- Overlay with Details -->
                    <div class="absolute inset-0 bg-black/40 rounded-[16px] opacity-0 group-hover:opacity-100 transition-opacity">
                        <!-- Photo Details -->
                        <div class="absolute inset-x-4 bottom-16 bg-white/95 backdrop-blur-sm p-3 rounded-lg">
                            <h3 class="text-sm font-semibold line-clamp-1 mb-1">{{ $photo->nama }}</h3>
                            <p class="text-xs text-gray-600 line-clamp-2">{{ $photo->deskripsi }}</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="absolute bottom-4 right-4 flex gap-2">
                            <!-- Edit Button -->
                            <a href="{{ route('admin.photo.edit', $photo->id_produk) }}" 
                               class="w-10 h-10 bg-yellow-300 rounded-lg shadow flex items-center justify-center hover:bg-yellow-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                    <path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path>
                                </svg>
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('admin.photo.delete', $photo->id_produk) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Apakah anda yakin ingin menghapus foto ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="w-10 h-10 bg-red-300 rounded-lg shadow flex items-center justify-center hover:bg-red-400 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                        <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-4 text-gray-500">
                    Tidak ada foto yang tersedia
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        {{ $photos->links('components.pagination') }}
    </div>
</div>
@endsection