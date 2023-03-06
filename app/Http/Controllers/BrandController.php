<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BrandController extends Controller
{
    public function ab() {
        $brands =DB::table('car_info_new')->get();
        return view('admin.AddBrandPhoto',compact('brands'));
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'brand_name' => 'required',
            'm_c_image' => 'required',
        ]);
        
        $brand_image=$request->file('m_c_image');
        

        $name_gen = hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location.$img_name);



        $data = array();
        $data['name'] = $request->brand_name;
        $data['m_c_image']=$last_img;
        DB::table('brand_photo')->insert($data);
     
        return Redirect()->back()->with('success','add successfull');
    }
}