<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_55b7239c766d0ea91ee6af881896b5b484c007c9a6639c96b6f91ae96831ea63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ac962f131e4bb099af7012612eaef95b280fb7e4ac9af536bc232491b2bb639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac962f131e4bb099af7012612eaef95b280fb7e4ac9af536bc232491b2bb639->enter($__internal_7ac962f131e4bb099af7012612eaef95b280fb7e4ac9af536bc232491b2bb639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac962f131e4bb099af7012612eaef95b280fb7e4ac9af536bc232491b2bb639->leave($__internal_7ac962f131e4bb099af7012612eaef95b280fb7e4ac9af536bc232491b2bb639_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed039d16a56331b5635efbb6bdeb138369d2228b81a1d898f8f48ab891aefe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed039d16a56331b5635efbb6bdeb138369d2228b81a1d898f8f48ab891aefe20->enter($__internal_ed039d16a56331b5635efbb6bdeb138369d2228b81a1d898f8f48ab891aefe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ed039d16a56331b5635efbb6bdeb138369d2228b81a1d898f8f48ab891aefe20->leave($__internal_ed039d16a56331b5635efbb6bdeb138369d2228b81a1d898f8f48ab891aefe20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e83009c3bf4887df06ad3408b6a943c23474737c89529cf2f5a034170f3be0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e83009c3bf4887df06ad3408b6a943c23474737c89529cf2f5a034170f3be0f->enter($__internal_3e83009c3bf4887df06ad3408b6a943c23474737c89529cf2f5a034170f3be0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e83009c3bf4887df06ad3408b6a943c23474737c89529cf2f5a034170f3be0f->leave($__internal_3e83009c3bf4887df06ad3408b6a943c23474737c89529cf2f5a034170f3be0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aca1a1edae43f2e64159fe87c90e6410248b3c68035875305788b7f14c91983f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca1a1edae43f2e64159fe87c90e6410248b3c68035875305788b7f14c91983f->enter($__internal_aca1a1edae43f2e64159fe87c90e6410248b3c68035875305788b7f14c91983f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aca1a1edae43f2e64159fe87c90e6410248b3c68035875305788b7f14c91983f->leave($__internal_aca1a1edae43f2e64159fe87c90e6410248b3c68035875305788b7f14c91983f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\fbappsymfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
