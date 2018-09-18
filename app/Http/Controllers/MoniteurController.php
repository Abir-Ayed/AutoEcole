<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moniteur;

class MoniteurController extends Controller
{



    public function create(Request $request)
  {
//      die('tt');



      if($request->isMethod('POST')){
        
 $this->validate($request,[
     'nom'=>'required|max:20',
     
     'Date_Naissance'=>'required',
     'sexe'=>'required',
     'Num_tel'=>'required|numeric',


 ]);





          $newMoniteur=new Moniteur();
          $newMoniteur->nom=$request->input('nom');
          
          $newMoniteur->Date_Naissance=$request->input('Date_Naissance');
          $newMoniteur->sexe=$request->input('sexe');
          $newMoniteur->Num_tel=$request->input('Num_tel');


          $newMoniteur->save();

          return redirect('crudMoniteur');
      }// dd($request->all());
     // dd($request->all());
      return view('crudMoniteur.ajoutMoniteur');


  }
    public function index()

    {
        $moniteur=Moniteur::all();
        $arr=Array('moniteur'=>$moniteur);
        return view('crudMoniteur.showMoniteur',$arr);
    }


    public function impri($id){
        $newMoniteur=new Moniteur();
        $newMoniteur=Moniteur::find($id);

        return view('crudMoniteur.afficheMoniteur',['newMoniteur' => $newMoniteur]);


    }
    public function index2(){


        return view('crudMoniteur.afficheMoniteur');


    }


    function destroy($id)
    {
        $moniteur=Moniteur::find($id);
        $moniteur->delete();
        return redirect('crudMoniteur');
    }


    public function update(Request $request,$id)

  {
      if($request->isMethod('POST')){
          //die('tt');
          $newMoniteur=Moniteur::find($id);
          $newMoniteur->nom=$request->input('nom');
          
          $newMoniteur->Date_Naissance=$request->input('Date_Naissance');
          $newMoniteur->sexe=$request->input('sexe');
          $newMoniteur->Num_tel=$request->input('Num_tel');


          $newMoniteur->save();
         //return view('crudMoniteur.edit');
          return redirect('crudMoniteur');
      }
      // dd($request->all());
      else {

          $newMoniteur=Moniteur::find($id);

          return view('crudMoniteur.editMoniteur', ['newMoniteur' => $newMoniteur]);

      }

  }




}

?>