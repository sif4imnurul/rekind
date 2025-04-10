<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientData;
use App\Models\CRM;
use Illuminate\Support\Facades\Auth;

class CRMController extends Controller
{
    public function index()
    {
        $client_data = ClientData::with('user')->get();
        return view('pages.crm.data-client.index', compact('client_data'));
    }

    public function permohonan()
    {
        $crm = CRM::all();
        return view('pages.crm.permohonan.index', compact('crm'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npk' => 'required|string|max:255',
            'unit' => 'nullable|string|max:255',
            'divisi' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:255',
            'alasan' => 'nullable|string|max:255',
        ]);

        $validatedData['id_user'] = Auth::id();

        // Insert the data into the crm table
        CRM::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('crm.permohonan')->with('success', 'Permohonan akses CRM berhasil diajukan.');
    }
}
