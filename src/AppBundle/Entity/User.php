<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements Symfony\Component\Security\Core\User\UserInterface
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
     * @ORM\Column(name="first_name", type="string", length=100)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="birthday", type="integer")
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=150)
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="is_deleted", type="datetime")
     */
    private $isDeleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="is_created", type="datetime")
     */
    private $isCreated;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;



    private $salt;



    public function __construct() {
        // De base, on va attribuer au nouveau utilisateur, le rôle « ROLE_USER »
        $this->roles = array("ROLE_USER");
        // Chaque utilisateur va se voir attribuer une clé permettant 
        // de saler son mot de passe. Cela n'est pas obligatoire,
        // on pourrait mettre $salt à null
        $this->salt = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birthday
     *
     * @param integer $birthday
     *
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return integer
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set isDeleted
     *
     * @param \DateTime $isDeleted
     *
     * @return User
     */
    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    
        return $this;
    }

    /**
     * Get isDeleted
     *
     * @return \DateTime
     */
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    /**
     * Set isCreated
     *
     * @param \DateTime $isCreated
     *
     * @return User
     */
    public function setIsCreated($isCreated)
    {
        $this->isCreated = $isCreated;
    
        return $this;
    }

    /**
     * Get isCreated
     *
     * @return \DateTime
     */
    public function getIsCreated()
    {
        return $this->isCreated;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }




    /**
     * Get status
     *
     * @return string
     */

    public function getSalt() {
        return $this->salt;
    }


    /**
     * Set status
     *
     * @param string $status
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }




    public function eraseCredentials() {
        // Ici nous n'avons rien à effacer. 
        // Cela aurait été le cas si nous avions un mot de passe en clair.
    }
}

