<!DOCTYPE html>
<html>
<head>
    <title> edit</title>

    <br>
    <form action="/editMoniteur/{{$newMoniteur->id}}" method="POST">
        {{csrf_field()}}
        nom:<input type="text" name="nom"  value="{{$newMoniteur->nom}}" placeholder="entrer nom" required/>
        </br>
        prenom:<input type="text" name="prenom" value="{{$newMoniteur->prenom}}" placeholder="entrer prenom" required/>
        </br>
        Date de naissance:<input type="Date" name="date_naissance"  value="{{$newMoniteur->date_naissance}}" placeholder="entrer date naissance" required />
        </br>
        sexe:<input type="text" name="sexe"   value="{{$newMoniteur->sexe}}" placeholder="entrer sexe"  required/>
        </br>
        telephone:<input type="text" name="telephone"  value="{{$newMoniteur->telephone}}" placeholder="entrer numero de telephone" required/>
        </br>


        <input type="submit" value="ajouter"/>
    </form>
    </body>
</head>
</html>