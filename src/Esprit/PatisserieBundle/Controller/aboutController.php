<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aboutController extends Controller
{
    public function aboutIndexAction()
    {
        return $this->render('EspritPatisserieBundle:aboutF:aboutIndex.html.twig');
    }
}
