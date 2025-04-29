@extends('layouts.dashboard')

@section('title', 'Template Presentasi')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-6 rounded-md">
        
        <!-- Search + Button -->
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.presentasi.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" name="search" value="{{ request()->get('search', '') }}" class="flex-1 px-4 py-2 text-sm text-gray-700 focus:outline-none" placeholder="Cari Template...">
                    <button type="submit" class="cursor-pointer p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a8 8 0 1 0-6.32-3.16l-4.39 4.39 1.42 1.42 4.39-4.39A8 8 0 0 0 10 18zm0-14a6 6 0 1 1-4.24 10.24A6 6 0 0 1 10 4z"/>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.presentasi.create') }}" class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Template
            </a>
        </div>

        <!-- List Template -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse($presentasi as $template)
            <!-- Card -->
            <div class="flex flex-col items-center">
                <div class="relative w-full">
                    <img src="{{ asset('img/pict-4.jpg') }}" alt="Image" class="w-full h-full object-cover rounded-[16px] border border-[var(--button)]" />

                    <!-- Container Action Buttons -->
                    <div class="absolute bottom-2 right-2 flex flex-col gap-2">
                        
                        <a href="{{ $template->url ? asset('files/' . $template->url) : '#' }}" 
                            download 
                            class="w-[38px] h-[38px] bg-sky-300 rounded-[12px] shadow flex items-center justify-center"
                            @if(!$template->url) onclick="event.preventDefault(); alert('File tidak tersedia');" @endif>
                             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                 <path d="m12 16 4-5h-3V4h-2v7H8z"></path>
                                 <path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path>
                             </svg>
                         </a>              
                        
                        <!-- Tombol Edit Nama -->
                        <a href="{{ route('admin.presentasi.edit', $template->id_produk) }}" class="w-[38px] h-[38px] bg-yellow-300 rounded-[12px] shadow flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                <path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path>
                            </svg>
                        </a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('admin.presentasi.delete', $template->id_produk) }}" method="POST" class="delete-form ">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="cursor-pointer w-[38px] h-[38px] bg-red-300 rounded-[12px] shadow flex items-center justify-center delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="black">
                                    <path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path>
                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Title below the image -->
                <div class="text-center mt-2">
                    <h3 class="text-[var(--judul)] text-[16px] font-medium px-2 py-1 rounded-lg bg-[var(--highlight-text-box)] inline-block">
                        {{ $template->nama }}
                    </h3>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-4">
                <p>Tidak ada template presentasi</p>
            </div>
            @endforelse

        </div>

        <div class="w-full flex justify-center mt-8">
            {{ $presentasi->appends(request()->query())->links('components.pagination') }}
        </div>

    </div>
</div>

<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function () {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6', // warna tombol OK
                cancelButtonColor: '#d33',    // warna tombol Cancel
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
        });
    });
</script>
@endsection