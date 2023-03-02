<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function rep() {
        $users =DB::table('users')->get();
        return view('admin.reports',compact('user'));
    }
}
