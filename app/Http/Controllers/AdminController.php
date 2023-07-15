<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $route = [
            'Home' => '/admin',
            'Jenis Menu' => '/admin/type',
            'Menu' => '/admin/menu',
            'Pesanan' => '/admin/transaction',
            'NF Vegetarian' => '/'
        ];

        $icons = [
            'Home' => 'home',
            'Jenis Menu' => 'user',
            'Menu' => 'user',
            'Pesanan' => 'user',
            'NF Vegetarian' => 'shopping-bag'
        ];
        return view('partials.admin._sidebar', [
            'route' => $route,
            'icons' => $icons
        ]);
    }
}
