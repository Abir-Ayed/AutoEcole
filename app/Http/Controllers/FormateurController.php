<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formateur;
class FormateurController extends Controller
{

    public function create(Request $request)
  {
//      die('tt');



      if($request->isMethod('POST')){
 $this->validate($request,[
     'nom'=>'required|max:10',
     'prenom'=>'required|max:10',
     'date_naissance'=>'required',
     'sexe'=>'required',
     'Num_tel'=>'required|numeric',


 ]);





          $newFormateur=new Formateur();
          $newFormateur->nom=$request->input('nom');
          $newFormateur->prenom=$request->input('prenom');
          $newFormateur->date_naissance=$request->input('date_naissance');
          $newFormateur->sexe=$request->input('sexe');
          $newFormateur->Num_tel=$request->input('Num_tel');


          $newFormateur->save();

          return redirect('crudFormateur');
      }// dd($request->all());
     // dd($request->all());
      return view('crudFormateur.ajoutFormateur');


  }
    public function index()

    {
        $formateur=Formateur::all();
        $arr=Array('formateur'=>$formateur);
        return view('crudformateur.showFormateur',$arr);
    }
  public function update(Request $request,$id)

  {
      if($request->isMethod('POST')){
          //die('tt');
          $newFormateur=new Formateur();
          $newFormateur->nom=$request->input('nom');
          $newFormateur->prenom=$request->input('prenom');
          $newFormateur->date_naissance=$request->input('date_naissance');
          $newFormateur->sexe=$request->input('sexe');
          $newFormateur->Num_tel=$request->input('Num_tel');


          $newFormateur->save();
         //return view('crudMoniteur.edit');
          return redirect('crudFormateur');
      }
      // dd($request->all());
      else {

          $newFormateur=Formateur::find($id);

          return view('crudFormateur.editFormateur', ['newFormateur' => $newFormateur]);

      }

  }
   function destroy($id)
    {
        $formateur=Formateur::find($id);
        $formateur->delete();
        return redirect('crudFormateur');
    }
    public function imprimer($id){
        $newFormateur=new Formateur();
        $newFormateur=Formateur::find($id);

        return view('crudFormateur.afficheFormateur',['newFormateur' => $newFormateur]);


    }


}
