@extends('layouts.dashboard')
    @section('title', 'Brand Awareness Survey Info')
    @section('content')
    <div class="w-full overflow-x-hidden">
        <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-semibold text-[var(--judul)]">Brand Awareness - Survey Information</h2>
                <a href="{{ route('admin.hasil-survey-brand.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-xl hover:bg-gray-400 transition">
                    Back to Hasil Survey Brand
                </a>
            </div>
            <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded relative" role="alert">
                <p class="font-bold">Static Content Page</p>
                <p>This page is intended to display a summary or information related to Brand Awareness surveys, mirroring content from the user-facing survey pages. The actual content below is a placeholder.</p>
            </div>
            <div class="mt-4 p-4 border rounded-md">
                <h3 class="text-xl font-semibold mb-2">Placeholder: Brand Awareness Details</h3>
                <p>Content mirroring <code class="text-sm bg-gray-200 p-1 rounded">resources/views/pages/reference/hasil-survey/brand-awareness.blade.php</code> would go here.</p>
                <p>This might include charts, summaries, and key findings that are typically static or updated periodically rather than managed as dynamic data through this admin panel.</p>
                {{-- Placeholder for actual content mirroring --}}
            </div>
        </div>
    </div>
    @endsection
