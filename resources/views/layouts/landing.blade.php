@extends('layouts.app')

@section('content')

    <!-- Mensagem Toastr-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if ($errors->any())
            toastr.error("Verifique os campos do formulário e tente novamente.");
        @endif
    </script>



    <!-- Carrossel -->
    <div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @forelse($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $banner->image_path) }}" class="d-block w-100"
                        alt="Banner {{ $key + 1 }}">
                </div>
            @empty
                <!-- Caso não exista registro no banco, usa o banner fixo -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/banner.png') }}" class="d-block w-100" alt="Banner fixo">
                </div>
            @endforelse
        </div>

        <!-- Botões de navegação no estilo Carrossel-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <!-- Indicadores -->
        <div class="carousel-indicators">
            @forelse($banners as $key => $banner)
                <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></button>
            @empty
                <!-- indicador para o banner fixo -->
                <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="0" class="active"></button>
            @endforelse
        </div>
    </div>


    <!-- Serviços -->
    <section id="services" class="background py-5">
        <div class="container text-center">
            <h3 class="titulo-servico mb-5">
                A farmácia de manipulação <br>
                sob medida para você e seu pet
            </h3>

            <div class="row g-4">

                <!-- Manipulação de Receitas -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/manipulacao.png') }}" class="card-img-top"
                                alt="Manipulação de Receitas">
                        </div>
                        <div class="icon-wrapper">
                            <img src="{{ asset('images/icones/icon-manipulacao.png') }}" alt="Ícone Manipulação">
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Manipulação de Receitas</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>

                <!-- Produtos Naturais -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/naturais.png') }}" class="card-img-top"
                                alt="Produtos Naturais">
                            <div class="icon-wrapper">
                                <img src="{{ asset('images/icones/icon-naturais.png') }}" alt="Ícone Produtos Naturais">
                            </div>
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Produtos Naturais</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>

                <!-- Florais -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/florais.png') }}" class="card-img-top" alt="Florais">
                            <div class="icon-wrapper">
                                <img src="{{ asset('images/icones/icon-florais.png') }}" alt="Ícone Florais">
                            </div>
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Florais</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>

                <!-- Consultório Farmacêutico -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/consultorio.png') }}" class="card-img-top"
                                alt="Consultório Farmacêutico">
                            <div class="icon-wrapper">
                                <img src="{{ asset('images/icones/icon-consultorio.png') }}" alt="Ícone Consultório">
                            </div>
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Consultório Farmacêutico</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>

                <!-- Produtos Ortopédicos -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/ortopedicos.png') }}" class="card-img-top"
                                alt="Produtos Ortopédicos">
                            <div class="icon-wrapper">
                                <img src="{{ asset('images/icones/icon-ortopedicos.png') }}" alt="Ícone Ortopédicos">
                            </div>
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Produtos Ortopédicos</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>

                <!-- Farmácia Veterinária -->
                <div class="col-md-4">
                    <div class="card card-servico h-100">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/servicos/veterinaria.png') }}" class="card-img-top"
                                alt="Farmácia Veterinária">
                            <div class="icon-wrapper">
                                <img src="{{ asset('images/icones/icon-veterinaria.png') }}" alt="Ícone Veterinária">
                            </div>
                        </div>
                        <div class="card-body text-start fundo-curvo-acentuado">
                            <h5 class="card-title text-success fw-bold">Farmácia Veterinária</h5>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                                pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                                ac placerat leo enim euismod odio. In erat risus, auctor ut
                                viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                                ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="text-center my-5">
            <a href="#contact" class="btn btn-solicitar2">
                Solicite um Orçamento
            </a>
        </section>
    </section>

    <!-- Banner de Receita -->
    <section>
        <img src="{{ asset('images/banner2.png') }}" alt="Banner Receita" class="w-100 d-block">
    </section>

    <!-- Sobre Nós -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="titulo-section">
                        Nosso maior compromisso é <br>
                        com o <span>seu bem-estar</span>
                    </h2>
                    <p class="texto-descricao">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                        ac placerat leo enim euismod odio. In erat risus, auctor ut
                        viverra ac, rutrum id orci. Donec pellentesque leo in tempus
                        ultrices. Donec quam nunc, mattis sed consequat id, cursus nec nibh.
                    </p>
                    <p class="texto-descricao">
                        Etiam at tincidunt mauris. Nulla eleifend odio sed aliquam gravida.
                        Phasellus placerat elit ac nisi tempor, eu rhoncus arcu accumsan.
                        Donec felis velit, ultrices pretium velit in, ultricies lacinia nisl.
                        Quisque tempus quis turpis eu luctus.
                    </p>
                    <a href="#contact" class="btn btn-solicitar2">
                        Solicite um Orçamento
                    </a>
                </div>


                <div class="col-md-6 position-relative text-center">

                    <div class="fundo-curvado"></div>
                    <img src="{{ asset('images/farmaceutico.png') }}" alt="Farmacêutico"
                        class="img-farmaceutico position-relative">
                    <div class="d-flex flex-column align-items-start gap-3 position-absolute top-0 start-0 ms-3 mt-3">
                        <img src="{{ asset('images/crfsp.png') }}" alt="CRF SP" class="img-certificacao logo">
                        <img src="{{ asset('images/anvisa.png') }}" alt="ANVISA" class="img-certificacao logo">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="banner-saudavel py-0">
        <div class="container-fluid">
            <div class="row g-0 align-items-stretch">

                <div class="col-md-6 p-0">
                    <img src="{{ asset('images/saude.png') }}" alt="Cápsulas" class="img-fluid w-100 left-banner">
                </div>

                <div class="col-md-6 p-0">
                    <div class="fundo-verde d-flex flex-column justify-content-center h-100 p-5">
                        <h2 class="text-white">À sua saúde.<br>Tradição e inovação.</h2>
                        <p class="text-white col-md-9">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                            pulvinar, neque ac molestie luctus, dolor purus volutpat magna,
                            ac placerat leo enim euismod odio.
                        </p>
                        <p class="text-white col-md-9">
                            In erat risus, auctor ut viverra ac, rutrum id orci. Donec
                            pellentesque leo in tempus ultrices. Donec quam nunc, mattis sed
                            consequat id, cursus nec nibh.
                        </p>
                        <a href="#contact" class="btn btn-solicitar2 mt-3 align-self-start">SOLICITE UM ORÇAMENTO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Seção de Dúvidas (FAQ): -->
    <section id="faq" class="background py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <h3 class="fw-bold mb-4 text-success">Ficou com alguma dúvida?</h3>

                     <!-- Puxa as FAQs registradas no banco de dados, na tabela Faqs -->
                    <div class="accordion accordion-flush" id="accordionFaq">
                        @foreach ($faqs as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                    <button
                                        class="accordion-button collapsed d-flex justify-content-between align-items-center"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                        aria-controls="collapse{{ $faq->id }}">

                                        <span>{{ $faq->duvida }}</span>

                                        <!-- Ícone + e - -->
                                        <span class="icon-toggle ms-2">
                                            <img src="{{ asset('images/icon-plus.png') }}" class="icon-plus"
                                                alt="Abrir">
                                            <img src="{{ asset('images/icon-minus.png') }}" class="icon-minus"
                                                alt="Fechar">
                                        </span>
                                    </button>
                                </h2>

                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionFaq">
                                    <div class="accordion-body">
                                        {!! $faq->resposta !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('images/faq.png') }}" alt="Imagem FAQ" class="img-fluid">
                </div>

            </div>
        </div>
    </section>


    <!-- Formulário de Contato: -->
    <section id="contact" class="contact-section">
        <div class="container-fluid px-0">
            <div class="row g-0 align-items-stretch">

                <div class="col-md-6 contact-image">
                    <img src="{{ asset('images/contato.png') }}" alt="Solicite orçamento"
                        class="img-fluid w-100 h-100 object-fit-cover">
                </div>

                <!-- Formulário (Registrado no banco através do input-->
                <div class="col-md-6 contact-form d-flex align-items-center">
                    <div class="w-100 px-5 py-5">
                        <h3 class="fw-bold mb-3 text-white">Solicite um orçamento personalizado</h3>
                        <p class="text-white mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Fusce pulvinar, neque ac molestie luctus, dolor purus.
                        </p>

                        <form action="{{ route('contato.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label text-white">Seu nome</label>
                                <input type="text" name="name" class="form-control rounded-pill"
                                    placeholder="Digite seu nome completo" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">E-mail</label>
                                <input type="email" name="email" class="form-control rounded-pill"
                                    placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-white">Celular</label>
                                <input type="text" name="celular" class="form-control rounded-pill"
                                    placeholder="Digite seu número de celular" required>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="acordo" required>
                                <label for="acordo" class="form-check-label text-white">
                                    Estou de acordo com as <a href="#" class="text-white text-decoration-underline"
                                        data-bs-toggle="modal" data-bs-target="#privacyModal">Políticas de
                                        Privacidade</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-submit w-100 rounded-pill py-2">
                                ENVIAR SOLICITAÇÃO
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
