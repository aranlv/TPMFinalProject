<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        $dob = $request->input('yy') . '-' . $request->input('mm') . '-' . $request->input('dd');
        $request['dob'] = $dob;

        $validated = $request->validate([
            'group-name' => 'required',
            'email'=>'required|email',
            'password'=>'required',

            'leader-full-name' => 'required',
            'whatsapp-number' => 'required',
            'line-id' => 'required',
            'github' => 'required',
            'is_binusian' => 'required',
            // 'birth-place' => 'required',
            
            'cv' => 'required|mimes:pdf,jpg,jpeg,png',
            'flazz' => $request->input('is_binusian') ? 'required|mimes:pdf,jpg,jpeg,png' : '',
            'id-card' => $request->input('is_binusian') ? '' : 'required|mimes:pdf,jpg,jpeg,png',
            'dob' => 'required|date_format:Y-m-d' 
        ]);

        if($request->file('cv')){
            $validated['cv'] = $request->file('cv')->store('post-cv');
        }
        if($request->file('id-card')){
            $validated['id-card'] = $request->file('id-card')->store('post-id-card');
        }
        if($request->file('flazz')){
            $validated['flazz'] = $request->file('flazz')->store('post-flazz');
        }
        
        User::create($validated);
        return redirect('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
