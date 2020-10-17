<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index')
            ->with(['title' => 'Inicio']);
    }

    public function about()
    {
        return view('site.about-us')
            ->with(['title' => 'Quienes somos']);
    }

    public function gallery()
    {
        return view('site.gallery')
            ->with(['title' => 'Galeria']);
    }

    public function contact()
    {
        return view('site.contact')
            ->with(['title' => 'Contacto']);
    }

    public function services()
    {
        return view('site.services')
            ->with(['title' => 'Servicios']);
    }
}
