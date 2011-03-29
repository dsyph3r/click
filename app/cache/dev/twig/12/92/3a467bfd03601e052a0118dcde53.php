<?php

/* WebProfiler:Profiler:layout.html.twig */
class __TwigTemplate_12923a467bfd03601e052a0118dcde53 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("WebProfiler:Profiler:base.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        echo "";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        echo $this->env->getExtension('templating')->renderAction("WebProfiler:Profiler:toolbar", array("token" => $this->getContext($context, 'token', '5'), "position" => "normal"), array());
        // line 6
        echo "
    <div id=\"content\">
        ";
        // line 8
        $template = "WebProfiler:Profiler:header.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array());
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array());
        }
        // line 9
        echo "
        ";
        // line 10
        if ((!$this->getAttribute($this->getContext($context, 'profiler', '10'), "isempty", array(), "any", false, 10))) {
            // line 11
            echo "            <div id=\"resume\">
                <p>
                    <strong><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '13'), "url", array(), "any", false, 13), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '13'), "url", array(), "any", false, 13), "html");
            echo "</a></strong>
                    <span class=\"date\">
                        <strong>by ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '15'), "ip", array(), "any", false, 15), "html");
            echo "</strong> at <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'profiler', '15'), "time", array(), "any", false, 15), "r"), "html");
            echo "</strong>
                    </span>
                </p>
            </div>
        ";
        }
        // line 20
        echo "
        <div id=\"main\">
    
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 26
        $this->displayBlock('panel', $context, $blocks);
        // line 27
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 30
        if (twig_test_defined("templates", $context)) {
            // line 31
            echo "                        <ul id=\"menu_profiler\">
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'templates', '32'));
            foreach ($context['_seq'] as $context['name'] => $context['template']) {
                // line 33
                echo "                                ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'template', '33'), "renderBlock", array("menu", array("collector" => $this->getAttribute($this->getContext($context, 'profiler', '33'), "get", array($this->getContext($context, 'name', '33'), ), "method", false, 33)), ), "method", false, 33), "html");
                $context['menu'] = new Twig_Markup(ob_get_clean());
                // line 34
                echo "                                ";
                if (($this->getContext($context, 'menu', '34') != "")) {
                    // line 35
                    echo "                                    <li class=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'name', '35'), "html");
                    if (($this->getContext($context, 'name', '35') == $this->getContext($context, 'panel', '35'))) {
                        echo " selected";
                    }
                    echo "\">
                                        <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, 'token', '36'), "panel" => $this->getContext($context, 'name', '36'))), "html");
                    echo "\">";
                    echo $this->getContext($context, 'menu', '36');
                    echo "</a>
                                    </li>
                                ";
                }
                // line 39
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "                        </ul>
                    ";
        }
        // line 42
        echo "                    ";
        echo $this->env->getExtension('templating')->renderAction("WebProfiler:Profiler:searchBar", array(), array());
        // line 43
        echo "                    ";
        $template = "WebProfiler:Profiler:admin.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("token" => $this->getContext($context, 'token', '43')));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("token" => $this->getContext($context, 'token', '43')));
        }
        // line 44
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfiler:Profiler:layout.html.twig";
    }
}
