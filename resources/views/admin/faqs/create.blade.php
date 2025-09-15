@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Adicionar FAQ</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('faqs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Dúvida</label>
            <input type="text" name="duvida" value="{{ old('duvida') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Resposta</label>
            <textarea name="resposta" class="form-control" rows="6" required>{{ old('resposta') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Voltar</a>
    </form>

</div>
@endsection
