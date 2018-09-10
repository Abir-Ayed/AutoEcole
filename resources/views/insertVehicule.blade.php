<!DOCTYPE html>
<html>
<head>
    <title> Insert</title>
    <br>
    <form action="/ajout" method="POST">
        {{csrf_field()}}
        id:<input type="text" name="moniteur_id" placeholder="entrer matricule"/>
        Vehicule:
        <select name="Vehicule">
            <option value="Range Rover">Range Rover</option>
            <option value="Citroën"> Citroën</option>
            <option value="Golf">Golf</option>
        </select>

        </br>
        Matricule:<input type="text" name="Matricule" placeholder="entrer matricule"/>
        </br>
        Modele:<input type="text" name="modele" placeholder="entrer modele"/>
        <input type="submit" value="ajouter"/>
    </form>
    </body>
</head>
</html>
