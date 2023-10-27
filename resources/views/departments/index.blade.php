@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                {{-- header categoria --}}
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando Departamentos</h4>
                        <a class="btn btn-success btn-sm float-right" href="{{ route('departments.create') }}"
                            role="button">Crear</a>
                    </div><br>
                    {{-- tabla de incidendias --}}
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            @foreach ($departments as $department)
                                <h2><a href="/departments/{{$department->idDepartamento}}">{{ $department->nombreDepartamento }}</a></h2>
                            <table id="buglist"
                                    class="table table-bordered table-condensed table-hover table-striped">
                                    {{-- header tabla de incidendias --}}
                                    <thead>
                                        <tr class="buglist-headers">

                                            <th class="column-title">Titulo</th>
                                            <th class="column-status">Estado</th>
                                            <th class="column-category">Categoria</th>
                                            <th class="column-prioriti">Prioridad</th>
                                            <th class="column-last-modified">Actualizada</th>
                                            <th class="column-text">Resumen</th>
                                        </tr>
                                    </thead>
                                    {{-- bodi tabla de incidendias --}}

                                    <tbody>
                                        @foreach ($department->incidenciasCinco as $incident)
                                            <tr>
                                                <td class="column-title"><a href="incidents/{{ $incident->idIncidencias }}">
                                                        {{ $incident->tituloIncidencias }}</a></td>
                                                <td class="column-status">
                                                    {{ $incident->estatus->nombreEstadoDeIncidencias }}
                                                </td>
                                                <td class="column-category">
                                                    {{ $incident->categoria->nombreCategoria }}
                                                </td>
                                                <th class="column-prioridad">  {{ $incident->prioridad->nombrePrioridad }}</th>

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
