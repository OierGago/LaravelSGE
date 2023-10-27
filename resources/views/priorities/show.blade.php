@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12 col-xs-12">
        <div class="space-10"></div>
        <form id="bug_action" method="post" action="bug_actiongroup_page.php">
             {{-- header incidencias --}}
            <div class="widget-box widget-color-blue2">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title lighter">Visualizando las incidencias con prioridad <b>{{$priority->nombrePrioridad}}</b></h4>
                </div><br>
                {{-- tabla de incidendias --}}
                <div class="widget-main no-padding">
                    <div class="table-responsive checkbox-range-selection">
                        <table id="buglist" class="table table-bordered table-condensed table-hover table-striped">
                               {{-- header tabla de incidendias --}}
                            <thead>
                                <tr class="buglist-headers">
                                    <th class="column-edit"></th>
                                    <th class="column-priority"><p>Prioridad {{-- BOTON prioridad --}}</p>
                                    </th>
                                    <th class="column-title"><p>Titulo {{-- BOTON id incidencia --}}</p>
                                    </th>
                                    <th class="column-category"><p>Categoría</p>
                                    </th>
                                    <th class="column-status"><p>Estado</p>
                                    </th><th class="column-department"><p>Departamento</p>
                                    </th>
                                    <th class="column-last-modified"><p>Actualizada<p></th>
                                    <th class="column-text"><p>Resumen</p>
                                    </th>
                                </tr>
                            </thead>
                            {{-- body tabla de incidendias --}}
                            <tbody>
                                @foreach ($priority->incidencias as $incidencia)
                                <tr>
                                    <td class="column-edit"><a class="btn btn-warning btn-sm" href="{{ route('incidents.edit', $incidencia) }}" role="button">Editar</a></td>
                                    <td class="column-priority">{{$incidencia->prioridad->nombrePrioridad}}</td>
                                    <td class="column-title"><a href="/incidents/{{ $incidencia->idIncidencias }}"> {{ $incidencia->tituloIncidencias }}</a></td>
                                    <td class="column-category">{{$incidencia->categoria->nombreCategoria}}</td>
                                    <td class="column-status">{{$incidencia->estatus->nombreEstadoDeIncidencias}}</td>
                                    <td class="column-department">{{$incidencia->departamento->nombreDepartamento}}</td>
                                    <td class="column-last-modified">{{$incidencia->created_at}}</td>
                                    <td class="column-text">{{$incidencia->descripcionIncidencias}}</td>
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
