@extends('layouts.dashboard')

@section('title', 'Tambah Media Monitoring')

@section('content')
<div class="w-full overflow-x-hidden">
    <form action="{{ route('admin.media-monitoring.store') }}" method="POST" class="w-full">
        @csrf
        <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
            <div class="flex flex-wrap gap-0">
                <!-- Status -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Status Berita</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <select name="status" required class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none">
                                    <option value="">Pilih Status</option>
                                    <option value="positive">Positive</option>
                                    <option value="negative">Negative</option>
                                    <option value="neutral">Neutral</option>
                                </select>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('status')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Link -->
                <div class="w-full md:w-1/2 p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Sumber Berita (link)</label>
                        <div class="relative w-full h-14">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md flex items-center h-12">
                                <input type="url" 
                                       name="link"
                                       value="{{ old('link') }}"
                                       required
                                       placeholder="https://"
                                       class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none" />
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('link')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Kesimpulan -->
                <div class="w-full p-4">
                    <div class="w-full p-6 bg-white rounded-[20px] outline-1 outline-[var(--button)] flex flex-col gap-3">
                        <label class="text-[var(--judul)] text-lg font-bold leading-[22px]">Kesimpulan isi berita</label>
                        <div class="relative w-full">
                            <div class="bg-[var(--highlight-text-box)] px-4 py-1 rounded-t-md">
                                <textarea name="kesimpulan" 
                                          rows="4"
                                          required
                                          placeholder="Masukkan kesimpulan berita"
                                          class="w-full bg-transparent text-[var(--judul)] text-base tracking-wide font-normal focus:outline-none resize-none">{{ old('kesimpulan') }}</textarea>
                            </div>
                            <hr class="border-[1px] text-[var(--judul)]">
                        </div>
                        @error('kesimpulan')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Button Section -->
                <div class="w-full px-4 flex justify-end gap-3">
                    <button type="submit" 
                            class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                        Submit
                    </button>
                    <a href="{{ route('admin.media-monitoring.index') }}" 
                       class="bg-[var(--line)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#cc6512] transition">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection