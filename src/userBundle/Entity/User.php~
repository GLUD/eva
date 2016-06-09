<?php
// src/userBundle/Entity/User.php

namespace userBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
    *
    * @ORM\ManyToOne(targetEntity="rol", inversedBy="users")
    * @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
    */
    protected $rol;
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var string
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    protected $nombre;
    /**
     * @var string
     * @ORM\Column(name="apellido", type="string", length=255, nullable=true)
     */
    protected $apellido;
    /**
     * Set rol
     *
     * @param \userBundle\Entity\rol $rol
     *
     * @return User
     */
    public function setRol(\userBundle\Entity\rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \userBundle\Entity\rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
}
