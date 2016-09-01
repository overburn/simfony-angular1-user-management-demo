<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
  /**
   * @Route("/authenticate", name="authenticate")
   * @Method({"POST"})
   */
  public function authenticateAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }
}
