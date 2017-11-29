<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BoletoController extends Controller
{
    /**
     * @Route("/boleto", name="boleto")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Boleto:boleto.html.twig');
    }
}
