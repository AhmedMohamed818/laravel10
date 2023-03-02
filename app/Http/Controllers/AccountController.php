<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function acc() {
        $users =DB::table('users')->get();
        return view('admin.accounts',compact('users'));
    }
}
