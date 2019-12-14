<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="home">
<?php $this->beginBody() ?>

<header>
    <div class="header">
        <div class="container">
            <div class="header__logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="StructurePress" srcset="images/logo.png, images/logo@2x.png 2x" class="img-fluid" width="269" height="70">
                </a>
            </div>
            <button class="btn btn-primary header__navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#structurepress-main-navigation">
                <i class="fa fa-bars hamburger"></i>
                <span>MENU</span>
            </button>
            <nav class="header__navigation collapse navbar-toggleable-md" id="structurepress-main-navigation" aria-label="Main Menu">

                <a class="home-icon" href="index.html">
                    <i class="fa fa-home"></i>
                </a>
                
                <ul class="main-navigation js-main-nav" role="menubar">
                    <li class="menu-item-has-children current-menu-item">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Slideshow</a>
                            </li>
                            <li>
                                <a href="index_static.html">Static image</a>
                            </li>
                            <li>
                                <a href="index_video.html">Video background</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="construction-consultant.html">Construction Consultant</a>
                            </li>
                            <li>
                                <a href="green-building.html">Green Building</a>
                            </li>
                            <li>
                                <a href="laminate-flooring.html">Laminate Flooring</a>
                            </li>
                            <li>
                                <a href="house-renovation.html">House Renovation</a>
                            </li>
                            <li>
                                <a href="general-contracting.html">General Contracting</a>
                            </li>
                            <li>
                                <a href="metal-roofing.html">Metal Roofing</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="projects.html">Projects</a>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <div class="jumbotron__widgets hidden-lg-up">
                
                <div class="widget">
                    <div class="icon-box">
                        <i class="fa fa-phone"></i>
                        <div class="icon-box__text">
                            <h4 class="icon-box__title">Phone number:</h4>
                            <span class="icon-box__subtitle">1-800-506-266</span>
                        </div>
                    </div><!-- /.icon-box -->
                </div><!-- /.widget-icon-box -->
                
                <div class="widget">
                    <div class="icon-box">
                        <i class="fa fa-clock-o"></i>
                        <div class="icon-box__text">
                            <h4 class="icon-box__title">Opening times:</h4>
                            <span class="icon-box__subtitle">Mon - Sat: 7.00 - 18:00</span>
                        </div>
                    </div><!-- /.icon-box -->
                </div><!-- /.widget-icon-box -->
                
                <div class="widget">
                    <div class="icon-box">
                        <i class="fa fa-envelope-o"></i>
                        <div class="icon-box__text">
                            <h4 class="icon-box__title">E-mail address:</h4>
                            <span class="icon-box__subtitle">info[at]structure.com</span>
                        </div>
                    </div><!-- /.icon-box -->
                </div>
                
                <div class="widget">
                    <a class="social-icons__link" href="https://www.facebook.com/ProteusThemes/" target="_self">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a class="social-icons__link" href="https://twitter.com/chillyorange" target="_self">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                    <a class="social-icons__link" href="https://www.youtube.com/user/ProteusNetCompany" target="_self">
                        <i class="fa fa-youtube-square"></i>
                    </a>
                </div>
            </div><!-- /.jumbotron__widgets -->
            <div class="header__featured-link">
                <a class="btn btn-primary" target="_self" href="contact.html">REQUEST A QUOTE</a>
            </div>
        </div><!-- /.container -->
    </div><!-- /.header -->

</header>

<footer>
            
    <div class="footer-top">
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12 col-md-4">
                    <div class="widget">
                        <img src="images/logo.png" alt="Footer Logo">
                        <br><br>
                        <p>
                            StructurePress - Premium WordPress theme made for construction businessess now available on Themefores just for $59
                        </p>
                    </div>
                </div><!-- /.col -->
                
                <div class="col-xs-12 col-md-2">
                    <div class="widget widget_nav_menu">
                        <h6 class="footer-top__headings">EXTRAS</h6>
                        <ul class="menu">
                            <li>
                                <a href="extras.html">Extras</a>
                            </li>
                            <li>
                                <a href="jobs.html">Jobs</a>
                            </li>
                            <li>
                                <a href="pricing-tables.html">Pricing Tables</a>
                            </li>
                            <li>
                                <a href="skype-button.html">Skype Button</a>
                            </li>
                            <li>
                                <a href="brochure-box.html">Brochure Box</a>
                            </li>
                            <li>
                                <a href="number-counter.html">Number Counter</a>
                            </li>
                            <li>
                                <a href="steps.html">Steps</a>
                            </li>
                        </ul>
                    </div><!-- /.widget -->
                </div><!-- /.col -->
                
                <div class="col-xs-12 col-md-3">
                    <div class="widget widget_nav_menu">
                        <h6 class="footer-top__headings">OUR SERVICES</h6>
                        <div>
                            <ul class="menu">
                                <li>
                                    <a href="metal-roofing.html">Metal Roofing</a>
                                </li>
                                <li>
                                    <a href="construction-consultant.html">Construction Consultant</a>
                                </li>
                                <li>
                                    <a href="green-building.html">Green Building</a>
                                </li>
                                <li>
                                    <a href="laminate-flooring.html">Laminate Flooring</a>
                                </li>
                                <li>
                                    <a href="house-renovation.html">House Renovation</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.col -->
                
                <div class="col-xs-12 col-md-3">
                    <div class="widget">
                        <h6 class="footer-top__headings">CONTACT US</h6>
                        <p>
                            <span class="icon-container">
                                <span class="fa fa-map-marker"></span>
                            </span>
                            227 Marion Street Avenue, UK<br>
                            <span class="icon-container">
                                <span class="fa fa-phone"></span>
                            </span> 
                            1-888-123-4567<br>
                            <span class="icon-container">
                                <span class="fa fa-envelope"></span>
                            </span>
                            <a href="/cdn-cgi/l/email-protection#1871767e77586b6c6a6d7b6c6d6a7d686a7d6b6b367b7775"><span class="__cf_email__" data-cfemail="ea83848c85aa999e989f899e9f988f9a988f9999c4898587">[email&#160;protected]</span></a>
                            <br>
                            <span class="icon-container">
                                <span class="fa fa-globe"></span>
                            </span> 
                            www.structurepress.com
                        </p>
                        <p>
                            <a class="icon-container" href="https://www.facebook.com/ProteusThemes/" target="_self">
                                <span class="fa fa-facebook-square"></span>
                            </a>
                            <a class="icon-container" href="https://twitter.com/chillyorange" target="_self">
                                <span class="fa fa-twitter-square"></span>
                            </a>
                            <a class="icon-container" href="https://www.youtube.com/user/ProteusNetCompany" target="_self">
                                <span class="fa fa-youtube-square"></span>
                            </a>
                            <a class="icon-container" href="https://github.com/chillyorange" target="_self">
                                <span class="fa fa-github-square"></span>
                            </a>
                        </p>
                    </div>
                </div><!-- /.col -->
                
            </div><!-- /.row -->
            
        </div><!-- /.container -->
    </div><!-- /.footer-top -->
    
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
