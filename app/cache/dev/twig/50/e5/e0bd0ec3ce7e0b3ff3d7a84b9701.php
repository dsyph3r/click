<?php

/* Framework:Exception:trace.html.twig */
class __TwigTemplate_50e5e0bd0ec3ce7e0b3ff3d7a84b9701 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getAttribute($this->getContext($context, 'trace', '1'), "function", array(), "any", false, 1)) {
            // line 2
            echo "    at 
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '4'), "class", array(), "any", false, 4), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'trace', '4'), "short_class", array(), "any", false, 4), "html");
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, 'trace', '5'), "type", array(), "any", false, 5) . $this->getAttribute($this->getContext($context, 'trace', '5'), "function", array(), "any", false, 5)), "html");
            echo "
    </strong> 
    (";
            // line 7
            echo $this->env->getExtension('templating')->formatArgs($this->getAttribute($this->getContext($context, 'trace', '7'), "args", array(), "any", false, 7));
            echo ")
    <br />
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute($this->getContext($context, 'trace', '11'), "file", array(), "any", true, 11) && $this->getAttribute($this->getContext($context, 'trace', '11'), "line", array(), "any", true, 11))) {
            // line 12
            echo "    in ";
            echo $this->env->getExtension('templating')->formatFile($this->getAttribute($this->getContext($context, 'trace', '12'), "file", array(), "any", false, 12), $this->getAttribute($this->getContext($context, 'trace', '12'), "line", array(), "any", false, 12));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '14') . "_") . $this->getContext($context, 'i', '14')), "html");
            echo "'); switchIcons('icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '14') . "_") . $this->getContext($context, 'i', '14')), "html");
            echo "_open', 'icon_";
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '14') . "_") . $this->getContext($context, 'i', '14')), "html");
            echo "_close'); return false;\">
        <img class=\"toggle\" id=\"icon_";
            // line 15
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '15') . "_") . $this->getContext($context, 'i', '15')), "html");
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html");
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, 'i', '15'))) ? ("display") : ("hidden"));
            echo "\" />
        <img class=\"toggle\" id=\"icon_";
            // line 16
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '16') . "_") . $this->getContext($context, 'i', '16')), "html");
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html");
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, 'i', '16'))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace_";
            echo twig_escape_filter($this->env, (($this->getContext($context, 'prefix', '19') . "_") . $this->getContext($context, 'i', '19')), "html");
            echo "\" style=\"display: ";
            echo (((0 == $this->getContext($context, 'i', '19'))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('templating')->fileExcerpt($this->getAttribute($this->getContext($context, 'trace', '20'), "file", array(), "any", false, 20), $this->getAttribute($this->getContext($context, 'trace', '20'), "line", array(), "any", false, 20));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Framework:Exception:trace.html.twig";
    }
}
