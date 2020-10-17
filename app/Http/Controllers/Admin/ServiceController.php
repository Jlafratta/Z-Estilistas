<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Service::all();
        return view('admin.product.list')
            ->with(['title' => PRODUCTS_TITLE,
                    'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create')
            ->with(['title' => NEW_PRODUCT_TITLE]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desc = $request->description ? $request->description : '';
        Service::create([
            'name' => $request->name,
            'stock' => $request->stock, 
            'price' => $request->price, 
            'description' => $desc
        ]);

        return redirect()->route('admin.stock.index');
    }

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
       
        $product = Service::where('id', $id)->first();
        //dd($product);
        return view('admin.product.edit')
            ->with(['title' => NEW_PRODUCT_TITLE,
                    'product' => $product]);
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
        $request->validate([
            'name'=>'required',
            'stock'=> 'required',
            'price' => 'required'
        ]);
        
        $product = Service::where('id', $id)->first();
        $desc = $request->description ? $request->description : '';

        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $desc;

        $product->update();

        return redirect('dashboard/stock');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Service::where('id', $id)->first();
        $product->delete();
        return redirect('dashboard/stock');
    }
}
