<?php

/* EspritPatisserieBundle::contact.html.twig */
class __TwigTemplate_82bf11a1eacd3a66aed5cd9e757946995ae7d3bd1650fa1710bc19041f088865 extends Twig_Template
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
\t\t<title>Sweet-cakes Website </title>
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
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_loginpage");
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
\t\t\t\t\t<li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_productpage");
        echo "\">products</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("esprit_patisserie_aboutpage");
        echo "\">about</a></li>
\t\t\t\t\t<li class=\"active\"><a href=\"";
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
\t<!---start-content----->
\t\t\t<div class=\"content\">
\t\t\t<div class=\"container\">
\t\t\t<h2>Contact</h2>
\t\t\t<!----start-main-content----->
\t\t\t<div class=\"main-content\">
\t\t\t\t\t<!---start-contact---->
\t\t\t\t\t<div class=\"contact\">
\t\t\t\t\t<div class=\"contact_info\">
\t\t\t    \t \t<h3>Find Us Here</h3>
\t\t\t    \t \t\t<div class=\"map\">
\t\t\t\t\t   \t\t\t<iframe width=\"100%\" height=\"175\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed\"></iframe><br><small><a href=\"https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265\" style=\"color:#666;text-align:left;font-size:12px\">View Larger Map</a></small>
\t\t\t\t\t   \t\t</div>
      \t\t\t\t</div>
\t\t\t\t\t\t<div class=\"section group\">\t\t\t\t
\t\t\t\t<div class=\"col span_1_of_3\">
\t\t\t\t\t
      \t\t\t<div class=\"company_address\">
\t\t\t\t     \t<h3>Bakery Information :</h3>
\t\t\t\t\t\t    \t<p>500 Lorem Ipsum Dolor Sit,</p>
\t\t\t\t\t\t   \t\t<p>22-56-2-9 Sit Amet, Lorem,</p>
\t\t\t\t\t\t   \t\t<p>USA</p>
\t\t\t\t   \t\t<p>Phone:(00) 222 666 444</p>
\t\t\t\t   \t\t<p>Fax: (000) 000 00 00 0</p>
\t\t\t\t \t \t<p>Email: <span>info@mycompany.com</span></p>
\t\t\t\t   \t\t<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
\t\t\t\t   </div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"col span_2_of_3\">
\t\t\t\t  <div class=\"contact-form\">
\t\t\t\t  \t<h3>Contact Us</h3>
\t\t\t\t\t    <form method=\"post\" action=\"contact-post.html\">
\t\t\t\t\t    \t<div>
\t\t\t\t\t\t    \t<span><label>NAME</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userName\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t    \t<span><label>E-MAIL</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userEmail\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t     \t<span><label>MOBILE</label></span>
\t\t\t\t\t\t    \t<span><input name=\"userPhone\" type=\"text\" class=\"textbox\"></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div>
\t\t\t\t\t\t    \t<span><label>SUBJECT</label></span>
\t\t\t\t\t\t    \t<span><textarea name=\"userMsg\"> </textarea></span>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t   <div>
\t\t\t\t\t\t   \t\t<span><input type=\"submit\" value=\"Submit\"></span>
\t\t\t\t\t\t  </div>
\t\t\t\t\t    </form>

\t\t\t\t    </div>
  \t\t\t\t</div>\t\t\t\t
\t\t\t  </div>
\t\t\t\t\t<!---End-contact---->
\t\t\t</div>
\t\t\t<div class=\"clear\"> </div>
\t\t\t<!----End-main-content----->
\t\t</div>
\t\t</div>
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
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bundles/espritpatisserie/images/foot.png"), "html", null, true);
        echo "\" title=\"name\"/>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fb\"> </i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"twet\">\t\t
\t\t\t\t\t\t<img src=\"";
        // line 178
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
        return "EspritPatisserieBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 178,  231 => 174,  133 => 81,  114 => 65,  110 => 64,  106 => 63,  102 => 62,  86 => 49,  82 => 48,  64 => 33,  60 => 32,  41 => 16,  36 => 14,  31 => 12,  19 => 2,);
    }
}
