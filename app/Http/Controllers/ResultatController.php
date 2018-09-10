<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Resultat;
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

      if($request->isMethod('POST')){
         // dd($request);
        
          $newResultat=new Resultat();

          $newResultat->examen_id=$request->input('examen_id');
           $newResultat->resultat=$request->input('note_examen');
           $newResultat->etat=$request->input('etat');
           $newResultat->description=$request->input('description');


           $newResultat->save();

          return redirect('crudResultat');
  }
  //dd($request->all());
      return view('crudResultat.ajoutResultat');



  }


 public function update(Request $request,$id)
  {
    if($request->isMethod('POST')){
         // dd($request);
        
          $newResultat=Resultat::find($id);

           $newResultat->examen_id=$request->input('examen_id');
           $newResultat->resultat=$request->input('note_examen');
           $newResultat->etat=$request->input('etat');
           $newResultat->description=$request->input('description');


           $newResultat->save();

          return redirect('crudResultat');
  }
      else {

          $newResultat=Resultat::find($id);

          return view('crudResultat.editResultat',compact('newResultat'));

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