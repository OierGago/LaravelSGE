@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="widget-box widget-color-blue2">
                <div class="widget-header widget-header-small">
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ Session::get('error') }}</li>
                            </ul>
                        </div>
                    @endif
                    <h4 class="widget-title lighter">Visualizando Departamentos</h4>
                    <a class="btn btn-success btn-sm float-right" href="{{ route('departments.create') }}"
                        role="button">Crear un departamento</a>
                </div><br>
                <div class="widget-main no-padding">
                    <div class="table-responsive checkbox-range-selection">
                        @foreach ($departments as $department)
                            <h2>
                                <a href="/departments/{{$department->idDepartamento}}">{{ $department->nombreDepartamento }}</a>
                            </h2>
                            <div class="d-flex flex-row">
                            <a class="btn boton btn-warning btn-sm"
                                                            href="{{ route('departments.edit', $department) }}"
                                                            role="button">Editar</a>
                            <form action="{{route('departments.destroy',$department)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn boton btn-sm btn-danger" type="submit"
                                onclick="return confirm('Are you sure?')">Borrar</button>
                                </form>
                            </div>
                        <table id="buglist"
                                class="table table-bordered table-condensed table-hover table-striped">
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
                                            <td class="column-prioridad">  {{ $incident->prioridad->nombrePrioridad }}</td>
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
        </div>
    </div>
@endsection
