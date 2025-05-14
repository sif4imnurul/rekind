@extends('layouts.dashboard')

@section('title', 'Agenda Perusahaan')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="w-full flex flex-col md:flex-row justify-between items-center gap-3">
            <!-- Search Box -->
            <form action="{{ route('admin.agenda.search') }}" method="GET" class="w-full md:w-[60%]">
                <div class="flex items-center border border-[var(--button)] rounded-lg overflow-hidden">
                    <input type="text" 
                           name="search"
                           class="flex-1 px-4 py-2 text-sm text-gray-700 focus:outline-none" 
                           placeholder="Cari agenda..."
                           value="{{ request('search') }}"
                    >
                    <button type="submit" class="p-2 text-[var(--button)]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                        </svg>
                    </button>
                </div>
            </form>

            <!-- Button Tambah -->
            <a href="{{ route('admin.agenda.create') }}" 
               class="h-[40px] px-6 rounded-lg bg-[var(--button)] hover:bg-[var(--sub-judul)] text-white text-sm font-medium flex items-center justify-center">
                Tambah Agenda
            </a>
        </div>

        <!-- Tabel -->
        <div class="w-full overflow-x-auto">
            <table class="min-w-full text-left text-sm text-gray-700">
                <thead class="bg-gray-100 text-[#1D3A6D] font-bold">
                    <tr>
                        <th class="px-4 py-3 border-b">No</th>
                        <th class="px-4 py-3 border-b">Judul Project</th>
                        <th class="px-4 py-3 border-b">Divisi</th>
                        <th class="px-4 py-3 border-b">Prioritas</th>
                        <th class="px-4 py-3 border-b">Mulai</th>
                        <th class="px-4 py-3 border-b">Deadline</th>
                        <th class="px-4 py-3 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($agendas as $agenda)
                    <tr>
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $agenda->nama_agenda }}</td>
                        <td class="px-4 py-3">{{ $agenda->divisi }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold
                                {{ $agenda->prioritas === 'tinggi' ? 'bg-red-100 text-red-700' : '' }}
                                {{ $agenda->prioritas === 'sedang' ? 'bg-yellow-100 text-yellow-700' : '' }}
                                {{ $agenda->prioritas === 'rendah' ? 'bg-green-100 text-green-700' : '' }}
                            ">
                                {{ ucfirst($agenda->prioritas) }}
                            </span>
                        </td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d M, Y') }}</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($agenda->tanggal_deadline)->format('d M, Y') }}</td>
                        <td class="px-4 py-3">
                            <div class="flex flex-row">
                                <a href="{{ route('admin.agenda.show', $agenda->id_agenda) }}" 
                                   class="bg-sky-300 p-2 rounded-l-lg border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                                </a>
                                <a href="{{ route('admin.agenda.edit', $agenda->id_agenda) }}" 
                                   class="bg-yellow-300 p-2 border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                                </a>
                                <form action="{{ route('admin.agenda.delete', $agenda->id_agenda) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Apakah anda yakin ingin menghapus agenda ini?');"
                                      class="inline">
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
                        <td colspan="7" class="px-4 py-3 text-center text-gray-500">
                            Tidak ada agenda
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $agendas->links() }}
        </div>
    </div>
</div>
@endsection