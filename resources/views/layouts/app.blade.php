<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia de Manipulação</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
</head>

<body>
    <!-- Menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('landing') }}">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link px-3" href="#services">
                            <span class="text-nossos_servicos">Nossos Serviços</span>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#about">
                            <span class="text-sobre_nos">Sobre Nós</span>
                        </a></li>
                    <li class="nav-item">
                        <a class="btn btn-solicitar ms-lg-3 px-4 py-2" href="#contact">
                            Solicite um Orçamento
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-outline-success ms-lg-3 px-4 py-2" href="{{ route('admin.login') }}">
                        Login
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo(Landing) -->
    <main class="mt-5 pt-5">
        @yield('content')
    </main>

    <!-- Footer (Rodapé) -->
    <footer class="footer py-4">
        <div class="col-md-6 container">
            <div class="d-flex justify-content-between align-items-center mb-3">

                <div class="col-md-4 text-md-start text-center mb-3 mb-md-5">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo Empresa" class="footer-logo">
                </div>

                <div class="col-md-6 text-md-end text-center mb-md-5">
                    <a href="https://instagram.com" target="_blank" class="footer-social">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                    </a>
                    <a href="https://facebook.com" target="_blank" class="footer-social">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                    </a>
                </div>
            </div>

            <hr>

            <div class="text-center small mt-3">
                © 2024 Lorem Ipsum - 12.345.678/0001-00. Todos os direitos reservados.
                <a href="#">Políticas de Cookies</a>.
                Desenvolvido por <a href="#" class="fw-bold">Agência Kombi</a>
            </div>
        </div>
    </footer>



    <!-- Modal Política de Privacidade -->
    <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Política de Privacidade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p>
                        1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam accumsan, eros nec dictum accumsan, risus erat convallis lorem,
                        vel tincidunt mi justo eget urna.
                    </p>
                    <p>
                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam accumsan, eros nec dictum accumsan, risus erat convallis lorem,
                        vel tincidunt mi justo eget urna.
                    </p>
                    <p>
                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Etiam accumsan, eros nec dictum accumsan, risus erat convallis lorem,
                        vel tincidunt mi justo eget urna.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
