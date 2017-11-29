<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class UsuarioController extends Controller
{
    /**
     * @Route("/usuario", name="create_user")
     * @Method("GET")
     *
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Usuario:usuario.html.twig');
    }



    // REST METHODS
    
   
}
