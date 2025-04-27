<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClientData;
use App\Models\CRM;

class DataClientController extends Controller
{
    public function index()
    {
        $clients = ClientData::with('user')->get();
        return view('admin.crm.data-client.index', compact('clients'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        
        $clients = ClientData::with('user')
            ->where('nama', 'like', "%{$search}%")
            ->orWhere('telepon', 'like', "%{$search}%")
            ->paginate(10);

        return view('admin.crm.data-client.index', compact('clients'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.crm.data-client.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'alamat_perusahaan' => 'required|string',
            'status_project' => 'required|in:current,past,potential',
            'id_user' => 'required|exists:user,id_user',
        ]);

        ClientData::create($validated);

        return redirect()
            ->route('admin.crm.data-client')
            ->with('success', 'Client added successfully');
    }

    public function edit($id)
    {
        $client = ClientData::where('id_client_data', $id)->firstOrFail();
        $users = User::all();
        return view('admin.crm.data-client.edit', compact('client', 'users'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'alamat_perusahaan' => 'required|string',
            'status_project' => 'required|in:current,past,potential',
            'id_user' => 'required|exists:user,id_user',
        ]);

        $client = ClientData::where('id_client_data', $id)->firstOrFail();
        $client->update($validated);

        return redirect()
            ->route('admin.crm.data-client')
            ->with('success', 'Client updated successfully');
    }

    public function destroy($id)
    {
        $client = ClientData::where('id_client_data', $id)->firstOrFail();
        $client->delete();
        return redirect()->route('admin.crm.data-client')->with('success', 'Client deleted successfully');
    }

    public function permohonan()
    {
        $permohonan = CRM::all();
        return view('admin.crm.permohonan.index', compact('permohonan'));
    }
}