<?php

namespace Product\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="Product\ProduitBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_produit", type="string", length=255, nullable=true, unique=true)
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="buyingPrice", type="integer")
     */
    private $buyingPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="sellingPrice", type="integer", nullable=true, unique=true)
     */
    private $sellingPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="margingOfSell", type="integer", nullable=true, unique=true)
     */
    private $margingOfSell;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer", nullable=true, unique=true)
     */
    private $tva;

    /**
     * @var int
     *
     * @ORM\Column(name="ttc", type="integer")
     */
    private $ttc;

    /**
     * @var int
     *
     * @ORM\Column(name="ht", type="integer")
     */
    private $ht;

    /**
     * @var bool
     *
     * @ORM\Column(name="selectionner", type="boolean")
     */
    private $selectionner;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idProduit
     *
     * @param string $idProduit
     *
     * @return Produit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return string
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Produit
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Produit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set buyingPrice
     *
     * @param integer $buyingPrice
     *
     * @return Produit
     */
    public function setBuyingPrice($buyingPrice)
    {
        $this->buyingPrice = $buyingPrice;

        return $this;
    }

    /**
     * Get buyingPrice
     *
     * @return int
     */
    public function getBuyingPrice()
    {
        return $this->buyingPrice;
    }

    /**
     * Set sellingPrice
     *
     * @param integer $sellingPrice
     *
     * @return Produit
     */
    public function setSellingPrice($sellingPrice)
    {
        $this->sellingPrice = $sellingPrice;

        return $this;
    }

    /**
     * Get sellingPrice
     *
     * @return int
     */
    public function getSellingPrice()
    {
        return $this->sellingPrice;
    }

    /**
     * Set margingOfSell
     *
     * @param integer $margingOfSell
     *
     * @return Produit
     */
    public function setMargingOfSell($margingOfSell)
    {
        $this->margingOfSell = $margingOfSell;

        return $this;
    }

    /**
     * Get margingOfSell
     *
     * @return int
     */
    public function getMargingOfSell()
    {
        return $this->margingOfSell;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return Produit
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return int
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set ttc
     *
     * @param integer $ttc
     *
     * @return Produit
     */
    public function setTtc($ttc)
    {
        $this->ttc = $ttc;

        return $this;
    }

    /**
     * Get ttc
     *
     * @return int
     */
    public function getTtc()
    {
        return $this->ttc;
    }

    /**
     * Set ht
     *
     * @param integer $ht
     *
     * @return Produit
     */
    public function setHt($ht)
    {
        $this->ht = $ht;

        return $this;
    }

    /**
     * Get ht
     *
     * @return int
     */
    public function getHt()
    {
        return $this->ht;
    }

    /**
     * Set selectionner
     *
     * @param boolean $selectionner
     *
     * @return Produit
     */
    public function setSelectionner($selectionner)
    {
        $this->selectionner = $selectionner;

        return $this;
    }

    /**
     * Get selectionner
     *
     * @return bool
     */
    public function getSelectionner()
    {
        return $this->selectionner;
    }
}

