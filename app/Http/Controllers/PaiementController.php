<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Paiement;
use App\Candidat;
class PaiementController extends Controller 
{

public function consulterP($id)

    {
       $cand=Candidat::all();

          $id_candidat=DB::table('candidats')->where('id',$id)->value('id');
          $candidat=DB::table('paiements')->where('id',$id_candidat)->get();


      $paiement=Paiement::all();
        $arr=Array('paiement'=>$paiement);
        return view('crudFacture.consulterPaiement',$arr,compact('cand','candidat'));
    }

   public function createPaiement(Request $request)
  {

//$candidat_id=DB::table('candidat')->where('id_candidat',$id)->get();


      if($request->isMethod('POST')){
         // dd($request);
        
          $newPaiement=new Paiement();
         $newPaiement->candidat_id=$request->input('candidat_id');
         $newPaiement->date_operation=$request->input('date_operation');
         $newPaiement->montant=$request->input('montant');
         $newPaiement->mode_paiement=$request->input('mode_paiement');
        $newPaiement->description=$request->input('description');

         
           $newPaiement->save();

          return redirect('crudPaiement');
  }
  //dd($request->all());
      return view('crudPaiement.ajoutPaiement',compact('id'));



  }
  public function store(Request $request)
  {
    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show()
  {
   

        $paiement=Paiement::all();
        $arr=Array('paiement'=>$paiement);
        return view('crudPaiement.showPaiement',$arr);
  }
 function destroyP($id)
    {
        $paiement=Paiement::find($id);
        $paiement->delete();
        return redirect('crudPaiement');
    }
 


  public function updatePaiement(Request $request,$id)

  {
        
 if($request->isMethod('POST')){
         // dd($request);
        
         $newPaiement=Paiement::find($id);

         $newPaiement->candidat_id=$request->input('candidat_id');
         $newPaiement->date_operation=$request->input('date_operation');
         $newPaiement->montant=$request->input('montant');
         $newPaiement->mode_paiement=$request->input('mode_paiement');
        $newPaiement->description=$request->input('description');

         
           $newPaiement->save();

          return redirect('crudPaiement', ['newPaiement' => $newPaiement]);
  }
      // dd($request->all());
      else {

          $newPaiement=Paiement::find($id);

          return view('crudPaiement.editPaiement', ['newPaiement' => $newPaiement]);

      }

  }
 
   public function imprimerPaiement($id){
        $newPaiement=new Paiement();
        $newPaiement=Paiement::find($id);

        return view('crudPaiement.affichePaiement',['newPaiement' => $newPaiement]);


    }
 
}

?>