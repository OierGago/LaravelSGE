<table id="buglist" class="table table-bordered  table-hover table-striped">
    <thead>
        <tr class="buglist-headers">
            @auth
                @if (Auth::user() != null)
                    <th class="colum-editar">
                        <p>Editar</p>
                    </th>
                @endif
            @else
            @endauth

            <th class="column-priority">
                <p>Prioridad</p>
            </th>
            <th class="column-title">
                <p>Titulo</p>
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
    <tbody>
        @foreach ($incidents as $incident)
            <tr>
                @auth
                    @if (Auth::user()->id == $incident->idUsuarios)
                        <td class="column-edit">
                            <a class="btn btn-warning btn-sm" href="{{ route('incidents.edit', $incident) }}"
                                role="button">Editar</a>
                        </td>
                    @else
                        <td></td>
                    @endif
                @endauth
                @if ($incident->prioridad == null)
                    <td class="column-category"></td>
                @else
                <td class="column-priority">{{ $incident->prioridad->nombrePrioridad }}</td>
                @endif
                <td class="column-title"><a href="incidents/{{ $incident->idIncidencias }}">
                        {{ $incident->tituloIncidencias }}</a></td>

                @if ($incident->categoria == null)
                    <td class="column-category"></td>
                @else
                    <td class="column-category">{{ $incident->categoria->nombreCategoria }}</td>
                @endif
                @if ($incident->estatus == null)
                    <td class="column-category"></td>
                @else
                    <td class="column-status">
                        {{ $incident->estatus->nombreEstadoDeIncidencias }}
                    </td>
                @endif
                <td class="column-department">
                    {{ $incident->departamento->nombreDepartamento }}
                </td>
                <td class="column-last-modified">{{ $incident->created_at }}</td>
                <td class="column-text"><p>{{ $incident->descripcionIncidencias }}</p></td>
            </tr>
        @endforeach
    </tbody>
</table>
