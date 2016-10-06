<?php

namespace SZ\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserController extends Controller
{
    /**
     * Create user
     * @Route("/users/" name="create_user")
     * @Method({"POST"})
     */
    public function createAction()
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * Liste users
     * @Route("/users/" name="liste_users")
     * @Method({"GET"})
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SZUserBundle:User');
        $listUsers = $repository->findAll();
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * Read user.
     * @Route("/users/{id}/" requirements={"id" = "\d+"} name="show_user")
     * @Method({"GET"})
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SZUserBundle:User');
		$user = $em->getRepository('SZUserBundle:User')->find($id);
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
    
    /**
     * update user.
     * @Route("/users/{id}/" requirements={"id" = "\d+"} name="update_user")
     * @Method({"PUT"})
     */
    public function updateAction($id)
    {
        return $this->render('SZUserBundle:Default:index.html.twig');
    }
}
