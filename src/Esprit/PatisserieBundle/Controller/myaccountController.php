<?php

namespace Esprit\PatisserieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class myaccountController extends Controller
{
    public function myaccountIndexAction()
    {
        return $this->render('EspritPatisserieBundle:myaccountF:myaccountIndex.html.twig');
    }
}

