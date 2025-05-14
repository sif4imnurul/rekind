@extends('layouts.dashboard')

@section('title', 'Edit Agenda Perusahaan')

@section('content')
<div class="w-full overflow-x-hidden">
    <form action="{{ route('admin.agenda.update', $agenda->id_agenda) }}" method="POST" class="w-full">
        @csrf
        @method('PUT')
        <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
            <div class="flex flex-wrap gap-0">
                <!-- Nama Agenda -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Judul Project</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" 
                                       name="nama_agenda"
                                       value="{{ old('nama_agenda', $agenda->nama_agenda) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('nama_agenda')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Divisi -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Divisi</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="text" 
                                       name="divisi"
                                       value="{{ old('divisi', $agenda->divisi) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('divisi')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Prioritas -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Prioritas</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <select name="prioritas" 
                                        required
                                        class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">
                                    <option value="rendah" {{ $agenda->prioritas == 'rendah' ? 'selected' : '' }}>Rendah</option>
                                    <option value="sedang" {{ $agenda->prioritas == 'sedang' ? 'selected' : '' }}>Sedang</option>
                                    <option value="tinggi" {{ $agenda->prioritas == 'tinggi' ? 'selected' : '' }}>Tinggi</option>
                                </select>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('prioritas')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Tanggal Mulai -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Mulai</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="date" 
                                       name="tanggal_mulai"
                                       value="{{ old('tanggal_mulai', $agenda->tanggal_mulai) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('tanggal_mulai')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Tanggal Deadline -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Tanggal Deadline</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="date" 
                                       name="tanggal_deadline"
                                       value="{{ old('tanggal_deadline', $agenda->tanggal_deadline) }}"
                                       required
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('tanggal_deadline')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Catatan -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Catatan</label>
                        <div class="relative w-full">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md">
                                <textarea name="catatan" 
                                          rows="4"
                                          class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none resize-none">{{ old('catatan', $agenda->catatan) }}</textarea>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('catatan')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" 
                            class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Update
                    </button>
                    <a href="{{ route('admin.agenda.index') }}" 
                       class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection