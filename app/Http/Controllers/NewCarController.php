<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class NewCarController extends Controller
{
    public function new () {
        $newcars =DB::table('car_info_new')->latest()->pasginate(10) ->get();
        return view ('admin.Cpage.editnew',compact('newcars'));
        
    }
    public function store(Request $request) 
    {
        $validated = $request->validate([
            
            'm_c_image' => 'required|car_image|max:255',
            'm_c_image1' => 'required|mimes:jpg.jpeg,png   man_photo|max:255',
            'n_c_man' => 'required',
            'n_c_model' => 'required',
            'n_c_year' => 'required',
            'n_c_class' => 'required',
            'modelA' => 'required',
            'n_c_w_y' => 'required',
            'n_c_w_km' => 'required',
            'n_c_cc' => 'required',
            'n_c_hp' => 'required',
            'n_c_transmission_type' => 'required',
            'price' => 'required',
        ],
        [
                'm_c_image.min'=>'photo longer than 3 characters',
                'm_c_image1.min'=>'photo longer than 3 characters',
                'n_c_man.required'=>'please enter',
                'n_c_model.required'=>'please enter',
                'n_c_year.required'=>'please enter',
                'n_c_class.required'=>'please enter',
                'modelA.required'=>'please enter',
                'n_c_w_y.required'=>'please enter',
                'n_c_w_km.required'=>'please enter',
                'n_c_cc.required'=>'please enter',
                'n_c_hp.required'=>'please enter',
                'n_c_transmission_type.required'=>'please enter',
                'price.required'=>'please enter',
        ]);

        $brand_image=$request->file('m_c_image');
        $brand_image1=$request->file('m_c_image1');

        $name_gen = hexdec(uniqid());
        $img_ext=strtolower($brand_image->getClientOriginalExtension());
        $img_name=$name_gen.'.'.$img_ext;
        $up__location='images/carnew/';
        $last_img= $up__location.$img_name;
        $brand_image->move($up__location.$img_name);

        $name_gen1 = hexdec(uniqid());
        $img_ext1=strtolower($brand_image1->getClientOriginalExtension());
        $img_name1=$name_gen1.'.'.$img_ext1;
        $up__location1='images/carnew/';
        $last_img1= $up__location1.$img_name1;
        $brand_image1->move($up__location1.$img_name1);




        $data = array();
        $data['car_image'] = $last_img;
        $data['man_photo'] = $last_img1;
        $data['car_man'] = $request->n_c_man;
        $data['car_model'] = $request->n_c_model;
        $data['car_year'] = $request->n_c_year;
        $data['car_cat'] = $request->n_c_class;
        $data['car_model_arabic'] = $request->modelA;
        $data['car_class'] = $request->n_c_class;
        $data['warranty'] = $request->n_c_w_y;
        $data['warranty'] = $request->n_c_w_km;
        $data['cc'] = $request->n_c_cc;
        $data['hp'] = $request->n_c_hp;
        $data['transmissiontype'] = $request->n_c_transmission_type;
        $data['price'] = $request->price;
        DB::table('car_info_new')->insert($data);
        return Redirect()->back()->with('success','add successfull'); 
    }


//     public function Edit($id){
//         $newcars =DB::table('inf_info_new')->where('id',$id);
//         return view ('admin.Cpage.editnew',compact('newcars'));
//     }

//     public function Update(Request $request , $id){
//         $data=array();
//         $data['car_image'] = $request->m_c_image;
//         $data['man_photo'] = $request->m_c_image1;
//         $data['car_man'] = $request->n_c_man;
//         $data['car_model'] = $request->n_c_model;
//         $data['car_year'] = $request->n_c_year;
//         $data['car_cat'] = $request->n_c_class;
//         $data['car_model_arabic'] = $request->modelA;
//         $data['car_class'] = $request->n_c_class;
//         $data['warranty'] = $request->n_c_w_y;
//         $data['warranty'] = $request->n_c_w_km;
//         $data['cc'] = $request->n_c_cc;
//         $data['hp'] = $request->n_c_hp;
//         $data['transmissiontype'] = $request->n_c_transmission_type;
//         $data['price'] = $request->price;
//         DB::table('inf_info_new')->where('id',$id)->update($data);
//         return Redirect()->route('admin.AddNewCar')->with('success','add successfull');

//     }
}


