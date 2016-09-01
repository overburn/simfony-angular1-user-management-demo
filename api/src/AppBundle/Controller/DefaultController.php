<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
