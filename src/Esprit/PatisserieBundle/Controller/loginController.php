<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class loginController extends Controller
{
    public function loginIndexAction()
    {
        return $this->render('EspritPatisserieBundle:loginF:loginIndex.html.twig');
    }
}
