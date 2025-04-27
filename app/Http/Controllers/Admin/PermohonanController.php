<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CRM;

class PermohonanController extends Controller
{
    public function index()
    {
        $permohonan = CRM::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.crm.permohonan.index', compact('permohonan'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $permohonan = CRM::where('nama', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->orWhere('nama_perusahaan', 'like', "%{$search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.crm.permohonan.index', compact('permohonan'));
    }

    public function show($id)
    {
        $permohonan = CRM::findOrFail($id);
        return view('admin.crm.permohonan.show', compact('permohonan'));
    }

    public function approve($id)
    {
        $permohonan = CRM::findOrFail($id);
        $permohonan->status = 'approved';
        $permohonan->save();

        return redirect()
            ->route('admin.crm.permohonan')
            ->with('success', 'Permohonan berhasil disetujui');
    }

    public function reject($id)
    {
        $permohonan = CRM::findOrFail($id);
        $permohonan->status = 'rejected';
        $permohonan->save();

        return redirect()
            ->route('admin.crm.permohonan')
            ->with('success', 'Permohonan berhasil ditolak');
    }
}