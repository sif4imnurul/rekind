<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserModel; // Changed from User to UserModel
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = UserModel::query(); // Changed from User to UserModel

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('nama', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('unit', 'like', "%{$searchTerm}%")
                  ->orWhere('npk', 'like', "%{$searchTerm}%");
            });
        }

        $users = $query->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('user', 'email')], // Table 'user' from UserModel
            'npk' => ['required', 'string', 'max:255', Rule::unique('user', 'npk')], // NPK is required and unique, table 'user'
            'unit' => ['nullable', 'string', 'max:255'],
            'divisi' => ['nullable', 'string', 'max:255'],
            'telepon' => ['nullable', 'string', 'max:20'],
            'tanggal_lahir' => ['nullable', 'date'],
            'alamat' => ['nullable', 'string'],
            'role' => ['required', Rule::in(['userb', 'userk', 'admin'])],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $userData = $request->only(['nama', 'email', 'npk', 'unit', 'divisi', 'telepon', 'tanggal_lahir', 'alamat', 'role']);
        //dd($request);
        $userData['password'] = Hash::make($request->npk); // Password is Hash of NPK

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profile', 'public');
            $userData['image_url'] = $path;
        }

        //dd($userData);
        UserModel::create($userData); // Changed from User to UserModel

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function show(UserModel $user) // Changed from User to UserModel
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(UserModel $user) // Changed from User to UserModel
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, UserModel $user) // Changed from User to UserModel
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('user', 'email')->ignore($user->id_user, 'id_user')], // Table 'user', pk 'id_user' from UserModel
            'npk' => ['required', 'string', 'max:255', Rule::unique('user', 'npk')->ignore($user->id_user, 'id_user')], // NPK is required and unique
            'unit' => ['nullable', 'string', 'max:255'],
            'divisi' => ['nullable', 'string', 'max:255'],
            'telepon' => ['nullable', 'string', 'max:20'],
            'tanggal_lahir' => ['nullable', 'date'],
            'alamat' => ['nullable', 'string'],
            'role' => ['required', Rule::in(['userb', 'userk', 'admin'])],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $userData = $request->only(['nama', 'email', 'npk', 'unit', 'divisi', 'telepon', 'tanggal_lahir', 'alamat', 'role']);

        // If NPK is being updated or was empty and is now filled, update the password
        if ($request->filled('npk')) {
            if ($user->npk !== $request->npk || !$user->password) {
                $userData['password'] = Hash::make($request->npk);
            }
        }

        if ($request->hasFile('image')) {
            if ($user->image_url && Storage::disk('public')->exists($user->image_url)) {
                Storage::disk('public')->delete($user->image_url);
            }
            $path = $request->file('image')->store('profile', 'public');
            $userData['image_url'] = $path;
        }

        $user->update($userData);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(UserModel $user) // Changed from User to UserModel
    {
        if ($user->image_url && Storage::disk('public')->exists($user->image_url)) {
            Storage::disk('public')->delete($user->image_url);
        }
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
