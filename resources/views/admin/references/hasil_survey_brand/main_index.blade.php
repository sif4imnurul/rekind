@extends('layouts.dashboard')

@section('title', 'Hasil Survey Brand')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="mb-4">
            <h2 class="text-2xl font-semibold text-[var(--judul)]">Hasil Survey Brand</h2>
            <p class="text-gray-600">Select a sub-category to view details or manage survey documents.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card for Brand Awareness -->
            <a href="{{ route('admin.hasil-survey-brand.awareness') }}" class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-[var(--judul)]">Brand Awareness</h5>
                <p class="font-normal text-gray-700">View static report or summary related to Brand Awareness surveys.</p>
            </a>

            <!-- Card for Brand Positioning -->
            <a href="{{ route('admin.hasil-survey-brand.positioning') }}" class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-[var(--judul)]">Brand Positioning</h5>
                <p class="font-normal text-gray-700">View static report or summary related to Brand Positioning surveys.</p>
            </a>

            <!-- Card for Customer Satisfaction & Engagement -->
            <a href="{{ route('admin.hasil-survey-brand.cse') }}" class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-[var(--judul)]">Customer Satisfaction & Engagement</h5>
                <p class="font-normal text-gray-700">View static report or summary for CSE surveys.</p>
            </a>

            <!-- Card for SKL (Survey Kepuasan Layanan) -->
            <a href="{{ route('admin.hasil-survey-brand.skl') }}" class="block p-6 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 transition-colors">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-[var(--judul)]">SKL (Survey Kepuasan Layanan)</h5>
                <p class="font-normal text-gray-700">View static report or summary for SKL surveys.</p>
            </a>

            <!-- Card for Upload Hasil Survey (PDF) -->
            <a href="{{ route('admin.survey-documents.index') }}" class="block p-6 bg-[var(--button-light)] rounded-lg border border-[var(--button)] shadow-md hover:bg-[var(--hover-button-light)] transition-colors">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-[var(--button)]">Upload & Manage Hasil Survey (PDFs)</h5>
                <p class="font-normal text-[var(--button-text-dark)]">Manage PDF documents for survey results. (Full CRUD)</p>
            </a>
        </div>
    </div>
</div>
@endsection
