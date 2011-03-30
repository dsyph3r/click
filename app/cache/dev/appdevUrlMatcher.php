<?php

use Symfony\Component\Routing\Matcher\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Matcher\Exception\NotFoundException;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($pathinfo)
    {
        $allow = array();

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        // _profiler_search
        if ($pathinfo === '/_profiler/search') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',)), array('_route' => '_profiler_search'));
        }

        // _profiler_purge
        if ($pathinfo === '/_profiler/purge') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',)), array('_route' => '_profiler_purge'));
        }

        // _profiler_import
        if ($pathinfo === '/_profiler/import') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',)), array('_route' => '_profiler_import'));
        }

        // _profiler_export
        if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\.]+?)\.txt$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
        }

        // _profiler_search_results
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)/search/results$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
        }

        // _profiler
        if (0 === strpos($pathinfo, '/_profiler') && preg_match('#^/_profiler/(?P<token>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
        }

        // _configurator_home
        if (rtrim($pathinfo, '/') === '/_configurator') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_configurator_home');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction',)), array('_route' => '_configurator_home'));
        }

        // _configurator_step
        if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
        }

        // _configurator_final
        if ($pathinfo === '/_configurator/final') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction',)), array('_route' => '_configurator_final'));
        }

        // gallery
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => 'gallery');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Click\\GalleryBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'gallery'));
        }

        // upload
        if ($pathinfo === '/upload') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Click\\GalleryBundle\\Controller\\DefaultController::uploadAction',)), array('_route' => 'upload'));
        }

        // _welcome
        if ($pathinfo === '/welcome') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',)), array('_route' => '_welcome'));
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',)), array('_route' => '_demo_login'));
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',)), array('_route' => '_security_check'));
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',)), array('_route' => '_demo_logout'));
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array_merge($this->mergeDefaults(array(), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => 'acme_demo_secured_hello'));
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return array('_controller' => 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', 'url' => $this->context['base_url'].$pathinfo.'/', 'permanent' => true, '_route' => '_demo');
            }
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',)), array('_route' => '_demo'));
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/\.]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array_merge($this->mergeDefaults(array(), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',)), array('_route' => '_demo_contact'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new NotFoundException();
    }
}
