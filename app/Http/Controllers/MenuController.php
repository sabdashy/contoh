<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();

        $types = Type::all();
        $users = User::all();
        return view('admin.menu.index', [
            'menus' => $menus,
            'types' => $types,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $users = User::all();
        return view('admin.menu.create', [
            'types' => $types,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required|:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
            'type_id' => 'required',
        ]);


        // $menu = Menu::create($request->all());
        // if ($request->hasFile('image')) {
        //     $request->file('image')->move('images/' . $request->file('image')->getClientOriginalName());
        //     $menu->image = $request->file('image')->getClientOriginalName();
        //     $menu->save();
        // }


        // Menu::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'price' => $request->price,
        //     // 'image' => $request->image,
        //     'type_id' => $request->type_id,
        // ]);

        // $menus = Menu::all();
        // if ($request->hasFile('image')) {
        //     $menus['image'] = $request->file('image')->store('images');
        // }

        $menu = Menu::create($request->all());
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('images', $image, $filename);
            $menu->image = $filename;
            $menu->save();
        }

        return redirect('/admin/menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // cari pasien berdasarkan id
        $menu = Menu::find($id);

        $types = Type::all();
        return view('admin.menu.edit', [
            'menu' => $menu,
            'types' => $types
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
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image',
            'type_id' => 'required',
        ]);

        // cari pasien berdasarkan id
        $menu = Menu::find($id);

        // $menu = Menu::update($request->all());

        // }
        // simpan perubahan
        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image,
            'type_id' => $request->type_id,

        ]);
        if ($request->hasFile('image')) {
            // if (Storage::exists($menu->image)) {
            //     Storage::delete($menu->image);
            // }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('images', $image, $filename);
            $menu->image = $filename;
            $menu->save();
        }

        return redirect('/admin/menu')->with('success', 'Data Menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Menu::destroy($request->id);

        return redirect('/admin/menu')->with('success', 'Data Menu berhasil dihapus');
    }
}
