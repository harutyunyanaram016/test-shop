<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Transport;
use App\Http\Controllers\Controller;

class AdminTransportsController extends Controller
{
    public function index()

    {



        $transports = Transport::all();



        return view('admin.transports.index', [ 'transports'=> $transports]);

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

        $request->validate([

            'price' => 'required|numeric',
            'weight' => 'required|numeric',

        ]);



        Transport::create($request->all());



        $request->session()->flash('alert-success', 'Transport was successful added!');



        return redirect()->route('admin.transports.index');

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

        $category = Transport::findOrFail($id);



        return view('admin.transports.edit', ['category'=> $category]);

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

        Transport::findOrFail($id)->update($request->all());



        $request->session()->flash('alert-success', 'Transport was successful edited!');

        return redirect()->route('admin.categories.index');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id, Request $request)

    {

        Transport::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Transport was successful deleted!');

        return redirect()->route('admin.categories.index');

    }
}
