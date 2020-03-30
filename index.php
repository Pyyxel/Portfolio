<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VASSAUX Axel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <script src="vendor/fontawesome/js/fontawesome.js"></script>
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

</head>

<body>
    <!--loader-->
    <div class="loader hiden mx-auto">
        <img src="img/loader.gif" class="mx-auto img-fluid img-l" alt="loading" />
    </div>
    <!--to the top button-->
    <a id="button"></a>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container"><a href="#intro" class="navbar-brand scrollTo">VASSAUX Axel</a>
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
                <div id="navbarcollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Introduction</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link link-scroll">A propos</a></li>
                        <!--<li class="nav-item"><a href="#testimonials" class="nav-link link-scroll">Testimonials</a></li>-->
                        <li class="nav-item"><a href="#references" class="nav-link link-scroll">Mes projets</a></li>
                        <li class="nav-item"><a href="#tips" class="nav-link link-scroll">Mes tips</a></li>
                        <!--<li class="nav-item"><a href="#customers" class="nav-link link-scroll">Clients</a></li>-->
                        <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
                        <li class="nav-item"><a href="#carte" class="nav-link link-scroll">Carte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Intro Image-->
    <section id="intro" style="background: url(img/home.jpg) center center no-repeat; background-size: cover;"
        class="intro-section pb-2">
        <div class="container text-center">
            <div data-animate="fadeInDown" class="logo"><img src="img/logo.jpg" alt="logo" width="130"></div>
            <h1 data-animate="fadeInDown" class="text-shadow mb-5">Bonjour ! </h1>
            <p data-animate="slideInUp" class="h3 text-shadow text-400">Je suis dans la formation Simplon.</p>
        </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
        <div class="container">
            <header class="text-center">
                <h2 data-animate="fadeInDown" class="title">A propos</h2>
            </header>
            <div class="row">
                <div data-animate="fadeInUp" class="col-lg-6">
                    <p>Je m"appelle Axel j'ai eu mon bac S option SVT spécialitée Physique-chimie en 2017.</p>
                    <p>Je suis allé a l'université en licence informatique pendant 2 ans et demi, j'ai arrété en cours
                        de deuxième année.</p>
                    <p>Et a l'heure actuelle je suis la formation Simplon Charleville-Mézières, développeur web</p>
                    <p>Je suis en possession du permis B (voiture).</p>
                    <p>En plus d'être passionné d'informatique, je pratique aussi l'aquariophilie.</p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-6">
                    <div class="skill-item">
                        <div class="progress-title">PHP</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 5%" aria-valuenow="0" aria-valuemin="60"
                                aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">Javascript</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 5%" aria-valuenow="70" aria-valuemin="60"
                                aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">HTML coding</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 5%" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="progress-title">JAVA</div>
                        <div class="progress">
                            <div role="progressbar" style="width: 30%" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
                        </div>
                    </div>
                    <!--<div class="skill-item">
              <div class="progress-title">
                ????
              </div>
              <div class="progress">
                <div role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5">
                </div>
              </div>
            </div>-->
                </div>
                <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="img/identite.jpg"
                        alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>
            </div>
        </div>
    </section>
    <!-- Testimonials
    <section id="testimonials" class="testimonials-section bg-gray">
      <div class="container">
        <header class="text-center mb-2">
          <h2 data-animate="fadeInUp" class="title">My customers said<br><span>about me</span></h2>
          <p data-animate="fadeInUp" class="lead">I am always glad to hear that my customers leave satisfied. Some of them shared with you their insights on our cooperation.</p>
        </header>
        <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-1.jpg">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What is happened to me? &quot; he thought. It was not a dream.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-2.jpg">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-3.jpg">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-4.jpg">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-4.jpg">
                  <h5>John McIntyre</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  -->
    <!-- Statistics
    <section id="statistics" data-dir="up" style="background: url(&quot;img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">
      <div class="container">
        <div class="row showcase text-center">
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-align-justify"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">120</span><br>Websites</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">50</span><br>Satisfied Clients</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-copy"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">320</span><br>Projects</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-font"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">333</span><br>Magazines and Brochures</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-mask"></div>
    </section>
  -->
    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <!--projets-->
    <section id="references">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Mes projets</h2>
                    <p data-animate="fadeInUp" class="lead"></p>
                </div>
                <!--<ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="seo">SEO</a></li>
            <li><a href="#" data-filter="marketing">Marketing</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>-->
                <div id="detail">
                    <div class="row">
                        <div class="col-lg-10 mx-auto"><span class="close">×</span>
                            <div id="detail-slider" class="owl-carousel owl-theme"></div>
                            <div class="text-center">
                                <h1 id="detail-title" class="title"></h1>
                            </div>
                            <div id="detail-content"></div>
                        </div>
                    </div>
                </div>
                <!-- Reference detail-->
                <div id="references-masonry" data-animate="fadeInUp">
                    <div class="row">
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Nom de projet</h3>
                                            <p>petite description</p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visiter le
                                            site</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">nom de projet</h3>
                                            <p>Petite description ...</p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i>visiter le
                                            site.</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">nom du projet</h3>
                                            <p>description</p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visiter le
                                            site</a>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Nom du projet</h3>
                                            <p>description</p>
                                        </div>
                                    </div>
                                </a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);"
                                            class="btn btn-outline-primary"><i class="fa fa-globe"></i>Visiter le
                                            site</a>
                                </div>
                            </div>
                        </div>
                        <!--<div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Nom de projet</h3>
                            <p>Description</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="other" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-6.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 6</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-7.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-8.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>-->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--mes tips-->
    <!--<section id="tips">
        <div class="container">
            <div class="col-sm-12">
                <div class="mb-5 text-center">
                    <h2 data-animate="fadeInUp" class="title">Mes tips</h2>
                    <p data-animate="fadeInUp" class="lead"></p>
                </div>
                <!--<div id="detail">
                    <div class="row">
                        <div class="col-lg-10 mx-auto"><span class="close">×</span>
                            <div id="detail-slider" class="owl-carousel owl-theme"></div>
                            <div class="text-center">
                                <h1 id="detail-title" class="title"></h1>
                            </div>
                            <div id="detail-content"></div>
                        </div>
                    </div>
                </div>
                <div id="references-masonry" data-animate="fadeInUp">
                    <div class="row">
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Nom de projet</h3>
                                            <p>petite description</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visiter le site</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">nom de projet</h3>
                                            <p>Petite description ...</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i>visiter le site.</a></p>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">nom du projet</h3>
                                            <p>description</p>
                                        </div>
                                    </div></a>
                                <div data-images="" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visiter le site</a>
                                </div>
                            </div>
                        </div>
                        <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                            <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                                    <div class="overlay">
                                        <div class="inner">
                                            <h3 class="h4 reference-title">Nom du projet</h3>
                                            <p>description</p>
                                        </div>
                                    </div></a>
                                <div data-images="img/ca-arrive.jpg" class="sr-only reference-description">
                                    <p></p>
                                    <p></p>
                                    <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i>Visiter le site</a>
                                </div>
                            </div>
                        </div>
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                          <div class="reference"><a href="#"><img src="img/ca-arrive.jpg" alt="" class="img-fluid">
                              <div class="overlay">
                                <div class="inner">
                                  <h3 class="h4 reference-title">Nom de projet</h3>
                                  <p>Description</p>
                                </div>
                              </div></a>
                            <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                              <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                              <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                              <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                            </div>
                          </div>
                        </div>
                        <div data-category="other" class="reference-item col-lg-3 col-md-6">
                          <div class="reference"><a href="#"><img src="img/portfolio-6.jpg" alt="" class="img-fluid">
                              <div class="overlay">
                                <div class="inner">
                                  <h3 class="h4 reference-title">Project name 6</h3>
                                  <p>Short project description goes here...</p>
                                </div>
                              </div></a>
                            <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                              <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                              <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                              <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                            </div>
                          </div>
                        </div>
                        <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                          <div class="reference"><a href="#"><img src="img/portfolio-7.jpg" alt="" class="img-fluid">
                              <div class="overlay">
                                <div class="inner">
                                  <h3 class="h4 reference-title">Project name</h3>
                                  <p>Short project description goes here...</p>
                                </div>
                              </div></a>
                            <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                              <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                              <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                              <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                            </div>
                          </div>
                        </div>
                        <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                          <div class="reference"><a href="#"><img src="img/portfolio-8.jpg" alt="" class="img-fluid">
                              <div class="overlay">
                                <div class="inner">
                                  <h3 class="h4 reference-title">Project name</h3>
                                  <p>Short project description goes here...</p>
                                </div>
                              </div></a>
                            <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                              <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                              <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                              <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        </div>-->
                <!--<div class="card-group">
                    <div class="card card mt-4 mb-3 col-10 col-md-4 mx-auto">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card card mt-4 mb-3 col-10 col-md-4 mx-auto">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card card mt-4 mb-3 col-10 col-md-4 mx-auto">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
    </section>
    
    <section id="customers" class="customers-section bg-gray">
      <div class="container">
        <div class="col-md-12">
          <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-1.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-2.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-3.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-4.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-5.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-6.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
        <div class="container">
            <header class="text-center">
                <h2 data-animate="fadeInDown" class="title">Services</h2>
            </header>
            <div class="row services text-center">
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fab fa-bootstrap"></i></div>
                    <h3 class="heading mb-3 text-400"></h3>
                    <p class="text-left description"></p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fa fa-html5"></i></div>
                    <h3 class="heading mb-3 text-400"></h3>
                    <p class="text-left description"></p>
                </div>
                <div data-animate="fadeInUp" class="col-lg-4">
                    <div class="icon"><i class="fab fa-php"></i></div>
                    <h3 class="heading mb-3 text-400"></h3>
                    <p class="text-left description"></p>
                </div>
            </div>
            <hr data-animate="fadeInUp">
            <div data-animate="fadeInUp" class="text-center">
                <p class="lead">Aimeriez-vous en savoir plus ?</p>
                <p><a href="#contact" class="btn btn-outline-light link-scroll">Contactez moi</a></p>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
        <div class="container">
            <header class="text-center">
                <h2 class="title">Contactez moi</h2>
            </header>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contact-form" method="post" action="php/mail.php">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="Name" name="name" placeholder="Nom *" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="Surname" name="surname" placeholder="Prenom *"
                                        required="required" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="Email" name="email" placeholder="Email *" required="required"
                                        class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Numero de téléphone"
                                        class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="Message" placeholder="Message *" rows="4"
                                        required="required" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-primary"
                                        onclick="popUp()">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Map-->
    <div id="carte">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5156.836932240708!2d4.727875248483802!3d49.74056955317644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81a85edc3bd25f7b!2sP%C3%B4le%20Formation%20CCI%20Ardennes!5e0!3m2!1sfr!2sfr!4v1582192889607!5m2!1sfr!2sfr"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left">
                    <p class="social"><a href="#" class="external facebook wow fadeInUp"><i
                                class="fa fa-facebook"></i></a><a href="#" data-wow-delay="0.2s"
                            class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="#"
                            data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i
                                class="fa fa-google-plus"></i></a><a href="#" data-wow-delay="0.6s"
                            class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
                </div>
                <!-- /.6-->
                <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
                    <p></p>
                </div>
                <div class="col-12 mt-4">
                    <p class="template-bootstrapious"><a href='https://bootstrapious.com/p/bootstrap-carousel'></a><a
                            href="https://fity.cz/ostrava"></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript files-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $(".loader").fadeOut("100");
        })
    </script>

    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/front.js"></script>
    <script>
        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <script>
        function popUp() {
            alert("Le mail a bien été envoyé.");
        }
    </script>
</body>

</html>