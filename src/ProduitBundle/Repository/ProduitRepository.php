<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 03/04/2018
 * Time: 02:15
 */

namespace ProduitBundle\Repository;
use Doctrine\ORM\EntityRepository;


class ProduitRepository
{
    public function findProduitDQL($categorie)
    {
        $Query=$this->

        getEntityManager()
            ->createQuery(" 
 select v from ClientBundle:Produit v where v.nom LIKE :categorie OR v.categorie LIKE :categorie 

  ")
            ->setParameter('categorie','%'.$categorie.'%');


        return $Query->getResult();

    }
}