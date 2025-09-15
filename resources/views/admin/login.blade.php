<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-header text-center fw-bold">Área Administrativa</div>
        <div class="card-body">
          <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
