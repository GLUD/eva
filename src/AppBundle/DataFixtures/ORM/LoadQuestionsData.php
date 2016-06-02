<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\TipoPregunta;
use AppBundle\Entity\Pregunta;
use AppBundle\Entity\Respuesta;


class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tipoPregunta1 = new TipoPregunta();
        $tipoPregunta1->setTipo('Selección Múltiple con Múltiple Respuesta');
        $manager->persist($tipoPregunta1);
        
        $tipoPregunta2 = new TipoPregunta();
        $tipoPregunta2->setTipo('Selección Múltiple con Única Respuesta');
        $manager->persist($tipoPregunta2);
        
        $tipoPregunta3 = new TipoPregunta();
        $tipoPregunta3->setTipo('Falso Verdadero');
        $manager->persist($tipoPregunta3);
        
        $tipoPregunta4 = new TipoPregunta();
        $tipoPregunta4->setTipo('Matching');
        $manager->persist($tipoPregunta4);
        
        $tipoPregunta5 = new TipoPregunta();
        $tipoPregunta5->setTipo('Numérica');
        $manager->persist($tipoPregunta5);
        
        $tipoPregunta6 = new TipoPregunta();
        $tipoPregunta6->setTipo('Texto');
        $manager->persist($tipoPregunta6);
        
        $pregunta = new Pregunta();
        $pregunta->setPregunta('¿Qué es blanco?');
		$pregunta->setTipoPregunta($tipoPregunta1);
        $manager->persist($pregunta);
        
        /*INICIO Respuestas*/
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Perro');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Huevo');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Gallina');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Pelota de Golf');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);        
        /*FIN Respuestas*/
        
		$pregunta = new Pregunta();
        $pregunta->setPregunta('¿Qué es blanco y gallina lo pone?');
		$pregunta->setTipoPregunta($tipoPregunta2);
        $manager->persist($pregunta);
        
        /*INICIO Respuestas*/
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Perro');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Huevo');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Gallina');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Pelota de Golf');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);        
        /*FIN Respuestas*/
        
        $pregunta = new Pregunta();
        $pregunta->setPregunta('¿Los perros van al cielo?');
		$pregunta->setTipoPregunta($tipoPregunta3);
        $manager->persist($pregunta);
        
        /*INICIO Respuestas*/
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Falso');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('Verdadero');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);    
        /*FIN Respuestas*/
        
        $pregunta = new Pregunta();
        $pregunta->setPregunta('Empareje los estereotipos');
		$pregunta->setTipoPregunta($tipoPregunta4);
        $manager->persist($pregunta);
        
        $pregunta = new Pregunta();
        $pregunta->setPregunta('¿Cuánto da 5 por 8?');
		$pregunta->setTipoPregunta($tipoPregunta5);
        $manager->persist($pregunta);
        
        /*INICIO Respuestas*/
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('40');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        /*FIN Respuestas*/
        
        $pregunta = new Pregunta();
        $pregunta->setPregunta('¿Cuál es el mejor editor para symfony?');
		$pregunta->setTipoPregunta($tipoPregunta6);
        $manager->persist($pregunta);
        
        /*INICIO Respuestas*/
        $respuesta = new Respuesta();
        $respuesta->setRespuesta('atom');
		$respuesta->setPregunta($pregunta);
        $manager->persist($respuesta);
        /*FIN Respuestas*/
        
        $manager->flush();
    }
}
