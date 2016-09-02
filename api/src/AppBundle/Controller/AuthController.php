<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
  /**
   * @Route("/authenticate", name="authenticate")
   * @Method({"POST"})
   */
  public function authenticateAction(Request $request)
  {
    $user = $this->getDoctrine()
              ->getRepository('AppBundle:User')
              ->findOneBy(['email' => $request->get('email')]);

    if(!$user) {
      $response = new Response("unauthorized");
      $response->setStatusCode(401);
      return $response;
    }

    $isValid = $user->checkPassword($request->get('password'));


    if(!$isValid) {
      $response = new Response("unauthorized");
      $response->setStatusCode(401);
      return $response;
    }

    $user->setLastLogin(new \DateTime('now'));
    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($user);
    $em->flush();

    $token = $this->get('lexik_jwt_authentication.encoder')
                ->encode(['email' => $user->getEmail()]);

    $serializer = $this->container->get('jms_serializer');
    $jsonAuth = $serializer->serialize([
      'user' => $user,
      'token' => $token
    ], 'json');

    return new Response($jsonAuth);
  }
}
