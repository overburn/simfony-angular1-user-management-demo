<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Repository\UserRepository;

use \Doctrine\Common\Util\Debug;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 *  @Security("is_granted('ROLE_USER')")
 */
class UserController extends Controller
{
  /**
   * @Route("/users", name="list-users")
   * @Method({"GET"})
   */
  public function listAction(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository('AppBundle:User');

    $filters = [];

    $requestData = $request->query->all();

    foreach($requestData as $k=>$row) {
      $filters[$k] = $row;
    }

    $users = $repository->findFiltered($filters);

    $serializer = $this->container->get('jms_serializer');
    $jsonUsers = $serializer->serialize($users, 'json');

    return new Response($jsonUsers);
  }

  /**
   * @Route("/users/{id}", name="get-user")
   * @Method({"GET"})
   */
  public function getAction(Request $request, $id)
  {
    $repository = $this->getDoctrine()->getRepository('AppBundle:User');
    $user = $repository->findOne($id);

    $serializer = $this->container->get('jms_serializer');
    $jsonUser = $serializer->serialize($user, 'json');

    return new Response($jsonUser);
  }

  /**
   * @Route("/users", name="create-user")
   * @Method({"POST"})
   */
  public function createAction(Request $request)
  {
    $postData = $request->request->all();


    //TODO: move these if there's time; they do not belong here
    if(isset($postData['supervisor']['id'])) {
      $postData['supervisor'] = $postData['supervisor']['id'];
    }

    if(isset($postData['duties'])) {
      foreach($postData['duties'] as $k=>$duty) {
        if(isset($duty['id'])) {
          $postData['duties'][$k] = $duty['id'];
        }
      }
    }

    $userForm = $this->createForm(UserType::class, new User, ['method' => 'POST']);

    $userForm->submit($postData);

    $serializer = $this->container->get('jms_serializer');
    if($userForm->isValid()) {
      $user = $userForm->getData();
      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($user);
      $em->flush();


      $jsonUser = $serializer->serialize($user, 'json');

      return new Response($jsonUser);
    } else {
      $errors = $userForm->getErrors(true);
      $jsonErrors = $serializer->serialize($errors, 'json');
      $response = new Response($jsonErrors);
      $response->setStatusCode(400);
      return $response;
    }

  }

  /**
   * @Route("/users/{id}", name="update-user")
   * @Method({"PUT"})
   */
  public function updateAction(Request $request, $id)
  {
    $postData = $request->request->all();
    //TODO: move these if there's time; they do not belong here
    if(isset($postData['supervisor']['id'])) {
      $postData['supervisor'] = $postData['supervisor']['id'];
    }

    if(isset($postData['duties'])) {
      foreach($postData['duties'] as $k=>$duty) {
        if(isset($duty['id'])) {
          $postData['duties'][$k] = $duty['id'];
        }
      }
    }


    $repository = $this->getDoctrine()->getRepository('AppBundle:User');
    $serializer = $this->container->get('jms_serializer');

    $user = $repository->findOne($id);


    $passwordIsEmpty = false;

    if(!isset($postData['password']) || $postData['password'] == '') {
      $postData['password'] = $user->getPassword();
      $passwordIsEmpty = true;
    }

    $userForm = $this->createForm(UserType::class, $user, ['method' => 'PATCH']);

    $userForm->submit($postData);

    if($userForm->isValid()) {
      $user = $userForm->getData();

      if($passwordIsEmpty) {
        $user->setPassword($postData['password'], false);
      }

      $em = $this->getDoctrine()->getEntityManager();
      $em->persist($user);
      $em->flush();


      $jsonUser = $serializer->serialize($user, 'json');

      return new Response($jsonUser);
    } else {
      $errors = $userForm->getErrors(true);
      $jsonErrors = $serializer->serialize($errors, 'json');
      $response = new Response($jsonErrors);
      $response->setStatusCode(400);
      return $response;
    }
  }

  /**
   * @Route("/users/{id}", name="remove-user")
   * @Method({"DELETE"})
   */
  public function removeAction(Request $request, $id)
  {
    $repository = $this->getDoctrine()->getRepository('AppBundle:User');
    $serializer = $this->container->get('jms_serializer');

    $user = $repository->findOne($id);
    $user->setDeletedAt(new \DateTime("now"));

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($user);
    $em->flush();

    return new JsonResponse("success");
  }

  /**
   *  @Route("/users/upload-photo", name="upload-photo")
   *  @Method({"POST"})
   */
   //TODO: Implement the file directly in the user entity and send it all at once
   public function uploadPhotoAction(Request $request) {
    $storage_path = $this->getParameter('photo_storage');
    $file = $request->files->get('file');
    $unique_file_name = md5(uniqid()).'.'.$file->guessExtension();
    $file->move($storage_path."/", $unique_file_name);

    return new JsonResponse($unique_file_name);
   }

}
