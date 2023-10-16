<ul>
{{--esto es un comentario: recorremos el listado de posts--}}
@foreach ($incidents as $incident)
{{-- visualizamos los atributos del objeto --}}
<li>
<a href="incidents/{{$incident->idIncidencias}}"> {{$incident->tituloIncidencias}}</a>.
Escrito el {{$incident->created_at}}
</li>
@endforeach
</ul>
