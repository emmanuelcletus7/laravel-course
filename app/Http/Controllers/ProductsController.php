<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Layout = Products::all();
        return view('Layout.index', ['Layout'=>$Layout]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Layout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
        ]);

      $Layout = Products::create($request->all());
      return redirect()->route('Layout.index')->with
      ('message', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $Layout = Products::findOrFail($id);
       return view('Layout.show', ['Layout' =>$Layout]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Layout = Products::findOrFail($id);
       return view('Layout.edit', ['Layout' =>$Layout]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required',
        ]);

        $Layout = Products::findOrFail($id);
        // $Layout = Products::create($request->all());
        $Layout->name = $request->name;
        $Layout->desc = $request->desc;
        $Layout->price = $request->price;
        $Layout->save();
      return redirect()->route('Layout.index')->with
      ('message', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       $Layout = Products::findOrFail($id);
       $Layout->delete();

       return redirect()->route('Layout.index')->with
      ('message', 'Product Deleted successfully');
    }
}
