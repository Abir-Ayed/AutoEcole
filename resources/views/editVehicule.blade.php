<!DOCTYPE html>
<html>
<head>
    <title> Insert</title>

    <br>
    <form action="/editVehicule/{{$newVehicule->id}}" method="POST">
        {{csrf_field()}}
        Marque:<input type="text" name="marque" value="{{$newVehicule->Marque}}" placeholder="entrer marque"/>
        </br>
        Modele:<input type="text" name="modele" value="{{$newVehicule->Modele}}" placeholder="entrer modele"/>
        </br>
        Matricule:<input type="text" name="matricule" value="{{$newVehicule->Matricule}}" placeholder="entrer matricule"/>

        <input type="submit" value="ajouterVehicule"/>
    </form>
    </body>
</head>
</html>