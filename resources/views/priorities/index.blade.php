
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                {{-- header categoria --}}
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando Prioridad</h4>
                        <a class="btn btn-success btn-sm float-right" href="{{ route('priorities.create') }}"
                            role="button">Crear</a>
                    </div><br>
                    {{-- tabla de incidendias --}}
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            @foreach ($priority as $priority)
                                <h2><a href="/priorities/{{$priority->idPrioridad}}">{{$priority->nombrePrioridad}}</a></h2>
                                <table id="buglist"
                                    class="table table-bordered table-condensed table-hover table-striped">
                                    {{-- header tabla de incidendias --}}
                                    <thead>
                                        <tr class="buglist-headers">
                                            <th class="column-title">Titulo</th>
                                            <th class="column-category">Estado de Incidencia</th>
                                            <th class="column-department">Departamento</th>
                                            <th class="column-category">Categoria</th>
                                            <th class="column-last-modified">Actualizada</th>
                                            <th class="column-text">Resumen</th>
                                        </tr>
                                    </thead>
                                    {{-- body tabla de incidendias --}}

                                    <tbody>
                                        @foreach ($priority->incidenciasCinco as $incident)
                                            <tr>
                                                <td class="column-title"><a href="incidents/{{ $incident->idIncidencias }}">
                                                        {{ $incident->tituloIncidencias }}</a></td>
                                                <td class="column-status">
                                                    {{ $incident->estatus->nombreEstadoDeIncidencias }}
                                                </td>
                                                <th class="column-department"> {{ $incident->departamento->nombreDepartamento }}
                                                </th>
                                                <td class="column-category">
                                                    {{ $incident->categoria->nombreCategoria }}
                                                </td>
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
