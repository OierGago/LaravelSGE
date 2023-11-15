@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="space-10"></div>
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                {{-- header incidencias --}}
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando las incidencias con prioridad
                            <b>{{ $priority->nombrePrioridad }}</b>
                        </h4>
                    </div>
                    <br>
                    @include('incidents.plantilla', [
                                    'incidents' => $priority->incidenciascinco,
                                ])
                </div>
            </form>
        </div>
    </div>
@endsection
