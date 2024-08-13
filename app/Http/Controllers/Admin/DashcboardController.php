<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashcboardController extends Controller
{

    public function index()
    {

        $totalProducts = Product::count();
        $totalUsers = User::count();
        $activeProducts = Product::where('status', 'Aktif')->count();
        $activeUsers = User::where('approved', true)->count();
        $recentProducts = Product::latest()->take(10)->get();


        return view('admin.dashboardAdmin', compact('totalProducts', 'totalUsers', 'activeProducts', 'activeUsers', 'recentProducts'));
    }

}
