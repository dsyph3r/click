<?php

/* ClickGallery::layout.html.twig */
class __TwigTemplate_9de0fc7de187c8250dff12f08bf38780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/clickgallery/css/gallery.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
        
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "click";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    public function getTemplateName()
    {
        return "ClickGallery::layout.html.twig";
    }
}
