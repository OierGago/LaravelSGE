@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Tabla de Comentarios</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Comentario</th>
                    <th>Texto del Comentario</th>
                    <th>Tiempo Utilizado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->idComentario }}</td>
                        <td>{{ $comment->textoComentario }}</td>
                        <td>{{ $comment->tiempoUtilizado }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm"
                                href="{{ route('comments.edit', $comment) }}"role="button">Editar</a>
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"
                                    onclick="return confirm('Are you sure?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
