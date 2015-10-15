@extends('base.appframe')

@section('menu')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar" id="navigation">
                <div class="navbar-inner container">
                    <div class="navbar-collapse collapse">
                        <ul class="sf-menu sf-js-enabled">
                            <li>
                                <a href="{{ url('/') }}">
                                    <span>Home</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="sub-menu">
                                <a href="{{ url('que-es-nume') }}">
                                    <span>¿Qué es Nume?</span>
                                </a>
                                <strong></strong>
                                <ul class="nav sub-menu" style="display: none;">
                                    <li>
                                        <a href="#">Acerca de</a> 
                                    </li>
                                    <li>
                                        <a href="#">Perfiles y necesidades</a>
                                    </li>
                                    <li class="last">
                                        <a href="#">Servicio</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href="{{ url('nutricion') }}">
                                    <span>Nutrición</span>
                                </a>
                                <strong></strong>
                                <ul class="nav sub-menu" style="display: none;">
                                    <li>
                                        <a href="#">Su ciencia</a> 
                                    </li>
                                    <li>
                                        <a href="#">Vida saludable</a>
                                    </li>
                                    <li class="last">
                                        <a href="#">Consejos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('blog') }}">
                                    <span>Blog</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="active">
                                <a href="{{ url('contacto') }}">
                                    <span>Contacto</span>
                                </a>
                                <strong></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <select class="select-menu form-control" id="mobile-menu" style="display: none;">
                <option value="#">Ir a...</option>
                <option value="/"> · Home</option>
                <option value="que-es-nume"> · ¿Qué es Nume?</option>
                <option value="nutricion"> · Nutrición</option>
                <option value="#blog"> · Blog</option>
                <option value="contacto" selected="selected"> · Contacto</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="brand">
                <a href="{{ url('/') }}">
                    <img class="img-responsive center-block" src="{{ asset('assets/images/home/logo.png') }}" alt="">
                </a>
            </h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8" style="text-align:center;">
                <hr class="margin1">
                <br>
				        <h1 id="subtitulo" style="text-transformation:none !important; font-family:raleway; font-weght:bold;">
                  Gracias por contactarnos, pronto nos comunicaremos para resolver tus dudas.
                </h1>
                <br>
                <p>
                    <a href="{{ url('registro') }}" class="btn btn-default btn-link" style="font-size:20px;">Quiero registrarme<span></span></a>
                </p>
                <br>
                <hr class="margin1">
            </div>
        </div>
    </div>
</div>
@endsection