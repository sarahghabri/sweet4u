<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class productController extends Controller
{
    public function productIndexAction()
    {
        return $this->render('EspritPatisserieBundle:productF:productIndex.html.twig');
    }
}

