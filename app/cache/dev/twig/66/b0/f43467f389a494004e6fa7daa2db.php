<?php

/* SymfonyWebConfigurator::final.html.twig */
class __TwigTemplate_66b0f43467f389a494004e6fa7daa2db extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
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
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Well done!</h1>
    ";
        // line 6
        if ($this->getContext($context, 'is_writable', '6')) {
            // line 7
            echo "    <h2>Your distribution is configured!</h2>
    ";
        } else {
            // line 9
            echo "    <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
    ";
        }
        // line 11
        echo "    <h3>
        <span>
            ";
        // line 13
        if ($this->getContext($context, 'is_writable', '13')) {
            // line 14
            echo "                Your parameters.ini has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'ini_path', '14'), "html");
            echo "</em>):
            ";
        } else {
            // line 16
            echo "                Your parameters.ini file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'ini_path', '16'), "html");
            echo "</em>:
            ";
        }
        // line 18
        echo "        </span>
    </h3>

    <textarea class=\"symfony-configuration\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, 'parameters', '21'), "html");
        echo "</textarea>

    <ul>
        <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html");
        echo "\">Go to the Welcome page</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SymfonyWebConfigurator::final.html.twig";
    }
}
