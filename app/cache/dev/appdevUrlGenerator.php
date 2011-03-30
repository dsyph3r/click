<?php

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'gallery' => true,
       'upload' => true,
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_wdt',    3 => NULL,  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'purge',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'import',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '.',    2 => 'txt',    3 => NULL,  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'export',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'results',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'search',    3 => NULL,  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_profilerRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction';

        return array(array (  'token' => '{token}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{token}',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_profiler',    3 => NULL,  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::checkAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::stepAction';

        return array(array (  'index' => '{index}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{index}',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'step',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Symfony\\Bundle\\WebConfiguratorBundle\\Controller\\ConfiguratorController::finalAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'final',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => '_configurator',    3 => NULL,  ),));
    }

    private function getgalleryRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Click\\GalleryBundle\\Controller\\DefaultController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    private function getuploadRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Click\\GalleryBundle\\Controller\\DefaultController::uploadAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'upload',    3 => NULL,  ),));
    }

    private function get_welcomeRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'welcome',    3 => NULL,  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_security_checkRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login_check',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'logout',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['name'] = 'World';
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'admin',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  3 =>   array (    0 => 'text',    1 => '/',    2 => 'secured',    3 => NULL,  ),  4 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demoRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::indexAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::helloAction';

        return array(array (  'name' => '{name}',), $defaults, array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '{name}',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'hello',    3 => NULL,  ),  2 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        $defaults = $this->defaults;
        $defaults['_controller'] = 'Acme\\DemoBundle\\Controller\\DemoController::contactAction';

        return array(array (), $defaults, array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'contact',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'demo',    3 => NULL,  ),));
    }
}
