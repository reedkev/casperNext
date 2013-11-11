<!DOCTYPE html>
<html>
<head>
  <title>CASPer :: a next generation testing platform</title>
  <?php
    $baseUrl = Yii::app()->theme->baseUrl; 
    $cs = Yii::app()->getClientScript();    
  ?>   
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php 
    $cs->registerCssFile($baseUrl.'/css/bootstrap/bootstrap.min.css');
    $cs->registerCssFile($baseUrl.'/css/compiled/bootstrap-overrides.css');
    $cs->registerCssFile($baseUrl.'/css/compiled/theme.css');
    ?>  
    <!-- Styles -->

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <?php 
    $cs->registerCssFile($baseUrl.'/css/compiled/index.css');
    $cs->registerCssFile($baseUrl.'/css/lib/animate.css');

    ?>

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pull_top">
    
<?php echo $content; ?>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="col-sm-4 recent_posts">
                    <h3 class="footer_header">
                        Recent News
                    </h3>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="<?=$baseUrl?>/img/recent_post1.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Wed, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="<?=$baseUrl?>/img/recent_post2.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Mon, 12 Dec
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 testimonials">
                    <h3 class="footer_header">
                        Testimonials
                    </h3>
                    <div class="wrapper">
                        <div class="quote">
                            <span>“</span>
                            There are many variations of passages of randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing of text.
                            <span></span>
                        </div>
                        <div class="author">
                            <img src="<?=$baseUrl?>/img/user-display.png" />
                            <div class="name">Alejandra Galvan Castillo</div>
                            <div class="info">
                                Sample Company
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 contact">
                    <h3 class="footer_header">
                        Contact
                    </h3>
                    <form action="#" method="post" onSubmit="return false;">
                        <input type="text" placeholder="Your name" />
                        <input type="text" placeholder="Your email" />
                        <textarea rows="3" placeholder="Message"></textarea>
                        <input type="submit" value="Send" />
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="col-md-12">
                    <div class="row social">
                        <div class="col-md-12">
                            <a href="#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-md-12">
                           &copy; <?php echo date('Y'); ?> McMaster University. All rights reserved.
                            1280 Main Street West
                            Hamilton, Ontario L8S4L8
                            905-525-9140
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>

    <!-- Scripts -->
  <?
  Yii::app()->clientScript->registerCoreScript('jquery');    
  $cs->registerCssFile($baseUrl.'/css/bootstrap/bootstrap.min.css');
  $cs->registerScriptFile($baseUrl.'/js/theme.js');
  $cs->registerScriptFile($baseUrl.'/js/index-slider.js');
  ?>
</body>
</html>  