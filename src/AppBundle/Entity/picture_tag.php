<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * picture_tag
 *
 * @ORM\Table(name="picture_tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\picture_tagRepository")
 */
class picture_tag
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
     * @ORM\Column(name="tag_id", type="integer")
     */
    private $tagId;

    /**
     * @var int
     *
     * @ORM\Column(name="picture_id", type="integer")
     */
    private $pictureId;


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
     * Set tagId
     *
     * @param integer $tagId
     *
     * @return picture_tag
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return int
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set pictureId
     *
     * @param integer $pictureId
     *
     * @return picture_tag
     */
    public function setPictureId($pictureId)
    {
        $this->pictureId = $pictureId;

        return $this;
    }

    /**
     * Get pictureId
     *
     * @return int
     */
    public function getPictureId()
    {
        return $this->pictureId;
    }
}

