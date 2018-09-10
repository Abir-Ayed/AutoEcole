<table>
    <tr>
        <td> Marque</td>
        <td> Matricule</td>
        <td> Modele</td>
        <td> Delete</td>
        <td> Edit</td>
    </tr>




    @foreach($vehicule as $newVehicule)


        <tr>
            <td>  Marque:{{$newVehicule->Marque}}</td>
            <td> Matricule:{{$newVehicule->Matricule}}</td>
            <td> Modele:{{$newVehicule->Modele}}</td>
            <td><a href="edit/{{$newVehicule->id}}">Edit</a> </td>
            <td><a href="afficheVehicule/{{$newVehicule->id}}">Delete</a> </td>
        </tr>
    @endforeach
</table>