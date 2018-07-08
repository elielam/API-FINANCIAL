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

            // delete_category
            if ('/category/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\CategoryController::deleteCategory',  '_route' => 'delete_category',);
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_delete_category;
                }

                return $ret;
            }
            not_delete_category:

        }

        elseif (0 === strpos($pathinfo, '/operation')) {
            // get_operations
            if ('/operations' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::getOperations',  '_route' => 'get_operations',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_get_operations;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'get_operations'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_operations;
                }

                return $ret;
            }
            not_get_operations:

            // get_operation
            if ('/operation' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::getOperation',  '_route' => 'get_operation',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_get_operation;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'get_operation'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_operation;
                }

                return $ret;
            }
            not_get_operation:

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

            // put_operation
            if ('/operation/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::putOperation',  '_route' => 'put_operation',);
                if (!in_array($requestMethod, array('PUT'))) {
                    $allow = array_merge($allow, array('PUT'));
                    goto not_put_operation;
                }

                return $ret;
            }
            not_put_operation:

            // delete_operation
            if ('/operation/' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\OperationController::deleteOperation',  '_route' => 'delete_operation',);
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_delete_operation;
                }

                return $ret;
            }
            not_delete_operation:

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }
        not_index:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
