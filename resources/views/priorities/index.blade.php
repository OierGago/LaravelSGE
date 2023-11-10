@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando Prioridad</h4>
                        @auth
                            @if (Auth::user() != null)
                                <a class="btn btn-success btn-sm float-right" href="{{ route('priorities.create') }}"
                                    role="button">Crear una prioridad</a>
                            @endauth
                        @else
                        @endif
                    </div><br>
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            @foreach ($priority as $priority)
                                <h2>
                                    <a href="/priorities/{{ $priority->idPrioridad }}">{{ $priority->nombrePrioridad }}</a>
                                </h2>

                                @auth
                                    @if (Auth::user() != null)
                                        <div class="d-flex flex-row">
                                            <a class="btn boton btn-warning btn-sm"
                                                href="{{ route('priorities.edit', $priority) }}" role="button">Editar</a>
                                            <form action="{{ route('priorities.destroy', $priority) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn boton btn-sm btn-danger" type="submit"
                                                    onclick="return confirm('Are you sure?')">Borrar</button>
                                            </form>
                                        </div>
                                    @endauth
                                @else
                                @endif
                                <table id="buglist"
                                class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                    <tr class="buglist-headers">
                                        <th class="column-title">Titulo</th>
                                        <th class="column-status">Estado</th>
                                        <th class="column-category">Categoria</th>
                                        <th class="column-prioriti">Departamento</th>
                                        <th class="column-last-modified">Actualizada</th>
                                        <th class="column-text">Resumen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($priority->incidenciasCinco as $incident)
                                        <tr>
                                            <td class="column-title"><a href="incidents/{{ $incident->idIncidencias }}">
                                                    {{ $incident->tituloIncidencias }}</a></td>
                                            <td class="column-status">
                                                {{ $incident->estatus->nombreEstadoDeIncidencias }}
                                            </td>
                                            <td class="column-category">
                                                {{ $incident->categoria->nombreCategoria }}
                                            </td>
                                            <td class="column-departamento">  {{ $incident->departamento->nombreDepartamento  }}</td>
                                            <td class="column-last-modified">{{ $incident->created_at }}</td>
                                            <td class="column-text">{{ $incident->descripcionIncidencias }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
