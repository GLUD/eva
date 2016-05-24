<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/uno", name="homepage2")
     */
    public function unoAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/uno.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
        // return new Response(// inclusion de HTML
        // '<html>
        // <head>
        //   <meta charset="UTF-8">
        //   <title>{% block title %}Test Application{% endblock %}</title>
        // </head>
        // <body>
        //   <div id="sidebar">
        //       {% block sidebar %}
        //           <ul>
        //               <li><a href="/">Home</a></li>
        //               <li><a href="/blog">Blog</a></li>
        //           </ul>
        //       {% endblock %}
        //   </div>
        //
        //   <div id="content">
        //       {% block body %}{% endblock %}
        //   </div>
        // </body>
        // </html>'
        // );
    }

    /**
     * @Route("/dos", name="homepage3")
     */
    public function dosAction(Request $request)
    {
      // replace this example code with whatever you need
      return $this->render('eva/dos.html.twig', array(
          'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
      ));
    }
}
