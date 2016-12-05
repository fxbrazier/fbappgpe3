<?php

/* contest/details.html.twig */
class __TwigTemplate_74bbbb106f6efbd8f940b22f7cf8d2d43b9a342a76248717db2a6b1e94508b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contest/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f7bba5fdae95130185740cce1f6eeade606c57693d2942a8fd7ccd2a4ecbde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f7bba5fdae95130185740cce1f6eeade606c57693d2942a8fd7ccd2a4ecbde->enter($__internal_42f7bba5fdae95130185740cce1f6eeade606c57693d2942a8fd7ccd2a4ecbde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contest/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f7bba5fdae95130185740cce1f6eeade606c57693d2942a8fd7ccd2a4ecbde->leave($__internal_42f7bba5fdae95130185740cce1f6eeade606c57693d2942a8fd7ccd2a4ecbde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cb8c39a419c22d790687006db02403493d483f5d40877012a471e7dd70924f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb8c39a419c22d790687006db02403493d483f5d40877012a471e7dd70924f8->enter($__internal_8cb8c39a419c22d790687006db02403493d483f5d40877012a471e7dd70924f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contest/details.html.twig"));

        // line 4
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contest"]) ? $context["contest"] : $this->getContext($context, "contest")), "name", array()), "html", null, true);
        echo "</h2>



";
        
        $__internal_8cb8c39a419c22d790687006db02403493d483f5d40877012a471e7dd70924f8->leave($__internal_8cb8c39a419c22d790687006db02403493d483f5d40877012a471e7dd70924f8_prof);

    }

    public function getTemplateName()
    {
        return "contest/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\t<h2>{{contest.name}}</h2>



{% endblock %}", "contest/details.html.twig", "C:\\wamp\\www\\fbappsymfo\\app\\Resources\\views\\contest\\details.html.twig");
    }
}
