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
        $__internal_91d60f4d4e6afa46a40e7d8b2cdf7637113182b9d6ae12e9fab3ab2ad8b4b9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d60f4d4e6afa46a40e7d8b2cdf7637113182b9d6ae12e9fab3ab2ad8b4b9de->enter($__internal_91d60f4d4e6afa46a40e7d8b2cdf7637113182b9d6ae12e9fab3ab2ad8b4b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91d60f4d4e6afa46a40e7d8b2cdf7637113182b9d6ae12e9fab3ab2ad8b4b9de->leave($__internal_91d60f4d4e6afa46a40e7d8b2cdf7637113182b9d6ae12e9fab3ab2ad8b4b9de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f777e280acb640ecd948aa0a85d1a998daa0674eecbc3c93f1dacba8f17d45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f777e280acb640ecd948aa0a85d1a998daa0674eecbc3c93f1dacba8f17d45e->enter($__internal_9f777e280acb640ecd948aa0a85d1a998daa0674eecbc3c93f1dacba8f17d45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_9f777e280acb640ecd948aa0a85d1a998daa0674eecbc3c93f1dacba8f17d45e->leave($__internal_9f777e280acb640ecd948aa0a85d1a998daa0674eecbc3c93f1dacba8f17d45e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ae0af4a5dfe11137fe9cc2f6fb3db190e3ef4254e582728b0aeafc1260d7635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae0af4a5dfe11137fe9cc2f6fb3db190e3ef4254e582728b0aeafc1260d7635->enter($__internal_7ae0af4a5dfe11137fe9cc2f6fb3db190e3ef4254e582728b0aeafc1260d7635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ae0af4a5dfe11137fe9cc2f6fb3db190e3ef4254e582728b0aeafc1260d7635->leave($__internal_7ae0af4a5dfe11137fe9cc2f6fb3db190e3ef4254e582728b0aeafc1260d7635_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a643ec600d72a5eea2c815cacda3ad78e92668d81383fab940afc4f2ec83d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a643ec600d72a5eea2c815cacda3ad78e92668d81383fab940afc4f2ec83d06->enter($__internal_4a643ec600d72a5eea2c815cacda3ad78e92668d81383fab940afc4f2ec83d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a643ec600d72a5eea2c815cacda3ad78e92668d81383fab940afc4f2ec83d06->leave($__internal_4a643ec600d72a5eea2c815cacda3ad78e92668d81383fab940afc4f2ec83d06_prof);

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
