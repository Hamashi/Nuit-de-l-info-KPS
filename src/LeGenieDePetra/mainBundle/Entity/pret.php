<?php

namespace LeGenieDePetra\mainBundle\Entity;

/**
 * pret
 */
class pret
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $somme;

    /**
     * @var string
     */
    private $empreinteur;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set somme
     *
     * @param integer $somme
     *
     * @return pret
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return int
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set empreinteur
     *
     * @param string $empreinteur
     *
     * @return pret
     */
    public function setEmpreinteur($empreinteur)
    {
        $this->empreinteur = $empreinteur;

        return $this;
    }

    /**
     * Get empreinteur
     *
     * @return string
     */
    public function getEmpreinteur()
    {
        return $this->empreinteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return pret
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

