@extends('layouts.dashboard')

@section('title', 'Upload New Survey Document')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <h2 class="text-2xl font-semibold text-[var(--judul)] mb-4">Upload New Survey Document</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.survey-documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-2">
                <!-- Nama Dokumen -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="nama" class="block text-[var(--judul)] text-sm font-bold mb-1">Document Name <span class="text-red-500">*</span></label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter document name">
                </div>

                <!-- Tahun -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="tahun" class="block text-[var(--judul)] text-sm font-bold mb-1">Year (Optional)</label>
                    <input type="number" name="tahun" id="tahun" value="{{ old('tahun') }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="e.g., 2024">
                </div>

                <!-- Deskripsi -->
                <div class="w-full px-2 mb-4">
                    <label for="deskripsi" class="block text-[var(--judul)] text-sm font-bold mb-1">Description (Optional)</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter a brief description">{{ old('deskripsi') }}</textarea>
                </div>

                <!-- Thumbnail Image (Foto) -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="foto" class="block text-[var(--judul)] text-sm font-bold mb-1">Thumbnail Image (Optional, JPG/PNG)</label>
                    <input type="file" name="foto" id="foto" accept="image/jpeg,image/png,image/jpg" class="w-full px-3 py-2 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[var(--button-light)] file:text-[var(--button)] hover:file:bg-[var(--hover-button-light)]">
                </div>

                <!-- PDF File -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="file" class="block text-[var(--judul)] text-sm font-bold mb-1">PDF Document <span class="text-red-500">*</span></label>
                    <input type="file" name="file" id="file" accept=".pdf" required class="w-full px-3 py-2 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[var(--button-light)] file:text-[var(--button)] hover:file:bg-[var(--hover-button-light)]">
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-4">
                <a href="{{ route('admin.survey-documents.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-6 rounded-xl hover:bg-gray-400 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Upload Document
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
