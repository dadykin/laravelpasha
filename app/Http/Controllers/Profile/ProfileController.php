<?php

namespace App\Http\Controllers\Profile;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }
}
