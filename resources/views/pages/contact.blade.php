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
                            <li>
                                <a href="blog">
                                    <span>Blog</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li class="active">
                                <a href="contacto">
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
                <figure class="g_map">
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Dr.%20Manuel%20Nava%20%23%208%2C%20Zona%20Universitaria%20poniente%2C%20C.P.%2078290%2C%20San%20Luis%20Potos%C3%AD%2C%20S.L.P%2C%20M%C3%A9xico&key=AIzaSyDtoXbvnzu2iTYSJxGkJkuXFL1L0Cs9EVQ" allowfullscreen>
                    </iframe>
                </figure>
                <div class="row">
                    <div class="col-md-4">
                        <h2>How To Find Us</h2>
                        <div class="padding5">
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio.
                            </p>
                            <p>
                                Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orc sem. Duis ultricies pharetra magna. Donec accumsan malesu.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h2>Contact Form</h2>
                        {!! Form::open(array('id' => 'form1')) !!}
                            <div class="success" style="display: none;"> Contact form submitted! We will be in touch soon.</div>
                            <fieldset>
                                <label class="name">
                                    {!! Form::text(null, null, array('placeholder' => 'Name:')) !!}
                                    <span class="error" style="display: none;">*This is not a valid name.</span>
                                    <span class="empty" style="display: none;">*This field is required.</span>
                                </label>
                                <label class="email labelMargin">
                                    {!! Form::email(null, null, array('placeholder' => 'Email:')) !!}
                                    <span class="error" style="display: none;">*This is not a valid email address.</span>
                                    <span class="empty" style="display: none;">*This field is required.</span>
                                </label>
                                <label class="phone labelMargin">
                                    {!! Form::tel(null, null, array('placeholder' => 'Phone:')) !!}
                                    <span class="error" style="display: none;">*This is not a valid phone number.</span>
                                    <span class="empty" style="display: none;">*This field is required.</span>
                                </label>
                                <label class="message">
                                    {!! Form::textarea(null, null, ['placeholder' => 'Message:']) !!}
                                    <span class="error" style="display: none;">*The message is too short.</span>
                                    <span class="empty" style="display: none;">*This field is required.</span>
                                </label>
                                <div class="clearfix"></div>
                                <div class="btns">
                                    <p>
                                        <a href="#" class="btn btn-link" data-type="submit">
                                            submit<span></span>
                                        </a>
                                        <a href="#" class="btn btn-link" data-type="reset">
                                            clear<span></span>
                                        </a>
                                    </p>
                                </div>
                            </fieldset>
                        {!! Form::close() !!}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection