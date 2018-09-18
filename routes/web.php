<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/insert-moniteur', function () {
    return view('welcome');

});



Route::get('admin/admin',function () {
    return view('admin.admin');});



/*Route::get('/Moniteur',"VehiculeController@index");



Route::get('/Moniteur', "VehiculeController@create");
Route::post('/Moniteur', "VehiculeController@create");
Route::get('/moniteur/Moniteur',"VehiculeController@show");
Route::get('/moniteur/edit/{id}',"VehiculeController@edit");
Route::post('/moniteur/edit/{id}',"VehiculeController@edit");
Route::get('/moniteur/affiche',"VehiculeController@showVehicule");
Route::post('/moniteur/affiche',"VehiculeController@showVehicule");

Route::get('/moniteur/Moniteur/{id}',function($id) {
    $vehicule = Vehicule::find($id);
    $vehicule->delete();
    return redirect("/moniteur/Moniteur");
});


Route::get('/affiche',"MoniteurController@index2");
Route::get('ajouter',"MoniteurController@create")->name('moniteuradd');
Route::post('ajouter',[ 'uses'=>"MoniteurController@create",'as'=>'moniteuraddsubmit']);//->name('moniteur-add-submit');
Route::post('/moniteur/Moniteur',"MoniteurController@show");


//Route::get('/ajouter',"MoniteurController@show");
//Route::post('/ajouter',"MoniteurController@show");

Route::get('/affiche',"MoniteurController@showMoniteur");
Route::post('/affiche',"MoniteurController@showMoniteur");

Route::get('/ajouter/{id}',function($id) {
    $moniteur = Moniteur::find($id);
    $moniteur->delete();

   return redirect("/ajouter");
});

Route::get('/edit/{id}',"MoniteurController@update");
Route::post('/edit/{id}',"MoniteurController@update");
*/








//Route::get('/home', 'HomeController@index')->name('home');

  // Route::get('/login','AdminAuth\AuthController@showLoginForm');
    //Route::post('/login','AdminAuth\AuthController@login');










Route::get('/ajoutMoniteur',"MoniteurController@create");
Route::post('ajoutMoniteur',[ 'uses'=>"MoniteurController@create",'as'=>'moniteurajout']);
Route::get('crudMoniteur',"MoniteurController@index");
Route::get('/editMoniteur/{id}',"MoniteurController@update");
Route::post('/editMoniteur/{id}',"MoniteurController@update");
Route::get('/crudMoniteur/{id}',"MoniteurController@destroy");
Route::get('/afficheMoniteur/{id}',"MoniteurController@impri");



Route::get('/ajoutVehicule',"VehiculeController@create");
Route::post('ajoutVehicule',[ 'uses'=>"VehiculeController@create",'as'=>'vehiculeadd']);
Route::get('crudVehicule',"VehiculeController@index");
Route::get('affiche/{id}',"VehiculeController@impri");
Route::get('/editVehicule/{id}',"VehiculeController@edit");
Route::post('/editVehicule/{id}',"VehiculeController@edit");
Route::get('/crudVehicule/{id}',"VehiculeController@destroy");




Route::get('/ajoutCandidat',"CandidatController@create");
Route::post('ajoutCandidat',[ 'uses'=>"CandidatController@create",'as'=>'Candidatajout']);
Route::get('crudCandidats',"CandidatController@index");
Route::get('/editCandidat/{id}',"CandidatController@update");
Route::post('/editCandidat/{id}',"CandidatController@update");
Route::get('/crudCandidat/{id}',"CandidatController@destroy");
Route::get('afficheCandidat/{id}',"CandidatController@imprimer");





Route::get('/ajoutExamen',"ExamenController@create");
Route::post('ajoutExamen',[ 'uses'=>"ExamenController@create",'as'=>'examenajout']);
Route::get('crudExamen',"ExamenController@index");
Route::get('/editExamen/{id}',"ExamenController@update");
Route::post('/editExamen/{id}',"ExamenController@update");
Route::get('/crudExamen/{id}',"ExamenController@destroy");
Route::get('/afficheExamen/{id}',"ExamenController@imprimer");



Route::get('/ajoutFormateur',"FormateurController@create");
Route::post('ajoutFormateur',[ 'uses'=>"FormateurController@create",'as'=>'formateurajout']);
Route::get('crudFormateur',"FormateurController@index");
Route::get('/editFormateur/{id}',"FormateurController@update");
Route::post('/editFormateur/{id}',"FormateurController@update");
Route::get('/crudFormateur/{id}',"FormateurController@destroy");
Route::get('/afficheFormateur/{id}',"FormateurController@imprimer");




Route::get('/ajoutSeanceTheorique',"SeanceController@create");
Route::post('ajoutSeanceTheorique',[ 'uses'=>"SeanceController@create",'as'=>'seanceTheoriqueajout']);
Route::get('crudSeance',"SeanceController@index");
Route::get('/editSeanceTheorique/{id}',"SeanceController@update");
Route::post('/editSeanceTheorique/{id}',"SeanceController@update");
Route::get('/crudSeance/{id}',"SeanceController@destroy");
Route::get('/afficheSeanceTheorique/{id}',"SeanceController@imprimer");



