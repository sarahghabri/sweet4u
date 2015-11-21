<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class registerController extends Controller
{
    public function registerIndexAction()
    {
        return $this->render('EspritPatisserieBundle:registerF:registerIndex.html.twig');
    }
}

