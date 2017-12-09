<html lang="portuguese-bralizian">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">

        <title>MyDailyTraining - Sistema para Gerenciamento de Academias</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('assets/layout/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/css/planos.css'); ?>" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="<?php echo base_url('assets/layout/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Plugin CSS -->
        <link href="<?php echo base_url('assets/layout/vendor/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('assets/layout/css/freelancer.min.css'); ?>" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Menu -->
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MyDailyTraining</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse text-uppercase" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#planos">Planos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#equaltech">EqualTech</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contatos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="masthead bg-white text-secondary text-center">
            <div class="container">
                <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo base_url('assets/imagens/Icon.png'); ?>" alt="" style="height: 50%;">
                <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
                <hr class="star-light">
                <h2 class="font-weight-light mb-0">Web Developer - Graphic Artist - User Experience Designer</h2>
            </div>
        </header>


        <!-- SEÇÃO DOS PLANOS -->
        <section>

            <div class="wrap">


                <div class="pricing-grids">

                    <!-- PPLANO BÁSICO -->
                    <div class="pricing-grid1">
                        <div class="price-value one">
                            <h3><a href="#">BÁSICO</a></h3>
                            <h5><span>R$ 50,00</span><lable> por Mês</lable></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li class="whyt"><a href="#">5GB Disk Space </a></li>
                                <li><a href="#">10 Domain Names</a></li>
                                <li class="whyt"><a href="#">5 E-Mail Address </a></li>
                                <li><a href="#">50GB Monthly Bandwidth </a></li>
                                <li class="whyt"><a href="#">Fully Support</a></li>
                            </ul>
                            <div class="cart1">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Comprar</a>
                            </div>
                        </div>
                    </div>

                    <!-- PPLANO BÁSICO -->
                    <div class="pricing-grid2">
                        <div class="price-value two">
                            <h3><a href="#">MÉDIO</a></h3>
                            <h5><span>$ 29.99</span><lable> / month</lable></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li class="whyt"><a href="#">10GB Disk Space </a></li>
                                <li><a href="#">20 Domain Names</a></li>
                                <li class="whyt"><a href="#">10 E-Mail Address </a></li>
                                <li><a href="#">100GB Monthly Bandwidth </a></li>
                                <li class="whyt"><a href="#">Fully Support</a></li>
                            </ul>
                            <div class="cart2">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <!-- PPLANO AVANÇADO -->
                    <div class="pricing-grid3">
                        <div class="price-value three">
                            <h4><a href="#">AVANÇADO</a></h4>
                            <h5><span>$ 49.99</span><lable> / month</lable></h5>
                        </div>
                        <div class="price-bg">
                            <ul>
                                <li class="whyt"><a href="#">50GB Disk Space </a></li>
                                <li><a href="#">50 Domain Names</a></li>
                                <li class="whyt"><a href="#">20 E-Mail Address </a></li>
                                <li><a href="#">300GB Monthly Bandwidth </a></li>
                                <li class="whyt"><a href="#">Fully Support</a></li>
                            </ul>
                            <div class="cart3">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Purchase</a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"> </div>
                    <!--pop-up-grid-->
                    <div id="small-dialog" class="mfp-hide">
                        <div class="pop_up">
                            <div class="payment-online-form-left">
                                <form>
                                    <h4><span class="shipping"> </span>Shipping</h4>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Frist Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Frist Name';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Last Name';
                                                }"></li>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Email';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Company Name';
                                                }"></li>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Phone';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Address';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <div class="clear"> </div>
                                    <ul class="payment-type">
                                        <h4><span class="payment"> </span> Payments</h4>
                                        <li><span class="col_checkbox">
                                                <input id="3" class="css-checkbox1" type="checkbox">
                                                <label for="3" name="demo_lbl_1" class="css-label1"> </label>
                                                <a class="visa" href="#"> </a>
                                            </span>

                                        </li>
                                        <li>
                                            <span class="col_checkbox">
                                                <input id="4" class="css-checkbox2" type="checkbox">
                                                <label for="4" name="demo_lbl_2" class="css-label2"> </label>
                                                <a class="paypal" href="#"> </a>
                                            </span>
                                        </li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Card Number';
                                                }"></li>
                                        <li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Name on card';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul>
                                        <li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Expiration Date';
                                                }"><em class="pay-date"> </em></li>
                                        <li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Security Code';
                                                }"></li>
                                        <div class="clear"> </div>
                                    </ul>
                                    <ul class="payment-sendbtns">
                                        <li><input type="reset" value="Cancel"></li>
                                        <li><input type="submit" value="Process order"></li>
                                    </ul>
                                    <div class="clear"> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--pop-up-grid-->
                </div>
                <div class="clear"> </div>

            </div>
        </div>
    </section>




    <section class="bg-primary text-white mb-0" id="planos">
        <!--<div class="inner-block">
             <div class="price-block-main">-->
        <div class="wrap">
            <div class="pricing-grids">
                <div class="price-tables">
                    
                    
                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr1">
                                <h4>Basic</h4>
                                <h3><span class="usa-dollar">$</span> 5<span class="per-month">/mon</span></h3>
                                <h5>Free for 15days</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>1Gb Disk</li>
                                        <li>10Gb Bandwidth Monthly</li>
                                        <li>2 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr1">		    			   
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr2">
                                <h4>Professional</h4>
                                <h3><span class="usa-dollar">$</span> 10<span class="per-month">/mon</span></h3>
                                <h5>Free for 2 months</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>3Gb Disk</li>
                                        <li>25Gb Bandwidth Monthly</li>
                                        <li>5 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr2">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr3">
                                <h4>Premium</h4>
                                <h3><span class="usa-dollar">$</span> 12<span class="per-month">/mon</span></h3>
                                <h5>Free for 9 months</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>5Gb Disk</li>
                                        <li>50Gb Bandwidth Monthly</li>
                                        <li>10 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr3">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr1">
                                <h4>Basic</h4>
                                <h3><span class="usa-dollar">$</span> 5<span class="per-month">/mon</span></h3>
                                <h5>Free for 15days</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>1Gb Disk</li>
                                        <li>10Gb Bandwidth Monthly</li>
                                        <li>2 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr1">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr2">
                                <h4>Professional</h4>
                                <h3><span class="usa-dollar">$</span> 10<span class="per-month">/mon</span></h3>
                                <h5>Free for 2 months</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>5Gb Disk</li>
                                        <li>50Gb Bandwidth Monthly</li>
                                        <li>5 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr2">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 price-grid">
                        <div class="price-block">
                            <div class="price-gd-top pric-clr3">
                                <h4>Premium</h4>
                                <h3><span class="usa-dollar">$</span> 12<span class="per-month">/mon</span></h3>
                                <h5>Free for 9 months</h5>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>5Gb Disk</li>
                                        <li>50Gb Bandwidth Monthly</li>
                                        <li>10 Email Account</li>
                                        <li>Unlimited Sub Domains</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-selet pric-clr3">
                                <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/cake.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/circus.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/game.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/safe.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                        <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                            <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">About</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="#">
                    <i class="fa fa-download mr-2"></i>
                    Download Now!
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Name</label>
                                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">2215 John Daniel Drive
                        <br>Clark, MO 65243</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                <i class="fa fa-fw fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Your Website 2017</small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
        <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
                <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
                        <hr class="star-dark mb-5">
                        <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                        <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                            <i class="fa fa-close"></i>
                            Close Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/layout/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/layout/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/layout/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/layout/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('assets/layout/js/jqBootstrapValidation.js'); ?>"></script>
    <script src="<?php echo base_url('assets/layout/js/contact_me.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/layout/js/freelancer.min.js'); ?>"></script>

</body>

</html>
