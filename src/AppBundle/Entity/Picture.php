<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picture
 *
 * @ORM\Table(name="picture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PictureRepository")
 */
class Picture
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="geolocalisation", type="string", length=255)
     */
    private $geolocalisation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $id_user;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contest", type="integer")
     */
    private $id_contest;

    /**
     * @var string
     *
     * @ORM\Column(name="hebergement", type="string", length=50)
     */
    private $hebergement;


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
     * Set name
     *
     * @param string $name
     *
     * @return Picture
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Picture
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set geolocalisation
     *
     * @param string $geolocalisation
     *
     * @return Picture
     */
    public function setGeolocalisation($geolocalisation)
    {
        $this->geolocalisation = $geolocalisation;

        return $this;
    }

    /**
     * Get geolocalisation
     *
     * @return string
     */
    public function getGeolocalisation()
    {
        return $this->geolocalisation;
    }

    /**
     * Get id_contest
     *
     * @return int
     */
    public function getIdContest()
    {
        return $this->id_contest;
    }

    /**
     * Set id_contest
     *
     * @param int $id_contest
     *
     * @return Picture
     */
    public function setidContest($id_contest)
    {
        $this->id_contest = $id_contest;

        return $this;
    }

    /**
     * Get id_user
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set id_user
     *
     * @param int $id_user
     *
     * @return Picture
     */
    public function setidUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Set hebergement
     *
     * @param string $hebergement
     *
     * @return Picture
     */
    public function setHebergement($hebergement)
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    /**
     * Get hebergement
     *
     * @return string
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

}

