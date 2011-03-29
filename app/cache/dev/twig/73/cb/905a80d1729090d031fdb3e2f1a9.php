<?php

/* Framework:Exception:traces.html.twig */
class __TwigTemplate_73cb905a80d1729090d031fdb3e2f1a9 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"block\">
    ";
        // line 2
        if (($this->getContext($context, 'count', '2') > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (($this->getContext($context, 'count', '4') - $this->getContext($context, 'position', '4')) + 1), "html");
            echo "/";
            echo twig_escape_filter($this->env, ($this->getContext($context, 'count', '4') + 1), "html");
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'exception', '5'), "class", array(), "any", false, 5));
            echo ": ";
            echo twig_escape_filter($this->env, twig_strtr($this->getAttribute($this->getContext($context, 'exception', '5'), "message", array(), "any", false, 5), array("
" => "<br />")), "html");
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'position', '7'), "html");
            echo "', 'traces'); switchIcons('icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'position', '7'), "html");
            echo "_open', 'icon_traces_";
            echo twig_escape_filter($this->env, $this->getContext($context, 'position', '7'), "html");
            echo "_close'); return false;\">
                <img class=\"toggle\" id=\"icon_traces_";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, 'position', '8'), "html");
            echo "_close\" alt=\"-\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html");
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, 'position', '8'))) ? ("display") : ("hidden"));
            echo "\" />
                <img class=\"toggle\" id=\"icon_traces_";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, 'position', '9'), "html");
            echo "_open\" alt=\"+\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html");
            echo "\" style=\"visibility: ";
            echo (((0 == $this->getContext($context, 'position', '9'))) ? ("hidden") : ("display"));
            echo "; margin-left: -18px\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces_link_";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, 'position', '17'), "html");
        echo "\"></a>
    <ol class=\"traces list_exception\" id=\"traces_";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, 'position', '18'), "html");
        echo "\" style=\"display: ";
        echo (((0 == $this->getContext($context, 'position', '18'))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '19'), "trace", array(), "any", false, 19));
        foreach ($context['_seq'] as $context['i'] => $context['trace']) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $template = "Framework:Exception:trace.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("prefix" => $this->getContext($context, 'position', '21'), "i" => $this->getContext($context, 'i', '21'), "trace" => $this->getContext($context, 'trace', '21')));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("prefix" => $this->getContext($context, 'position', '21'), "i" => $this->getContext($context, 'i', '21'), "trace" => $this->getContext($context, 'trace', '21')));
            }
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </ol>
</div>";
    }

    public function getTemplateName()
    {
        return "Framework:Exception:traces.html.twig";
    }
}
