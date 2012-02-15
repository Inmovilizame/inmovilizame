<?php

namespace Inmovilizame\PhotoblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/faq")
 */
class FaqController extends Controller
{
    /**
     * @Route("/", name="in_faq_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
