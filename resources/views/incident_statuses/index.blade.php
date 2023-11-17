@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="widget-header widget-header-small title_btn">
                <div class="titleName">
                    <h4 class="widget-title lighter">Visualizando Estado de Incidencia</h4>
                </div>
                <div class="btnce">
                    @auth
                        @if (Auth::user() != null)
                            <a class="btn btn-success btn-sm float-right" href="{{ route('incident_statuses.create') }}"
                                role="button">Crear un estado</a>
                        @endauth
                    @else
                    @endif
                </div>
            </div><br>
            <div class="widget-main no-padding">
                <div class="table-responsive">
                    @foreach ($incidentStatus as $incidentStatus)
                        <div class="title_btn">
                            <div class="titleName">
                                <h2><a
                                        href="/incident_statuses/{{ $incidentStatus->idEstadoDeIncidencias }}">{{ $incidentStatus->nombreEstadoDeIncidencias }}</a>
                                </h2>

                            </div>
                            <div class="btnce">
                                @auth
                                    @if (Auth::user() != null)
                                        <a class="btn boton btn-warning btn-sm"
                                            href="{{ route('incident_statuses.edit', $incidentStatus) }}">Editar</a>
                                        <form action="{{ route('incident_statuses.destroy', $incidentStatus) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn boton btn-sm btn-danger" type="submit"
                                                onclick="return confirm('Are you sure?')">Borrar
                                            </button>
                                        </form>
                                    @else
                                    @endif
                                @endauth
                            </div>
                        </div>


                        @include('incidents.plantilla', [
                            'incidents' => $incidentStatus->incidenciascinco,
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
