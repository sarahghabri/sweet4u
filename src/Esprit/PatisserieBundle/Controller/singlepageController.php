<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class singlepageController extends Controller
{
    public function singlepageIndexAction()
    {
        return $this->render('EspritPatisserieBundle:singlepageF:singlepageIndex.html.twig');
    }
}
