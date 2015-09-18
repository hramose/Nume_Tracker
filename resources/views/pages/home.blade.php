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
                                <a href="/">
                                    <span>Home</span>
                                </a>
                                <strong></strong>
                                <!--<ul class="nav sub-menu" style="display: none;">
                                    <li>
                                        <a href="#">mission</a> 
                                    </li>
                                    <li>
                                        <a href="#">our recipes</a>
                                    </li>
                                    <li class="last sub-menu">
                                        <a href="#">news</a>
                                        <ul class="nav sub-menu" style="display: none;">
                                            <li>
                                                <a href="#">fresh</a>
                                            </li>
                                            <li class="last">
                                                <a href="#">archive</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>-->
                            </li>
                            <li>
                                <a href="#">
                                    <span>¿Qué es Nume?</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Nutrición</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Blog</span>
                                </a>
                                <strong></strong>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Contacto</span>
                                </a>
                                <strong></strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <select class="select-menu form-control" style="display: none;">
                <option value="#" selected="selected">Ir a...</option>
                <option value="#">Home</option>
                <option value="#">¿Qué es Nume?</option>
                <option value="#">Nutrición</option>
                <option value="#">Blog</option>
                <option value="#">Contacto</option>
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="center-block" src="assets/images/home/slider1.jpg" alt="Chania">
        </div>

        <div class="item">
          <img class="center-block" src="assets/images/home/slider2.jpg" alt="Chania">
        </div>

        <div class="item">
          <img class="center-block" src="assets/images/home/slider3.jpg" alt="Flower">
        </div>

        <div class="item">
          <img class="center-block" src="assets/images/home/slider4.jpg" alt="Flower">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="extra">Useful Tips For</h2>
                <ul class="list1 row">
                    <li class="col-sm-3 max-height" style="height: 284px;">
                        <div class="box_inner">
                            <span class="badge">
                                <img src="assets/images/home/page1_icon1.png" alt="">
                            </span>
                            <p>Ersvitae ertyas nemosera lasecaerat niptaiades keuytaser asetraseas goetayse.</p>
                            <p><a href="#" class="btn">more</a></p>
                        </div>
                    </li>
                    <li class="col-sm-3 max-height" style="height: 284px;">
                        <div class="box_inner">
                            <span class="badge">
                                <img src="assets/images/home/page1_icon2.png" alt="">
                            </span>
                            <p>Vertasdera nveriti vitaesaert asetyertya aset aplicabrde ertyas adesferas niuyras.</p>
                            <p><a href="#" class="btn">more</a></p>
                        </div>
                    </li>
                    <li class="col-sm-3 max-height" style="height: 284px;">
                        <div class="box_inner">
                            <span class="badge">
                                <img src="assets/images/home/page1_icon3.png" alt="">
                            </span>
                            <p>Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyas nemo eniptaiades.</p>
                            <p><a href="#" class="btn">more</a></p>
                        </div>
                    </li>
                    <li class="col-sm-3 max-height" style="height: 284px;">
                        <div class="box_inner">
                            <span class="badge">
                                <img src="assets/images/home/page1_icon4.png" alt="">
                            </span>
                            <p>Katrseasa nveriti vitaesaert asetyertya aset aplicabrde ertyas nemo eniptaiades.</p>
                            <p><a href="#" class="btn">more</a></p>
                        </div>
                    </li>
                </ul>
                <hr>
                <ul class="list2 row">
                    <li class="col-sm-6 max-height" style="height: 138px;">
                        <div class="box_inner">
                            <div>
                                <h2>Diet <span>Secrets</span></h2>
                                <h3>migytafsas lhtfasane feryuasa keryaseares</h3>
                                <p>Vitaesaert asetyertya aset aplicabrde vaeciegast nveriti vrtyas</p>
                                <p>
                                    <a href="#" class="btn btn-link">learn more<span></span></a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-6 max-height" style="height: 138px;">
                        <div class="box_inner">
                            <div>
                                <h2>Top <span>10 diets</span></h2>
                                <h3>vehtfasane feryuasa kerymigyt afsasera</h3>
                                <p>Beciegast nveriti vitaesaert asetyertya aset aplicabrde ertyas</p>
                                <p>
                                    <a href="#" class="btn btn-link">learn more<span></span></a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-6 preLast max-height" style="height: 138px;">
                        <div class="box_inner">
                            <div>
                                <h2>Best <span>Results</span></h2>
                                <h3>deuasa keryaseares migytafsas lhtfasane</h3>
                                <p>Masgsset aplicabrde vaeciegast ntyas aert asetyertya </p>
                                <p>
                                    <a href="#" class="btn btn-link">learn more<span></span></a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-sm-6 last max-height" style="height: 138px;">
                        <div class="box_inner">
                            <div>
                                <h2>What's <span>Your BMI?</span></h2>
                                <h3>kerymigyt afsasera vehtfasane feryuasa</h3>
                                <p>Asetyertya aset aplicabrde ertyaseciegast nveriti vitaesaersa</p>
                                <p>
                                    <a href="#" class="btn btn-link">learn more<span></span></a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection