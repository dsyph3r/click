<?php

/* Framework:Exception:logs.html.twig */
class __TwigTemplate_9bbb4815ad16c0bb33f5ea732f7abd6c extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ol class=\"traces\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'logs', '2'));
        foreach ($context['_seq'] as $context['_key'] => $context['log']) {
            // line 3
            echo "        <li>
            ";
            // line 4
            if (("ERR" == $this->getAttribute($this->getContext($context, 'log', '4'), "priorityName", array(), "any", false, 4))) {
                // line 5
                echo "                <em>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '5'), "priorityName", array(), "any", false, 5), "html");
                echo "</em>
            ";
            } else {
                // line 7
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '7'), "priorityName", array(), "any", false, 7), "html");
                echo "
            ";
            }
            // line 9
            echo "
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '10'), "message", array(), "any", false, 10), "html");
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "Framework:Exception:logs.html.twig";
    }
}
