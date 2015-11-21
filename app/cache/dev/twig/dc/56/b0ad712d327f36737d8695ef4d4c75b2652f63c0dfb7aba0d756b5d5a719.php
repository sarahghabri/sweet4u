<?php

/* EspritPatisserieBundle::products.html.twig */
class __TwigTemplate_dc56b0ad712d327f36737d8695ef4d4c75b2652f63c0dfb7aba0d756b5d5a719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
\t\t<title>Sweet-cakes Website Template | Home :: w3layouts</title>
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
\t\t</script>
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
        echo "\">Checkout</a></li>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</ul>
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
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_myaccountpage");
        echo "\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 49
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
\t\t\t\t\t<li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_productpage");
        echo "\">products</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_aboutpage");
        echo "\">about</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_contactpage");
        echo "\">Contact</a></li>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</ul>
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
        // line 81
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/logo.png"), "html", null, true);
        echo "\" title=\"Sweetcake\" /></a>
\t\t\t\t</div>
\t\t\t\t<!-- logo -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /main-menu -->
\t<!-- service -->
<div class=\"biseller-info\">
<div class=\"container\">
<h2>Products</h2>
<h3 class=\"new-models\">new varieties</h3>
\t\t\t<ul id=\"flexiselDemo3\">
\t\t\t\t<li>
\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t<img src=\"images/11.jpg\" alt=\"\" class=\"veiw-img\">
\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"singlepage.html\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Delicious</h4>
\t\t\t\t\t\t<p>\$ 170.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t<img src=\"images/12.jpg\" alt=\"\" class=\"veiw-img\">
\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Printed Cake</h4>
\t\t\t\t\t\t<p>\$ 600.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t<img src=\"images/13.jpg\" alt=\"\" class=\"veiw-img\">
\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Forest Egg</h4>
\t\t\t\t\t\t<p>\$ 400.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/14.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"veiw-img\">
\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Butter Scotch </h4>
\t\t\t\t\t\t<p>\$ 219.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t     \t</ul>
\t\t\t</div>
\t\t</div>\t

\t\t\t<script type=\"text/javascript\">
\t\t\t\t \$(window).load(function() {
\t\t\t\t\t\$(\"#flexiselDemo3\").flexisel({
\t\t\t\t\t\tvisibleItems: 4,
\t\t\t\t\t\tanimationSpeed: 1000,
\t\t\t\t\t\tautoPlay: false,
\t\t\t\t\t\tautoPlaySpeed: 3000,    \t\t
\t\t\t\t\t\tpauseOnHover: true,
\t\t\t\t\t\tenableResponsiveBreakpoints: true,
\t\t\t\t    \tresponsiveBreakpoints: { 
\t\t\t\t    \t\tportrait: { 
\t\t\t\t    \t\t\tchangePoint:480,
\t\t\t\t    \t\t\tvisibleItems: 1
\t\t\t\t    \t\t}, 
\t\t\t\t    \t\tlandscape: { 
\t\t\t\t    \t\t\tchangePoint:640,
\t\t\t\t    \t\t\tvisibleItems: 2
\t\t\t\t    \t\t},
\t\t\t\t    \t\ttablet: { 
\t\t\t\t    \t\t\tchangePoint:768,
\t\t\t\t    \t\t\tvisibleItems: 3
\t\t\t\t    \t\t}
\t\t\t\t    \t}
\t\t\t\t    });
\t\t\t\t    
\t\t\t\t});
\t\t\t   </script>
\t\t\t   <script type=\"text/javascript\" src=\"js/jquery.flexisel.js\"></script>
\t\t\t
\t\t\t\t<div class=\"best-seller\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"biseller-info\">
\t\t\t\t\t <h3 class=\"new-models\">varieties</h3>
\t\t\t\t\t<ul id=\"flexiselDemo1\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/18.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Chocolate </h4>
\t\t\t\t\t\t<p>\$ 200.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/15.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 211
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Birthday Cakes </h4>
\t\t\t\t\t\t<p>\$ 180.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 217
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/16.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"singlepage.html\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Flower Types </h4>
\t\t\t\t\t\t<p>\$ 140.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"singlepage.html\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"biseller-column\">
\t\t\t\t\t\t\t<img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/17.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t<div class=\"veiw-img-mark\">
\t\t\t\t\t\t\t<a href=\"";
        // line 241
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\">Quick view</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"biseller-name\">
\t\t\t\t\t\t<h4>Sheet Cake </h4>
\t\t\t\t\t\t<p>\$ 150.99</p>
\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"";
        // line 247
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_singlepage");
        echo "\"><button class=\"add2cart\">
\t\t\t\t\t\t    <span>| Add to Cart</span>
\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t     \t</ul>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t \$(window).load(function() {
\t\t\t\t\t\$(\"#flexiselDemo1\").flexisel({
\t\t\t\t\t\tvisibleItems: 4,
\t\t\t\t\t\tanimationSpeed: 1000,
\t\t\t\t\t\tautoPlay: true,
\t\t\t\t\t\tautoPlaySpeed: 3000,    \t\t
\t\t\t\t\t\tpauseOnHover: true,
\t\t\t\t\t\tenableResponsiveBreakpoints: true,
\t\t\t\t    \tresponsiveBreakpoints: { 
\t\t\t\t    \t\tportrait: { 
\t\t\t\t    \t\t\tchangePoint:480,
\t\t\t\t    \t\t\tvisibleItems: 1
\t\t\t\t    \t\t}, 
\t\t\t\t    \t\tlandscape: { 
\t\t\t\t    \t\t\tchangePoint:640,
\t\t\t\t    \t\t\tvisibleItems: 2
\t\t\t\t    \t\t},
\t\t\t\t    \t\ttablet: { 
\t\t\t\t    \t\t\tchangePoint:768,
\t\t\t\t    \t\t\tvisibleItems: 3
\t\t\t\t    \t\t}
\t\t\t\t    \t}
\t\t\t\t    });
\t\t\t\t    
\t\t\t\t});
\t\t\t   </script>
\t\t\t   <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/js/jquery.flexisel.js"), "html", null, true);
        echo "\"></script>
\t\t\t
\t\t\t<div class=\"clearfix\"></div>


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
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t\t<a href=\"#\"><i class=\"twt\"> </i></a>
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 sign\">
\t\t\t\t\t<h4>sign up for news later</h4>\t
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"YOUR EMAIL\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'YOUR EMAIL ';}\">
\t\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<p>Template by <a href=\"http://w3layouts.com\" target=\"_blank\"> w3layouts</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /footer -->
\t</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "EspritPatisserieBundle::products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 315,  425 => 311,  394 => 283,  355 => 247,  346 => 241,  341 => 239,  323 => 224,  313 => 217,  304 => 211,  299 => 209,  289 => 202,  280 => 196,  275 => 194,  227 => 149,  218 => 143,  213 => 141,  203 => 134,  194 => 128,  181 => 118,  172 => 112,  160 => 103,  133 => 81,  114 => 65,  110 => 64,  106 => 63,  102 => 62,  86 => 49,  82 => 48,  64 => 33,  60 => 32,  41 => 16,  36 => 14,  31 => 12,  19 => 2,);
    }
}
