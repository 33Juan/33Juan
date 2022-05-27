<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\fichaje;
use App\Models\picaje;


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
        $user = Auth::user();
        $user_id = Auth::id();
        $data = array("lista_usu" => $user_id);
        return view('checking', $data);
    }

    public function store(Request $request)
    {

        $user_id = $request->input("user_id");
        $name = $request->input("name");

        $picaje = new Picaje;
        $picaje->user_id = Auth::id();
        $picaje->name = $name;

        $picaje->save();
         return redirect()->route('fichajes');
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

        // $fichaje = fichaje::paginate();
        $usuarios = User::paginate();
        return view('fichajes', compact('usuarios'));
    }
}
