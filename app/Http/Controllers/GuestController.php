<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()     { return view('guest.home'); }
    public function login()    { return view('guest.login'); }
    public function register() { return view('guest.register'); }
}
