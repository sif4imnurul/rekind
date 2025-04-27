@extends('layouts.dashboard')

@section('title', 'Data Client')

@section('content')

<div class="w-full overflow-x-hidden">
    <!-- List Data Client -->
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <!-- Search + Button -->
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.crm.data-client.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="h-[40px] border border-[var(--button)] overflow-hidden rounded-lg flex items-center justify-center gap-[4px]">
                    <div class="flex-1 h-full flex items-center gap-[4px] px-[4px]">
                        <input type="text" 
                            name="search" 
                            placeholder="Cari client..." 
                            value="{{ request('search') }}"
                            class="w-full h-full bg-transparent text-[#1D3A6D] text-base tracking-wide font-normal focus:outline-none">
                        <button type="submit" class="w-[48px] h-[48px] flex items-center justify-center">
                            <div class="w-[24px] h-[24px] text-[#737373]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                                    <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.crm.data-client.create') }}" 
                class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                    Tambah Client
            </a>
        </div>

        <!-- Tabel -->
        <div class="w-full overflow-x-auto">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead class="bg-gray-100 text-[#1D3A6D] font-bold">
                    <tr>
                        <th class="px-4 py-3 border-b">No</th>
                        <th class="px-4 py-3 border-b">Nama Perusahaan</th>
                        <th class="px-4 py-3 border-b">Divisi</th>
                        <th class="px-4 py-3 border-b">Penanggung Jawab</th>
                        <th class="px-4 py-3 border-b">Telepon</th>
                        <th class="px-4 py-3 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($clients as $index => $client)
                    <tr>
                        <td class="px-4 py-3">{{ $index + 1 }}</td>
                        <td class="px-4 py-3">{{ $client->nama }}</td>
                        <td class="px-4 py-3">{{ $client->user->divisi }}</td>
                        <td class="px-4 py-3">{{ $client->user->nama ?? 'N/A' }}</td>
                        <td class="px-4 py-3">{{ $client->telepon }}</td>
                        <td class="px-4 py-3">
                            <div class="flex flex-row">
                                <a href="{{ route('admin.crm.data-client.edit', ['id' => $client->id_client_data]) }}"
                                   class="bg-yellow-300 p-2 rounded-l-lg border border-r-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                </a>
                                <form action="{{ route('admin.crm.data-client.destroy', ['id' => $client->id_client_data]) }}" 
                                      method="POST" 
                                      onsubmit="return confirm('Apakah anda yakin ingin menghapus client ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-300 p-2 rounded-r-lg border">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @include('components.pagination')

</div>

@endsection