<?php
			/*
				Template Name: html2wp-front-page
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

    <!-- LayerSlider styles -->
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/modules/layerslider/css/layerslider.css" type="text/css">

    <!-- Grove Styles (switch for different color schemes, e.g. "styles-cleanblue.css") -->
    <link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/styles-blue.css" id="grove-styles">

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie8.css">        
        <script src="modules/respond/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="node_modules/jquery/dist/jquery.min.js"><\/script>')</script>
    <!-- jQuery with jQuery Easing, and jQuery Transit JS -->
     
    <!-- LayerSlider from Kreatura Media with Transitions -->
    <script src="<?php  bloginfo('template_url');  ?>/modules/layerslider/js/greensock.js" type="text/javascript"></script>
    <script src="<?php  bloginfo('template_url');  ?>/modules/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
    <script src="<?php  bloginfo('template_url');  ?>/modules/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

    <!-- Grove Layerslider initiation script -->
    <script src="<?php  bloginfo('template_url');  ?>/js/grove-slider.js" type="text/javascript"></script>
    
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
                        <li class="active">
                            <a href="<?php  html2wp_the_page_link( 'index.php' );  ?>">Home</a>
                        </li>                          
                        <li class="dropdown">
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
    </header>

            <!--LayerSlider begin-->

    <!-- Note: Layerslider is configured in js/grove-slider.js -->
    <div class="hidden-xs">
        <div id="layerslider" style="width: 100%; height: 405px; margin: 0px auto;">
            <div class="ls-slide" data-ls="transition2d:5;">
                <img class="ls-bg" src="<?php  bloginfo('template_url');  ?>/img/slides/bg-five.jpg" alt="Slider Background">

                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/imac.png" alt="iMac" style="top:15px; left:650px;" data-ls=" durationin : 2000; delayin : 0; offsetxin: right;  offsetxout: right; ">

                <div class="ls-l large-caption" style="top:150px; left:20px;" data-ls="delayin: 750; offsetxin: 0; offsetxout: 0;">
                    <div><p>Impress your visitors,</p></div>
                    <div><p>and turn them into clients!</p></div>
                </div>
            </div>

            <div class="ls-slide" data-ls="transition2d:5;">
                <img class="ls-bg" src="<?php  bloginfo('template_url');  ?>/img/slides/bg-one.jpg" alt="Slider Background">

                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/fam_imac.png" alt="iMac" style="top:50px; left:50px;" data-ls=" durationin : 2000; delayin : 0; offsetxin: left;  offsetxout: left;">
                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/fam_macbook.png" alt="MacBook" style="top:190px; left:250px;" data-ls="durationin : 2000; durationout: 2000; delayin : 300; offsetxin: 300; offsetyin: 300; offsetxout: left;">
                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/fam_ipad.png" alt="iPad" style="top:210px; left:0px;" data-ls="durationin : 2000; durationout: 2000; delayin : 300; offsetxin: -300; offsetyin: 300; offsetxout: left;">
                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/fam_iphone.png" alt="iPhone" style="top:265px; left:160px;" data-ls="durationin : 2000; durationout: 2000; delayin : 300; offsetxin: 0; offsetyin: 300; offsetxout: left;">

                <div class="ls-l large-caption" style="top:150px; left:700px;" data-ls="delayin:750; offsetxin: 0; offsetxout: 0;">
                    <div><p>Create a stunning website</p></div>
                    <div><p>with Grove. </p></div>
                </div>

            </div>   

             <div class="ls-slide" data-ls="transition2d:5;">
                <img class="ls-bg" src="<?php  bloginfo('template_url');  ?>/img/slides/bg-three.jpg" alt="Slider Background">

                <img class="ls-l" src="<?php  bloginfo('template_url');  ?>/img/slides/macbook-air.png" alt="MB Air" style="top:25px; left:50px;" data-ls="durationin: 2500; offsetxin: left; offsetxout: left;">

                <div class="ls-l large-caption" style="top:120px; left:750px;" data-ls="delayin: 750; offsetxin: 0; offsetxout: 0;">
                    <div><p>Layerslider:</p></div>
                    <div><p>Highly configurable,</p></div>
                    <div><p>flexible and fast</p></div>
                </div>
            </div>
        </div>
    </div>
    
    <!--LayerSlider end-->

    <!-- Layerslider substitute on x-small devices -->
    <div class="widewrapper pagetitle visible-xs">
        <div class="container">
            <h1>Welcome to Grove!</h1>        
        </div>
    </div> 

    <div class="widewrapper">
        <div class="container">
            <div class="row features">
                <div class="col-md-4 feature">
                    <h3>
<a class="glyphicons tint" href=""></a>Responsive Layout</h3>
                    <p>Adalah menjadi satu fakta bahawa pembaca akan ter ganggu oleh text yang boleh difahami apabila meli hi at susunan mukasurat. Kegunaan.</p>
                </div>
                <div class="col-md-4 feature">
                    <h3>
<i class="social skitch"></i>Exquisite Design</h3>
                    <p>Adalah menjadi satu fakta bahawa pembaca akan ter ganggu oleh text yang boleh difahami apabila meli hi at susunan mukasurat. Kegunaan.</p>
                </div>
                <div class="col-md-4 feature">
                    <h3>
<i class="filetype html"></i>Clean Code</h3>
                    <p>Adalah menjadi satu fakta bahawa pembaca akan ter ganggu oleh text yang boleh difahami apabila meli hi at susunan mukasurat. Kegunaan.</p>
                </div>        
            </div>
        </div>
    </div>

    <div class="widewrapper weak-highlight">
        <div class="container content">
            <div class="showroom-controls">
                <div class="links">Recent Work <i class="verticalSeparator"></i> <a href="<?php  html2wp_the_page_link( 'portfolio.php' );  ?>">All Work</a>
</div>
            </div>
            <div class="row">
                <div class="showroom-item col-sm-3">
                    <div class="image">
                        <img src="<?php  bloginfo('template_url');  ?>/img/portfolio/port-server.png" class="img-responsive" alt="Portfolio Image">
                        <a class="overlay" href="<?php  html2wp_the_page_link( 'portfolio-inner.php' );  ?>">
                             <i class="glyphicons search"></i>
                             <div class="name">Server Security</div>
                        </a>
                    </div>
                </div>
                <div class="showroom-item col-sm-3">
                    <div class="image">
                        
                        <img src="<?php  bloginfo('template_url');  ?>/img/portfolio/port-code.png" class="img-responsive" alt="Portfolio Image">
                        <a class="overlay" href="<?php  html2wp_the_page_link( 'portfolio-inner.php' );  ?>">
                             <i class="glyphicons search"></i>
                             <div class="name">Code Review</div>
                        </a>
                    </div>
                </div>
                <div class="showroom-item col-sm-3">
                    <div class="image">
                        <img src="<?php  bloginfo('template_url');  ?>/img/portfolio/port-storage.png" class="img-responsive" alt="Portfolio Image">
                         <a class="overlay" href="<?php  html2wp_the_page_link( 'portfolio-inner.php' );  ?>">
                             <i class="glyphicons search"></i>
                             <div class="name">Storage Consulting</div>
                         </a>
                    </div>
                </div>                
                <div class="showroom-item col-sm-3">
                    <div class="image">
                        <img src="<?php  bloginfo('template_url');  ?>/img/portfolio/port-car.png" class="img-responsive" alt="Portfolio Image">  
                         <a class="overlay" href="<?php  html2wp_the_page_link( 'portfolio-inner.php' );  ?>">
                             <i class="glyphicons search"></i>
                             <div class="name">Blue Car</div>                         
                         </a>
                    </div>
                </div>                        
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <div class="widewrapper">
        <div class="container content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="showroom-controls">
                        <div class="links">Recent Blog Posts <i class="verticalSeparator"></i> <a href="<?php  html2wp_the_page_link( 'blog.php' );  ?>">All Blog Posts</a>
</div>
                    </div>
                    <div class="row">
                        <div class="showroom-item blog-item col-sm-4">
                            <div class="image">
                                <img src="<?php  bloginfo('template_url');  ?>/img/blog/blog-map.png" class="img-responsive" alt="Blog Thumbnail">
                                 <a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>" class="overlay">
                                     <i class="glyphicons search"></i>
                                 </a>
                            </div>
                            <div class="content">
                                <h3><a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">The Merits of Google Maps</a></h3>
                                <span class="meta">Posted by Admin on 1.1.2013</span>
                                <span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae consequuntur blanditiis fuga eveniet? Aperiam, beatae, recusandae.
                                </span>
                                <a class="more" href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">View more</a>
                            </div>
                        </div>
                        <div class="showroom-item blog-item col-sm-4">
                            <div class="image">
                                <img src="<?php  bloginfo('template_url');  ?>/img/blog/blog-boat.png" class="img-responsive" alt="Blog Thumbnail">
                                 <a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>" class="overlay">
                                     <i class="glyphicons search"></i>
                                 </a>
                            </div>
                            <div class="content">
                                <h3><a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">Sailing on Course</a></h3>
                                <span class="meta">Posted by Admin on 1.1.2013</span>
                                <span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae consequuntur blanditiis fuga eveniet? Aperiam, beatae, recusandae.
                                </span>
                                <a class="more" href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">View more</a>
                            </div>
                        </div>

                        <div class="showroom-item blog-item col-sm-4">
                            <div class="image">
                                <img src="<?php  bloginfo('template_url');  ?>/img/blog/blog-pad.png" class="img-responsive" alt="Blog Thumbnail">
                                 <a href="<?php  html2wp_the_page_link( 'index.php' );  ?>" class="overlay">
                                     <i class="glyphicons search"></i>
                                 </a>
                            </div>
                            <div class="content">
                                <h3><a href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">Mouse versus Pen</a></h3>
                                <span class="meta">Posted by Admin on 1.1.2013</span>
                                <span class="preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut beatae consequuntur blanditiis fuga eveniet? Aperiam, beatae, recusandae.
                                </span>
                                <a class="more" href="<?php  html2wp_the_page_link( 'blog-inner.php' );  ?>">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-sm-3">
                    <div class="showroom-controls">
                        <div class="links">Testimonials</div>
                        <div class="controls">
                            <a class="left" href="<?php  bloginfo('template_url');  ?>/#testimonials-carousel" data-slide="prev"></a>
                            <a class="right" href="<?php  bloginfo('template_url');  ?>/#testimonials-carousel" data-slide="next"></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="testimonials-carousel" class="carousel slide testimonials">
                                 <!-- Carousel items -->
                                 <div class="carousel-inner">
                                    <div class="active item testimonial-item">
                                        <div class="bubble">
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven."

                                        </div>
                                        <div class="client">
<a href="<?php  bloginfo('template_url');  ?>/#"> Michael B.</a>, The Creative Group</div>
                                    </div>
                                    <div class="item testimonial-item">
                                        <div class="bubble">
                                            "Second carousel. Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven."
                                        </div>
                                        <div class="client">
<a href="<?php  bloginfo('template_url');  ?>/#"> Alex R.</a>, The Coding Group</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>

    <div class="widewrapper weak-highlight">
        <div class="container content our-clients">
            <div class="showroom-controls">
                <div class="links">Our clients</div>
            </div>
            <div class="clients">
                <div class="client"><img src="<?php  bloginfo('template_url');  ?>/img/logos/logo1.png" class="img-responsive" alt="A Bright Idea"></div>
                <div class="client"><img src="<?php  bloginfo('template_url');  ?>/img/logos/logo2.png" class="img-responsive" alt="U Read"></div>
                <div class="client"><img src="<?php  bloginfo('template_url');  ?>/img/logos/logo3.png" class="img-responsive" alt="Drop"></div>
                <div class="client"><img src="<?php  bloginfo('template_url');  ?>/img/logos/logo4.png" class="img-responsive" alt="Alaska Anchor"></div>
            </div>
        </div>
    </div>
  

    <div class="widewrapper strong-highlight">
        <div class="container calltoaction">
            <span>Buttons sell products! Call your visitors to action with this bold button.</span>
            <a href="https://wrapbootstrap.com/theme/grove-responsive-business-theme-WB09B7SFK" class="btn btn-grove-one btn-xlg btn-bold">Purchase Grove now!</a>
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
