<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *  @Security("is_granted('ROLE_USER')")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="api-status")
     */
    public function indexAction(Request $request)
    {
        return new JsonResponse([
          'api-name' => 'demo-app',
          'api-version' => '1.0'
        ]);
    }
}
