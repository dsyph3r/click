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
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'photos', '6'));
        foreach ($context['_seq'] as $context['_key'] => $context['photo']) {
            // line 7
            echo "        <div class=\"photo\">
            <img src=\"/bundles/clickgallery/images/sample/";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'photo', '8'), "name", array(), "any", false, 8), "html");
            echo "\" alt=\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'photo', '8'), "name", array(), "any", false, 8), "html");
            echo "\" />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ClickGallery:Default:index.html.twig";
    }
}
