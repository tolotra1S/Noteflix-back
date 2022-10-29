<table>
    <th>
        <tr> Matricule        </tr>
        <tr> Nom          </tr>
        <tr> Groupe    </tr>
        <tr> Note    </tr>

    </th>
    @foreach($etudiant as $kid)
    <tr>
        <td> {{$kid->id}} </td>
        <td> {{$kid->matricule}} </td>
        <td> {{$kid->nom}} {{$kid->prenom}} </td>
        <td> {{$kid->groupe}}</td>
        @foreach ($notes as $item)
            <td><input type="text" value="{{$item->note}}"></td>
        @endforeach
    @endforeach
        
        <td><input type="submit" value="Valider"></td>
</table>