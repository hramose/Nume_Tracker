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
                            <li class="active sub-menu">
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
            <select class="select-menu form-control" id="mobile-menu" style="display: none;">
                <option value="#">Ir a...</option>
                <option value="/"> · Home</option>
                <option value="que-es-nume"> · ¿Qué es Nume?</option>
                <option value="nutricion" selected="selected"> · Nutrición</option>
                <option value="blog"> · Blog</option>
                <option value="contacto"> · Contacto</option>
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
            <div class="col-sm-12">
                <hr class="margin1">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Weight Loss Systems</h2>
                        <p>
                            Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam.
                        </p>
                        <p class="margin10">
                            Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante.
                        </p>
                        <hr class="margin2">
                        <h2>Testimonials</h2>
                        <blockquote>
                            Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermen tum nisl. Mauris accumsan nulla..."
                        </blockquote>
                        <p class="author pull-right margin13">Mark Johnson</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-8">
                        <h2>Weight Reduction Programs</h2>
                        <ul class="list8">
                            <li>
                                <img src="assets/images/nutricion/page4_pic1.jpg" alt="">
                                <div>
                                    <h3>
                                        <a href="#">
                                            the better butt diet: super 6-week plan
                                        </a>
                                    </h3>
                                    <p>
                                        Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci.
                                    </p>
                                    <p>
                                        <a href="#" class="btn">more</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nutricion/page4_pic2.jpg" alt="">
                                <div>
                                    <h3>
                                        <a href="#">
                                            eat what you like with personalized menus
                                        </a>
                                    </h3>
                                    <p>
                                        Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci.
                                    </p>
                                    <p>
                                        <a href="#" class="btn">more</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="assets/images/nutricion/page4_pic3.jpg" alt="">
                                <div>
                                    <h3>
                                        <a href="#">
                                            lose weight with the automatic weight loss system®
                                        </a>
                                    </h3>
                                    <p>
                                        Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci.
                                    </p>
                                    <p>
                                        <a href="#" class="btn">more</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr class="margin1">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Diets A-Z</h2>
                        <ul class="list7 margin12">
                            <li><a href="#">Atkins Diet</a></li>
                            <li><a href="#">Baby Food Diet</a></li>
                            <li><a href="#">Belly Fat Cure</a></li>
                            <li><a href="#">Best Life Diet</a></li>
                            <li><a href="#">Big Breakfast Diet</a></li>
                            <li><a href="#">Biggest Loser Diet</a></li>
                            <li><a href="#">Biggest Loser Simple Swaps</a></li>
                            <li><a href="#">Body for Life</a></li>
                            <li><a href="#">Brown Fat Revolution</a></li>
                            <li><a href="#">Cabbage Soup Diet</a></li>
                            <li><a href="#">The Carb Lovers Diet</a></li>
                            <li><a href="#">The Caveman (Paleo) Diet</a></li>
                            <li><a href="#">Cheater’s Diet</a></li>
                            <li><a href="#">Cookie Diet</a></li>
                            <li><a href="#">The Diet Solution</a></li>
                            <li><a href="#">Dr. Phil's Ultimate Weight Solution</a></li>
                            <li><a href="#">Dukan Diet</a></li>
                            <li><a href="#">The Eat- Clean Diet</a></li>
                            <li><a href="#">Eat Right for Your Type</a></li>
                            <li><a href="#">Eat This, Not That</a></li>
                            <li><a href="#">Eat What You Love</a></li>
                            <li><a href="#">Eco Atkins Diet</a></li>
                            <li><a href="#">Fast Food Diet</a></li>
                            <li><a href="#">Fat Smash Diet</a></li>
                            <li><a href="#">Flat Belly Diet</a></li>
                            <li><a href="#">Flexitarian Diet</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <h2>Healthy Eating &amp; Diets</h2>
                        <ul class="list6 row">
                            <li class="col-sm-4">
                                <img src="assets/images/nutricion/page3_pic1.jpg" alt="">
                                <div>
                                    <p>Share your top fall fruit recipes</p>
                                    <p><a href="#" class="btn">more</a></p>
                                </div>
                            </li>
                            <li class="col-sm-4">
                                <img src="assets/images/nutricion/page3_pic2.jpg" alt="">
                                <div>
                                    <p>Easy, healthy brown bag lunch ideas</p>
                                    <p><a href="#" class="btn">more</a></p>
                                </div>
                            </li>
                            <li class="col-sm-4">
                                <img src="assets/images/nutricion/page3_pic3.jpg" alt="">
                                <div>
                                    <p>Vitamins and supplements: what should you take?</p>
                                    <p><a href="#" class="btn">more</a></p>
                                </div>
                            </li>
                            <li class="col-sm-4">
                                <img src="assets/images/nutricion/page3_pic4.jpg" alt="">
                                <div>
                                    <p>Best ways to spruce up your salads</p>
                                    <p><a href="#" class="btn">more</a></p>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <hr class="margin7">
                        <h2 class="margin9">Expert Answers to Your Diet Questions</h2>
                        <img src="assets/images/nutricion/page3_pic5.jpg" alt="" class="pull-left margin6">
                        <div>
                            <h3><a href="#">neque porro quisquam est, qui dolorem ips?</a></h3>
                            <p>
                                Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl.
                            </p>
                            <h3><a href="#">ab illo inventore veritatis et quasi architecto?</a></h3>
                            <p class="noBottom">
                                Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac?
                            </p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row padding3">
                            <div class="col-sm-6">
                                <ul class="list7">
                                    <li><a href="#">Proin dictum elementum velit</a></li>
                                    <li><a href="#">Fusce euismod consequat ante</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet consec</a></li>
                                    <li><a href="#">tetuer adipiscing elit Pellen</a></li>
                                    <li><a href="#">Aliquam congue fermentum nisl</a></li>
                                    <li><a href="#">Mauris accumsan nulla ve</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list7">
                                    <li><a href="#">Lorem ipsum dolor sit amet consec</a></li>
                                    <li><a href="#">tetuer adipiscing elit Pellen</a></li>
                                    <li><a href="#">Aliquam congue fermentum nisl</a></li>
                                    <li><a href="#">Mauris accumsan nulla ve</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection