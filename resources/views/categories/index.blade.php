@extends('layouts.app')
@section('content')
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando categorias</h4>
                        @auth
                            @if (Auth::user() != null)
                                <a class="btn btn-success btn-sm float-right" href="{{ route('categories.create') }}"
                                    role="button">Crear una categoria</a>
                            @endauth
                        @else
                        @endif
                    </div><br>
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            @foreach ($categories as $category)
                                <h2 class="column-category">
                                    <a href="/categories/{{ $category->idCategoria }}">{{ $category->nombreCategoria }}</a>
                                </h2>
                                @auth
                                    @if (Auth::user() != null)
                                        <div class="d-flex flex-row">
                                            <a class="btn boton btn-warning btn-sm"
                                                href="{{ route('categories.edit', $category) }}" role="button">Editar</a>
                                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
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
                                @include('incidents.plantilla', ['incidents' => $category->incidenciascinco])

                            @endforeach
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
