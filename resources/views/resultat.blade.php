<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table>
        <th>
            <tr> Code           </tr>
            <tr> Matière        </tr>
            <tr> Coeff </tr>
            <tr> Note </tr>
            <tr> Note pondérée </tr> 
        </th>
        @foreach ($result as $result)
        <tr>   
            <td> {{$result->code}} </td>   
            <td> {{$result->nom_module}} </td>
            <td> {{$result->coeff}}</td>
            <td> {{$result->note}}</td>
            <td> {{$result->note*$result->coeff}} </td>
        </tr>
        @endforeach 
        <td> Moyenne générale : {{$result->avg('note')}} </td>
        <br>
        <h1> Etudiant : {{$result->nom}} {{$result->prenom}} </h1>
        <input type="button" value="export pdf"> 
    </table>
</body>
</html>