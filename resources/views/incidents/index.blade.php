@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <div class="space-10"></div>
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando incidencias</h4>
                    </div>
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            <table id="buglist" class="table table-bordered table-condensed table-hover table-striped">
                                <thead>
                                    <tr class="buglist-headers">
                                        @auth
                                            @if (Auth::user() != null)
                                                <th class="column-edit"><a class="btn btn-success btn-sm"
                                                        href="{{ route('incidents.create') }}" role="button">Crear</a></th>
                                            @endauth
                                        @else
                                        @endif

                                        <th class="column-priority">
                                            <p>Prioridad</p>
                                        </th>
                                        <th class="column-title">
                                            <p>Titulo</p>
                                        </th>
                                        <th class="column-category">
                                            <p>Categoría</p>
                                        </th>
                                        <th class="column-status">
                                            <p>Estado</p>
                                        </th>
                                        <th class="column-department">
                                            <p>Departamento</p>
                                        </th>
                                        <th class="column-last-modified">
                                            <p>Actualizada
                                            <p>
                                        </th>
                                        <th class="column-text">
                                            <p>Resumen</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidents as $incident)
                                        <tr>
                                            @auth
                                                @if (Auth::user()->id == $incident->idUsuarios)
                                                    <td class="column-edit">
                                                        <a class="btn btn-warning btn-sm" href="{{ route('incidents.edit', $incident) }}" role="button">Editar</a>
                                                    </td>
                                                @elseif (Auth::user()->id != $incident->idUsuarios)
                                                    <td class="column-edit"></td>
                                                @endif
                                            @endauth
                                            <td class="column-priority">{{ $incident->prioridad->nombrePrioridad }}</td>
                                            <td class="column-title"><a href="incidents/{{ $incident->idIncidencias }}">
                                                    {{ $incident->tituloIncidencias }}</a></td>
                                            <td class="column-category">{{ $incident->categoria->nombreCategoria }}</td>
                                            <td class="column-status">{{ $incident->estatus->nombreEstadoDeIncidencias }}
                                            </td>
                                            <td class="column-department">{{ $incident->departamento->nombreDepartamento }}
                                            </td>
                                            <td class="column-last-modified">{{ $incident->created_at }}</td>
                                            <td class="column-text">{{ $incident->descripcionIncidencias }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
