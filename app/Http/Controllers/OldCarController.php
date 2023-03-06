<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OldCarController extends Controller
{
    public function old() {
        return view('admin.AddOldCar');
    }

    public function store(Request $request) 
    {
        // $validated = $request->validate([
        //     'brand_name' => 'required|unique:brand|max:255',
        //     'body' => 'required',
        // ]);
        $data = array();
        $data['man_name'] = $request->n_c_man;
        $data['model'] = $request->n_c_model;
        $data['year'] = $request->n_c_year;
        $data['category'] = $request->n_c_class;
        $data['car_model_arabic'] = $request->modelA;
        // $data['user_id'] = Auth::user()->id;
        DB::table('info_car')->insert($data);
        return Redirect()->back()->with('success','add successfull');
    }



    public function Edit($id){
        $oldcars =DB::table('car_info')->where('id',$id);
        return view ('admin.Cpage.editold',compact('oldcars'));
    }

    public function Update(Request $request , $id){
        $data=array();
        $data['man_name'] = $request->n_c_man;
        $data['model'] = $request->n_c_model;
        $data['year'] = $request->n_c_year;
        $data['category'] = $request->n_c_class;
        $data['car_model_arabic'] = $request->modelA;
        DB::table('car_info')->where('id',$id)->update($data);
        return Redirect()->route('admin.AddOldCar')->with('success','add successfull');

    }
}
