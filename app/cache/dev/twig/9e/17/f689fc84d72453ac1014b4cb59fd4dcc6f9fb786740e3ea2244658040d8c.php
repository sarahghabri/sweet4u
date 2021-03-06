<?php

/* EspritPatisserieBundle::layout.html.twig */
class __TwigTemplate_9e17f689fc84d72453ac1014b4cb59fd4dcc6f9fb786740e3ea2244658040d8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Sweet4U Website</title>
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/css/bootstrap.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t <!-- Custom Theme files -->
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
   \t\t <!-- Custom Theme files -->
   \t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
\t
\t\t<!----webfonts--->
\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
\t\t<!---//webfonts--->
\t</head>
\t<body>
\t<!-- container -->
\t\t<!-- top-header -->
\t\t<div class=\"top-header\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"top-header-left\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_myaccountpage");
        echo "\">My Account</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_checkoutpage");
        echo "\" >Checkout</a></li>
\t\t\t\t\t\t
\t\t\t\t\t</ul>
                                    <div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-center\">
\t\t\t\t\t<p><span class=\"cart\"> </span>Cart<label>\$5256</label></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"top-header-right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_loginpage");
        echo "\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_registerpage");
        echo "\">Register</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /top-header -->
\t\t<!-- main-menu -->
\t\t<div class=\"main-menu\">
\t\t\t<div class=\"container\">
\t\t\t<div class=\"head-nav\">
\t\t\t\t<span class=\"menu\"> </span>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_productpage");
        echo "\">products</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_aboutpage");
        echo "\">about</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_contactpage");
        echo "\">Contact</a></li>
