<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.references.agenda.index', compact('agendas'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $agendas = Agenda::where('nama_agenda', 'like', "%{$search}%")
            ->orWhere('divisi', 'like', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.references.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('admin.references.agenda.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_agenda' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'prioritas' => 'required|in:rendah,sedang,tinggi',
            'tanggal_mulai' => 'required|date',
            'tanggal_deadline' => 'required|date|after:tanggal_mulai',
            'catatan' => 'nullable|string'
        ]);

        $validated['id_user'] = Auth::id();
        $validated['status'] = 'pending';

        Agenda::create($validated);

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil ditambahkan!');
    }

    public function show($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.references.agenda.show', compact('agenda'));
    }

    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('admin.references.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_agenda' => 'required|string|max:255',
            'divisi' => 'required|string|max:255',
            'prioritas' => 'required|in:rendah,sedang,tinggi',
            'tanggal_mulai' => 'required|date',
            'tanggal_deadline' => 'required|date|after:tanggal_mulai',
            'catatan' => 'nullable|string'
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->update($validated);

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil diperbarui!');
    }

    public function delete($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()
            ->route('admin.agenda.index')
            ->with('success', 'Agenda berhasil dihapus!');
    }
}