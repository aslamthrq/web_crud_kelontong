<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $users = User::where('role', 'customer')->get();
        return view('admin.customer', compact('users'));
    }

    public function approveUser($id)
    {
        $user = User::findOrFail($id);
        $user->approved = true;
        $user->save();

        return redirect()->route('admin.customer.index')->with('success', 'User approved successfully.');
    }
}
