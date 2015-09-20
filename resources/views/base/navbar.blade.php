<style>
  .navbar-brand { position: relative; z-index: 2; }
  .navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; }
  .navbar .navbar-collapse { position: relative; }
  .navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
  .navbar.navbar-inverse .nav-collapse { background-color: #222; }
  .nav-collapse>li { float: right; }
  .btn.btn-circle { border-radius: 50px; }
  .btn.btn-outline { background-color: transparent; }
  #home{ opacity:0.6; margin-top:-5px;}
  #home:hover{ opacity:1; }

  @media screen and (max-width: 767px) {
      .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
      .nav-collapse>li { float: none; }
      #navbar-collapse-x{ height: 203px; }
      #user{ text-align: left; }
  }
</style>
<div class="container-fluid" style="font-family:raleway; padding:0px;">
    <!-- Second navbar for profile settings -->
    <nav class="navbar navbar-inverse" style="border-radius:0px; background-color:#303030 !important;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-x">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" style="font-weight:bolder;">Nume Tracker</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-x">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><img class="img-circle" src="assets/images/base/home-icon.png" alt="home" width="20" id="home"/></a></li>
            <li><a href="#" style="font-weight:bolder;">Iniciar sesión</a></li>
            <li><a href="#">Registrarte</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse-h" aria-expanded="false" aria-controls="nav-collapse-h">Toggle test <i class=""></i> </a>
            </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse" role="search" id="nav-collapse-h">
            <li class="dropdown" id="user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="padding-bottom:9px; padding-top:11px;">
                <img class="img-circle" src="http://drive.google.com/uc?export=view&id=0B_fLKKln2IZHMWxtNVo5bllBLUU" alt="J Luis" width="30" style="margin-right:10px;"/> J Luis <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">My profile</a></li>
                <li><a href="#">Favorited</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Cerrar sesión</a></li>
              </ul>
            </li>
            <li><a href="/"><img class="img-circle" src="assets/images/base/home-icon.png" alt="home" width="20" id="home"/></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->