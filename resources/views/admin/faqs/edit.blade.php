@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2 class="mb-4">Editar FAQ</h2>

  <form action="{{ route('faqs.update', $faq) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Dúvida</label>
      <input type="text" name="duvida" class="form-control" value="{{ $faq->duvida }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Resposta</label>
      <textarea name="resposta" class="form-control" rows="3" required>{{ $faq->resposta }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Salvar Alterações</button>
    <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Voltar</a>
  </form>
</div>
@endsection
