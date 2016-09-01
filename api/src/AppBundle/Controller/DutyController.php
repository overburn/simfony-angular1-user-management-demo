<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DutyController extends Controller
{
  /**
   * @Route("/duties", name="list-duties")
   * @Method({"GET"})
   */
  public function listAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/duties/{id}", name="get-duty")
   * @Method({"GET"})
   */
  public function getAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/duties", name="create-duty")
   * @Method({"POST"})
   */
  public function createAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/duties/{id}", name="update-duty")
   * @Method({"PATCH"})
   */
  public function updateAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }

  /**
   * @Route("/duties/{id}", name="remove-duty")
   * @Method({"DELETE"})
   */
  public function removeAction(Request $request)
  {
    return new JsonResponse("Not Implemented");
  }
}
