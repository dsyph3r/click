<?php

/* WebProfiler:Profiler:base.html.twig */
class __TwigTemplate_ab1cf9884eef8ce17df7955aaf52cc12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
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
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/favicon.ico"), "html");
        echo "\" />
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/css/toolbar.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfiler:Profiler:base.html.twig";
    }
}
