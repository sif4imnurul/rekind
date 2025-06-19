@extends('layouts.dashboard')

@section('title', 'Hasil Survey Brand')

@section('content')
<div class="w-full overflow-x-hidden">
    <div class="w-full h-full relative bg-white flex flex-col py-4 px-4 gap-3 rounded-md">
        @if(session('info'))
            <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mb-4">
                {{ session('info') }}
            </div>
        @endif
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-[var(--judul)]">Hasil Survey Brand</h2>
            <a href="{{ route('admin.survey.create') }}" class="bg-[var(--button)] text-white font-semibold py-2 px-4 rounded-xl hover:bg-[#65A6C6] transition">
                Masukkan Hasil Survey Baru (Not Implemented)
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Nama Survey</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Tanggal Dilaksanakan</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Responden</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @if(isset($dummySurveys) && count($dummySurveys) > 0)
                        @foreach ($dummySurveys as $survey)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $survey->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $survey->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $survey->date }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $survey->respondents }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        @if($survey->status === 'Completed') bg-green-100 text-green-800 
                                        @elseif($survey->status === 'In Progress') bg-yellow-100 text-yellow-800
                                        @else bg-gray-100 text-gray-800 @endif">
                                        {{ $survey->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('admin.survey.show', $survey->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">View (NI)</a>
                                    <a href="{{ route('admin.survey.edit', $survey->id) }}" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit (NI)</a>
                                    <form action="{{ route('admin.survey.destroy', $survey->id) }}" method="POST" class="inline-block" onsubmit="alert('Delete functionality not implemented yet.'); return false;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete (NI)</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">No dummy survey data available.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{-- Pagination would go here if we had actual data --}}
    </div>
</div>
@endsection
