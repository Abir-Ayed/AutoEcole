<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facture;
use DB;
use App\Candidat;
use App\Paiement;
class FactureController extends Controller
{
    public function createFacture(Request $request,$id){
   $newPaiement=Paiement::find($id);
      if($request->isMethod('POST')){
   //$candidatId=Candidat::where('nom','prenom',($request->input('liste_candidat')))->value('id');
  // $id_candidat=DB::table('candidat')->where('id',$id)->value('id');
  // $paiement=DB::table('paiement')->where('id_Candidat',$id_candidat)->get();


   $candidat=DB::table('candidats')->where('nom',($request->input('candidat'))) ->value('id');
$paiement_id=DB::table('paiements')->where('id',$candidat)->value('id');
          $newFacture=new Facture();

          $newFacture->candidat=$request->input('candidat');
          $newFacture->date_facture=$request->input('date_facture');
          $newFacture->montant_paye=$request->input('montant_paye');
          $newFacture->montant_restant=$request->input('montant_restant');
          $newFacture->montant_totale=$request->input('montant_totale');
          $newFacture->paiement_id=$paiement_id;

         
         $newFacture->save();

          return redirect('crudFacture');
  }
  //dd($request->all());
      return view('crudFacture.ajoutFacture',['newPaiement'=>$newPaiement]);

    }
  
      public function showFacture()
  {
          

    
        $facture=Facture::all();
        $arr=Array('facture'=>$facture);
        return view('crudFacture.showFacture',$arr);
  }
}
