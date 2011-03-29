<?php

/* WebProfiler:Collector:logger.html.twig */
class __TwigTemplate_09f334bd50586aa91c20257e9d14ff45 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'collector', '4'), "counterrors", array(), "any", false, 4)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAcCAYAAAC+lOV/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQVJREFUeNpi/P//PwO5gImBAjBwmlm8vLyOf/v2zYJYDVxcXCe2bdvmeu7cuS+M9vb2ZIWYoKDgUrKcvWLFipWfP38OYcEmeeDAgQtA6gMQCzg4OBigy0tISHxhYmJiYMFh+EIgBhlgAMXo4DEwffzH5ewLwAA5ADUAG/g7lBMJNkFgCO8fGJsJxTNezUTEM15nE4rnAQ4wkjVraWm9BlK/wc62tLR8fOXKFZmmpqYHhoaGT4Fif/Do/Q7Ep/bt28fz+/dvDkZgKdI4ZcqUmMOHD0t8+vSJi1gXKCgoPGQE5ixTIBuExUjwKsiSpyDNnECGOBCLAjEnkeEA8vMbxqFZ6AMEGADoe2NON2x5yQAAAABJRU5ErkJggg==\"/>
        ";
            $context['icon'] = new Twig_Markup(ob_get_clean());
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '9'), "counterrors", array(), "any", false, 9), "html");
            echo "</span>
        ";
            $context['text'] = new Twig_Markup(ob_get_clean());
            // line 11
            echo "        ";
            $template = "WebProfiler:Profiler:toolbar_item.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '11'))));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '11'))));
            }
            // line 12
            echo "    ";
        }
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/logger.png"), "html");
        echo "\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 19
        if ($this->getAttribute($this->getContext($context, 'collector', '19'), "counterrors", array(), "any", false, 19)) {
            // line 20
            echo "        <span class=\"count\">
            <span>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '21'), "counterrors", array(), "any", false, 21), "html");
            echo "</span>
        </span>
    ";
        }
        // line 24
        echo "</span>
";
    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        // line 28
        echo "    <h2>Logs</h2>

    ";
        // line 30
        if ($this->getAttribute($this->getContext($context, 'collector', '30'), "logs", array(), "any", false, 30)) {
            // line 31
            echo "        <ul class=\"alt\">
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '32'), "logs", array(), "any", false, 32));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context['_key'] => $context['log']) {
                // line 33
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('core')->getCycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, 'loop', '33'), "index", array(), "any", false, 33)), "html");
                if (("ERR" == $this->getAttribute($this->getContext($context, 'log', '33'), "priorityName", array(), "any", false, 33))) {
                    echo " error";
                }
                echo "\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '34'), "priorityName", array(), "any", false, 34), "html");
                echo "
                    ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'log', '35'), "message", array(), "any", false, 35), "html");
                echo "
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "        </ul>
    ";
        } else {
            // line 40
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfiler:Collector:logger.html.twig";
    }
}
