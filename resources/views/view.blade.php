<h1>(hasOne) relationship</h1>
<div class="container">
  @foreach ($info as $info)
    <p>{{$info->nom}} {{$info->prenom}}</p>
  @endforeach
  @foreach ($data as $result)
      notes : <p>{{$result->note}}</p>
  @endforeach
</div>