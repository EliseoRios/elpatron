<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ElPatrón | Home</title>
    <link  rel="icon" href="{{ asset('templates/agencygh/img/logos/logo-120.png') }}">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('templates/agencygh/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('templates/agencygh/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{ asset('templates/agencygh/css/agency.min.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><small>Tostadas </small>El Patrón</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse pull-right" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Galeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Conocenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('login') }}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in" style="color: transparent;">Bienvenido!</div>
          <div class="intro-heading" style="color: transparent;">ElPatrón</div>
          <a class="btn btn-xl js-scroll-trigger" href="#services">CONOCENOS</a>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Servicios</h2>
            <h6>Venta y distribución de tostada elaborada con los más altos estándares de calidad.</h6>
          </div>
        </div><br><br>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-shopping-basket fa-stack-2x text-primary"></i>
            </span>
            <h4 class="service-heading">Venta a público</h4>
            <p class="text-muted">Venta a minoristas y público en general.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-handshake-o fa-stack-2x text-primary"></i>
            </span>
            <h4 class="service-heading">Trato personalizado</h4>
            <p class="text-muted">Acuerdos y precios especiales para clientes mayoristas.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-truck fa-stack-2x text-primary"></i>
            </span>
            <h4 class="service-heading">Distribución</h4>
            <p class="text-muted">Venta a mayoristas  y entrega a domicilio.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services -->

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Galeria</h2>
            <h3 class="section-subheading text-muted">La mejor tostada hecha en Jalisco, utilizala para darle ese toque especial y crujiente en todos tus platillos, pidelas en tu tienda favorita!.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/1.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/2.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/3.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/4.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/5.jpg')}}" alt="">
            </a>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href="#portfolio">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('templates/agencygh/img/portfolio/6.jpg')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Portfolio Grid -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Quiénes Somos</h2>
            <h3 class="section-subheading text-muted">Tostadas El Patrón, gracias por hacernos parte de tu familia!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{ asset('templates/agencygh/img/about/1.jpg') }}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">NUESTRA MISIÓN</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Cubrir las necesidades del mercado local, entregando a nuestros clientes en todo momento productos de la mejor calidad y sabor a un precio razonable, y ser distinguidos por nuestro servicio y calidad humana!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{ asset('templates/agencygh/img/about/3.jpg') }}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">NUESTRA VISIÓN</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Ser reconocidos por nuestros clientes, proveedores y colaboradores como una empresa competitiva e innovadora, buscando siempre el bien común!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{ asset('templates/agencygh/img/about/4.jpg') }}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">NUESTROS VALORES</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                      <ul class="text-muted">
                          <li>Honestidad</li>
                          <li>Responsabilidad</li>
                          <li>Servicio</li>
                          <li>Trabajo en equipo</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Sé parte
                    <br>De nuestra
                    <br>Historia!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- /About -->

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#" >
              <img class="img-fluid d-block mx-auto pull-right" src="{{ asset('templates/agencygh/img/logos/elpatron-label.jpg')}}" alt="ElPatrón">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Clients -->


    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contactenos</h2>
            <h3 class="section-subheading text-muted">Dudas, quejas, sugerencias y pedidos.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nombre *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Dirección email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Teléfono" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Mensaje *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center" >
                    <div id="success"></div>
                    <button id="sendMessageButton" class="btn btn-xl" type="submit" style="width: 100%;">Enviar</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <h3 style="color: #FFFFFF; margin-top: 40px;">Domicilio</h3>
                  <p style="color: #E6E3E3;">Genovevo Rivas Guillén 883, Talpita, 44719 Guadalajara, Jal.</p>
                  <p style="color: #E6E3E3;">Cel. (044) 331-191-1148</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14930.671213939471!2d-103.3061036!3d20.6830898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92f6e9a92b548e4d!2sTostadas+El+Patron!5e0!3m2!1ses!2smx!4v1507434584291" width="100%" height="368" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /Contact -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Totasdas "ElPatrón" 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Distribuidora-Tostadas-El-Patr%C3%B3n-999462836772854/" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Terminos de uso</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('templates/agencygh/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('templates/agencygh/vendor/popper/popper.min.js')}}"></script>
    <script src="{{ asset('templates/agencygh/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('templates/agencygh/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{ asset('templates/agencygh/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('templates/agencygh/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('templates/agencygh/js/agency.min.js')}}"></script>

  </body>

</html>
