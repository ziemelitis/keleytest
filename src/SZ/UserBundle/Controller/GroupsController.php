<?php

namespace SZ\UserBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupsController extends Controller
{
    /**
     * Create groups
     * @Route("/groups/" name="create_group")
     * @Method({"POST"})
     */
    public function createAction()
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * Liste groups
     * @Route("/groups/" name="liste_group")
     * @Method({"GET"})
     */
    public function listAction()
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * Read groups.
     * @Route("/groups/{id}/" requirements={"id" = "\d+"} name="show_group")
     * @Method({"GET"})
     */
    public function showAction($id)
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * update groups
     * @Route("/groups/{id}/" requirements={"id" = "\d+"} name="update_group")
     * @Method({"PUT"})
     */
    public function updateAction($id)
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
}
