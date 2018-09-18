<?php



//namespace Illuminate\Database\Eloquent\Collection;
//use Illuminate\Database\Eloquent\Collection;



namespace App\Http\Controllers;
//use Illuminate\Database\Eloquent\Collection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Candidat;
use App\Examen;
use DB;
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
        //$candidat=Candidat::where('nom',($request->input('Liste_candidats')))->value('id');
          //dd($candidatId);
       
        $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))
        

      ->value('id');
          $newExamen=new Examen();
          $newExamen->candidat_id=$candidat;
          $newExamen->Date_Examen=$request->input('Date_Examen');
          $newExamen->Type_Examen=$request->input('Type_Examen');
          $newExamen->Horaire=$request->input('horaire');
          $newExamen->Liste_candidats=$request->input('Liste_candidats');
;
          

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


 $candidat=DB::table('candidats')->where('nom',($request->input('Liste_candidats')))->value('id');
        
         
            // dd($candidatId);
            $newExamen= Examen::find($id);

          $newExamen->candidat_id=$candidat;
          $newExamen->Date_Examen=$request->input('Date_Examen');
          $newExamen->Type_Examen=$request->input('Type_Examen');
          $newExamen->Horaire=$request->input('horaire');
          $newExamen->Liste_candidats=$request->input('Liste_candidats');

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