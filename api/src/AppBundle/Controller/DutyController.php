<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Repository\DutyRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *  @Security("is_granted('ROLE_USER')")
 */
class DutyController extends Controller
{
  /**
   * @Route("/duties", name="list-duties")
   * @Method({"GET"})
   */
  public function listAction(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository('AppBundle:Duty');
    $duties = $repository->findAll();

    $serializer = $this->container->get('jms_serializer');
    $jsonDuties = $serializer->serialize($duties, 'json');

    return new Response($jsonDuties);
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
