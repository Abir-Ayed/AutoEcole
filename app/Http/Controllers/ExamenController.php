<?php



//namespace Illuminate\Database\Eloquent\Collection;
//use Illuminate\Database\Eloquent\Collection;



namespace App\Http\Controllers;
//use Illuminate\Database\Eloquent\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Candidat;
use App\Examen;
class ExamenController extends Controller
{


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
$cand=Candidat::all();
      //   die('tt');

    //dd($request);

      if($request->isMethod('POST')){
         // dd($request);
         $candidatId=Candidat::where('nom',($request->input('Liste_candidats')))->value('id');
          //dd($candidatId);
          $newExamen=new Examen();

          $newExamen->Date_Examen=$request->input('date_examen');
          $newExamen->Type_Examen=$request->input('Type_Examen');
          $newExamen->Horaire=$request->input('horaire');
          $newExamen->candidat_id=$candidatId;


          $newExamen->save();

          return redirect('crudExamen');
  }
   //dd($request->all());
      return view('crudExamen.ajoutExamen',['cand'=>$cand]);



  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
    public function index()

    {
        $examen=Examen::all();
        $arr=Array('examen'=>$examen);
        return view('crudExamen.showExamen',$arr);
    }
   /* public function index1()

    {
        $examen=Examen::all();
        $candidat=Candidat::where();

        return view('crudExamen.showExamen',compact('examen'),compact('candidat'));
    }*/



    public function update(Request $request,$id)
    {
        $cand=Candidat::all();
          //die('tt');
       // dd($request);

        if($request->isMethod('POST')){

           $candidatId=Candidat::where('nom',($request->input('Liste_candidats')))->value('id');
            // dd($candidatId);
            $newExamen= new Examen();
           // var_dump($newExamen);

            $newExamen->Date_Examen=$request->input('date_examen');
            $newExamen->Type_Examen=$request->input('Type_Examen');
            $newExamen->Horaire=$request->input('horaire');
            $newExamen->candidat_id=$candidatId;
            


            $newExamen->save();
            return redirect('crudExamen');

        }


        else {

            $newExamen=Examen::find($id);

            return view('crudExamen.editExamen', ['newExamen' => $newExamen],['cand'=>$cand]);
       //   dd($request->all());



        }

    }

    function destroy($id)
    {
        $examen=Examen::find($id);
        $examen->delete();
        return redirect('crudExamen');
    }
    public function imprimer($id)

    {
        $newExamen=new Examen();
        $newExamen=Examen::find($id);

        return view('crudExamen.afficheExamen',['newExamen' =>   $newExamen]);
    }




}

?>