<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // get_categories
        if ('/categories' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\CategoryController::getCategories',  '_route' => 'get_categories',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_get_categories;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'get_categories'));
            }

            return $ret;
        }
        not_get_categories:

        if (0 === strpos($pathinfo, '/category')) {
            // get_category
            if ('/category' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::getCategory',  '_route' => 'get_category',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_get_category;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'get_category'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_category;
                }

                return $ret;
            }
            not_get_category:

            // post_category
            if ('/category/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::postCategory',  '_route' => 'post_category',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_category;
                }

                return $ret;
            }
            not_post_category:

            // put_category
            if ('/category/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::putCategory',  '_route' => 'put_category',);
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_put_category;
                }

                return $ret;
            }
            not_put_category:

        }

        elseif (0 === strpos($pathinfo, '/operation')) {
            // get_basic_operations
            if ('/operations' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::getOperations',  '_route' => 'get_basic_operations',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_get_basic_operations;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'get_basic_operations'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_basic_operations;
                }

                return $ret;
            }
            not_get_basic_operations:

            // post_operation
            if ('/operation/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::postOperation',  '_route' => 'post_operation',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_post_operation;
                }

                return $ret;
            }
            not_post_operation:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
