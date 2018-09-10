<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alertes;
class AlertesController extends Controller 
{

 public function indexAlerte()

    {
        $alerte=Alertes::all();
        $arr=Array('alerte'=>$alerte);
        return view('crudAlertes.showAlerte',$arr);
    }

  
  public function createAlerte(Request $request)
  {

      if($request->isMethod('POST')){
         // dd($request);
        
          $newAlerte=new Alertes();
         $newAlerte->date_pre=$request->input('date_pre');
         $newAlerte->date_pro=$request->input('date_pro');
         $newAlerte->Type=$request->input('type');
         $newAlerte->Description=$request->input('description');

            $newAlerte->vehicule_id=1;

           $newAlerte->save();

          return redirect('crudAlertes');
  }
  //dd($request->all());
      return view('crudAlertes.ajoutAlerte');



  }
   function destroy($id)
    {
        $alerte=Alerte::find($id);
        $alerte->delete();
        return redirect('crudAlertes');
    }

  public function store(Request $request)
  {
    
  }

 
  public function updateAlerte(Request $request,$id)
  {
     
       if($request->isMethod('POST')){
         // dd($request);
        
          $newAlerte=Alertes::find($id);
         $newAlerte->date_pre=$request->input('date_pre');
         $newAlerte->date_pro=$request->input('date_pro');
         $newAlerte->Type=$request->input('type');
         $newAlerte->Description=$request->input('description');

            $newAlerte->vehicule_id=1;

           $newAlerte->save();

          return redirect('crudAlertes');
  }
  else {

          $newAlerte=Alertes::find($id);

          return view('crudAlertes.editAlerte', ['newAlerte' => $newAlerte]);

      }
  }

 public function imprimerAlerte($id){
        $newAlerte=new Alertes();
        $newAlerte=Alertes::find($id);

        return view('crudAlertes.afficheAlerte',['newAlerte' => $newAlerte]);


    }

}

?>