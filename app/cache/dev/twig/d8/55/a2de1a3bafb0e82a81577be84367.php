<?php

/* WebProfiler:Collector:config.html.twig */
class __TwigTemplate_d855a2de1a3bafb0e82a81577be84367 extends Twig_Template
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
        echo "        <a href=\"http://symfony.com/\"><img width=\"26\" height=\"28\" alt=\"Symfony\" style=\"border-width: 0; margin: 0 5px 0 10px; vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABRZJREFUeNqkVnlM03cUb38tFFqKB4UyGZccYrZyVpnGEQzngAlOQATcFMiWJcZFOZzb4pYNFTYnmYh4/OVEFCSIYAYIbhzCNpm0BMjCBAqFUsohMHrQFmTvbf2RDosWfc3L93rf76e/d1MXFxcp+uTj5bc0F3Q8oiXuS942JpMdVKs1nnK5nK8vy2Qy/2IwGF2WlpZ3KirLb8BdLdyhGCKqISAQpgNA1ODAYK5SqXSnGEEAOGrDtcmtrKq4AEvNi4CoJ7NPb2j4paFgYmIimvISxGazH8XERO8+mnFkGJaLhoCoFwsvOV4vKq4HFblQXoHodLpiq//W6IIL+Q2wXMA9Qh+k+PqN+68KgjQ/P89qe9hWWXKzFN+i6gMx6+vun5mdnd242kcDAt7WItvachdyvj09/k5EuAr3tVot88rlK2WoTRKInpV5LK6vr2/PakHCwsPk/m/5i5uamk1GR2U08L5WXz/fDvJ8cvIJ78O0j9Jhaoo24oSHRjTLZDKP1YC4uLhoyspLb0dF7AqVSCTrcG/N2jV/q+fUZnNzc6aknIWFxZPmlkYebZO7R+C92nufrPRg/N44ZVBwkHy91XqKJZtNlUpH/1X3seNZDebmZm2XLl6OIGUBhAH2oenf12g05qJ+0STR2toauxJI9qlv+oNDgn8990P+uuqfaswlkhGKm5vrvJOzkzIsLPROTXWtOSkL8TPk6uqiNfSOWCyOImamZ3iGDp03Os9FRkYUT01NdZJ7oF76yIiUiI+Pa4HlY4FAuHS3rq5eJpVKCUNvgSpfJ8DTuIYOR6WjqILfQ0NDGiOjIsXkvkKhINzc3RBo0tTUhMHjvSlHzj93nq9QKGmG3hoYGHQgaDQ63dChSqUySTmQmoRy2Se/vsrz5Clxn8PhzPH5fkI0SVdnN6+zs8sC+UXOQ1Cp/wUUSbav2T5FfVtbW6tBNQngnrthuxnU+BDPHRzsp2CYQJcdHx+3NdZLn9GpGYOhsnewr1nU5abhYUkCDFNDQ0P4OGWDnZ0ENXj2TF6gsSBWHCsV4bF58/AyfbJSD6b5czhWShaLuQCR3g9eF3LrVlkUnnt5e6JzLPb29u4wFsjB3n6K7u3t1X236u7/6kx7u8ATRzTy7fKKHeB54eTZli38dhhovb19/sYCbfLwEBF7Yt/7Ge1hSACNDCBLhkZHcHR0FOfmfBewGvsk70+sRRv17k2IFxpzwY/vN4Rpv7Gh8WNjQQJ3Bkrt7OwECDSQmpZSggG6XKig8PxITu4pGbne/35Sw4EPUg5DYBpVdVks1tNPj2eVYnATOlf9LTMroxYS4FIVtLGx0Wzfvq1EJBr4E9e7ot+VXrta5NEh7Ag19muOph/5g8vl1sFUQlZYK8z6134s+uzs93lvkIKQ17oJgkaHn+2YbIwB5d3MWJCMzPTHScmJeZgGgUdIIEwdDsBRoP+0Lz4/wYNKS33ZCgva6UtM2lcI0ypgEdZB/Z7BVAe2EwpWzJcnvgpsedDCXA2Aj4+39tDhQwJfX5+bsKwG7ic7ouVdEOY9a3Qw4CChsGNnaUmpW3PTA/OVvhC6HgrEojo2PlYEJb0JthrR5phU9NuuZ/o6XTOBseMEjIHrjTEHTuA0Oytn9fT0sCHj0/h8/jSbbaHw8vbCzN4H3KFjVNUM2f08D4gkmq6xsMFcq/tSLNlrdTlyGkuFzmvHdIwA80Z1qs8BZWDO1TF+NcYddjzq5f/eEP0jwAAGCybA1KhGOwAAAABJRU5ErkJggg==\"/></a>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 7
        echo "    ";
        $template = "WebProfiler:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => false, "text" => $this->getAttribute($this->getContext($context, 'collector', '7'), "symfonyversion", array(), "any", false, 7))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => false, "text" => $this->getAttribute($this->getContext($context, 'collector', '7'), "symfonyversion", array(), "any", false, 7))));
        }
        // line 8
        echo "
    ";
        // line 9
        ob_start();
        // line 10
        echo "        ";
        ob_start();
        // line 11
        echo "            <span>PHP ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '11'), "phpversion", array(), "any", false, 11), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span style=\"color: ";
        // line 13
        echo (($this->getAttribute($this->getContext($context, 'collector', '13'), "hasxdebug", array(), "any", false, 13)) ? ("#759e1a") : ("#a33"));
        echo "\">xdebug</span>
            <span style=\"margin: 0; padding: 0; color: #979696\">|</span>
            <span style=\"color: ";
        // line 15
        echo (($this->getAttribute($this->getContext($context, 'collector', '15'), "hasaccelerator", array(), "any", false, 15)) ? ("#759e1a") : ("#a33"));
        echo "\">accel</span>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 17
        echo "    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 18
        echo "    ";
        $template = "WebProfiler:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => false, "icon" => "")));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => false, "icon" => "")));
        }
        // line 19
        echo "
    ";
        // line 20
        ob_start();
        // line 21
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" style=\"border-width: 0; vertical-align: middle; margin-right: 5px;\" src=\"data:image/png;base64,
        iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAYAAACOGPReAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZNJREFUeNpi/P//PwO1ARMDDcCooWDA4+npeRiEQWw0NTweHh4nQZhYORYoLf39+3cbGBuIbyJplPnx44cZjA3ENwjJwQzljoqKOghjo7lGBAcbBLiA+g7B2DBBRqCXj3/79s0CRSUX14lt27a5AplfgNgBCPaDxA8cOOAIokBe9fLy2o1LHxO6BAhAxWTwxIUMPn0seDTCvPotLi7uJIyNIxhQ9OEzVADoRZSgWbRo0UmoF1vx6GPBl06l8XhRmtzEL0KmHF5DWcmUo1E21dLSeo0uCBX7jUffb3z6GIGFdC2QYXPp0iVw4Ovp6T0FUkeA+BUw0c/AZiIwE2QAKTEc+laBktQqIL6al5e3FqqhDsQHYhU8Ln0CzVnY9D1hghYeD5E0PISKfcDjxQ949H2FJX5eJEkY+820adMm4/DiGzz6GFgIeBFX0DzBF/swQ/8oKCi8h7Gh9FeodzikpKSeQ8XuopW12PQxMEKraE0gDoSKrQfi60gaSZaDGQqqCiShks+h5Si8yiBVjnFkNyYAAgwAQGPBFLF65f4AAAAASUVORK5CYII=\"/>
    ";
        $context['icon'] = new Twig_Markup(ob_get_clean());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        ob_start();
        // line 26
        echo "            <span>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '26'), "appname", array(), "any", false, 26), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '28'), "env", array(), "any", false, 28), "html");
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span>";
        // line 30
        echo (($this->getAttribute($this->getContext($context, 'collector', '30'), "debug", array(), "any", false, 30)) ? ("debug") : ("no-debug"));
        echo "</span>
            <span style=\"margin: 0; padding: 0; color: #979696;\">|</span>
            <span>
                ";
        // line 33
        if ($this->getContext($context, 'profiler_url', '33')) {
            // line 34
            echo "                    <a style=\"color: #2f2f2f\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'profiler_url', '34'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '34'), "token", array(), "any", false, 34), "html");
            echo "</a>
                ";
        } else {
            // line 36
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '36'), "token", array(), "any", false, 36), "html");
            echo "
                ";
        }
        // line 38
        echo "            </span>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 40
        echo "    ";
        $context['text'] = new Twig_Markup(ob_get_clean());
        // line 41
        echo "    ";
        $template = "WebProfiler:Profiler:toolbar_item.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display(array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '41'))));
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, array_merge($context, array("link" => $this->getContext($context, 'profiler_url', '41'))));
        }
    }

    // line 44
    public function block_menu($context, array $blocks = array())
    {
        // line 45
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/webprofiler/images/profiler/config.png"), "html");
        echo "\" alt=\"Configuration\" /></span>
    <strong>Config</strong>
</span>
";
    }

    // line 51
    public function block_panel($context, array $blocks = array())
    {
        // line 52
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>Symfony version</th>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '60'), "symfonyversion", array(), "any", false, 60), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Application name</th>
            <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '64'), "appname", array(), "any", false, 64), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Environment</th>
            <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '68'), "env", array(), "any", false, 68), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Debug</th>
            <td>";
        // line 72
        echo (($this->getAttribute($this->getContext($context, 'collector', '72'), "debug", array(), "any", false, 72)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'collector', '84'), "phpversion", array(), "any", false, 84), "html");
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 88
        echo (($this->getAttribute($this->getContext($context, 'collector', '88'), "hasxdebug", array(), "any", false, 88)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 92
        echo (($this->getAttribute($this->getContext($context, 'collector', '92'), "hasaccelerator", array(), "any", false, 92)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 96
        echo (($this->getAttribute($this->getContext($context, 'collector', '96'), "hasxcache", array(), "any", false, 96)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 100
        echo (($this->getAttribute($this->getContext($context, 'collector', '100'), "hasapc", array(), "any", false, 100)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 104
        echo (($this->getAttribute($this->getContext($context, 'collector', '104'), "haseaccelerator", array(), "any", false, 104)) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
    </table>

    <h2>Active bundles</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Path</th>
        </tr>
        ";
        // line 114
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'collector', '114'), "bundles", array(), "any", false, 114));
        foreach ($context['_seq'] as $context['name'] => $context['path']) {
            // line 115
            echo "        <tr>
            <th>";
            // line 116
            echo twig_escape_filter($this->env, $this->getContext($context, 'name', '116'), "html");
            echo "</th>
            <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getContext($context, 'path', '117'), "html");
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 120
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "WebProfiler:Collector:config.html.twig";
    }
}
