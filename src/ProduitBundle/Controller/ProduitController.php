<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 02/04/2018
 * Time: 21:27
 */

namespace ProduitBundle\Controller;



use ProduitBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function VetementAction()
    {
        $produit = new Produit();
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository("ProduitBundle:Produit")->findAll();

        $query= $em->createQuery(
            'SELECT p FROM ProduitBundle:Produit p 
            WHERE p.categorie =:h'
        );
        $query->setParameter('h',"Vetement");
        $produits = $query->getResult();

        return $this->render('ProduitBundle:Produit:Vetement.html.twig',array('produits'=>$produits));


    }

}