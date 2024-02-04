<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin-panel', compact('users'));
    }

    public function delete($id){
        User::destroy($id);
        return redirect('admin-panel');

    }

    public function edit($id){
        $team = User::findOrFail($id);
        return view('edit-team', compact('team'));
    }

    public function update($id, Request $request){
        $team = User::findOrFail($id);

        $team->update([
            'leader-full-name'=> $request->{'leader-full-name'},
            'email'=> $request->email,
            'whatsapp-number'=> $request->{'whatsapp-number'},
            'line-id'=> $request->{'line-id'},
            'github'=> $request->github,
            'birth-place'=> $request->{'birth-place'},
            'dob'=> $request->dob
        ]);

        return redirect('admin-panel');
    }

}
