@extends('base.appframe')

@section('menu')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="navbar" id="navigation">
                <div class="navbar-inner container">
                    <div class="navbar-collapse collapse">
                        <ul class="sf-menu sf-js-enabled">
                            <li class="active">
                                <a href="perfil">
                                    <span>Perfil</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="historia-clinica">
                                    <span>HCN</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="agendar-cita">
                                    <span>Agendar cita</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="seguimiento">
                                    <span>Seguimiento</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="historial">
                                    <span>Historial</span>
                                </a>
                                <strong></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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

@endsection