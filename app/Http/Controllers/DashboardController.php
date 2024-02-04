<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class DashboardController extends Controller
{
    public function download($attribute)
    {
        // Get the currently authenticated user
        $user = auth()->user();

        // Check if the user is authenticated and if the specified attribute exists
        if ($user && $user->{$attribute}) {
            $filePath = $user->{$attribute};

            // Check if the file exists in storage
            if (Storage::exists($filePath)) {
                // Return the file download response
                return Storage::download($filePath);
            }
        }

        // If the file does not exist or the user is not authenticated, return an error response
        return response()->json(['error' => 'File not found or user not authenticated.'], 404);
    }
}
