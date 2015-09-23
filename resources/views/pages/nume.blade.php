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
                            <li class="active sub-menu">
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
                <option value="#" selected="selected"> · ¿Qué es Nume?</option>
                <option value="#"> · Nutrición</option>
                <option value="#"> · Blog</option>
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
            <div class="col-sm-12">
                <hr class="margin1">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Why Is Nutrition Important?</h2>
                        <ul class="list5">
                            <li>
                                <img src="assets/images/nume/page2_pic1.jpg" alt="">
                                <h3><a href="#">feryuasa kerymigyt </a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore <a href="#">[...]</a>
                                </p>
                            </li>
                            <li>
                               <img src="assets/images/nume/page2_pic2.jpg" alt="">
                                <h3><a href="#">minima veniam quis</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore <a href="#">[...]</a>
                                </p>
                            </li>
                            <li class="right">
                                <img src="assets/images/nume/page2_pic3.jpg" alt="">
                                <h3><a href="#">iure reprehend</a></h3>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore <a href="#">[...]</a>
                                </p>
                            </li>
                        </ul>
                        <hr class="margin2">
                        <h2>What Is The Correct Nutritional Balance?</h2>
                        <img src="assets/images/nume/page2_pic4.jpg" alt="" class="margin3 pull-left img-responsive">
                        <div class="padding1">
                            <h3 class="margin4">
                                <a href="#">in pede mi, aliquet sit amet, euismod in, auctor ut, ligula aliquam. </a>
                            </h3>
                            <p>
                                Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in.
                            </p>
                            <p class="margin5">
                                Orci luctus et ultrices posuere cubilia curae. Sus pendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hendrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede.
                            </p>
                            <p class="padding2">
                                Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus.
                            </p>
                        </div>
                        <div class="clearfix"></div>    
                    </div>
                    <div class="col-sm-4">
                        <h2>Nutrition Rules</h2>
                        <dl class="dl-horizontal">
                            <dt>1.</dt>
                            <dd>
                                <p><a href="#">porro quisquam est qui</a></p>
                                <p>
                                    Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet.
                                </p>
                            </dd>
                            <dt>2.</dt>
                            <dd>
                                <p><a href="#">sit aspernatur aut odi</a></p>
                                <p>
                                    Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet.
                                </p>
                            </dd>
                            <dt>3.</dt>
                            <dd>
                                <p><a href="#">veniam quis nostrum exercit</a></p>
                                <p>
                                    Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet.
                                </p>
                            </dd>
                        </dl>
                        <a href="#" class="bannerBlock"><img class="img-responsive" src="assets/images/nume/page2_pic5.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection