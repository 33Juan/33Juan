<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\fichaje;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function checking()
    {
        return view('checking');
<<<<<<< HEAD
    }

    public function store(Request $request)
    {
        $fichaje = new Fichaje();

        $fichaje->name=$request->name;

         $fichaje->save();

         return redirect()->route('fichajes', $fichaje);
=======
>>>>>>> a8bb7d62ba8a50e8fb412879e9af2f2264a0df60
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function fichajes()
    {

        $fichaje = fichaje::paginate();
        return view('fichajes', compact('fichaje'));
    }
}
