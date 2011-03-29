<?php

/* ClickGallery:Default:index.html.twig */
class __TwigTemplate_3e6f8242b8a9c459cd76bd6078662f93 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("ClickGallery::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    
    <div class=\"photo\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/clickgallery/images/image_01.png"), "html");
        echo "\" alt=\"Symfony\" />
    </div>
    
    <div class=\"photo\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/clickgallery/images/image_01.png"), "html");
        echo "\" alt=\"Symfony\" />
    </div>
    
    <div class=\"photo\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/clickgallery/images/image_01.png"), "html");
        echo "\" alt=\"Symfony\" />
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "ClickGallery:Default:index.html.twig";
    }
}
