@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="widget-box widget-color-blue2">
                <div class="widget-header widget-header-small">
                    <h4 class="widget-title lighter">Visualizando Estado de Incidencia</h4>
                    @auth
                        @if (Auth::user() != null)
                            <a class="btn btn-success btn-sm float-right" href="{{ route('incident_statuses.create') }}"
                                role="button">Crear un estado</a>
                        @endauth
                    @else
                    @endif

                </div><br>
                <div class="widget-main no-padding">
                    <div class="table-responsive checkbox-range-selection">
                        @foreach ($incidentStatus as $incidentStatus)
                            <h2>
                                <a
                                    href="/incident_statuses/{{ $incidentStatus->idEstadoDeIncidencias }}">{{ $incidentStatus->nombreEstadoDeIncidencias }}</a>
                            </h2>
                            @auth
                                @if (Auth::user() != null)
                                    <div class="d-flex flex-row">
                                        <a class="btn boton btn-warning btn-sm"
                                            href="{{ route('incident_statuses.edit', $incidentStatus) }}"
                                            role="button">Editar</a>
                                        <form action="{{ route('incident_statuses.destroy', $incidentStatus) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn boton btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')">Borrar
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            @else
                            @endif
                            @include('incidents.plantilla', ['incidents' => $incidentStatus->incidenciascinco])

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
