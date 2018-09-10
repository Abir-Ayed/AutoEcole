<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use  App\Vehicule;
use App\Moniteur;
class VehiculeController extends Controller 
{

    public function create(Request $request)
  {
     //dd($request);
      if($request->isMethod("POST")){
        // die('tt');
          $this->validate($request,[
              'moniteur_id'=>'required',
              'Vehicule'=>'required',
              'Matricule'=>'required|max:4',
              'Modele'=>'required',

          ]);



         //$newMoniteur=Moniteur::first();
          $newVehicule=new Vehicule();

           $newVehicule->moniteur_id=$request->input('moniteur_id');
          $newVehicule->Vehicule=$request->input('Vehicule');
          $newVehicule->Matricule=$request->input('Matricule');
          $newVehicule->Modele=$request->input('Modele');

          //die('tt');

          $newVehicule->save();

        return redirect('crudVehicule');
      }
    // dd($request->all());

      return view('crudVehicule.ajoutVehicule');

  }
    public function index(){

        {
            $vehicule=Vehicule::all();
            $arr=Array('vehicule'=>$vehicule);
            return view('crudVehicule.showVehicule',$arr);
        }


    }


    public function show()

    {
        $vehicule=Vehicule::all();

        return view('crudVehicule.affiche');
    }
    public function impri($id)

    {
        $newVehicule=new Vehicule();
        $newVehicule=Vehicule::find($id);

        return view('crudVehicule.affiche',['newVehicule' => $newVehicule]);
    }






    public function edit(Request $request,$id)
  {
      //  dd($request);

      if($request->isMethod('POST')){
       //   die('tt');

          //$newMoniteur=Moniteur::first();
          $newVehicule=new Vehicule();
          $newVehicule->moniteur_id=$request->input('moniteur_id');
          $newVehicule->Matricule=$request->input('Matricule');
          $newVehicule->Vehicule=$request->input('Vehicule');
          $newVehicule->Modele=$request->input('Modele');



        //  $newVehicule->moniteur_id=$id=id;
          //die('tt');

          $newVehicule->save();
         // return view('crudVehicule');
          return redirect('crudVehicule');

         // dd($request->all());
      }
      else {

          $newVehicule=Vehicule::find($id);
          return view('crudVehicule.editVehicule',compact('newVehicule'));

      }

  }



    function destroy($id)
    {
        $vehicule=Vehicule::find($id);
        $vehicule->delete();
        return redirect('crudVehicule');
    }

  
}

?>