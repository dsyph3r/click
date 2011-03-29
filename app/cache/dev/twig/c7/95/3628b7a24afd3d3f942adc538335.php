<?php

/* SymfonyWebConfigurator:Step:doctrine.html.twig */
class __TwigTemplate_c7953628b7a24afd3d3f942adc538335 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SymfonyWebConfigurator::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, 'form', '6'), array("SymfonyWebConfigurator::form.html.twig", ));        // line 7
        echo "    ";
        $template = "SymfonyWebConfigurator::steps.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("index" => $this->getContext($context, 'index', '7'), "count" => $this->getContext($context, 'count', '7'))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("index" => $this->getContext($context, 'index', '7'), "count" => $this->getContext($context, 'count', '7'))));
        }
        // line 8
        echo "
    <h1>Configure your Database</h1>
    <p>If your website needs a database connection, please configure it here.</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form', '12'));
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, 'index', '13'))), "html");
        echo "\" method=\"POST\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderHidden($this->getContext($context, 'form', '14'));
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form', '16'), "driver", array(), "any", false, 16));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form', '17'), "name", array(), "any", false, 17));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form', '18'), "host", array(), "any", false, 18));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form', '19'), "user", array(), "any", false, 19));
        echo "
        <div class=\"symfony-form-row\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '21'), "password", array(), "any", false, 21));
        echo "
            <div class=\"symfony-form-field\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getAttribute($this->getContext($context, 'form', '23'), "password", array(), "any", false, 23), "Password", array(), "any", false, 23));
        echo "
                <div class=\"symfony-form-errors\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form', '25'), "password", array(), "any", false, 25));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getAttribute($this->getContext($context, 'form', '29'), "password", array(), "any", false, 29), "Again", array(), "any", false, 29));
        echo "

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "SymfonyWebConfigurator:Step:doctrine.html.twig";
    }
}
