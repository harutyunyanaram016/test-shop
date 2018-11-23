<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLocationController extends Controller
{
    public function index(){
        $countries = Country::orderBy('active','desc')->get();
        return view('admin.location.index', ['countries' => $countries]);
    }
    public function cities($id){
        $country = Country::where('id',$id)->first();

        $cities = City::where('country_code',$country->code)->get();
        return view('admin.location.cities', ['cities' => $cities]);
    }
    public function edit(Request $request, $id){
        $country = Country::find($id);
        if($request->isMethod('post')){
            dd($request->all());
        }
        return view('admin.location.edit', ['country' => $country]);

    }

}
