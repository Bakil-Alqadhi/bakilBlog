<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function index()
    {
        return view('back.pages.home');
    }
    public function destroy()
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }
}