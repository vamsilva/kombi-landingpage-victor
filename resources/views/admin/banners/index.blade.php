@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2 class="mb-4">Gerenciar Banners</h2>

  {{-- Formulário de adicionar novo banner --}}
  <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
    @csrf
    <div class="mb-3">
      <label class="form-label">Título</label>
      <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Subtítulo</label>
      <input type="text" name="subtitulo" class="form-control">
    </div>
    <div class="mb-3">
      <label class="form-label">Imagem</label>
      <input type="file" name="imagem" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Adicionar Banner</button>
  </form>

  {{-- Lista de banners --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Subtítulo</th>
        <th>Imagem</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($banners as $banner)
      <tr>
        <td>{{ $banner->id }}</td>
        <td>{{ $banner->titulo }}</td>
        <td>{{ $banner->subtitulo }}</td>
        <td><img src="{{ asset('storage/'.$banner->imagem) }}" width="150"></td>
        <td>
          <a href="{{ route('banners.edit', $banner) }}" class="btn btn-warning btn-sm">Editar</a>
          <form action="{{ route('banners.destroy', $banner) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
