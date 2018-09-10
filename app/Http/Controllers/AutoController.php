<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Auto;
class AutoController extends Controller
{

 public function indexAuto()

    {
         $auto=Auto::all();
        $arr=Array('auto'=>$auto);
        return view('auto_ecole.showAuto',$arr);
    }

  public function createAuto(Request $request)
  {

      if($request->isMethod('POST')){
         // dd($request);
        
          $newAuto=new Auto();
          $newAuto->nom=$request->input('nom');
          $newAuto->adresse=$request->input('adresse');
          $newAuto->Num_tel=$request->input('Num_tel');
          $newAuto->code_postale=$request->input('code_postale');

           $newAuto->candidat_id=1;

           $newAuto->save();

          return redirect('auto_ecole');
  }
  //dd($request->all());
      return view('auto_ecole.ajoutAuto');



  }

 function destroy($id)
    {
        $auto=Auto::find($id);
        $auto->delete();
        return redirect('auto_ecole');
    }
 public function updateAuto(Request $request,$id)

  {
  if($request->isMethod('POST')){
         // dd($request);
        
          $newAuto=Auto::find($id);
          $newAuto->nom=$request->input('nom');
          $newAuto->adresse=$request->input('adresse');
          $newAuto->Num_tel=$request->input('Num_tel');
          $newAuto->code_postale=$request->input('code_postale');

           $newAuto->candidat_id=1;

           $newAuto->save();

          return redirect('auto_ecole');
  }
      // dd($request->all());
      else {

           $newAuto=Auto::find($id);

          return view('auto_ecole.editAuto', ['newAuto' => $newAuto]);

      }

  }


      public function imprimerAuto($id){
        $newAuto=new Auto();
        $newAuto=Auto::find($id);

        return view('auto_ecole.afficheAuto',['newAuto' => $newAuto]);


    }




  }



