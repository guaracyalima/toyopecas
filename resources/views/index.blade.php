@extends('layouts.front')

@section('content')

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logobranca.svg') }}" alt="" id="logo-branco">
                {{--Toypeças--}}
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#sobre">Sobre</a>
                </li>
                <li>
                    <a href="#produtos">Produtos</a>
                </li>

                <li>
                    <a href="#contato">Contato</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Topo_oficina -->
{{--<header class="image-bg-fluid-height" id="home">--}}

{{--</header>--}}


<header id="myCarousel" class="carousel slide">

    <div class="carousel-inner">
        <div class="item active">

            <div class="fill img-topo" style="background-image:url({{ asset('img/bg-01.jpg') }});"></div>
        </div>

        <div class="item">

            <div class="fill img-topo"  style="background-image:url({{ asset('img/bg-02.jpg') }});"></div>
        </div>

        <div class="item">

            <div class="fill img-topo"  style="background-image:url({{ asset('img/bg-03.jpg') }});"></div>
        </div>

        <div class="item">

            <div class="fill img-topo"  style="background-image:url({{ asset('img/bg-04.jpeg') }});"></div>
        </div>
    </div>


</header>

<div class="topo-textos" >

    <div class="container">
        <div class="row">


            <h3 id="title-head">Conheça nossos produtos</h3>
            <div class="">
                <p id="text-head">Lorem ipsum dolor sit amet, natum bonorum expetendis usu ut.
                    Eum impetus offendit disputationi eu, at vim
                    aliquip lucilius praesent. Alia laudem antiopam te ius, sed ad munere integre,
                    ubique facete sapientem nam ut.</p>
                </div>

            </div>
        </div>
    </div>

    <!-- Serviços -->


    <section>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 owl-carousel">

                    {{--<div class="service-item">--}}
                    {{--<img src="{{ asset('img/4.jpg') }}" alt="">--}}

                    {{--@foreach($titulo as $catuaba)--}}
                    {{--<h3>{{ $catuaba->titulo }}</h3>--}}
                    {{--@endforeach--}}

                    {{--<p>Lorem ipsum dolor sit amet, mutat graeco volumus ad eam, singulis patrioque--}}
                    {{--comprehensam nam no. Mei cu dicat voluptaria volumus.</p>--}}
                    {{--</div>--}}

                    @foreach($titulo as $service)
                    <div class="service-item">
                        <h3>{{ $service->titulo }}</h3>
                        <p>
                            {{ $service->texto }}
                        </p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>


    <!-- sobre -->
    <article>
        <div class="container-fluid">
            <aside class="image-bg-fixed-height">
                {{--<aside class="image-bg-fixed-height">--}}
                @foreach($sobre as $sobres)
                <p id="sobre">sobre</p>

                <div class="row">

                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <img src="{{ asset('img/oficina1459571167.jpg') }}" alt="" class="img-responsive" id="fachada-img">
                    </div>

                    <div class="col-sm-6 col-md-7 col-lg-6">

                        <p class="article-sobre">
                            {{ $sobres->principal }}
                        </p>

                        <p class="missao">Missão</p>

                        <p class="article-sobre">
                            {{ $sobres->missao }}
                        </p>

                        <p class="visao">Visão</p>

                        <p class="article-sobre">
                            {{ $sobres->visao }}
                        </p>

                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </article>



    <!-- slogan -->
    <div class="slogan">
        <div class="container-fluid">
            <div class="col-sm-12 col-lg-12">
                <img src="{{ asset('img/logovermelha.svg') }}" alt="" class="">
                <p id="toyopecas-slogan">Empresa especializada em Toyota</p>
            </div>
        </div>
    </div>

    <!-- faixa vermelha -->
    <div class="container-fluid">
        <div class="row">
            <div class="divisor"></div>
        </div>
    </div>
    <!-- produtos -->
    <div class="products" id="produtos">



        <div class="col-sm-12 col-lg-12">
            <p id="produtos-title-section">Produtos</p>
        </div>


        <div class="col-sm-6 col-lg-6 col-md-offset-3">
            <p id="produtos-description-section">
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur,
                adipisci velit, sed quia non numquam.</p>
            </div>


            <div class="col-sm-6 col-lg-6 col-md-offset-3">

                <button class="rectangle1 filter-button" data-filter="all">Todos</button>
                <button class="rectangle filter-button" data-filter="parafuso">Categoria 1</button>
                <button class="rectangle filter-button" data-filter="roela">Categoria 2</button>
                <button class="rectangle filter-button" data-filter="freio">Categoria 3</button>

            </div>


            <div class="container grid-products">
                <div class="row ">

                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop filter parafuso">
                        <img src="{{ asset('img/3.jpg') }}" alt="" class=" products-img">
                        <p>Titulo do produto</p>
                        <button class="btn btn-default">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop filter roela">
                        <img src="{{ asset('img/automotivo_1.png') }}" alt="" class=" products-img">
                        <p>Titulo do produto</p>
                        <button class="btn btn-default">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop filter parafuso">
                        <img src="{{ asset('img/3.jpg') }}" alt="" class=" products-img">
                        <p>Titulo do produto</p>
                        <button class="btn btn-default">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>
                </div> {{-- row products-shop --}}

                <div class="row products-shop">
                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop filter roela">
                        <img src="{{ asset('img/automotivo_1.png') }}" alt="" class=" products-img">
                        <p class="products-name">Titulo do produto</p>
                        <button class="btn btn-default products-cart-btn">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop">
                        <img src="{{ asset('img/3.jpg') }}" alt="" class=" products-img">
                        <p class="products-name">Titulo do produto</p>
                        <button class="btn btn-default products-cart-btn">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4 products-shop filter parafuso">
                        <img src="{{ asset('img/3.jpg') }}" alt="" class=" products-img">
                        <p class="products-name">Titulo do produto</p>
                        <button class="btn btn-default products-cart-btn">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            Adicionar
                        </button>
                    </div>
                </div> {{-- row products-shop --}}

            </div>

        </div>



        <!-- Depoimentos -->
        <div class="testmonials">
            <div class="container">
                <div class="row">

                    <div class="col-sm-10 col-lg-10 col-md-offset-1">
                        <p class="testmonials-content">
                            Nunc velit risus, dapibus non interdum quis,
                            suscipit nec dolor.</p>

                            <p id="testmonials-author">SANTOSH ANAND</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <p id="map"></p>
            </div>
            <!-- Contato -->
            <div class="contato" id="contato">
                <div class="col-sm-12 col-md-12 col-lg-12 ">


                    <div class="container">
                        <div class="row">
                            <p id="contact-title">
                                Contato
                            </p>

                            <div class="col-md-6 col-md-offset-3">
                                <p id="contact-description">
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet consectetur, adipisci velit, sed quia non numquam.
                                </p>
                            </div>
                            <div class="form">
                                <form role="form" class=" col-sm-7 col-md-7 col-xs-12 col-md-offset-3">

                                    <div class="form-group">
                                        <input id="name" name="name" type="text" class="form-control input-contact-form" required placeholder="Seu nome">
                                    </div>
                                    <div class="form-group">
                                        <input id="phone" name="phone" type="tel" class="form-control input-contact-form" required placeholder="Seu email">
                                    </div>

                                    <div class="form-group">
                                        <input id="phone" name="phone" type="tel" class="form-control input-contact-form" required placeholder="Assunto">
                                    </div>

                                    <div class="form-group">
                                        <textarea id="message" name="msg" class="form-control input-contact-form" required placeholder="Mensagem"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button class="contact-button">Enviar</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <div class="fooder">
            <p id="footer-author">
                <a href="https://www.facebook.com/Toyope%C3%A7as-e-Servi%C3%A7os-182785745549410">
                    <img src="{{ asset('img/facebook-f.png') }}" alt="Facebook" id="contato-facebook">
                </a>
                <a href="mailto:">
                    <img src="{{ asset('img/email-f.png') }}" alt="E-mail" id="contato-email">
                </a>
                <a href="mailto:">
                    <img src="{{ asset('img/social-media (1).png') }}" alt="E-mail" id="contato-instagram">
                </a>

            </p>
            <p class="footer-content">
                Copyright @ 2017 Toyopeças - Feito pela Mangue Tecnologia
            </p>
        </div>

        <!-- Js -->
        @section('post-script')
        <script>

            $('.carousel').carousel({
interval: 5000 //changes the speed
})

            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop:true,
                margin:20,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                        nav:false
                    },
                    600:{
                        items:3,
                        nav:false
                    },
                    1000:{
                        items:3,
                        nav:true,
                        loop:true
                    }
                },
                nav: true,
                navText: ["<img src='{{ asset('img/icons/ic_arrow_back_white_18px.svg') }}' style='height: 3em;'>",
                "<img src='{{ asset('img/icons/ic_arrow_forward_white_18px.svg') }}' style='height: 3em;'>"]
            });

            $(window).scroll(function() {
                if ($(document).scrollTop() > 10) {
                    $('nav').addClass('shrink');
                } else {
                    $('nav').removeClass('shrink');
                }
            });

            $('.carousel').carousel()



            $(document).ready(function(){

                $(".filter-button").on('click',function(){
                    var value = $(this).attr('data-filter');

                    if(value == "all")
                    {
                        $('.filter').removeClass('hidden');
                        $('.filter').show('1000');
                        $('.filter-button').removeClass('ativado');
                    }
                    else
                    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
$(".filter").not('.'+value).hide('3000');
$('.filter').filter('.'+value).show('3000');
$('.filter-button').addClass('ativado');


}
});

            });

            $(document).ready(function(){
                $('.filter-button').click(function(){
                    $(this).addClass('ativado');
                });
            });
        </script>

        <script type="text/javascript">

            var map;
            //var info = new google.maps.InfoWindow({maxWidth: 200});
            var maker = google.maps.Marker({
                title: 'Toyopeças Recife - PE',
                icon: 'img/marker.png',
                position: new google.maps.Lating('-8.1249605', '-34.9156716')
            });

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -8.1249605, lng: -34.9156716},
                    zoom: 20,
                    scrollwheel: false
                });
            }
            marker.setMap(map);

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaavuqu-R_ycB5Y8m86FHcLSnZavbx3k&callback=initMap"
                async defer></script>
        @endsection
