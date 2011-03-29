<?php

/* Framework:Exception:layout.html.twig */
class __TwigTemplate_023b9a73903d2efa894c1adb61fd31c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html");
        echo "\"/>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'exception', '5'), "message", array(), "any", false, 5), "html");
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_code', '5'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'status_text', '5'), "html");
        echo ")</title>

        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/css/exception.css"), "html");
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear_fix\">
                <div class=\"header_logo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/logo_symfony.gif"), "html");
        echo "\" alt=\"Symfony\" />
                </div>

                <div class=\"search\">
                  <form method=\"get\" action=\"http://symfony.com/search\">
                    <div class=\"form_row\">

                      <label for=\"search_id\">
                          <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/framework/images/grey_magnifier.png"), "html");
        echo "\" alt=\"Search on Symfony website\" />
                      </label>

                      <input name=\"q\" id=\"search_id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                      <button type=\"submit\">
                        <span class=\"border_l\">
                          <span class=\"border_r\">
                            <span class=\"btn_bg\">OK</span>
                          </span>
                        </span>
                      </button>
                    </div>
                   </form>
                </div>
            </div>

            ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        </div>
    </body>
</html>
";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "Framework:Exception:layout.html.twig";
    }
}
