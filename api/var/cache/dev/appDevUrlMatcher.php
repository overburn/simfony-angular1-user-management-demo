<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // authenticate
        if ($pathinfo === '/authenticate') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_authenticate;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AuthController::authenticateAction',  '_route' => 'authenticate',);
        }
        not_authenticate:

        // api-status
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'api-status');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api-status',);
        }

        if (0 === strpos($pathinfo, '/duties')) {
            // list-duties
            if ($pathinfo === '/duties') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_listduties;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DutyController::listAction',  '_route' => 'list-duties',);
            }
            not_listduties:

            // get-duty
            if (preg_match('#^/duties/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_getduty;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get-duty')), array (  '_controller' => 'AppBundle\\Controller\\DutyController::getAction',));
            }
            not_getduty:

            // create-duty
            if ($pathinfo === '/duties') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createduty;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DutyController::createAction',  '_route' => 'create-duty',);
            }
            not_createduty:

            // update-duty
            if (preg_match('#^/duties/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_updateduty;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-duty')), array (  '_controller' => 'AppBundle\\Controller\\DutyController::updateAction',));
            }
            not_updateduty:

            // remove-duty
            if (preg_match('#^/duties/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_removeduty;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove-duty')), array (  '_controller' => 'AppBundle\\Controller\\DutyController::removeAction',));
            }
            not_removeduty:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // list-users
            if ($pathinfo === '/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_listusers;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_route' => 'list-users',);
            }
            not_listusers:

            // get-user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_getuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get-user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getAction',));
            }
            not_getuser:

            // create-user
            if ($pathinfo === '/users') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createuser;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::createAction',  '_route' => 'create-user',);
            }
            not_createuser:

            // update-user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_updateuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update-user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateAction',));
            }
            not_updateuser:

            // remove-user
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_removeuser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove-user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeAction',));
            }
            not_removeuser:

            // upload-photo
            if ($pathinfo === '/users/upload-photo') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_uploadphoto;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::uploadPhotoAction',  '_route' => 'upload-photo',);
            }
            not_uploadphoto:

        }

        // api_login_check
        if ($pathinfo === '/api/login_check') {
            return array('_route' => 'api_login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
