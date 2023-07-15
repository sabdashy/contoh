<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required|:3',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
        ]);

        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // cari pasien berdasarkan id
        $user = User::find($id);

        return view('admin.users.edit', [
            'user' => $user,
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required|',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required|:3',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required|',
        ]);

        // cari pasien berdasarkan id
        $type = User::find($id);

        // simpan perubahan
        $type->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'address' => $request->address,
        ]);

        return redirect('/admin/users')->with('success', 'Data Jenis Menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        User::destroy($request->id);

        return redirect('/admin/users')->with('success', 'Data Jenis Menu berhasil dihapus');
    }
}
