<?php

/* WebProfiler:Collector:events.html.twig */
class __TwigTemplate_a359ec38c02be42cd3f676a38f812693 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfiler:Profiler:layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html");
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 10
    public function block_panel($context, array $blocks = array())
    {
        // line 11
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Class</th>
            <th>Event</th>
        </tr>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '18'), "calledlisteners", array(), "any", false, 18));
        foreach ($context['_seq'] as $context['_key'] => $context['elements']) {
            // line 19
            echo "            <tr>
                <td><code>";
            // line 20
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'elements', '20'), "class", array(), "any", false, 20));
            echo "</code></td>
                <td><code>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'elements', '21'), "event", array(), "any", false, 21), "html");
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "    </table>

    ";
        // line 26
        if ($this->getAttribute($this->getContext($context, 'collector', '26'), "notcalledlisteners", array(), "any", false, 26)) {
            // line 27
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event</th>
                <th>Listener</th>
            </tr>
            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '34'), "notcalledlisteners", array(), "any", false, 34));
            foreach ($context['_seq'] as $context['_key'] => $context['elements']) {
                // line 35
                echo "                <tr>
                    <td><code>";
                // line 36
                echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'elements', '36'), "class", array(), "any", false, 36));
                echo "</code></td>
                    <td><code>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'elements', '37'), "event", array(), "any", false, 37), "html");
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfiler:Collector:events.html.twig";
    }
}
