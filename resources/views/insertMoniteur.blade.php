<!DOCTYPE html>
<html>
<head>
    <title> Insert</title>

    <br>
    <form action="/insertMoniteur" method="POST">
        {{csrf_field()}}
         nom:<input type="text" name="nom" placeholder="entrer nom" required/>
        </br>
        prenom:<input type="text" name="prenom" placeholder="entrer prenom" required/>
        </br>
        Date de naissance:<input type="Date" name="date_naissance" placeholder="entrer date naissance" required />
        </br>
        sexe:<input type="text" name="sexe" placeholder="entrer sexe" required/>
        </br>
        telephone:<input type="text" name="Num_tel" placeholder="entrer numero de telephone" required/>
        </br>


        <input type="submit" value="ajouter"/>
    </form>
    </body>
</head>
</html>