<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            "service" => "required",
            "card-number" => "required",
            "dateTime" => "required",
            "password" => "required|string",
            "location" => "required|string",
        ]);

        $file = $request->file('avatar');

        $avatar_name = $file->hashName();

        $file->move(storage_path('app/public/profile_img'), $avatar_name);

        $user = $request->user()->create([
            "name" => $request['fullName'],
            "password" => Hash::make($request['password']),
            "email" => $request['email'],
            "contact-no" => $request['contact-no'],
            "gender" => $request['gender'],
            "location" => $request['location'],
            "role" => "customer",
            "avatar" => $avatar_name,
        ]);

        $user->bought_services()->create([
            'user_id' => $user->id,
            'username' => $user->name,
            'services' => json_encode($request['service']),
        ]);

        $user->saloon_card()->create([
            'user_id' => $user->id,
            'card-holder-name' => $user->name,
            'card-number' => json_encode($request['card-number']),
            'card-expiry' => $request['dateTime'],
        ]);

        return redirect()->route('admin.dashboard')
        ->with('created', 'Customer has been created');
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
