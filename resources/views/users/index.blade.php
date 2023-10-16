<ul>
{{--esto es un comentario: recorremos el listado de posts--}}
@foreach ($users as $user)
{{-- visualizamos los atributos del objeto --}}
<li>
<a href="users/{{$user->idUsuarios}}"> {{$user->nombreUsuarios}}</a>.
Escrito el {{$user->created_at}}
</li>
@endforeach
</ul>
<?php
