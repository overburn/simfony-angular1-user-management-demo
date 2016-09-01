<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
