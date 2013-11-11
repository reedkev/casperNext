<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 

?>

   <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand"><strong>CASPer</strong> :: next generation testing</a> 
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/joe/caspernext/">HOME</a></li>
                    <li><a href="#">Our System</a></li>
                    <!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="features.html">Features</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-item.html">Portfolio Item</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="sign-in.html">Sign in</a></li>
                            <li><a href="sign-up.html">Sign up</a></li>
                            <li><a href="backgrounds.html">Backgrounds</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html">PRICING</a></li>
                    -->
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Sign up</a></li>
                    <li><a href="index.php?r=site/login">Sign in</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="feature_slider" class="lol">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('<?=$baseUrl?>/img/backgrounds/landscape.png') repeat-x top center;">
            <img class="asset left-30 sp600 t120 z1" src="<?=$baseUrl?>/img/slides/scene1/macbook.png" />
            <div class="info">
                <h2>CASPer<br/>Next Generation Video Testing</h2>
            </div>
        </article>
        <article class="slide" id="ideas" style="background: url('<?=$baseUrl?>/img/backgrounds/aqua.jpg') repeat-x top center;">
            <div class="info">
                <h2>Application screening over the internet</h2>
            </div>
            <img class="asset left-480 sp600 t260 z1" src="<?=$baseUrl?>/img/slides/scene2/left.png" />
            <img class="asset left-210 sp600 t213 z2" src="<?=$baseUrl?>/img/slides/scene2/middle.png" />
            <img class="asset left60 sp600 t260 z1" src="<?=$baseUrl?>/img/slides/scene2/right.png" />
        </article>
        <article class="slide" id="tour" style="background: url('<?=$baseUrl?>/img/backgrounds/color-splash.jpg') repeat-x top center;">
            <img class="asset left-472 sp650 t210 z3" src="<?=$baseUrl?>/img/slides/scene3/ipad.png" />
            <img class="asset left-365 sp600 t270 z4" src="<?=$baseUrl?>/img/slides/scene3/iphone.png" />
            <img class="asset left-350 sp450 t135 z2" src="<?=$baseUrl?>/img/slides/scene3/desktop.png" />
            <img class="asset left-185 sp550 t220 z1" src="<?=$baseUrl?>/img/slides/scene3/macbook.png" />
            <div class="info">
                <h2></h2>
                <a href="features.html">TOUR THE PRODUCT</a>
            </div>
        </article>    
    </section>

 <div id="showcase">
        <div class="container">
            <div class="section_header">
                <h3>Our Product</h3>
            </div>            
            <div class="row feature_wrapper">
                <!-- Features Row -->
                <div class="features_op1_row">
                    <!-- Feature -->
                    <div class="col-sm-4 feature first">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="<?=$baseUrl?>/img/service1.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Donec turpis</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis tortor tortor, eu sollicitudin dolor sollicitudin nec. Proin scelerisque, leo ut auctor dapibus
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="col-sm-4 feature">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="<?=$baseUrl?>/img/service2.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Aliquam neque diam</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis tortor tortor, eu sollicitudin dolor sollicitudin nec. Proin scelerisque, leo ut auctor dapibus
                            </p>
                        </div>
                    </div>
                    <!-- Feature -->
                    <div class="col-sm-4 feature last">
                        <div class="img_box">
                            <a href="services.html">
                                <img src="<?=$baseUrl?>/img/service3.png">
                                <span class="circle"> 
                                    <span class="plus">&#43;</span>
                                </span>
                            </a>
                        </div>
                        <div class="text">
                            <h6>Aenean eget sapien</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis tortor tortor, eu sollicitudin dolor sollicitudin nec. Proin scelerisque, leo ut auctor dapibus
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3>Features</h3>
            </div> 
            <div class="row feature">
                <div class="col-sm-6">
                    <img src="<?=$baseUrl?>/img/showcase1.png" class="img-responsive" />
                </div>
                <div class="col-sm-6 info">
                    <h3>
                        <img src="<?=$baseUrl?>/img/features-ico1.png" />
                       Praesent convallis
                    </h3>
                    <p>
                        In feugiat orci eget aliquam commodo. Nunc molestie pharetra aliquet. Nam tellus dui, aliquet in consequat laoreet, dapibus nec est. Integer ac diam at diam pulvinar tincidunt. Integer nec urna id massa auctor consequat vitae volutpat dui. Nulla facilisi. Suspendisse fermentum ullamcorper metus. 
                    </p>
                </div>
            </div>
            <div class="row feature">
                <div class="col-sm-6 pic-right">
                    <img src="<?=$baseUrl?>/img/showcase2.png" class="pull-right img-responsive" />
                </div>
                <div class="col-sm-6 info info-left">
                    <h3>
                        <img src="<?=$baseUrl?>/img/features-ico2.png" />
                        Curabitur bibendum
                    </h3>
                    <p>
                        Pellentesque quis rhoncus enim. Nulla commodo tristique nibh. Duis varius, justo at molestie euismod, magna velit rhoncus ligula, ut fermentum magna lacus eget arcu. Donec fringilla ornare massa, sit amet sodales leo fermentum eu. 
                    </p>
                </div>                
            </div>
            <div class="row feature">
                <div class="col-sm-6">
                    <img src="<?=$baseUrl?>/img/showcase3.png" class="img-responsive" />
                </div>
                <div class="col-sm-6 info">
                    <h3>
                        <img src="<?=$baseUrl?>/img/features-ico3.png" />
                        Ut commodo scelerisque  
                    </h3>
                    <p>
                        Nam tellus dui, aliquet in consequat laoreet, dapibus nec est. Integer ac diam at diam pulvinar tincidunt. Integer nec urna id massa auctor consequat vitae volutpat dui. Nulla facilisi. Suspendisse fermentum ullamcorper metus. Ut commodo scelerisque eros quis vulputate. Nam volutpat iaculis tempus. Praesent elementum purus lectus, ac sagittis metus semper bibendum.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div id="clients">
        <div class="container">
            <div class="section_header">
                <h3>Clients</h3>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </div>