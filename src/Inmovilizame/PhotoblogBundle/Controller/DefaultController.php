<?php

namespace Inmovilizame\PhotoblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="in_portada")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
