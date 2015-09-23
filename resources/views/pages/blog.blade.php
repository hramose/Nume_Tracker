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
                                <a href="/">
                                    <span>Home</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="sub-menu">
                                <a href="que-es-nume">
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
                                <a href="nutricion">
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
                            <li class="active">
                                <a href="blog">
                                    <span>Blog</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="contacto">
                                    <span>Contacto</span>
                                </a>
                                <strong></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <select class="select-menu form-control" style="display: none;">
                <option value="#">Ir a...</option>
                <option value="#"> · Home</option>
                <option value="#"> · ¿Qué es Nume?</option>
                <option value="#"> · Nutrición</option>
                <option value="#" selected="selected"> · Blog</option>
                <option value="#"> · Contacto</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="brand">
                <a href="/">
                    <img class="img-responsive center-block" src="assets/images/home/logo.png" alt="">
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
            <div class="col-md-12">
                <hr class="margin1">
                <iframe src ="http://numetracker.blogspot.mx/" width="100%" height="900" style="border:0px;">
            </div>
        </div>
    </div>
</div>
@endsection