<h1> Bonjour </h1>
<form action="{{route('update', $info->id)}}" method="post">
    @csrf
    @method('GET')
    Nom <input type="text" name="nom" value="{{$info->nom}}">
    Prénom <input type="text" name="prenom" value="{{$info->prenom}}">
    Genre
    <select name="" value="{{$info->genre}}">
        <option value="H">Homme</option>
        <option value="F">Femme</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Modifier">
</form>