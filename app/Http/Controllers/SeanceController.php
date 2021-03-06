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
     $candidat=Candidat::all();
      //   die('tt');

    //dd($request);
 
 $nbre_places=DB::table('seances')->where('Type_Cours','seance theorique')->count();
     //dd($nbre_places);
  
  
      if($request->isMethod('POST')){
        
     $this->validate($request,[
      'Type_Cours'=>'required',
     'Date_Cours'=>'required',
     
     'Horaire'=>'required',
     'Duree'=>'required',
     'Montant'=>'required|numeric',


 ]);
       //dd($date);
      if($nbre_places > 5){

  return redirect('ajoutSeanceTheorique')->with('success','cette date est occuper ressayer une autre date');

       
}
else{
  
          $formateur=Formateur::where('nom',($request->input('Liste_Formateurs')))->value('id');
      $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))->value('id');
          $newSeance=new Seance();
  
          $newSeance->formateur_id=$formateur;
            $newSeance->candidat_id=$candidat;
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          $newSeance->Duree=$request->input('Duree');
          
          $newSeance->Liste_candidats=$request->input('Liste_candidats');
          $newSeance->Liste_Formateurs=$request->input('Liste_Formateurs');
          $newSeance->Montant=$request->input('Montant');
          
          
   if($request->input('Type_Cours')=='seance theorique'){
            $newSeance->typeboolean=1;
          }
           $newSeance->save();
          
}
        return redirect('crudSeance');
  }
   //dd($request->all());
      return view('crudSeance.ajoutSeanceTheorique',['format'=>$format],['candidat'=>$candidat]);

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
     $candidat=Candidat::all();
      //   die('tt');

    //dd($request);
 
 $nbre_places=DB::table('seances')->where('Type_Cours','seance theorique')->count();
     //dd($nbre_places);
  
  
      if($request->isMethod('POST')){
        
     $this->validate($request,[
      'Type_Cours'=>'required',
     'Date_Cours'=>'required',
     
     'Horaire'=>'required',
     'Duree'=>'required',
     'Montant'=>'required|numeric',


 ]);
       //dd($date);
      if($nbre_places > 5){

  return redirect('ajoutSeanceTheorique')->with('success','cette date est occuper ressayer une autre date');

       
}
else{
 $formateur=Formateur::where('nom',($request->input('Liste_Formateurs')))->value('id');
 $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))->value('id');

          $newSeance=Seance::find($id);
  
          $newSeance->formateur_id=$formateur;
            $newSeance->candidat_id=$candidat;
          $newSeance->Type_Cours=$request->input('Type_Cours');
          $newSeance->Date_Cours=$request->input('Date_Cours');
          $newSeance->Horaire=$request->input('Horaire');
          $newSeance->Duree=$request->input('Duree');
          
          $newSeance->Liste_candidats=$request->input('Liste_candidats');
          $newSeance->Liste_Formateurs=$request->input('Liste_Formateurs');
          $newSeance->Montant=$request->input('Montant');
          
          
   if($request->input('Type_Cours')=='seance theorique'){
            $newSeance->typeboolean=1;
          }
           $newSeance->save();
          
}
        return redirect('crudSeance');
  }
      else {

          $newSeance=Seance::find($id);

          return view('crudSeance.editSeanceTheorique',compact('format'),compact('newSeance'))->with('candidat',$candidat);

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

        return view('crudSeance.afficheSeanceTheorique',compact('newSeance'));
  }




public function indexSeance()

    {

        $seance=Seance::all();
        $arr=Array('seance'=>$seance);
        return view('crudSeancePratique.showSeancePratique',$arr);
    }



 public function createSeancePratique(Request $request)
    {
  
     $moniteur=Moniteur::all();
     $candidat=Candidat::all();
      //   die('tt');

    //dd($request);
 
  $date=DB::table('seances')->where('Date_Cours',($request->input('Date_Cours')))->count();
  $horaire=DB::table('seances')->where('Horaire',($request->input('Horaire')))->count();
  
  
      if($request->isMethod('POST')){
        
     $this->validate($request,[
      'Type_Cours'=>'required',
     'Date_Cours'=>'required',
     
     'Horaire'=>'required',
     'Duree'=>'required',
     'Montant'=>'required|numeric',


 ]);
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
  

 


public function updateSeance(Request $request,$id)
  {
    $moniteurs=Moniteur::all();
     $candidats=Candidat::all();

 $date=DB::table('seances')->where('Date_Cours',($request->input('Date_Cours')))->count();
  $horaire=DB::table('seances')->where('Horaire',($request->input('Horaire')))->count();
  
  
      if($request->isMethod('POST')){
        
     $this->validate($request,[
      'Type_Cours'=>'required',
     'Date_Cours'=>'required',
     
     'Horaire'=>'required',
     'Duree'=>'required',
     'Montant'=>'required|numeric',


 ]);
   $moniteur=DB::table('moniteurs')->where('nom',($request->input('Liste_moniteurs'))) ->value('id');
   $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))->value('id');

          $newSeance=Seance::find($id);
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
             return redirect('crudSeancePratique');
          
}
        
  
      else {

          $newSeance=Seance::find($id);

          return view('crudSeancePratique.editSeancePratique',compact('moniteurs'),compact('newSeance'))->with('candidats',$candidats);

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