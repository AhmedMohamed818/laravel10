<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewCarController extends Controller
{
    public function new () {
        return view('admin.AddNewCar');
    }
    public function store(Request $request) 
    {
        $validated = $request->validate([
            'brand_name' => 'required|unique:brand|max:255',
            //'body' => 'required',
        ]);
        $data = array();
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        $data['brand_name'] = $request->brand_name;
        DB::table('brand')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }
}
