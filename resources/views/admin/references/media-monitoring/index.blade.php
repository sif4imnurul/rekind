@extends('layouts.dashboard')

@section('title', 'Media Monitoring')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.media-monitoring.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" 
                           name="search"
                           placeholder="Cari media monitoring..."
                           class="w-full px-4 py-2 text-sm text-gray-700 focus:outline-none" />
                    <button type="submit" class="p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.media-monitoring.create') }}" 
               class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Media
            </a>
        </div>

        <!-- Tabel -->
        <div class="w-full overflow-x-auto">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead class="bg-gray-100 text-[#1D3A6D] font-bold">
                    <tr>
                        <th class="px-4 py-3 border-b">No</th>
                        <th class="px-4 py-3 border-b">Status</th>
                        <th class="px-4 py-3 border-b">Kesimpulan</th>
                        <th class="px-4 py-3 border-b">Link</th>
                        <th class="px-4 py-3 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($medias as $media)
                    <tr>
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold
                                {{ $media->status === 'positive' ? 'bg-green-100 text-green-700' : '' }}
                                {{ $media->status === 'negative' ? 'bg-red-100 text-red-700' : '' }}
                                {{ $media->status === 'neutral' ? 'bg-gray-100 text-gray-700' : '' }}">
                                {{ ucfirst($media->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3">{{ $media->kesimpulan }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ $media->link }}" 
                               target="_blank"
                               class="text-blue-600 hover:text-blue-800 underline">
                                {{ Str::limit($media->link, 30) }}
                            </a>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex flex-row">
                                <a href="{{ route('admin.media-monitoring.edit', $media->id_media) }}" 
                                   class="bg-yellow-300 p-2 rounded-l-lg border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                </a>
                                <form action="{{ route('admin.media-monitoring.delete', $media->id_media) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Apakah anda yakin ingin menghapus media ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="bg-red-300 p-2 rounded-r-lg border">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                            Tidak ada data media monitoring
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        {{ $medias->links() }}
    </div>
</div>
@endsection