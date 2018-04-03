<?php

namespace LocalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="id_prop", columns={"id_prop"}), @ORM\Index(name="id_local", columns={"id_local"})})
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="date", nullable=true)
     */
    private $enddate;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=50, nullable=false)
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * Many Features have One Modele.
     * @ORM\ManyToOne(targetEntity="BaseBundle\Entity\User")
     * @ORM\JoinColumn(name="id_prop", referencedColumnName="id")
     */
    private $id_prop;


    /**
     * Many Features have One Modele.
     * @ORM\ManyToOne(targetEntity="LocalBundle\Entity\Local")
     * @ORM\JoinColumn(name="id_local", referencedColumnName="id_local")
     */
    private $id_local;

}

