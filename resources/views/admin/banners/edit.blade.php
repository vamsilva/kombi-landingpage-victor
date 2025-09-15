@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2 class="mb-4">Editar Banner</h2>

  <form action="{{ route('banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Título</label>
      <input type="text" name="titulo" class="form-control" value="{{ $banner->titulo }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Subtítulo</label>
      <input type="text" name="subtitulo" class="form-control" value="{{ $banner->subtitulo }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Imagem Atual</label><br>
      <img src="{{ asset('storage/'.$banner->imagem) }}" width="200">
    </div>

    <div class="mb-3">
      <label class="form-label">Nova Imagem (opcional)</label>
      <input type="file" name="imagem" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="{{ route('banners.index') }}" class="btn btn-secondary">Voltar</a>
  </form>
</div>
@endsection
