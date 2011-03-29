<?php

/* WebProfiler:Collector:request.html.twig */
class __TwigTemplate_d2093160193c50b18503cbe5c48ad34d extends Twig_Template
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
        ob_start();
        // line 5
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABOZJREFUeNrsVmsspFcY9jHMMsxKE9sxM1SUNHRpSNR9bbQqrrNUCG1E1z3ZyIpq+dEfIiToRtomEiFi/zQrWdlZFFstDYK632ZRu2yxFNu4GzOY6fPKN80YVu1m41dP8uac75zz3t/3OR+jVqv1LnLo613wuHCFnJcdTExM8LOzs+9vb28HaPZMTU1bSkpKohwcHDbPI3xwcPBMhUx+fv6V4eHhG0KhsMfd3V2srYwGfQ8MDPiWlZUtYHjZ2dlJYcBfOFK/qof6YHTs7OxsUigU4rW1tQNjY+NHpzGMjo6my2SyQJVKxcH6mzt37gRmZWXJcKQ6j0IGVcpUV1e/W1NT0y6Xyy1fNScwbCkmJuZaQkLCU11PTwspFc0lhPHW6yijQXzET3LOG9JLYWFhywiTan9//1jVisVilbe3946FhYVieXmZ297ezsN87I6hoaEqODj4BatQfh6FKlipCA8Pf1ZbW2urOQgICNjKzMxsNzExofxQVZrHx8c7FRQUXOvp6THW3CM+GCo/dw4lEsnP6+vrx6rRxsZGWVlZWcHhcH7a2tpaKCwsdElOTpbZ2tqKNjc3I5KSkj5fWVk51lLm5ubNUqk0CsudM3O4sbHxke6mj4/PYyirr6urm4+MjPy1u7v7bkpKyi9VVVV/8/l8qa+v71NdHsj5BJPwP0OKKj2BNmhwCuPs2NiYBOGyoL2DgwPzycnJT7G8y+Vyn2B+T5uHlUN3pzV7rq6uJz3EONG0s7OzXEyHKKZ1Ho93cGQZh6MODQ1dof3FxUXDUwSRHOPY2NjoiIiI22R3XFzcFyEhIT9ibfKvh6jCuY6Ojne0mYEmPsgV19nZ+Y/S0tIHQ0NDHo6OjqNOTk4j8JKP3Hyoq5DkUNEyDHMTwBEI427v7u6KDAwMFNgXgGY0jf/1/Py8pKGh4X00P18jwMrKqjE3N/dLKBJTh4CWR0ZGloqKir6Hhz6ae1FRUZsovMcI+RByzjQ1NcXv7e2ZaBuDtpIhNf2BgYFfkULHxsbGzwBROYeHh/o6KLKAy40I6zJwVLi6uhoKYW9r34EHqpycnO9aWlquA+pccK7n6em5nZqa+ufMzAwfcoU7OzsGkLWOar9Opf28q6tLoKuMRRHx3NxcyllVR3y9vb3CtLS0uoyMjKsU1vT09GZra+s2tJcFKjwVxliiX0ddXFz0SYkB+moQL4T8daBNIBDsARAGkC8F4TLtwYBZTA9Bj2DwUdG1tbU5jI+Pc0ihHJaMFRcXP0Tejg5R9nqJiYmnGkD7dE5DJBIdIGTEN15eXv4xQncEBhUVFbdQod9GR0f/MDU1ZUV7CDWvv7/fnmGtegvkBYbI1tZWLzc3t+dAGDXQxV9XIYS1mpmZMX19fSI/P7/fAQT3sT2pVCo94cHN+vr6D+DNZW2evLy8J7hbj+U9DvukrIE6URwv0HtNWO8iVJYeHh5XgZtXNIz4XrG3t7+H5RLu8TDPkzKQ0sjIqA+NzkxPT6dCoUdQUNAagUFzc/NlROQ33Kml1mC0/trIUyOWCIhtQDdAniAei5HdICnoGfu0KVlSsw+BAD0Yir6V+Pv7L5AcGMCBkTXkEDnCnPGbSL0kYuHKiBW8SlVNjC/hoeRas3zbhIisIcRzhFLMG/4vZVgFBqwyFRsJleb5Yv7/EX7T4x8BBgDTTU7fbnA/yAAAAABJRU5ErkJggg==\"/>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        ob_start();
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '9'), "controller", array(), "any", false, 9), "class", array(), "any", true, 9)) {
            // line 10
            echo "                <span>";
            echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '10'), "controller", array(), "any", false, 10), "class", array(), "any", false, 10));
            echo "</span>
                <span>::</span>
                ";
            // line 12
            $context['link'] = $this->env->getExtension('templating')->getFileLink($this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '12'), "controller", array(), "any", false, 12), "file", array(), "any", false, 12), $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '12'), "controller", array(), "any", false, 12), "line", array(), "any", false, 12));
            // line 13
            echo "                <span>";
            if ($this->getContext($context, 'link', '13')) {
                echo "<a style=\"color: #2f2f2f\" href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'link', '13'), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '13'), "controller", array(), "any", false, 13), "method", array(), "any", false, 13), "html");
                echo "</a>";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '13'), "controller", array(), "any", false, 13), "method", array(), "any", false, 13), "html");
            }
            echo "</span>
            ";
        } else {
            // line 15
            echo "                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '15'), "controller", array(), "any", false, 15), "html");
            echo "</span>
            ";
        }
        // line 17
        echo "            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span";
        // line 18
        echo (((!$this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18))) ? (" style=\"color:#a33\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18)) ? ($this->getAttribute($this->getContext($context, 'collector', '18'), "route", array(), "any", false, 18)) : ("NONE")), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '20'), "format", array(), "any", false, 20), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span style=\"color: ";
        // line 22
        echo (((200 == $this->getAttribute($this->getContext($context, 'collector', '22'), "statuscode", array(), "any", false, 22))) ? ("#759e1a") : ("#a33"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '22'), "statuscode", array(), "any", false, 22), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '24'), "contenttype", array(), "any", false, 24), "html");
        echo "</span>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 26
        echo "    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 27
        echo "    ";
        $template = "WebProfiler:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '27'))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '27'))));
        }
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        // line 31
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/request.png"), "html");
        echo "\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 37
    public function block_panel($context, array $blocks = array())
    {
        // line 38
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 40
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '40'), "requestquery", array(), "any", false, 40), "all", array(), "any", false, 40))) {
            // line 41
            echo "        ";
            $template = "WebProfiler:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '41'), "requestquery", array(), "any", false, 41)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '41'), "requestquery", array(), "any", false, 41)));
            }
            // line 42
            echo "    ";
        } else {
            // line 43
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 47
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 50
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '50'), "requestrequest", array(), "any", false, 50), "all", array(), "any", false, 50))) {
            // line 51
            echo "        ";
            $template = "WebProfiler:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '51'), "requestrequest", array(), "any", false, 51)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '51'), "requestrequest", array(), "any", false, 51)));
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 57
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 60
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '60'), "requestattributes", array(), "any", false, 60), "all", array(), "any", false, 60))) {
            // line 61
            echo "        ";
            $template = "WebProfiler:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '61'), "requestattributes", array(), "any", false, 61)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '61'), "requestattributes", array(), "any", false, 61)));
            }
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 67
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'collector', '70'), "requestcookies", array(), "any", false, 70), "all", array(), "any", false, 70))) {
            // line 71
            echo "        ";
            $template = "WebProfiler:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '71'), "requestcookies", array(), "any", false, 71)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '71'), "requestcookies", array(), "any", false, 71)));
            }
            // line 72
            echo "    ";
        } else {
            // line 73
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 77
        echo "
    <h2>Requests Headers</h2>

    ";
        // line 80
        $template = "WebProfiler:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '80'), "requestheaders", array(), "any", false, 80)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '80'), "requestheaders", array(), "any", false, 80)));
        }
        // line 81
        echo "
    <h2>Requests Server Parameters</h2>

    ";
        // line 84
        $template = "WebProfiler:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '84'), "requestserver", array(), "any", false, 84)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '84'), "requestserver", array(), "any", false, 84)));
        }
        // line 85
        echo "
    <h2>Response Headers</h2>

    ";
        // line 88
        $template = "WebProfiler:Profiler:bag.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array("bag" => $this->getAttribute($this->getContext($context, 'collector', '88'), "responseheaders", array(), "any", false, 88)));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getContext($context, 'collector', '88'), "responseheaders", array(), "any", false, 88)));
        }
        // line 89
        echo "
    <h2>Response Session Attributes</h2>

    ";
        // line 92
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '92'), "sessionattributes", array(), "any", false, 92))) {
            // line 93
            echo "        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>

            ";
            // line 99
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '99'), "sessionattributes", array(), "any", false, 99));
            foreach ($context['_seq'] as $context['key'] => $context['value']) {
                // line 100
                echo "                <tr>
                    <th>";
                // line 101
                echo twig_escape_filter($this->env, $this->getContext($context, 'key', '101'), "html");
                echo "</th>
                    <td>";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getContext($context, 'value', '102')), "html");
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 105
            echo "        </table>
    ";
        } else {
            // line 107
            echo "        <p>
            <em>No request session attributes</em>
        </p>
    ";
        }
        // line 111
        echo "

    ";
        // line 113
        if ($this->getAttribute($this->getContext($context, 'profiler', '113'), "parent", array(), "any", false, 113)) {
            // line 114
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, 'profiler', '114'), "parent", array(), "any", false, 114))), "html");
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '114'), "parent", array(), "any", false, 114), "html");
            echo "</a></h2>

        ";
            // line 116
            $template = "WebProfiler:Profiler:bag.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'profiler', '116'), "parenttoken", array(), "any", false, 116), "get", array("request", ), "method", false, 116), "requestattributes", array(), "any", false, 116)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'profiler', '116'), "parenttoken", array(), "any", false, 116), "get", array("request", ), "method", false, 116), "requestattributes", array(), "any", false, 116)));
            }
            // line 117
            echo "    ";
        }
        // line 118
        echo "
    ";
        // line 119
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'profiler', '119'), "children", array(), "any", false, 119))) {
            // line 120
            echo "        <h2>Sub requests</h2>

        ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'profiler', '122'), "children", array(), "any", false, 122));
            foreach ($context['_seq'] as $context['_key'] => $context['subrequest']) {
                // line 123
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, 'subrequest', '123'), "token", array(), "any", false, 123))), "html");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'subrequest', '123'), "token", array(), "any", false, 123), "html");
                echo "</a></h3>
            ";
                // line 124
                $template = "WebProfiler:Profiler:bag.html.twig";
                if ($template instanceof Twig_Template) {
                    $template->display(array("bag" => $this->getAttribute($this->getAttribute($this->getContext($context, 'subrequest', '124'), "get", array("request", ), "method", false, 124), "requestattributes", array(), "any", false, 124)));
                } else {
                    echo $this->env->getExtension('templating')->getTemplating()->render($template, array("bag" => $this->getAttribute($this->getAttribute($this->getContext($context, 'subrequest', '124'), "get", array("request", ), "method", false, 124), "requestattributes", array(), "any", false, 124)));
                }
                // line 125
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subrequest'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 126
            echo "    ";
        }
        // line 127
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfiler:Collector:request.html.twig";
    }
}