Route::get('/ajoutSeancePratique',"SeanceController@createSeancePratique");
Route::post('ajoutSeancePratique',[ 'uses'=>"SeanceController@createSeancePratique",'as'=>'seancePratiqueajout']);
Route::get('crudSeancePratique',"SeanceController@indexSeance");
Route::get('/editSeancePratique/{id}',"SeanceController@updateSeance");
Route::post('/editSeancePratique/{id}',"SeanceController@updateSeance");
Route::get('/crudSeancePratique/{id}',"SeanceController@destroySeance");
Route::get('/afficheSeancePratique/{id}',"SeanceController@imprimerSeance");




Route::get('/ajoutResultat',"ResultatController@createResultat");
Route::post('ajoutResultat',[ 'uses'=>"ResultatController@createResultat",'as'=>'Resultatajout']);
Route::get('crudResultat',"ResultatController@indexResultat");
Route::get('/editResultat/{id}',"ResultatController@update");
Route::post('/editResultat/{id}',"ResultatController@update");
Route::get('/crudResultat/{id}',"ResultatController@destroy");
Route::get('/afficheResultat/{id}',"ResultatController@imprimer");



Route::get('/ajoutAuto',"AutoController@createAuto");
Route::post('ajoutAuto',[ 'uses'=>"AutoController@createAuto",'as'=>'auto_ajout']);
Route::get('/auto_ecole',"AutoController@indexAuto");
Route::get('/auto_ecole/{id}',"AutoController@destroy");
Route::get('/editAuto/{id}',"AutoController@updateAuto");
Route::post('/editAuto/{id}',"AutoController@updateAuto");
Route::get('/afficheAuto/{id}',"AutoController@imprimerAuto");


Route::get('/ajoutAlerte',"AlertesController@createAlerte");
Route::post('ajoutAlerte',[ 'uses'=>"AlertesController@createAlerte",'as'=>'alerte_ajout']);
Route::get('crudAlertes',"AlertesController@indexAlerte");
Route::get('/crudAlertes/{id}',"AlertesController@destroy");
Route::get('/editAlerte/{id}',"AlertesController@updateAlerte");
Route::post('/editAlerte/{id}',"AlertesController@updateAlerte");
Route::get('/afficheAlerte/{id}',"AlertesController@imprimerAlerte");



Route::get('/ajoutPaiement',"PaiementController@createPaiement");
Route::post('ajoutPaiement',[ 'uses'=>"PaiementController@createPaiement",'as'=>'paiement_ajout']);
Route::get('crudPaiement',"PaiementController@show");

Route::get('/editPaiement/{id}',"PaiementController@updatePaiement");
Route::post('/editPaiement/{id}',"PaiementController@updatePaiement");
Route::get('/affichePaiement/{id}',"PaiementController@imprimerPaiement");
Route::get('/crudPaiement/{id}',"PaiementController@destroyP");
Route::get('consulterPaiement',"PaiementController@consulterP");


Route::get('/ajoutFacture/{id}',"FactureController@createFacture");
Route::post('/ajoutFacture/{id}',[ 'uses'=>"FactureController@createFacture",'as'=>'facture_ajout']);


Route::get('crudFacture',"FactureController@showFacture");



/*Route::group(['middleware'=>['web','auth']],function(){


  Route::get('/',function(){
return view('welcome');
  });
 Route::get('/home',function(){
  if(Auth::user()->admin == 0){
    return view('home');
  }else{
    $users['users']=\App\User::all();
    return view('adminhome',$users);
  }
 
});
});*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@statistique');

Route::get('logout', 'Auth\LoginController@logout');
Route::post('auth/password/email','Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('auth/password/email','Auth\ForgotPasswordController@showLinkRequestForm');
 Route::post('auth/password/reset','Auth\ResetPasswordController@reset');
  Route::get('auth/password/reset/{token?}','Auth\RsetPasswordController@showResetForm');

//Route::get('/Moderateur', 'ModerateurController@index');
//Route::get('/acceuilAdmin', 'AdminController@index');
//Route::get('/acceuilCandidat', 'CandidatController@index');

//oute::get('/acceuilCandidat', 'CandidatController@acceuil');
//Route::get('/auth/login','AdminAuth\AdminLoginController@showLoginForm');
/*Route::post('/auth/login','AdminAuth\AuthController@login');
Route::get('/auth/logout','AdminAuth\AuthController@logout');

Route::get('auth/register', 'Auth\AdminAuth\AuthController@showRegistrationForm');
Route::post('auth/register', 'Auth\AdminAuth\AuthController@register');
Route::get('acceuilAdmin', 'AdminController@index');
   
  


Route::get('auth/register', 'Auth\ModerateurAuth\AuthModerateurController@showRegistrationForm');
Route::post('auth/register', 'Auth\ModerateurAuth\AuthModerateurController@register');
Route::get('Moderateur', 'ModerateurController@index');
 */     


