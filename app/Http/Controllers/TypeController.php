<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', [
            'types' => $types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required|:3',
        ]);

        Type::create([
            'name' => $request->name,
        ]);

        return redirect('/admin/type');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // cari pasien berdasarkan id
        $type = Type::find($id);

        return view('admin.type.edit', [
            'type' => $type,
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
        ]);

        // cari pasien berdasarkan id
        $type = Type::find($id);

        // simpan perubahan
        $type->update([
            'name' => $request->name,
        ]);

        return redirect('/admin/type')->with('success', 'Data Jenis Menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Type::destroy($request->id);

        return redirect('/admin/type')->with('success', 'Data Jenis Menu berhasil dihapus');
    }
}
