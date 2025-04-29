@extends('layouts.dashboard')

@section('title', 'Twibbon')

@section('content')
<div class="w-full overflow-x-hidden">
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('status') }}</span>
        </div>
    @endif
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-6 rounded-md">
        <!-- Search + Button -->
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.twibbon.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           class="flex-1 px-4 py-2 text-sm text-gray-700 focus:outline-none" 
                           placeholder="Cari...">
                    <button type="submit" class="p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a8 8 0 1 0-6.32-3.16l-4.39 4.39 1.42 1.42 4.39-4.39A8 8 0 0 0 10 18zm0-14a6 6 0 1 1-4.24 10.24A6 6 0 0 1 10 4z"/>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.twibbon.create') }}" 
               class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Twibbon
            </a>
        </div>

        <!-- List Template -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($twibbons as $twibbon)
                <div class="bg-white border border-[var(--button)] rounded-[16px] shadow overflow-hidden flex flex-col transition hover:shadow-lg">
                    <!-- Gambar -->
                    <div class="relative w-full aspect-[1/1] bg-gray-100">
                        <img src="{{ asset('files/' . $twibbon->foto) }}" alt="{{ $twibbon->nama }}" class="w-full h-full object-cover" />
                        
                        <!-- Action Buttons -->
                        <div class="absolute top-2 right-2 flex flex-col gap-2">
                            @if($twibbon->url)
                                <a href="{{ $twibbon->url }}" target="_blank" 
                                   class="w-[34px] h-[34px] bg-sky-300 rounded-full shadow flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"></path><path d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"></path></svg>
                                </a>
                            @endif

                            <a href="{{ route('admin.twibbon.edit', $twibbon->id_produk) }}" 
                               class="w-[34px] h-[34px] bg-yellow-300 rounded-full shadow flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                    <path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path>
                                </svg>
                            </a>

                            <form action="{{ route('admin.twibbon.delete', $twibbon->id_produk) }}" 
                                  method="POST"
                                  onsubmit="return confirm('Apakah anda yakin ingin menghapus twibbon ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-[34px] h-[34px] bg-red-300 rounded-full shadow flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                        <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                        <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Isi Card -->
                    <div class="p-3 text-center">
                        <h3 class="text-md font-semibold text-[var(--judul)] truncate">{{ $twibbon->nama }}</h3>
                        <p class="text-sm text-gray-600 mt-1 line-clamp-2">{{ $twibbon->deskripsi }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-4 text-gray-500">
                    Tidak ada twibbon yang tersedia
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        {{ $twibbons->links('components.pagination') }}
    </div>
</div>
@endsection