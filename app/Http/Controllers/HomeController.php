<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Support\Carbon;


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
        // $fecha = $request->input("fecha");

        //Fechas
        $entrada = Carbon::now();
        $salida = Carbon::now();
        
        // Calculo de las horas totales
        // $sEntrada = strtotime($entrada);
        // $sSalida= strtotime($salida);
        // $segundos= $sEntrada-$sSalida;
        // $minutos= $segundos/60;
        // $tiempo=$minutos/60;

        $picaje = new Picaje;
        $picaje->user_id = Auth::id();
        $picaje->name = $name;
        $picaje->fecha = now();
        $picaje->entrada = $entrada;
        $picaje->salida = $salida;

        $picaje->tiempo = $salida;

        $picaje->save();
         return redirect()->route('fichajes', $picaje);
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
        $picaje=Picaje::all();

        $usuarios = User::paginate();
        return view('fichajes', compact('picaje'));
    }


    public function update(Request $request ,Picaje $picaje) {
        $salida = Carbon::now();
        $entrada = $picaje->Entrada;
        
        $request->name = $picaje->name;
        $request->Fecha = $picaje->Fecha;
        $request->entrada = $picaje->Entrada;
        $picaje->Salida = $salida;

        //  Calculo de las horas totales
        //  $sEntrada = strtotime($entrada);
        //  $sSalida= strtotime($salida);
        //  $segundos= $sSalida-$sEntrada;
        //  $minutos= $segundos/60/60;
        //  $tiempo = number_format((float)$minutos, 2, ':', '');

        //convertimos la fecha 1 a objeto Carbon
        $carbon1 = new \Carbon\Carbon("$entrada");
        //convertimos la fecha 2 a objeto Carbon
        $carbon2 = new \Carbon\Carbon("$salida");
        //de esta manera sacamos la diferencia en minutos
        $minutos=$carbon1->diffInMinutes($carbon2);
        $segundos=$carbon1->diffInSeconds($carbon2);
        $horas=$carbon1->diffInHours($carbon2);

        $picaje->Tiempo =$horas . 0 . 0 . 0 . 0;

        $picaje->save();
        return redirect()->route('fichajes', $picaje);
        // return $picaje;

    }

    public function edit(Picaje $picaje) {

        return view('edit', compact('picaje'));
    }

}
