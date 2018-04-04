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
    public function succesAction()
    {
        return $this->render('LocalBundle:Default:succes.html.twig');
    }

    public function ajoutAction(Request $request)
    {
        $local = new Local();
        $form = $this->createForm(LocalType::class, $local);
        $form->handleRequest($request);
        $local->setProp($this->getUser());

        if ($form->isValid()) { // suite au clic sur le bouton

            $em = $this->getDoctrine()->getManager();
            $em->persist($local);
            $em->flush();
            return $this->redirectToRoute('succes');

        }
        return $this->render('LocalBundle:Default:ajout_local.html.twig', array(

            "Form" => $form->createView()

        ));

    }

    public function locauxAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $locaux = $em->getRepository("LocalBundle:Local")->findBy(array('prop'=>$id));
        return $this->render('LocalBundle:Default:all_local.html.twig', array(

            "locaux" => $locaux
        ));

    }

    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $local = $em->getRepository("LocalBundle:Local")->find($id);
        $em->remove($local);
        $em->flush();
        return $this->redirectToRoute('all_local');

    }

}
