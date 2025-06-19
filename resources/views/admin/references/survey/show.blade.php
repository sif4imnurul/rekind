@extends('layouts.dashboard')

@section('title', 'View Survey Result Details (Not Implemented)')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-[var(--judul)]">
                Survey Result Details: {{ $dummySurvey->title ?? 'N/A' }}
            </h2>
            <a href="{{ route('admin.hasil-survey-brand.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-xl hover:bg-gray-400 transition">
                Back to List
            </a>
        </div>

        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
            <p class="font-bold">Under Development</p>
            <p>This page displays dummy data. Full functionality is not yet implemented.</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <strong class="block text-gray-700 text-sm">Survey Title:</strong>
                    <p class="text-gray-900 text-lg">{{ $dummySurvey->title ?? 'Not available' }}</p>
                </div>
                <div>
                    <strong class="block text-gray-700 text-sm">Date Conducted:</strong>
                    <p class="text-gray-900 text-lg">{{ $dummySurvey->date ?? 'Not available' }}</p>
                </div>
                <div>
                    <strong class="block text-gray-700 text-sm">Number of Respondents:</strong>
                    <p class="text-gray-900 text-lg">{{ $dummySurvey->respondents ?? 'Not available' }}</p>
                </div>
                <div>
                    <strong class="block text-gray-700 text-sm">Status:</strong>
                    <span class="px-3 py-1 inline-flex text-md leading-5 font-semibold rounded-full 
                        @if($dummySurvey->status === 'Completed') bg-green-100 text-green-800 
                        @elseif($dummySurvey->status === 'In Progress') bg-yellow-100 text-yellow-800
                        @else bg-gray-100 text-gray-800 @endif">
                        {{ $dummySurvey->status ?? 'Not available' }}
                    </span>
                </div>
            </div>

            <div class="mt-6">
                <strong class="block text-gray-700 text-sm">Summary / Key Findings:</strong>
                <p class="text-gray-900 mt-1 bg-gray-50 p-4 rounded-md whitespace-pre-wrap">{{ $dummySurvey->summary ?? ($dummySurvey->data ? json_encode($dummySurvey->data, JSON_PRETTY_PRINT) : 'No summary available.') }}</p>
            </div>

            @if(isset($dummySurvey->report_file_placeholder))
            <div class="mt-6">
                <strong class="block text-gray-700 text-sm">Attached Report:</strong>
                <p class="text-gray-900 mt-1">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900 underline" onclick="alert('File download not implemented.'); return false;">
                        {{ $dummySurvey->report_file_placeholder }} (Download Not Implemented)
                    </a>
                </p>
            </div>
            @endif
            
            <div class="mt-8 flex justify-end gap-3">
                <a href="{{ route('admin.hasil-survey-brand.edit', $dummySurvey->id ?? 1) }}" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition">
                    Edit (Not Implemented)
                </a>
                <form action="{{ route('admin.hasil-survey-brand.destroy', $dummySurvey->id ?? 1) }}" method="POST" class="inline-block" onsubmit="alert('Delete functionality not implemented yet.'); return false;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-6 rounded-xl hover:bg-red-600 transition">
                        Delete (Not Implemented)
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
