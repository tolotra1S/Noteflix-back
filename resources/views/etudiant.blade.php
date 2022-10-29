<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant</title>
</head>
<body>
    @foreach ($list as $list)
        <p> Nom : {{$list->nom}}</p>
        <p> Prénom : {{$list->prenom}}</p>
        <p> Genre : {{$list->genre}}</p>
        <a href="{{route('detail', $list->id)}}"><input type="button" value="Modifier"></a>
    @endforeach
</body>
</html>