<form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="subtitulo" class="form-label">Subtítulo</label>
        <input type="text" name="subtitulo" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagem" class="form-label">Imagem</label>
        <input type="file" name="imagem" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
