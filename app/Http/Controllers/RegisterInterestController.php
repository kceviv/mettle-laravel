<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\RegisterInterest as RegisterResource;
use App\Models\RegisterInterest;

class RegisterInterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RegisterResource::collection(RegisterInterest::all());
    }

    public function show()
    {
        $register = RegisterInterest::all();
        return view('admin.register-interest')->with('register',$register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register = new RegisterInterest([
            'name' => $request->name,
            'email' => $request->email,
            'recieve_callback' => $request->recieve_callback,
            'mobile' => $request->mobile
        ]);
        $register->save();
        return response()->json([
            'data' => 'saved!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
