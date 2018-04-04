<?php

namespace ProduitBundle\Controller;

use ProduitBundle\Entity\Produit;
use ProduitBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProduitBundle:Default:index.html.twig');
    }

    public function valideAction()
    {
        return $this->render('ProduitBundle:Default:valide.html.twig');
    }

    public function addAction(Request $request)
    {
        $Produit = new Produit();
        $form = $this->createForm(ProduitType::class, $Produit);
        $form->handleRequest($request);
        $Produit->setProp($this->getUser());

        if ($form->isValid()) { // suite au clic sur le bouton

            $em = $this->getDoctrine()->getManager();
            $em->persist($Produit);
            $em->flush();
            return $this->redirectToRoute('succes');

        }
        return $this->render('ProduitBundle:Default:ajout_Produit.html.twig', array(

            "Form" => $form->createView()

        ));

    }

    public function ProduitsAction($ref)
    {

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository("ProduitBundle:Produit")->findAll();

        return $this->render('ProduitBundle:Default:tout_Produit.html.twig', array(
            "Produits" => $produits
        ));

    }

    public function afficherProduitAction(){
        $produit=new Produit();
        $produit = $this->getDoctrine()->getManager();
        $produits= $produit->getRepository("ProduitBundle:Produit")->findAll();

        return $this->render('ProduitBundle:Default:afficher.html.twig',array(
            'produit'=>$produits
        ));

    }
}
