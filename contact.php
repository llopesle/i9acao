<?php
			/*
				Template Name: html2wp-contact
			*/

			?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <meta charset="utf-8">
    <title><?php  wp_title( '|', true, 'right' );  ?>
</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Glyphicons -->
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/modules/glyphicons/css/glyphicons.css">
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/modules/glyphicons/css/filetypes.css">
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/modules/glyphicons/css/halflings.css">
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/modules/glyphicons/css/social.css">

    <!-- Google Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">

    <!-- Grove Styles (switch for different color schemes, e.g. "styles-cleanblue.css") -->
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/styles-blue.css" id="grove-styles">

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie8.css">        
        <script src="modules/respond/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="<?php  bloginfo('template_url');  ?>/js/map.js" type="text/javascript"></script>
    
<?php  wp_head();  ?>
</head> 
<body>
    <header><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <nav class="navbar navbar-default grove-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php  bloginfo('template_url');  ?>/#" class="grove-toggle" data-toggle="collapse" data-target=".grove-nav">   <i class="glyphicons show_lines"></i>  </a>
                    <a href="<?php  html2wp_the_page_link( 'index.php' );  ?>" class="navbar-brand"><img src="<?php  bloginfo('template_url');  ?>/img/logo.png" alt="Grove"></a>
                </div>

                <div class="collapse navbar-collapse grove-nav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php  html2wp_the_page_link( 'index.php' );  ?>">Home</a>
                        </li>                          
                        <li class="dropdown active">
                            <a href="<?php  bloginfo('template_url');  ?>/#" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php  html2wp_the_page_link( 'about-us.php' );  ?>">About Us</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'features.php' );  ?>">Features Page</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'pricing.php' );  ?>">Pricing Tables</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'comparison.php' );  ?>">Product Comparison</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'blog.php' );  ?>">Blog</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">Blog Detail</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'portfolio.php' );  ?>">Portfolio</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'portfolio-inner.php' );  ?>">Portfolio Detail</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'faq.php' );  ?>">FAQ</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'login.php' );  ?>">Login/Signup</a></li>
                                <li><a href="<?php  html2wp_the_page_link( '404.php' );  ?>">404</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'contact.php' );  ?>">Contact</a></li>      
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php  bloginfo('template_url');  ?>/#" data-toggle="dropdown">Features <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php  html2wp_the_page_link( 'glyphicons.php' );  ?>">Glyphicons</a></li>
                                <li><a href="<?php  html2wp_the_page_link( 'buttons.php' );  ?>">Buttons</a></li>
                            </ul>
                         </li>
                    </ul>        
                </div>
<!-- /.navbar-collapse -->
            </div>
        </nav>

        <div class="widewrapper pagetitle">
            <div class="container">
                    <h1>Contact</h1>
            </div>
        </div>
    </header>

        <!-- Note: The map canvas is configured in js/map.js -->
    <div id="map-canvas"></div>

    <div class="widewrapper">
        <div class="container content">
            <div class="row">
                <section id="contact-form" class="col-md-8">
                    <h2>Contact Us</h2>
                    <form action="<?php  echo admin_url( 'admin-ajax.php?action=html2wp_form_submit' );  ?>" method="POST" accept-charset="utf-8" class="clearfix">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name">Name</label>                    
                                <input class="form-control input-lg" type="text" id="name" name="name" value="" placeholder="">
                            </div>

                            <div class="col-sm-6 form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control input-lg" type="email" id="email" name="email" value="" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="15"></textarea>
                            </div>
                        </div>             

                        <button type="submit" class="btn btn-grove-one btn-xlg btn-bold">Send Message</button>
                    <input type="hidden" value="1742990414" name="gfformid"><input type="hidden" value="Grove - Contact Page - Form" name="gfformname"><input type="hidden" name="gfnonce" value="<?php  echo wp_create_nonce( 'html2wp_key_gfnonce' );  ?>">
</form>
                </section>

                <section id="contact-details" class="col-md-4 with-margin">
                    <div class="detail-block">
                        <h3>Lorem Ipsum Dolor Amet</h3>
                        <p>
                            Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan, atau yat ayat yang di sertakan secara rambang yang lansung tidak munasabah. Jika anda ingin.
                        </p>
                    </div>
                    
                    <div class="detail-block">
                        <h3>More Info</h3>
                        <div class="info-block">
                            <i class="glyphicons home"></i>
                            <div class="info">
                                <h5>Address:</h5>
                                <p>St. Pauli Fischmarkt, 20359 Hamburg, Germany</p>
                            </div>                 
                        </div>

                        <div class="info-block">
                            <i class="glyphicons headset"></i>
                            <div class="info">
                                <h5>Telephone:</h5>
                                <p>+41 974 545 247</p>
                            </div>                 
                        </div>

                        <div class="info-block">
                            <i class="glyphicons clock"></i>
                            <div class="info business-hours">
                                <h5>Business Hours:</h5>
                                <p>Monday 8-17</p>
                                <p>Tuesday 8-17</p>
                                <p>Wednesday 8-20</p>
                                <p>Thursday 8-17</p>
                                <p>Friday 8-16</p>
                                <p>Saturday 8-12</p>
                                <p>Sunday closed</p>
                            </div>                 
                        </div>                
                    </div>

                </section>

            </div>
        </div>
    </div>

    <footer class="widewrapper footer">
        <div class="container">
            <div class="row footer">
                <div class="col-sm-3">
                    <h4>About Grove</h4>
                    <p>Adalah menjadi satu fakta bahawa pembaca akan ter ganggu oleh text yang boleh difa hami apabila meli hi at susunan mukasurat.</p>
                </div>
                <div class="col-sm-3">
                    <div class="indent30">
                    <h4>Recent News</h4>
                    <ul class="grove-list">
                        <li><a href="<?php  bloginfo('template_url');  ?>/#">Hello World Shatana</a></li>
                        <li><a href="<?php  bloginfo('template_url');  ?>/#">Foobar in the sky flying so high</a></li>
                        <li><a href="<?php  bloginfo('template_url');  ?>/#">Wild things happening, all around</a></li>
                        <li><a href="<?php  bloginfo('template_url');  ?>/#">No time for that, no time for that</a></li>
                    </ul>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <h4>About Grove</h4>
                    <p>Adalah menjadi satu fakta bahawa pembaca akan ter ganggu oleh text yang boleh difa hami apabila meli hi at susunan mukasurat.</p>
                </div>

                <div class="col-sm-3">
                    <h4>Connect</h4>
                    <a href="<?php  bloginfo('template_url');  ?>/#" class="social facebook"></a>
                    <a href="<?php  bloginfo('template_url');  ?>/#" class="social twitter"></a>
                    <a href="<?php  bloginfo('template_url');  ?>/#" class="social google_plus"></a>
                    <a href="<?php  bloginfo('template_url');  ?>/#" class="social linked_in"></a>
                </div>            
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <p>Designed by <a href="http://hackerthemes.com">HackerThemes</a></p>
            </div>
        </div>
    </footer>

    <script src="<?php  bloginfo('template_url');  ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php  bloginfo('template_url');  ?>/modules/modernizr/modernizr-custom.js"></script>
<?php  wp_footer();  ?>
</body>
</html>
