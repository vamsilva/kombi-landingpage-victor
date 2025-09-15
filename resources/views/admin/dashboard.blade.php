<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('admin.dashboard') }}">Painel Admin</a>

        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-light btn-sm">Sair</button>
        </form>
    </div>
</nav>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h2 class="fw-bold text-success">Bem-vindo à Área Administrativa</h2>
            <p class="text-muted">Escolha uma das opções abaixo para gerenciar o conteúdo:</p>
        </div>
    </div>

    <div class="row justify-content-center g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Gerenciar Banners</h5>
                    <p class="card-text">Adicione, edite ou remova os banners exibidos na página inicial.</p>
                    <a href="{{ route('banners.index') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Gerenciar FAQ</h5>
                    <p class="card-text">Adicione, edite ou remova perguntas e respostas exibidas na seção de dúvidas.</p>
                    <a href="{{ route('faqs.index') }}" class="btn btn-success">Acessar</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
