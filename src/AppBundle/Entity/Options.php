<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Options
 *
 * @ORM\Table(name="options")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OptionsRepository")
 */
class Options
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
     * @ORM\Column(name="option_name", type="string", length=255)
     */
    private $optionName;

    /**
     * @var string
     *
     * @ORM\Column(name="option_content", type="string", length=255)
     */
    private $optionContent;


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
     * Set optionName
     *
     * @param string $optionName
     *
     * @return Options
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;
    
        return $this;
    }

    /**
     * Get optionName
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set optionContent
     *
     * @param string $optionContent
     *
     * @return Options
     */
    public function setOptionContent($optionContent)
    {
        $this->optionContent = $optionContent;
    
        return $this;
    }

    /**
     * Get optionContent
     *
     * @return string
     */
    public function getOptionContent()
    {
        return $this->optionContent;
    }
}