\t\t\t\t\t
\t\t\t\t</ul><div class=\"clearfix\"></div>
\t\t\t</div>\t
\t\t\t\t<!-- script-for-nav -->
\t\t\t\t\t<script>
\t\t\t\t\t\t\$( \"span.menu\" ).click(function() {
\t\t\t\t\t\t  \$( \".head-nav ul\" ).slideToggle(300, function() {
\t\t\t\t\t\t\t// Animation complete.
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t<!-- script-for-nav -->

\t\t\t\t<!-- logo -->
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/logo.png"), "html", null, true);
        echo "\" title=\"Sweetcake\" /></a>
\t\t\t\t</div>
\t\t\t\t<!-- logo -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /main-menu -->
\t\t<!-- banner -->
\t\t<div class=\"container\">
\t\t\t\t<div class=\"img-slider\">
\t\t\t\t\t\t<!----start-slider-script---->
\t\t\t\t\t<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t <script>
\t\t\t\t\t    // You can also use \"\$(window).load(function() {\"
\t\t\t\t\t    \$(function () {
\t\t\t\t\t      // Slideshow 4
\t\t\t\t\t      \$(\"#slider4\").responsiveSlides({
\t\t\t\t\t        auto: true,
\t\t\t\t\t        pager: true,
\t\t\t\t\t        nav: true,
\t\t\t\t\t        speed: 500,
\t\t\t\t\t        namespace: \"callbacks\",
\t\t\t\t\t        before: function () {
\t\t\t\t\t          \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t\t\t        },
\t\t\t\t\t        after: function () {
\t\t\t\t\t          \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t\t\t        }
\t\t\t\t\t      });
\t\t\t\t\t
\t\t\t\t\t    });
\t\t\t\t\t  </script>
\t\t\t\t\t<!----//End-slider-script---->
\t\t\t\t\t<!-- Slideshow 4 -->
\t\t\t\t\t    <div  id=\"top\" class=\"callbacks_container\">
\t\t\t\t\t      <ul class=\"rslides\" id=\"slider4\">
\t\t\t\t\t        <li>
\t\t\t\t\t          <img  src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t          <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t         <li>
\t\t\t\t\t          <img  src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t          <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>    
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t        <li>
\t\t\t\t\t          <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t           <div class=\"slider-caption\">
\t\t\t\t\t          \t <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t        <li>
\t\t\t\t\t          <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/slide.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t           <div class=\"slider-caption\">
\t\t\t\t\t            <div class=\"slider-caption-left text-center\">
\t\t\t\t\t          \t \t<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
\t\t\t\t\t          \t \t<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
\t\t\t\t\t          \t \t<a class=\"buy-btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t          \t </div>
\t\t\t\t\t          \t  <div class=\"slider-caption-right\">
\t\t\t\t\t          \t  \t<a href=\"#\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/iteam.png"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\" /></a>
\t\t\t\t\t          \t  </div>
\t\t\t\t\t          \t  <div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t           <!-- share-on -->
\t\t\t\t\t          <div class=\"share-on\">
\t\t\t\t\t          \t<div class=\"share-on-grid\">
\t\t\t\t\t          \t\t<div class=\"share-on-grid-left\">
\t\t\t\t\t          \t\t\t<h3>Share On</h3>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"share-on-grid-right\">
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"facebook\"> </span></a>
\t\t\t\t\t          \t\t\t<a href=\"#\"><span class=\"twitter\"> </span></a>
\t\t\t\t\t          \t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t\t</div>
\t\t\t\t\t          \t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t          \t</div>
\t\t\t\t\t          \t<div class=\"clearfix\"> </div>
\t\t\t\t\t          </div>
\t\t\t\t\t          <!-- share-on -->
\t\t\t\t\t        </li>
\t\t\t\t\t      </ul>
\t\t\t\t\t    </div>
\t\t\t\t\t    <div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t<!-- /banner -->
\t\t</div>
\t\t<!-- top-grids -->
\t\t<div class=\"top-grids\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/img1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$60</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/img2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$80</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 top-grid\">
\t\t\t\t\t<div class=\"top-grid-head\">
\t\t\t\t\t\t<h3>OUR CAKES</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"top-grid-info\">
\t\t\t\t\t\t<img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/images/img3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"name\"/>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
\t\t\t\t\t\t<span>\$120</span>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t<a class=\"btn\" href=\"#\">Buy Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- top-grids-bg -->
\t\t\t<div class=\"top-grids-bg\">
\t\t\t\t<span> </span>
\t\t\t</div>
\t\t\t<!-- top-grids-bg -->
\t\t</div>
\t\t<!-- top-grids -->
\t\t<!-- bottom-grids -->
\t\t<div class=\"bottom-grids\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-md-8 bottom-grid-left\">
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/images/pic2.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/pic1.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/pic3.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 bottom-grid-left-grid text-center\">
\t\t\t\t\t\t<img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/pic4.jpg"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<h4>kids birthday cake</h4>
\t\t\t\t\t\t<p>\$40</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t<span class=\"best-sale\">Best sellers</span>
\t\t\t\t\t<a href=\"#\" class=\"order\"> </a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 bottom-grid-right\">
\t\t\t\t\t<h3><span class=\"tweet\"> </span> latest tweet</h3>
\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
\t\t\t\t\t<label>1 day ago</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t\t<!-- bottom-grids -->
\t<!-- /container -->
\t<!-- footer -->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"col-md-3 location\">
\t\t\t\t\t<h4>location</h4>
\t\t\t\t\t<p>#04 Dist.City,State,PK</p>
\t\t\t\t\t<h4>hours</h4>
\t\t\t\t\t<p>Weekdays 7 a.m.-7 p.m.</p>
\t\t\t\t\t<p>Weekends 8 a.m.-7 p.m.</p>
\t\t\t\t\t<p>Call for Holidays Hours.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 customer\">
\t\t\t\t\t<h4>customer service</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod. </p>
\t\t\t\t\t<h4>phone</h4>
\t\t\t\t\t<h6>1(234)567-8910</h6>
\t\t\t\t\t<h4>contact us</h4>
\t\t\t\t\t<h6>contact us page.</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 social\">
\t\t\t\t\t<h4>get social</h4>
\t\t\t\t\t<div class=\"face-b\">
\t\t\t\t\t\t<img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"twt\"> </i></a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 sign\">
\t\t\t\t\t<h4>sign up for news later</h4>\t
\t\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"YOUR EMAIL\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'YOUR EMAIL ';}\">
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<p>Template by <a href=\"http://w3layouts.com\" target=\"_blank\"> w3layouts</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
                                                        ";
        // line 373
        $this->displayBlock('content', $context, $blocks);
        // line 375
        echo "\t<!-- /footer -->
\t</body>
</html>

";
    }

    // line 373
    public function block_content($context, array $blocks = array())
    {
        // line 374
        echo "    ";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 374,  495 => 373,  487 => 375,  485 => 373,  465 => 356,  458 => 352,  414 => 311,  406 => 306,  398 => 301,  390 => 296,  367 => 276,  352 => 264,  337 => 252,  299 => 217,  288 => 209,  263 => 187,  252 => 179,  227 => 157,  216 => 149,  191 => 127,  180 => 119,  151 => 93,  136 => 83,  117 => 67,  113 => 66,  109 => 65,  105 => 64,  89 => 51,  85 => 50,  65 => 33,  61 => 32,  42 => 16,  37 => 14,  32 => 12,  20 => 2,);
    }
}
