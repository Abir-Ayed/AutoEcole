<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('/home');
    }
   public function statistique(){
    $candidat=DB::table('candidats')->count();
    $moniteur=DB::table('moniteurs')->count();
    $formateur=DB::table('formateurs')->count();
    $seance=DB::table('seances')->count();
    $vehicule=DB::table('vehicules')->count();
    $alerte=DB::table('alertes')->count();

    $som=($candidat*30)/100;
    $somMoniteur=($moniteur*30)/100;
    $somFormteur=($formateur*30)/100;
    $somSeance=($seance*30)/100;
    return view('/home',compact('candidat','som','somMoniteur','somFormteur','somSeance','seance','moniteur','formateur','vehicule','alerte'));
   }
}
