<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidat;
class CandidatController extends Controller 
{


 public function acceuil()
  {

      
      return view('acceuilCandidat.Candidat');
  }




  public function index()
  {

      $candidat=Candidat::all();
      $arr=Array('candidat'=>$candidat);
      return view('crudCandidats.showCandidat',$arr);
  }

    public function create(Request $request)
    {
//      die('tt');

        if($request->isMethod('POST')){

            $newCandidat=new Candidat();
            $newCandidat->nom=$request->input('nom');
            $newCandidat->prenom=$request->input('prenom');
            $newCandidat->date_naissance=$request->input('date_naissance');
            $newCandidat->sexe=$request->input('sexe');
            $newCandidat->Num_tel=$request->input('Num_tel');
            $newCandidat->Email=$request->input('Num_tel');
            $newCandidat->Email=$request->input('Email');




            $newCandidat->save();

            return redirect('crudCandidats');
        }
        // dd($request->all());
        return view('crudCandidats.ajoutCandidat');


    }




  public function update(Request $request,$id)
  {

//      die('tt');
      if($request->isMethod('POST')){

          $newCandidat=new Candidat();
          $newCandidat->nom=$request->input('nom');
          $newCandidat->prenom=$request->input('prenom');
          $newCandidat->date_naissance=$request->input('date_naissance');
          $newCandidat->sexe=$request->input('sexe');
          $newCandidat->Num_tel=$request->input('Num_tel');
          $newCandidat->Email=$request->input('Num_tel');
          $newCandidat->Email=$request->input('Email');
          $newCandidat->save();

          return redirect('crudCandidats');
      }
      // dd($request->all());
      else{
          $newCandidat=Candidat::find($id);

          return view('crudCandidats.editCandidat',compact('newCandidat'));

      }
  }
    public function imprimer($id)

    {
        $newCandidat=new Candidat();
        $newCandidat=Candidat::find($id);

        return view('crudCandidats.afficheCandidat',['newCandidat' =>   $newCandidat]);
    }


    function destroy($id)
    {
        $candidat=Candidat::find($id);
        $candidat->delete();
        return redirect('crudCandidats');
    }


}

?>