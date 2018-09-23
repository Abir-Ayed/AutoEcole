<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resultat;
use App\Candidat;
use App\Examen;
use DB;
class ResultatController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function indexResultat()
  {
   $resultat=Resultat::all();
        $arr=Array('resultat'=>$resultat);
        return view('crudResultat.showResultat',$arr);
       
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
 
     public function createResultat(Request $request)
  {

      //   die('tt');

    //dd($request);
 //$candidats=Candidat::all();
    $examens=Examen::all();
      if($request->isMethod('POST')){
         // dd($request);
        $this->validate($request,[
      'candidat'=>'required',
     'note_examen1'=>'required',
     
     'note_examen2'=>'required',
     'etat'=>'required',
     'description'=>'required',


 ]);
        $examenId=DB::table('examens')->where('Liste_candidats',$request->input('candidat'))->value('id');
          $newResultat=new Resultat();

          $newResultat->examen_id=$examenId;
           $newResultat->candidat=$request->input('candidat');
           $newResultat->note_examen1=$request->input('note_examen1');
            $newResultat->note_examen2=$request->input('note_examen2');
           $newResultat->etat=$request->input('etat');
           $newResultat->description=$request->input('description');

           $newResultat->save();

          return redirect('crudResultat');
  }
  //dd($request->all());
      return view('crudResultat.ajoutResultat',compact('candidats'),compact('examens'));



  }


 public function update(Request $request,$id)
  {
   $examens=Examen::all();
      if($request->isMethod('POST')){
         // dd($request);
        $this->validate($request,[
      'candidat'=>'required',
     'note_examen1'=>'required',
     
     'note_examen2'=>'required',
     'etat'=>'required',
     'description'=>'required',


 ]);
        $examenId=DB::table('examens')->where('Liste_candidats',$request->input('candidat'))->value('id');
          $newResultat=new Resultat();

          $newResultat->examen_id=$examenId;
           $newResultat->candidat=$request->input('candidat');
           $newResultat->note_examen1=$request->input('note_examen1');
            $newResultat->note_examen2=$request->input('note_examen2');
           $newResultat->etat=$request->input('etat');
           $newResultat->description=$request->input('description');

           $newResultat->save();

          return redirect('crudResultat');
  }
  
  
      else {

          $newResultat=Resultat::find($id);

          return view('crudResultat.editResultat',compact('newResultat'),compact('candidats'));

      }
  }

 
 
  public function destroy($id)
  {
   // $resultat =Resultat::find($id);
    Resultat::where('id',$id)->delete();
      
        return redirect('crudResultat');
  }
   public function imprimer($id)

    {
        $newResultat=new Resultat();
        $newResultat=Resultat::find($id);

        return view('crudResultat.afficheResultat',['newResultat' =>   $newResultat],compact('resultat'));
    }
}

?>