<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\TipoPregunta;

use Doctrine\Common\Collections\ArrayCollection;

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
    private $tipoPregunta;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Respuesta", mappedBy="pregunta")
     */
    private $respuestas;
    
    public function __construct()
    {
        $this->respuestas = new ArrayCollection();
    }


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
     * Add respuesta
     *
     * @param \AppBundle\Entity\Respuesta $respuesta
     *
     * @return Pregunta
     */
    public function addRespuesta(\AppBundle\Entity\Respuesta $respuesta)
    {
        $this->respuestas[] = $respuesta;

        return $this;
    }

    /**
     * Remove respuesta
     *
     * @param \AppBundle\Entity\Respuesta $respuesta
     */
    public function removeRespuesta(\AppBundle\Entity\Respuesta $respuesta)
    {
        $this->respuestas->removeElement($respuesta);
    }

    /**
     * Get respuestas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRespuestas()
    {
        return $this->respuestas;
    }
    
    /**
     * Set tipoPregunta
     *
     * @param \AppBundle\Entity\TipoPregunta $tipoPregunta
     *
     * @return Pregunta
     */
    public function setTipoPregunta(\AppBundle\Entity\TipoPregunta $tipoPregunta)
    {
        $this->tipoPregunta = $tipoPregunta;

        return $this;
    }

    /**
     * Get tipoPregunta
     *
     * @return \AppBundle\Entity\TipoPregunta
     */
    public function getTipoPregunta()
    {
        return $this->tipoPregunta;
    }
}
