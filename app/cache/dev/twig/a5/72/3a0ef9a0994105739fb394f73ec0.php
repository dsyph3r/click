<?php

/* Framework:Exception:exception_full.html.twig */
class __TwigTemplate_a5723a0ef9a0994105739fb394f73ec0 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("Framework:Exception:layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $template = "Framework:Exception:exception.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display($context);
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, $context);
        }
    }

    public function getTemplateName()
    {
        return "Framework:Exception:exception_full.html.twig";
    }
}
