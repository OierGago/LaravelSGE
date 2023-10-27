<style>
    /* Estilos para la card con fondo degradado y sombra */
    .custom-card {
        background-color: #f0f2f5; /* Degradado de azul a verde */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Sombra */
        padding: 20px;
        border-radius: 10px;
    }
    .form-control {
            border: 1px solid black;
        }
</style>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <!-- Card con fondo degradado y sombra -->
            <div class="card custom-card">
                <div class="card-body">
                    <h2 class="card-title">CREAR UN COMENTARIO</h2>
                    <form class="mt-2" name="create_platform" action="{{route('comments.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="textoComentario" class="form-label">Texto de Comentario</label>
                            <textarea class="form-control" rows="4" cols="50" id="textoComentario" name="textoComentario" required placeholder="introduce Texto Comentario"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tiempoUtilizado" class="form-label">Tiempo estimado</label>
                            <input type="number" class="form-control" id="tiempoUtilizado" name="tiempoUtilizado" required placeholder="introduce El tiempo utilizado"/>
                        </div>
                        <button type="submit" class="btn btn-success">Crear</button>
