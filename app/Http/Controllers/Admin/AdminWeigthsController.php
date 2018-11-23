<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Weight;
use App\Product;
use App\Http\Controllers\Controller;

class AdminWeigthsController extends Controller
{
    public function index()

    {



        $weights = Weight::all();
        $products = Product::all();
//        foreach ($weights as $weight){
//
//            var_dump($weight->product->brand);die;
//        }


        return view('admin.weights.index', [ 'weights'=> $weights,'products'=>$products]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
//        dd($request->all());
        $request->validate([

            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'product_id' => 'required',

        ]);



        Weight::create($request->all());



        $request->session()->flash('alert-success', 'Weight was successful added!');



        return redirect()->route('admin.weights.index');

    }





//    public function storeSubcategory(Request $request)

//    {

//        Subcategory::create($request->all());

//        return redirect()->route('admin.categories.index');

//    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $weight = Weight::findOrFail($id);
        $products = Product::all();


        return view('admin.weights.edit', ['weight'=> $weight,'products'=>$products]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        Weight::findOrFail($id)->update($request->all());



        $request->session()->flash('alert-success', 'Weight was successful edited!');

        return redirect()->route('admin.weights.index');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id, Request $request)

    {

        Weight::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Transport was successful deleted!');

        return redirect()->route('admin.weights.index');

    }
}
