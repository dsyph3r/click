<?php

/* SymfonyWebConfigurator:Step:csrf.html.twig */
class __TwigTemplate_a5428e6fb0666cf6bd843b8147c321af extends Twig_Template
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
        echo "Symfony - Configure CSRF";
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
    <h1>CSRF Protection</h1>
    <p>Configure CSRF protection for your website :</p>

    ";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form', '12'));
        echo "
    <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, 'index', '13'))), "html");
        echo " \" method=\"POST\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderHidden($this->getContext($context, 'form', '14'));
        echo "

        <div class=\"symfony-form-row\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, 'form', '17'), "csrf_secret", array(), "any", false, 17));
        echo "
            <div class=\"symfony-form-field\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderField($this->getAttribute($this->getContext($context, 'form', '19'), "csrf_secret", array(), "any", false, 19));
        echo "
                <a class=\"symfony-button-grey\" href=\"#\" onclick=\"generateCsrf(); return false;\">Generate</a>
                <div class=\"symfony-form-errors\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form', '22'), "csrf_secret", array(), "any", false, 22));
        echo "
                </div>
            </div>
        </div>

        <div class=\"symfony-form-footer\">
            <p><input type=\"submit\" value=\"Next Step\" class=\"symfony-button-grey\" /></p>
            <p>* mandatory fields</p>
        </div>

    </form>

    <script type=\"text/javascript\">
        function generateCsrf()
        {
            var result = '';
            for (i=0; i < 32; i++) {
                result += Math.round(Math.random()*16).toString(16);
            }
            document.getElementById('config_csrf_secret').value = result;
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "SymfonyWebConfigurator:Step:csrf.html.twig";
    }
}
