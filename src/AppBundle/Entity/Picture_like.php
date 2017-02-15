<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="picture_like")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Picture_likeRepository")
 */
class Picture_like
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
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $id_user;

    /**
     * @var int
     *
     * @ORM\Column(name="id_picture", type="integer")
     */
    private $id_picture;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_user
     *
     * @param integer $id_user
     *
     * @return User
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    
        return $this;
    }

    /**
     * Get id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set id_picture
     *
     * @param integer $id_picture
     *
     * @return User
     */
    public function setIdPicture($id_picture)
    {
        $this->id_picture = $id_picture;
    
        return $this;
    }

    /**
     * Get id_picture
     *
     * @return integer
     */
    public function getIdPicture()
    {
        return $this->id_picture;
    }
}

