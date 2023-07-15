<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaction;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan semua data pasien
    public function index()
    {
        return view('dashboard.index');
    }

    // Menampilkan semua data pasien
    public function indexAbout()
    {
        return view('dashboard.about');
    }

    public function indexContact()
    {
        return view('dashboard.contact');
    }

    public function indexAdmin()
    {
        return view('admin.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function indexMenu()
    {
        // Menampilkan semua data pasien
        $menus = Menu::all();
        return view('dashboard.menu', [
            'menus' => $menus
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function indexDetails($id)
    {
        // cari pasien berdasarkan id
        $menus = Menu::find($id);

        // Menampilkan semua data pasien
        return view('dashboard.details', [
            'menus' => $menus
        ]);
    }

    public function indexCheckout($id)
    {
        // cari pasien berdasarkan id
        $menus = Menu::find($id);
        // Menampilkan semua data pasien
        // $menus = Menu::all();
        $transactions = Transaction::all();
        return view('dashboard.checkout', [
            'menus' => $menus,
            'transaction' => $transactions
        ]);
    }


    public function indexConfirm($id)
    {
        // cari pasien berdasarkan id
        // $menus = Menu::find();
        // Menampilkan semua data pasien
        // $menus = Menu::all();
        // $users = User::all();
        $menus = Menu::find($id);
        $transactions = Transaction::all();
        $users = User::all();
        return view('dashboard.confirm', [
            'menus' => $menus,
            'transactions' => $transactions,
            'users' => $users
        ]);
    }

    public function storeConfirm(Request $request)
    {
        //validasi data
        $request->validate([
            'total_price' => 'required|:3',
            'transaction_time' => 'required',
            'user_id' => 'required',
            'menu_id' => 'required',
            'quantity' => 'required',
        ]);

        Transaction::create([
            'total_price' => $request->total_price,
            'transaction_time' => $request->transaction_time,
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'menu_id' => $request->menu_id,
        ]);
        return redirect('/confirm');
    }

    public function storeDetails(Request $request)
    {
        //validasi data
        $request->validate([
            'name' => 'required|:3',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('/details');
    }

    public function storeCheckout(Request $request)
    {
        //validasi data
        $request->validate([
            'total_price' => 'required|:3',
            'transaction_time' => 'required',
            'user_id' => 'required',
            'menu_id' => 'required',
            'quantity' => 'required',
        ]);

        Transaction::create([
            'total_price' => $request->total_price,
            'transaction_time' => $request->transaction_time,
            'quantity' => $request->quantity,
            'user_id' => $request->user_id,
            'menu_id' => $request->menu_id,
        ]);
        return redirect('/checkout');
    }
}
