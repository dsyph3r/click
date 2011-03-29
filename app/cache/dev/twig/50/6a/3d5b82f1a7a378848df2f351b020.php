<?php

/* Framework:Exception:exception.html.twig */
class __TwigTemplate_506a3d5b82f1a7a378848df2f351b020 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div class=\"sf-exceptionreset\">

    <div class=\"block_exception\">
        <div class=\"block_exception_detected clear_fix\">
            <div class=\"illustration_exception\">
                <img alt=\"Exception detected!\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/exception_detected.gif"), "html");
        echo "\"/>
            </div>
            <div class=\"text_exception\">

                <div class=\"open_quote\">
                    <img alt=\"\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/open_quote.gif"), "html");
        echo "\"/>
                </div>

                <h1>
                    ";
        // line 15
        echo $this->env->getExtension('templating')->formatFileFromText(twig_strtr($this->getAttribute($this->getContext($context, 'exception', '15'), "message", array(), "any", false, 15), array("
" => "<br />")));
        echo "
                </h1>

                <div>
                    <strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code', '19'), "html");
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text', '19'), "html");
        echo " - ";
        echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'exception', '19'), "class", array(), "any", false, 19));
        echo "
                </div>

                ";
        // line 22
        $context['previous_count'] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '22'), "previouses", array(), "any", false, 22));
        // line 23
        echo "                ";
        if ($this->getContext($context, 'previous_count', '23')) {
            // line 24
            echo "                    <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, 'previous_count', '24'), "html");
            echo "</strong> linked Exception";
            echo ((($this->getContext($context, 'previous_count', '24') > 1)) ? ("s") : (""));
            echo ":</span>
                        <ul>
                            ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '26'), "previouses", array(), "any", false, 26));
            foreach ($context['_seq'] as $context['i'] => $context['previous']) {
                // line 27
                echo "                                <li>
                                    ";
                // line 28
                echo $this->env->getExtension('templating')->abbrClass($this->getAttribute($this->getContext($context, 'previous', '28'), "class", array(), "any", false, 28));
                echo " <a href=\"#traces_link_";
                echo twig_escape_filter($this->env, ($this->getContext($context, 'i', '28') + 1), "html");
                echo "\" onclick=\"toggle('traces_";
                echo twig_escape_filter($this->env, ($this->getContext($context, 'i', '28') + 1), "html");
                echo "', 'traces');\">&raquo;</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "                        </ul>
                    </div>
                ";
        }
        // line 34
        echo "
                <div class=\"close_quote\">
                    <img alt=\"\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/close_quote.gif"), "html");
        echo "\"/>
                </div>

            </div>
        </div>
    </div>

    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'exception', '43'), "toarray", array(), "any", false, 43));
        foreach ($context['_seq'] as $context['position'] => $context['e']) {
            // line 44
            echo "        ";
            $template = "Framework:Exception:traces.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("exception" => $this->getContext($context, 'e', '44'), "position" => $this->getContext($context, 'position', '44'), "count" => $this->getContext($context, 'previous_count', '44')));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("exception" => $this->getContext($context, 'e', '44'), "position" => $this->getContext($context, 'position', '44'), "count" => $this->getContext($context, 'previous_count', '44')));
            }
            // line 45
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "
    ";
        // line 47
        if ($this->getContext($context, 'logger', '47')) {
            // line 48
            echo "        <div class=\"block\">
            <div class=\"logs clear_fix\">
                ";
            // line 50
            ob_start();
            // line 51
            echo "                <h2>
                    Logs&nbsp;
                    <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon_logs_open', 'icon_logs_close'); return false;\">
                        <img class=\"toggle\" id=\"icon_logs_open\" alt=\"+\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html");
            echo "\" style=\"visibility: hidden\" />
                        <img class=\"toggle\" id=\"icon_logs_close\" alt=\"-\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html");
            echo "\" style=\"visibility: display; margin-left: -18px\" />
                    </a>
                </h2>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 59
            echo "
                ";
            // line 60
            if ($this->getAttribute($this->getContext($context, 'logger', '60'), "counterrors", array(), "any", false, 60)) {
                // line 61
                echo "                    <div class=\"error_count\">
                        <span>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'logger', '63'), "counterrors", array(), "any", false, 63), "html");
                echo " error";
                echo ((($this->getAttribute($this->getContext($context, 'logger', '63'), "counterrors", array(), "any", false, 63) > 1)) ? ("s") : (""));
                echo "
                        </span>
                    </div>
                ";
            }
            // line 67
            echo "
            </div>

            <div id=\"logs\">
                ";
            // line 71
            $template = "Framework:Exception:logs.html.twig";
            if ($template instanceof Twig_Template) {
                $template->display(array("logs" => $this->getAttribute($this->getContext($context, 'logger', '71'), "logs", array(), "any", false, 71)));
            } else {
                echo $this->env->getExtension('templating')->getTemplating()->render($template, array("logs" => $this->getAttribute($this->getContext($context, 'logger', '71'), "logs", array(), "any", false, 71)));
            }
            // line 72
            echo "            </div>

        </div>
    ";
        }
        // line 76
        echo "
    ";
        // line 77
        if ($this->getContext($context, 'currentContent', '77')) {
            // line 78
            echo "        <div class=\"block\">
            ";
            // line 79
            ob_start();
            // line 80
            echo "            <h2>
                Content of the Output&nbsp;
                <a href=\"#\" onclick=\"toggle('output_content'); switchIcons('icon_content_open', 'icon_content_close'); return false;\">
                    <img class=\"toggle\" id=\"icon_content_close\" alt=\"-\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html");
            echo "\" style=\"visibility: hidden\" />
                    <img class=\"toggle\" id=\"icon_content_open\" alt=\"+\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html");
            echo "\" style=\"visibility: display; margin-left: -18px\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 88
            echo "
            <div id=\"output_content\" style=\"display: none\">
                ";
            // line 90
            echo twig_escape_filter($this->env, $this->getContext($context, 'currentContent', '90'), "html");
            echo "
            </div>

            <div style=\"clear: both\"></div>
        </div>
    ";
        }
        // line 96
        echo "
</div>

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0 ; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, visibility1, visibility2;
            
        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        visibility1 = icon1.style.visibility;
        visibility2 = icon2.style.visibility;

        icon1.style.visibility = visibility2;
        icon2.style.visibility = visibility1;
    }
//]]></script>
";
    }

    public function getTemplateName()
    {
        return "Framework:Exception:exception.html.twig";
    }
}
