@extends('layouts.app')
@section('content')
<div class="container">
    {{-- {{dd($incident)}} --}}
    <h1>{{$incident->tituloIncidencias}}</h1>
    <p><b>Descripción:</b> {{$incident->descripcionIncidencias}}</p>
    <p><b>Tiempo estimado (en minutos):</b> {{$incident->tiempoIncidencia}}</p>
    <p><b>Categoria:</b> {{$incident->categoria->nombreCategoria}}</p>
    <p><b>Departamento:</b> {{$incident->departamento->nombreDepartamento}}</p>
    <p><b>Usuario asignado:</b> {{$incident->usuario->name}}</p>
    <p><b>Estado:</b> {{$incident->estatus->nombreEstadoDeIncidencias}}</p>
    <p><b>Prioridad:</b> {{$incident->prioridad->nombrePrioridad}}</p>
    <p><b>Creado el:</b> {{$incident->created_at}}</p>
<div>

</div>

<div class="row d-flex justify-content-center">
    <div class="col-md-8 col-lg-12">
      <div class="card shadow-0 border" style="background-color: #f0f2f5;">
        <div class="card-body p-4">
          <div class="form-outline mb-4">
            <p class="form-control"><b>Comentarios</b></p>
          </div>
          @foreach ($incident->comentarios as $comentario)
          <div class="card mb-4">
            <div class="card-body">
                <p>{{$comentario->textoComentario}}</p>
              <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                </div>
                <div class="d-flex flex-row align-items-center">
                    <p class="small text-muted mb-0">Tiempo invertido: {{$comentario->tiempoUtilizado}} minutos</p>
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

    </div>
</div>
</div>
@include('comments.create')
<div class="d-none">
            <label for="idIncidencias" class="form-label">Incidencia</label>
            <select id="idIncidencias" name="idIncidencias" placeholder="A que incidencia se referencia">
                <option value="{{$incident->idIncidencias}}">{{$incident->tituloIncidencias}}</option>
            </select>
        </div>
    </form>
</div>
@endsection
