<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // omar_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'omar_site_homepage');
            }

            return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'omar_site_homepage',);
        }

        if (0 === strpos($pathinfo, '/dealer')) {
            // dealer
            if (rtrim($pathinfo, '/') === '/dealer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dealer');
                }

                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::indexAction',  '_route' => 'dealer',);
            }

            // dealer_show
            if (preg_match('#^/dealer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dealer_show')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::showAction',));
            }

            // dealer_new
            if ($pathinfo === '/dealer/new') {
                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::newAction',  '_route' => 'dealer_new',);
            }

            // dealer_create
            if ($pathinfo === '/dealer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_dealer_create;
                }

                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::createAction',  '_route' => 'dealer_create',);
            }
            not_dealer_create:

            // dealer_edit
            if (preg_match('#^/dealer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dealer_edit')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::editAction',));
            }

            // dealer_update
            if (preg_match('#^/dealer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_dealer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dealer_update')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::updateAction',));
            }
            not_dealer_update:

            // dealer_delete
            if (preg_match('#^/dealer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dealer_delete')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DealerController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/avatar')) {
            // avatar
            if (rtrim($pathinfo, '/') === '/avatar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avatar');
                }

                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::indexAction',  '_route' => 'avatar',);
            }

            // avatar_show
            if (preg_match('#^/avatar/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avatar_show')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::showAction',));
            }

            // avatar_new
            if ($pathinfo === '/avatar/new') {
                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::newAction',  '_route' => 'avatar_new',);
            }

            // avatar_create
            if ($pathinfo === '/avatar/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_avatar_create;
                }

                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::createAction',  '_route' => 'avatar_create',);
            }
            not_avatar_create:

            // avatar_edit
            if (preg_match('#^/avatar/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avatar_edit')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::editAction',));
            }

            // avatar_update
            if (preg_match('#^/avatar/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_avatar_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avatar_update')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::updateAction',));
            }
            not_avatar_update:

            // avatar_delete
            if (preg_match('#^/avatar/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_avatar_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avatar_delete')), array (  '_controller' => 'Omar\\SiteBundle\\Controller\\AvatarController::deleteAction',));
            }
            not_avatar_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login-check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Omar\\SiteBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
