<?php

/* SymfonyWebConfigurator::steps.html.twig */
class __TwigTemplate_14211c063d06e8d8d4273e85f9cd99ad extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"symfony-block-steps\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, 'count', '2')));
        foreach ($context['_seq'] as $context['_key'] => $context['i']) {
            // line 3
            echo "
      ";
            // line 4
            if (($this->getContext($context, 'i', '4') == ($this->getContext($context, 'index', '4') + 1))) {
                // line 5
                echo "          <span class=\"selected\">Step ";
                echo twig_escape_filter($this->env, $this->getContext($context, 'i', '5'), "html");
                echo "</span>
      ";
            } else {
                // line 7
                echo "          <span>Step ";
                echo twig_escape_filter($this->env, $this->getContext($context, 'i', '7'), "html");
                echo "</span>
      ";
            }
            // line 9
            echo "
      ";
            // line 10
            if (($this->getContext($context, 'i', '10') != $this->getContext($context, 'count', '10'))) {
                // line 11
                echo "        &gt;
      ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SymfonyWebConfigurator::steps.html.twig";
    }
}
