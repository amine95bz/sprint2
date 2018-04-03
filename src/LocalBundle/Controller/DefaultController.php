<?php

namespace LocalBundle\Controller;

use LocalBundle\Entity\Local;
use LocalBundle\Form\LocalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocalBundle:Default:index.html.twig');
    }

    public function ajoutAction(Request $request)
    {
        $local = new Local();
        $form = $this->createForm(LocalType::class, $local);
        $form->handleRequest($request);

        if ($form->isValid()) { // suite au clic sur le bouton

            $em = $this->getDoctrine()->getManager();
            $em->persist($local);
            $em->flush();


        }
        return $this->render('LocalBundle:Default:ajout_local.html.twig', array(

            "Form" => $form->createView()

        ));

    }

}
