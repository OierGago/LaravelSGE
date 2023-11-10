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
                                @foreach ($priority->incidenciasCinco as $incidents)
                                    @include('incidents.plantilla', $incidents)
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
