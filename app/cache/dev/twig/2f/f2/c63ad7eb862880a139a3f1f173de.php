<?php

/* SymfonyWebConfigurator::form.html.twig */
class __TwigTemplate_2ff2c63ad7eb862880a139a3f1f173de extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
            'text_field' => array($this, 'block_text_field'),
            'password_field' => array($this, 'block_password_field'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("Twig::form.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field_row($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'child', '5'));
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderField($this->getContext($context, 'child', '7'));
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 9
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'child', '9'));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        // line 16
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field', '16'), "id", array(), "any", false, 16), "html");
        echo "\">
        ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans($this->getContext($context, 'label', '17'), array(), "messages");
        // line 18
        echo "        ";
        if ($this->getAttribute($this->getContext($context, 'field', '18'), "required", array(), "any", false, 18)) {
            // line 19
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 21
        echo "    </label>
";
    }

    // line 24
    public function block_errors($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getContext($context, 'field', '25'), "hasErrors", array(), "any", false, 25)) {
            // line 26
            echo "        <ul>
        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'field', '27'), "errors", array(), "any", false, 27));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 28
                echo "            <li>";
                echo $this->env->getExtension('translator')->getTranslator()->trans($this->getAttribute($this->getContext($context, 'error', '28'), "messageTemplate", array(), "any", false, 28), array_merge(array(), $this->getAttribute($this->getContext($context, 'error', '28'), "messageParameters", array(), "any", false, 28)), "validators");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "        </ul>
    ";
        }
    }

    // line 34
    public function block_text_field($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if (($this->getAttribute($this->getContext($context, 'attr', '35'), "type", array(), "any", true, 35) && ($this->getAttribute($this->getContext($context, 'attr', '35'), "type", array(), "any", false, 35) != "text"))) {
            // line 36
            echo "        <input ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field', '36'), "displayedData", array(), "any", false, 36), "html");
            echo "\" />
    ";
        } else {
            // line 38
            echo "        ";
            $context['attr'] = twig_array_merge($this->getContext($context, 'attr', '38'), array("maxlength" => (($this->getAttribute($this->getContext($context, 'attr', '38'), "maxlength", array(), "any", true, 38)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr', '38'), "maxlength", array(), "any", true, 38), $this->getAttribute($this->getContext($context, 'field', '38'), "maxlength", array(), "any", false, 38))) : ($this->getAttribute($this->getContext($context, 'field', '38'), "maxlength", array(), "any", false, 38)))));
            // line 39
            echo "        <input type=\"text\" ";
            echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field', '39'), "displayedData", array(), "any", false, 39), "html");
            echo "\" />
    ";
        }
    }

    // line 43
    public function block_password_field($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $context['attr'] = twig_array_merge($this->getContext($context, 'attr', '44'), array("maxlength" => (($this->getAttribute($this->getContext($context, 'attr', '44'), "maxlength", array(), "any", true, 44)) ? (twig_default_filter($this->getAttribute($this->getContext($context, 'attr', '44'), "maxlength", array(), "any", true, 44), $this->getAttribute($this->getContext($context, 'field', '44'), "maxlength", array(), "any", false, 44))) : ($this->getAttribute($this->getContext($context, 'field', '44'), "maxlength", array(), "any", false, 44)))));
        // line 45
        echo "    <input type=\"password\" ";
        echo twig_escape_filter($this->env, $this->renderBlock("field_attributes", $context, $blocks), "html");
        echo " class=\"medium_txt\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'field', '45'), "displayedData", array(), "any", false, 45), "html");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "SymfonyWebConfigurator::form.html.twig";
    }
}
