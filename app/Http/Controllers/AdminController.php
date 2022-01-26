<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        $admins = User::where('is_admin', '=', 1)->get();
        return view('admin.list')->with('admins', $admins);

    }
    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        // return User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        //     'is_admin' => "1",
        //     'role' => $request['role']
        // ]);
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_admin' => $request['is_admin'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ]);

       return redirect()->route('admin.admin')->with('success','created Successfully');
    }


}
