<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/auth", name="github_redirect_url")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirect('diary');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function LogoutAction(Request $request)
    {

    }
}
