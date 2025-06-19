@extends('layouts.dashboard')

@section('title', isset($isEdit) && $isEdit ? 'Edit Survey Result (Not Implemented)' : 'Add New Survey Result (Not Implemented)')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        <h2 class="text-2xl font-semibold text-[var(--judul)] mb-4">
            {{ isset($isEdit) && $isEdit ? 'Edit Survey Result (Not Implemented)' : 'Add New Survey Result (Not Implemented)' }}
            @if(isset($dummySurvey))
                : {{ $dummySurvey->title }}
            @endif
        </h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
            <p class="font-bold">Under Development</p>
            <p>This form is a placeholder. Functionality to save or update survey results is not yet implemented.</p>
        </div>

        <form action="{{ isset($isEdit) ? route('admin.survey.update', $dummySurvey->id ?? 1) : route('admin.survey.store') }}" method="POST" onsubmit="alert('Form submission is not implemented yet.'); return false;">
            @csrf
            @if(isset($isEdit))
                @method('PUT')
            @endif

            <div class="flex flex-wrap -mx-2">
                <!-- Survey Title -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="title" class="block text-[var(--judul)] text-sm font-bold mb-1">Survey Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $dummySurvey->title ?? '') }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter survey title">
                </div>

                <!-- Date Conducted -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="date_conducted" class="block text-[var(--judul)] text-sm font-bold mb-1">Date Conducted <span class="text-red-500">*</span></label>
                    <input type="date" name="date_conducted" id="date_conducted" value="{{ old('date_conducted', $dummySurvey->date ?? '') }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Number of Respondents -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="respondents" class="block text-[var(--judul)] text-sm font-bold mb-1">Number of Respondents <span class="text-red-500">*</span></label>
                    <input type="number" name="respondents" id="respondents" value="{{ old('respondents', $dummySurvey->respondents ?? '') }}" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="e.g., 150">
                </div>

                <!-- Status -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <label for="status" class="block text-[var(--judul)] text-sm font-bold mb-1">Status <span class="text-red-500">*</span></label>
                    <select name="status" id="status" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="Planning" {{ old('status', $dummySurvey->status ?? '') == 'Planning' ? 'selected' : '' }}>Planning</option>
                        <option value="In Progress" {{ old('status', $dummySurvey->status ?? '') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="Completed" {{ old('status', $dummySurvey->status ?? '') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Archived" {{ old('status', $dummySurvey->status ?? '') == 'Archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>

                <!-- Survey Details/Summary (Textarea) -->
                <div class="w-full px-2 mb-4">
                    <label for="summary" class="block text-[var(--judul)] text-sm font-bold mb-1">Summary / Key Findings</label>
                    <textarea name="summary" id="summary" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter a brief summary or key findings from the survey.">{{ old('summary', $dummySurvey->summary ?? '') }}</textarea>
                </div>

                <!-- File Upload (Optional - e.g., for full report PDF) -->
                <div class="w-full px-2 mb-4">
                    <label for="report_file" class="block text-[var(--judul)] text-sm font-bold mb-1">Upload Full Report (PDF/DOCX - Optional)</label>
                    <input type="file" name="report_file" id="report_file" class="w-full px-3 py-2 border border-gray-300 rounded-md file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[var(--button-light)] file:text-[var(--button)] hover:file:bg-[var(--hover-button-light)]">
                    <small class="text-gray-500">This is a placeholder. File uploads are not yet functional.</small>
                </div>

            </div>

            <div class="flex justify-end gap-3 mt-4">
                <a href="{{ route('admin.survey.index') }}" class="bg-gray-300 text-gray-700 font-semibold py-2 px-6 rounded-xl hover:bg-gray-400 transition">
                    Cancel
                </a>
                <button type="submit" class="bg-[var(--button)] text-white font-semibold py-2 px-6 rounded-xl hover:bg-[#65A6C6] transition opacity-50 cursor-not-allowed" disabled title="Functionality not implemented yet">
                    {{ isset($isEdit) && $isEdit ? 'Update Survey Result' : 'Save Survey Result' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
