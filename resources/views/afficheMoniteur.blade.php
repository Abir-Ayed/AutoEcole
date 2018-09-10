<table>
    <tr>

        <td> Nom</td>
        <td> Prenom</td>
        <td> Date de naissance</td>
        <td> Sexe</td>
        <td> Telephone</td>


        <td> Delete</td>
        <td> Edit</td>
    </tr>





        <tr>
            <td>  {{$newMoniteur->nom}}</td>
            <td> {{$newMoniteur->prenom}}</td>
            <td> {{$newMoniteur->date_naissance}}</td>
            <td> {{$newMoniteur->sexe}}</td>
            <td> {{$newMoniteur->Num_tel}}</td>

            <td><a href="editMoniteur/{{$newMoniteur->id}}">Edit</a> </td>
            <td><a href="afficheMoniteur/{{$newMoniteur->id}}">Delete</a> </td>
        </tr>
    @endforeach

</table>


    <tr><td colspan="5"><a href="insertMoniteur"><input type="button" value="Ajouter une nouvelle moniteur"></a></td></tr>

