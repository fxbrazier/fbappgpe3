<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8392ad0350f83dc0fa28c702460919c7c0a6c0967690b306b11fa036b7b0b8c4 extends Twig_Template
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
        $__internal_bbe96cdb229da2af10baed4fa6633dd8b876b0f3bad08af423b19271476e0262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe96cdb229da2af10baed4fa6633dd8b876b0f3bad08af423b19271476e0262->enter($__internal_bbe96cdb229da2af10baed4fa6633dd8b876b0f3bad08af423b19271476e0262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe96cdb229da2af10baed4fa6633dd8b876b0f3bad08af423b19271476e0262->leave($__internal_bbe96cdb229da2af10baed4fa6633dd8b876b0f3bad08af423b19271476e0262_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e39badbfbff3fb8e73293cf27fe9b5d10c99e51e465bd3caf889f919cc17070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e39badbfbff3fb8e73293cf27fe9b5d10c99e51e465bd3caf889f919cc17070->enter($__internal_8e39badbfbff3fb8e73293cf27fe9b5d10c99e51e465bd3caf889f919cc17070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_8e39badbfbff3fb8e73293cf27fe9b5d10c99e51e465bd3caf889f919cc17070->leave($__internal_8e39badbfbff3fb8e73293cf27fe9b5d10c99e51e465bd3caf889f919cc17070_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbd88705d26ad1586373d2e58ae3756cf3835e3a57721387f45623249c360016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd88705d26ad1586373d2e58ae3756cf3835e3a57721387f45623249c360016->enter($__internal_dbd88705d26ad1586373d2e58ae3756cf3835e3a57721387f45623249c360016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbd88705d26ad1586373d2e58ae3756cf3835e3a57721387f45623249c360016->leave($__internal_dbd88705d26ad1586373d2e58ae3756cf3835e3a57721387f45623249c360016_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b1018133226736818f8ef3ff7e12315e74beb0c008460160bcb7f945addeb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1018133226736818f8ef3ff7e12315e74beb0c008460160bcb7f945addeb45->enter($__internal_4b1018133226736818f8ef3ff7e12315e74beb0c008460160bcb7f945addeb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b1018133226736818f8ef3ff7e12315e74beb0c008460160bcb7f945addeb45->leave($__internal_4b1018133226736818f8ef3ff7e12315e74beb0c008460160bcb7f945addeb45_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\fbappgpe3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
