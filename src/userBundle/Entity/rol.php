<?php

namespace userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="userBundle\Repository\rolRepository")
 */
class rol
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
     * @ORM\OneToMany(targetEntity="User", mappedBy="rol")
     */
    protected $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }
    /**
     * @var string
     *
     * @ORM\Column(name="rol", type="string", length=255, unique=true)
     */
    private $rol;


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
     * Set rol
     *
     * @param string $rol
     *
     * @return rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add user
     *
     * @param \userBundle\Entity\User $user
     *
     * @return rol
     */
    public function addUser(\userBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \userBundle\Entity\User $user
     */
    public function removeUser(\userBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function __toString()
    {
      return $this->rol;
    }
}
