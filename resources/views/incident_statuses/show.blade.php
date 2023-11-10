@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="space-10"></div>
                {{-- header incidencias --}}
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando las incidencias con estado
                            <b>{{ $incidentStatus->nombreEstadoDeIncidencias }}</b>
                        </h4>
                    </div><br>
                    {{-- tabla de incidendias --}}
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            <table id="buglist" class="table table-bordered table-condensed table-hover table-striped">
                                {{-- header tabla de incidendias --}}
                                <thead>
                                    <tr class="buglist-headers">
                                        @php
                                            $boton = false;
                                        @endphp
                                        @foreach ($incidentStatus->incidencias as $incidencia)
                                            @auth
                                                @if (Auth::user() != null && Auth::user()->id == $incidencia->idUsuarios)
                                                    <th class="column-edit"></th>
                                                    @php
                                                        $boton = true;
                                                    @endphp
                                                @else
                                                @endif
                                            @endauth
                                        @endforeach
                                        <th class="column-priority">
                                            <p>Prioridad {{-- BOTON prioridad --}}</p>
                                        </th>
                                        <th class="column-title">
                                            <p>Titulo {{-- BOTON id incidencia --}}</p>
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
                                {{-- body tabla de incidendias --}}
                                <tbody>
                                    @foreach ($incidentStatus->incidencias as $incidencia)
                                        <tr>
                                            @auth
                                                @if (Auth::user()->id == $incidencia->idUsuarios)
                                                    <td class="column-edit"><a class="btn btn-warning btn-sm"
                                                            href="{{ route('incidents.edit', $incidencia) }}"
                                                            role="button">Editar</a></td>
                                                    @php
                                                        $boton = true;
                                                    @endphp
                                                @elseif ($boton == true)
                                                    <td></td>
                                                @endif
                                            @endauth

                                            <td class="column-priority">{{ $incidencia->prioridad->nombrePrioridad }}</td>
                                            <td class="column-title"><a href="/incidents/{{ $incidencia->idIncidencias }}">
                                                    {{ $incidencia->tituloIncidencias }}</a></td>
                                            <td class="column-category">{{ $incidencia->categoria->nombreCategoria }}</td>
                                            <td class="column-status">{{ $incidencia->estatus->nombreEstadoDeIncidencias }}
                                            </td>
                                            <td class="column-department">
                                                {{ $incidencia->departamento->nombreDepartamento }}</td>
                                            <td class="column-last-modified">{{ $incidencia->created_at }}</td>
                                            <td class="column-text">{{ $incidencia->descripcionIncidencias }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
