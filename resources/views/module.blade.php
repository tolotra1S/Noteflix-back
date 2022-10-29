@foreach($note as $note)
    <p><a href="{{route('note.prof', $note->id)}}"> {{$note->code}} </a> </p>
    <p>{{$note->nom_module}}</p>
@endforeach