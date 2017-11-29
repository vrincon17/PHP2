<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EventoController extends Controller
{
    /**
     * @Route("/evento", name="evento_listar")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Evento:evento_lista.html.twig');
    }
}
