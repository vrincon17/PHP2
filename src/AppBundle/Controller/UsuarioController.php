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

/**
 * class UsuarioController
 * @package AppBundle\Controller
 * @route("/usuario" )
 */
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
 /**
     * @Route("/adduser", name="adduser")
     * @Method("POST")
     *
     */
    public function adduser (Request $request){
        //dump($request->getContent());
        //die;
        $data=json_decode($request->getContent(),true );

        $usuario=new Usuario (); 
        $form=$this->createForm(UsuarioType::class,$usuario);
        $form->submit($data);

        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
               }
               else{

                echo $form->getErrorsAsString();
                    dump($data);
                    die;
               }
        


               $data= $this->get("serializer")->serialize($usuario,'json');
               $newusuario=json_decode($data,true);
               return new JsonResponse($newusuario);
}

    // REST METHODS
     public function mostrar(Reques $request)
    {

        # code...
    }
    /**
     * @Route("/lista", name="listarestudiantes")
     * @param Request $request
     * @return \symfony\component\HttpFoundation\Response   
     */
   public  function listarestudiantes (Request $request){

        $usuario = $this->getDoctrine()->getRepository(Usuario::class)->findall();
    return $this->render('AppBundle:Usuario:user.html.twig', array(
        'usuarios' =>$usuario,
    ));
    

   }
}
