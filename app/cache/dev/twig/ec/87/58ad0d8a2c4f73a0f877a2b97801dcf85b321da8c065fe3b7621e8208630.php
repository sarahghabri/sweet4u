<?php

/* EspritPatisserieBundle::myaccount.html.twig */
class __TwigTemplate_ec8758ad0d8a2c4f73a0f877a2b97801dcf85b321da8c065fe3b7621e8208630 extends Twig_Template
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
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/js/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
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
\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_myaccountpage");
        echo "\">My Account</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 34
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_loginpage");
        echo "\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 50
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
        // line 63
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_productpage");
        echo "\">products</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_aboutpage");
        echo "\">about</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 66
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
        // line 82
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_homepage");
        echo "\"><img src=\"images/logo.png\" title=\"Sweetcake\" /></a>
\t\t\t\t</div>
\t\t\t\t<!-- logo -->
\t\t\t</div>
\t\t</div>
\t\t<!-- /main-menu -->
\t<!---start-content----->
\t<div class=\"account\">
          <div class=\"container\">
\t\t\t\t<div class=\"col_1_of_account span_1_of_account\">
\t\t\t\t\t<h4 class=\"title\">New Customers</h4>
\t\t\t\t\t<h5 class=\"sub_title\">Register Account</h5>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
\t\t\t\t\t<div class=\"button1\">
\t\t\t\t\t   <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_registerpage");
        echo "\"><input type=\"submit\" name=\"Submit\" value=\"Continue\"></a>
\t\t\t\t\t </div>
\t\t\t\t\t <div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col_1_of_account span_1_of_account\">
\t\t\t\t  <div class=\"account-title\">
\t           \t\t<h4 class=\"title\">Registered Customers</h4>
\t\t\t\t\t <div class=\"comments-area\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label>Name</label>
\t\t\t\t\t\t\t\t<span>*</span>
\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<label>Password</label>
\t\t\t\t\t\t\t\t<span>*</span>
\t\t\t\t\t\t\t\t<input type=\"password\" value=\"\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t <p id=\"account-form-remember\">
\t\t\t\t\t\t\t\t<label><a href=\"#\">Forget Your Password ? </a></label>
\t\t\t\t\t\t\t </p>
\t\t\t\t\t\t\t <p>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Login\">
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t      </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t</div>
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
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 155
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
        return "EspritPatisserieBundle::myaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 155,  212 => 151,  154 => 96,  137 => 82,  118 => 66,  114 => 65,  110 => 64,  106 => 63,  90 => 50,  86 => 49,  68 => 34,  64 => 33,  49 => 21,  41 => 16,  36 => 14,  31 => 12,  19 => 2,);
    }
}
