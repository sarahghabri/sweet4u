<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class contactController extends Controller
{
    public function contactIndexAction()
    {
        return $this->render('EspritPatisserieBundle:contactF:contactIndex.html.twig');
    }
}

