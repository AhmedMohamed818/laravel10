<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function ads() {
        $users =DB::table('users')->get();
        return view('admin.ads',compact('users'));
    }
}
