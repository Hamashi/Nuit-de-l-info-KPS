<?php

namespace LeGenieDePetra\mainBundle\Entity;

/**
 * dette
 */
class dette
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
    private $preteur;

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
     * @return dette
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
     * Set preteur
     *
     * @param string $preteur
     *
     * @return dette
     */
    public function setPreteur($preteur)
    {
        $this->preteur = $preteur;

        return $this;
    }

    /**
     * Get preteur
     *
     * @return string
     */
    public function getPreteur()
    {
        return $this->preteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return dette
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

