@extends('layouts.app')

@section('content')
<div class="container py-4">
  <h2 class="mb-4">Gerenciar FAQs</h2>

  {{-- Formulário de adicionar nova FAQ --}}
  <form action="{{ route('faqs.store') }}" method="POST" class="mb-4">
    @csrf
    <div class="mb-3">
      <label class="form-label">Dúvida</label>
      <input type="text" name="duvida" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Resposta</label>
      <textarea name="resposta" class="form-control" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Adicionar FAQ</button>
  </form>

  {{-- Lista de FAQs --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Dúvida</th>
        <th>Resposta</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($faqs as $faq)
      <tr>
        <td>{{ $faq->id }}</td>
        <td>{{ $faq->duvida }}</td>
        <td>{{ $faq->resposta }}</td>
        <td>
          <a href="{{ route('faqs.edit', $faq) }}" class="btn btn-warning btn-sm">Editar</a>
          <form action="{{ route('faqs.destroy', $faq) }}" method="POST" style="display:inline-block">
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
