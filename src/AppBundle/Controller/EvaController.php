<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EvaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->redirect($this->generateUrl('PáginaPrincipal'), 301);
    }

    /**
     * @Route("/main", name="PáginaPrincipal")
     */
    public function mainAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/index.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/createExam", name="createExam")
     */
    public function createExamAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/createExam.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/docente", name="docente")
     */
    public function docenteAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/docente.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/invitado", name="invitado")
     */
    public function invitadoAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/invitado.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/ListaExamenes", name="listaExmanes")
     */
    public function ListaExamenesAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/ListaExamenes.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/plantilla", name="plantilla")
     */
    public function plantillaAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/plantilla.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }


    /**
     * @Route("/student", name="estudiante")
     */
    public function studentAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/estudiante.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/presentarExam", name="presentarExam")
     */
    public function presentarExamAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/presentarExam.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }

    /**
     * @Route("/addStudent", name="addStudent")
     */
    public function addStudentAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/AñadirEstud.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }


}
