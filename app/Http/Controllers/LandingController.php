<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function faq()
    {
        return view('faq');
    }


    public function download()
    {
        $filePath = public_path('Hackathon Guidelines.pdf');
        $fileName = 'Guidebook.pdf';

        return response()->download($filePath, $fileName);
    }
}
