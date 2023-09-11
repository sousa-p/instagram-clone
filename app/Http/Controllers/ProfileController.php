<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $user = $request->input('user');
        return view('profile.home', [
            'user' => $user
        ]);
    }
}
