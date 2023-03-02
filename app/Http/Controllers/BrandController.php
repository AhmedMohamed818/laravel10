<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrandController extends Controller
{
    public function ab() {
        
        return view('admin.AddBrandPhoto');
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'brand_name' => 'required|unique:brand|max:255',
            //'body' => 'required',
        ]);
        $data = array();
        $data['brand_name'] = $request->brand_name;
        // $data['user_id'] = Auth::user()->id;
        DB::table('brand')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }
}