<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?> 
<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>"",
	));

    $baseUrl = Yii::app()->theme->baseUrl; 
    $cs = Yii::app()->getClientScript();    
  
    $cs->registerCssFile($baseUrl.'/css/compiled/sign-in.css');
    $cs->registerCssFile($baseUrl.'/css/lib/animate.css');
?>  	

<div class="navbar navbar-inverse navbar-static-top" role="navigation">
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


    <!-- Sign In Option 1 -->
    <div id="sign_in1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 header">
                    <h4>Log in to your account</h4>
                    <p>

                </div>


                <div class="col-md-12 footer">

    <div class="form-inline">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    
        <div class="row">
            <?php echo $form->labelEx($model,'username'); ?>
            <?php echo $form->textField($model,'username'); ?>
            <?php echo $form->error($model,'username'); ?>
        </div>
    
        <div class="row">
            <?php echo $form->labelEx($model,'password'); ?>
            <?php echo $form->passwordField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
            <p class="hint">
                Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
            </p>
        </div>
    
        <div class="row rememberMe">
            <?php echo $form->checkBox($model,'rememberMe'); ?>
            <?php echo $form->label($model,'rememberMe'); ?>
            <?php echo $form->error($model,'rememberMe'); ?>
        </div>
    
        <div class="row buttons">
            <?php echo CHtml::submitButton('Login',array('class'=>'btn btn btn-primary')); ?>
        </div>
    
    <?php $this->endWidget(); ?>

     <?php $this->endWidget(); ?>

    <!--
                    <form class="form-inline">
                        <input type="text" placeholder="Email" class="form-control">
                        <input type="password" placeholder="Password" class="form-control">
                        <input type="submit" value="sign in">
                    </form>
                </div>

                <div class="col-md-12 proof">
                    <div class="col-md-6 remember">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>
                        <a href="reset.html">Forgot password?</a>
                    </div>

                    <div class="col-md-6">
                        <div class="dosnt">
                            <span>Don’t have an account?</span>
                            <a href="sign-up.html">Sign up</a>
                        </div>
                    </div>
                </div>
-->
            </div>
        </div>
    </div>





    </div>

</div>

    </div>

</div>