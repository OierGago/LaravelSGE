@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="space-10"></div>
                {{-- header incidencias --}}
                <div >
                    <div >
                        <h4 class="widget-title lighter">Visualizando las incidencias del departamento
                            <b>{{ $department->nombreDepartamento }}</b>
                        </h4>
                    </div><br>
                    @include('incidents.plantilla', ['incidents' => $department->incidenciascinco])

                </div>
        </div>
    </div>
@endsection
