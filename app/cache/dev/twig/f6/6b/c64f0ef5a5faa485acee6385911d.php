<?php

/* WebProfiler:Profiler:toolbar_item.html.twig */
class __TwigTemplate_f66bc64f0ef5a5faa485acee6385911d extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getContext($context, 'link', '1')) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a style=\"text-decoration: none; margin: 0; padding: 0;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, 'token', '3'), "panel" => $this->getContext($context, 'name', '3'))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'icon', '3'), "html");
            echo "</a>
    ";
            $context['icon'] = new Twig_Markup(ob_get_clean());
        }
        // line 6
        echo "<span style=\"white-space:nowrap; color:#2f2f2f; display:inline-block; min-height:24px; border-right:1px solid #cdcdcd; padding:5px 7px 5px 4px; \">
     ";
        // line 7
        echo twig_escape_filter($this->env, ((twig_test_defined("icon", $context)) ? (twig_default_filter($this->getContext($context, 'icon', '7'), "")) : ("")), "html");
        echo "
     ";
        // line 8
        echo twig_escape_filter($this->env, ((twig_test_defined("text", $context)) ? (twig_default_filter($this->getContext($context, 'text', '8'), "")) : ("")), "html");
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "WebProfiler:Profiler:toolbar_item.html.twig";
    }
}
