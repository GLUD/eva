<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\TipoPregunta;

/**
 * Pregunta
 *
 * @ORM\Table(name="pregunta")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreguntaRepository")
 */
class Pregunta
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
     * @ORM\Column(name="pregunta", type="string", length=255)
     */
    private $pregunta;

    /**
     * @ORM\ManyToOne(targetEntity="TipoPregunta", inversedBy="preguntas")
     * @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     */
    private $tipo;


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
     * Set pregunta
     *
     * @param string $pregunta
     *
     * @return Pregunta
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }
    
    /**
     * Set tipo
     *
     * @return int
     */
    public function setTipo()
    {
        return $this->id;
    }
    
    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->id;
    }
}

