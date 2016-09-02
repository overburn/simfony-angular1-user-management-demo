<?php

  namespace AppBundle\Security;

  use Symfony\Component\Security\Core\Exception\AuthenticationException;
  use Symfony\Component\Security\Core\User\UserInterface;
  use Symfony\Component\Security\Core\User\UserProviderInterface;
  use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
  use Symfony\Component\HttpFoundation\Request;

  use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
  use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
  use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;
  use Doctrine\ORM\EntityManager;
  use Symfony\Component\HttpFoundation\JsonResponse;



  class JwtTokenAuthenticator extends AbstractGuardAuthenticator
  {
      private $jwtEncoder;
      private $em;

      public function __construct(JWTEncoderInterface $jwtEncoder, EntityManager $em) {
        $this->jwtEncoder = $jwtEncoder;
        $this->em = $em;
      }

      public function start(Request $request, AuthenticationException $authException = null) {
        return new JsonResponse([
           'error' => 'unauthorized'
        ], 401);
      }

      public function getCredentials(Request $request) {
        $extractor = new AuthorizationHeaderTokenExtractor(
          'Bearer',
          'Authorization'
        );

        $token = $extractor->extract($request);

        if(!$token) {
          return;
        }

        return $token;
      }

      public function getUser($credentials, UserProviderInterface $userProvider) {
          $data = $this->jwtEncoder->decode($credentials);

          if($data === false) {
            return null;
          }

          $email = $data['email'];

          return $this->em
                    ->getRepository('AppBundle:User')
                    ->findOneBy(['email' => $email]);
      }

      public function checkCredentials($credentials, UserInterface $user)
      {
        return true;
      }

      public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {

      }

      public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey) {

      }

      public function supportsRememberMe()
      {
          return false;
      }
  }
