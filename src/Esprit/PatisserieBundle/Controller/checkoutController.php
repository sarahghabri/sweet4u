<?php
namespace Esprit\PatisserieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class checkoutController extends Controller {
    //put your code here
     function checkoutIndexAction(){
         return $this->render('EspritPatisserieBundle:checkoutF:checkoutIndex.html.twig');
    }
}
