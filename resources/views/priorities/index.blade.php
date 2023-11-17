@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small title_btn">
                        <div class="titleName">
                            <h4 class="widget-title lighter">Visualizando Prioridad</h4>
                        </div>
                        <div class="btnce">
                            @auth
                                @if (Auth::user() != null)
                                    <a class="btn btn-success btn-sm float-right" href="{{ route('priorities.create') }}"
                                        role="button">Crear una prioridad</a>
                                @endauth
                            @else
                            @endif
                        </div>
                    </div><br>
                    <div class="widget-main no-padding">
                        <div class="table-responsive">

                            @foreach ($priorities as $priority)
                                <div class="title_btn">
                                    <div class="titleName">
                                        <h2>
                                            <a
                                                href="/priorities/{{ $priority->idPrioridad }}">{{ $priority->nombrePrioridad }}</a>
                                        </h2>
                                    </div>
                                    <div class="btnce">
                                        @auth
                                            @if (Auth::user() != null)
                                                <a class="btn boton btn-warning btn-sm"
                                                    href="{{ route('priorities.edit', $priority) }}" role="button">
                                                    Editar
                                                </a>
                                                <form action="{{ route('priorities.destroy', $priority) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn boton btn-sm btn-danger" type="submit"
                                                        onclick="return confirm('Are you sure?')">Borrar</button>
                                                </form>
                                            @endif
                                        @endauth
                                    </div>
                                </div>


                                @include('incidents.plantilla', [
                                    'incidents' => $priority->incidenciascinco,
                                ])
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

