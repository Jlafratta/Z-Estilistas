<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $services = Product::orderBy('type_id', 'ASC')->get();
        return view('admin.service.list')
            ->with(['title' => SERVICES_TITLE,
                    'services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productTypes = ProductType::all();
        return view('admin.service.create')
            ->with(['title' => NEW_SERVICE_TITLE,
                    'productTypes' => $productTypes]);
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
        Product::create([
            'name' => $request->name,
            'time' => $request->duration, 
            'price' => $request->price, 
            'description' => $desc, 
            'type_id' => $request->type
        ]);

        return redirect()->route('admin.services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $service)
    {
        $productTypes = ProductType::all();
        return view('admin.service.edit')
            ->with(['title' => NEW_SERVICE_TITLE,
                    'service' => $service,
                    'productTypes' => $productTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $service)
    {
    
        $request->validate([
            'name'=>'required',
            'duration'=> 'required',
            'price' => 'required',
            'type' => 'required'
        ]);

        $desc = $request->description ? $request->description : '';

        $service->name = $request->name;
        $service->time = $request->duration;
        $service->price = $request->price;
        $service->description = $desc;
        $service->type_id = $request->type;

        $service->update();

        return redirect('dashboard/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $service)
    {
        //$client->tickets()->detach(); //desasocio la fk
        $service->delete();
        return redirect('dashboard/services');
    }
}
