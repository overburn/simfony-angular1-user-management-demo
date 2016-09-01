<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
  /**
   * @Route("/users", name="list-users")
   * @Method({"GET"})
   */
  public function listAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/users/{id}", name="get-user")
   * @Method({"GET"})
   */
  public function getAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/users", name="create-user")
   * @Method({"POST"})
   */
  public function createAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/users/{id}", name="update-user")
   * @Method({"PATCH"})
   */
  public function updateAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/users/{id}", name="remove-user")
   * @Method({"DELETE"})
   */
  public function removeAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

}
