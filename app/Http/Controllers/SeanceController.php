<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seance;
use App\Formateur;
use App\Moniteur;
use App\Candidat;
use DB;
class SeanceController extends Controller 
{

 
 
  
  public function create(Request $request)
    {
    $format=Formateur::all();

     //dd($request);
      if($request->isMethod('POST')){
   $formateurId=Formateur::where('nom',($request->input('liste_formateurs')))->value('id');
          //dd($candidatId);
        // $newFormateur=new Formateur();

          $newSeance=new Seance();
       
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          $newSeance->Duree=$request->input('duree');
          $newSeance->Montant=$request->input('Montant');
          $newSeance->formateur_id= $formateurId;
      
           // $newSeance->typeboolean=($request->input('Type_Cours'))->value('seance theorique');
          if($request->input('Type_Cours')=='seance theorique'){
            $newSeance->typeboolean=1;
          }
         $newSeance->save();

          return redirect('crudSeance');
      }
    // dd($request->all());
      return view('crudSeance.ajoutSeanceTheorique',['format'=>$format]);




  }
  

 
 
 public function index()

    {
       
   $newSeance=new Seance();
        $seance=Seance::where('typeboolean','1')->get();

                $arr=Array('seance'=>$seance);
           //  dd($seance);

       return view('crudSeance.showSeanceTheorique',['arr'=>$arr],compact('seance'));
    }
  
  
  
  public function update(Request $request,$id)
  {
    $format=Formateur::all();
     if($request->isMethod('POST')){
          //die('tt');
         $formateurId=Formateur::where('nom',($request->input('Liste_Formateurs')))->value('id');
          //dd($candidatId);
        
          $newSeance=Seance::find($id);
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          //$newSeance->formateur_id= ;
          $newSeance->Duree=$request->input('duree');
          $newSeance->Montant=$request->input('Montant');

          $newSeance->formateur_id=$formateurId;
          $newSeance->formateur_id=1;

         $newSeance->save();

          return redirect('crudSeance');
      // dd($request->all());
        }
      else {

          $newSeance=Seance::find($id);

          return view('crudSeance.editSeanceTheorique',compact('format'),compact('newSeance'));

      }
  }

   function destroy($id)
    {
        Seance::where('id',$id)->delete();
      
        return redirect('crudSeance');
    }
    
 public function imprimer($id){
        $newSeance=new Seance();
         $newSeance=Seance::find($id);

        return view('crudSeance.afficheSeanceTheorique', $newSeance);
  }









 public function createSeancePratique(Request $request)
    {
  
     $moniteur=Moniteur::all();
     $candidat=Candidat::all();
      //   die('tt');

    //dd($request);
  //$horaire=DB::table('seances')->where('Horaire',($request->input('Horaire')))->count();
   $date=DB::table('seances')->where('Date_Cours',($request->input('Date_Cours')))->count();
  $horaire=DB::table('seances')->where('Horaire',($request->input('Horaire')))->count();
  
   //  $seance=DB::table('')->count();
      if($request->isMethod('POST')){
        
     
       //dd($date);
      if($date > 2 && $horaire > 1){

  return redirect('ajoutSeancePratique')->with('success','cette date est occuper ressayer une autre date');

       
}
else{
   $moniteur=DB::table('moniteurs')->where('nom',($request->input('Liste_moniteurs'))) ->value('id');
        

     
        $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))->value('id');
          $newSeance=new Seance();
          $newSeance->moniteur_id=$moniteur;
            $newSeance->candidat_id=$candidat;
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          $newSeance->Duree=$request->input('Duree');
          $newSeance->Liste_moniteurs=$request->input('Liste_moniteurs');
          $newSeance->Liste_candidats=$request->input('Liste_candidats');
          $newSeance->Montant=$request->input('Montant');
          

           $newSeance->save();
          
}
          return redirect('crudSeancePratique');
  }
   //dd($request->all());
      return view('crudSeancePratique.ajoutSeancePratique',['moniteur'=>$moniteur],['candidat'=>$candidat]);

}
  

  






















   public function indexSeance()

    {

        $seance=Seance::all();
        $arr=Array('seance'=>$seance);
        return view('crudSeancePratique.showSeancePratique',$arr);
    }

public function updateSeance(Request $request,$id)
  {
    $moniteurs=Moniteur::all();

  //dd($request);
      if($request->isMethod('POST')){
        $moniteurId=Moniteur::where('nom',($request->input('Liste_moniteurs')))->value('id');
          //dd($candidatId);
        // $newFormateur=new Formateur();

        
          $newSeance=Seance::find($id);
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          //$newSeance->formateur_id= ;
          $newSeance->Duree=$request->input('Duree');
          $newSeance->Montant=$request->input('Montant');

          $newSeance->moniteur_id=$moniteurId;
          
         $newSeance->save();

          return redirect('crudSeancePratique');
      // dd($request->all());
        }
      else {

          $newSeance=Seance::find($id);

          return view('crudSeancePratique.editSeancePratique',compact('moniteurs'),compact('newSeance'));

      }
  }
  function destroySeance($id)
    {
      Seance::where('id',$id)->delete();
       
        return redirect('crudSeancePratique');
    }
    
     public function imprimerSeance($id){
        $newSeance=new Seance();
        $newSeance=Seance::find($id);

        return view('crudSeancePratique.afficheSeancePratique',compact('newSeance'));
  }

}