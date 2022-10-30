<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Frontend.Admin.dashboard');
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
        $che = $request->validate([
            "fullName" => "required|string",
            "email" => "required|email",
            "contact-no" => "required|numeric",
            "gender" => "required",
            "avatar" => "required|string",
            "service" => "required",
            "card-number" => "required",
            "dateTime" => "required",
            "password" => "required|string",
            "location" => "required|string",
        ]);

        // $user = $request->user();

        $file = $request->file('avatar');

        $avatar_name = $file->hashName();

        $file->move(storage_path('app/public/profile_img'), $avatar_name);

        $user = $request->user()->create([
            "name" => $request['fullName'],
            "password" => $request['password'],
            "email" => $request['email'],
            "contact-no" => $request['contact-no'],
            "gender" => $request['gender'],
            "role" => "customer",
            "avatar" => $avatar_name,
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
