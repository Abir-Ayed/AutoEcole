<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facture;
use DB;
use App\Candidat;
class FactureController extends Controller
{
    public function createFacture(Request $request){
    $cand=Candidat::all();

      if($request->isMethod('POST')){
   //$candidatId=Candidat::where('nom','prenom',($request->input('liste_candidat')))->value('id');
   $id_candidat=DB::table('candidat')->where('id',$id)->value('id');
   $paiement=DB::table('paiement')->where('id_Candidat',$id_candidat)->get();

          $newFacture=new Facture();
         
          $newFacture->date_facture=$request->input('date_facture');
          $newFacture->montant_paye=$request->input('montant_paye');
          $newFacture->montant_restant=$request->input('montant_restant');
          $newFacture->montant_totale=$request->input('montant_totale');
          $newFacture->paiement_id=$paiement;

         
         $newFacture->save();

          return redirect('crudFacture',compact('cand'));
  }
  //dd($request->all());
      return view('crudFacture.ajoutFacture');

    }
  
      public function showFacture($id)
  {
          

    $candidat_id=DB::table('candidats')->where('id',$id)->value('id');
$paiement=DB::table('paiements')->where('candidat_id',$candidat_id)->get();

$candidat=DB::table('candidats')->where('id',$candidat_id)->get();


$facture=DB::table('factures')->where('paiement_id',$candidat_id)->get();

$cand=DB::table('candidats')->select('nom','prenom');
        $facture=Facture::all();
        $arr=Array('facture'=>$facture);
        return view('crudFacture.showFacture',$arr,['cand'=>$cand]);
  }
}
