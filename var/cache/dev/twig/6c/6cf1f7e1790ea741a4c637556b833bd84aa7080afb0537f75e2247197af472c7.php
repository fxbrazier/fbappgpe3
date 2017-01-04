<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2e6ecce2f1e77852e0f23f1b5b11e8f311a9c5ad201486ae39c590b7d2cd178 extends Twig_Template
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
        $__internal_d2b9819549dd1e4fb92a924f9ec09a022f88fa1d1998ddf886b76b1bdc4c6d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b9819549dd1e4fb92a924f9ec09a022f88fa1d1998ddf886b76b1bdc4c6d76->enter($__internal_d2b9819549dd1e4fb92a924f9ec09a022f88fa1d1998ddf886b76b1bdc4c6d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2b9819549dd1e4fb92a924f9ec09a022f88fa1d1998ddf886b76b1bdc4c6d76->leave($__internal_d2b9819549dd1e4fb92a924f9ec09a022f88fa1d1998ddf886b76b1bdc4c6d76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49750627cdf5f719a350cc19ec160eba243b0e4d5cfb2e6204adb60b297f83e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49750627cdf5f719a350cc19ec160eba243b0e4d5cfb2e6204adb60b297f83e7->enter($__internal_49750627cdf5f719a350cc19ec160eba243b0e4d5cfb2e6204adb60b297f83e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_49750627cdf5f719a350cc19ec160eba243b0e4d5cfb2e6204adb60b297f83e7->leave($__internal_49750627cdf5f719a350cc19ec160eba243b0e4d5cfb2e6204adb60b297f83e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7276e20258ee1257dbf1329250e9fc2d1bbe436e7a72eb7a36b67ec7cbc5cb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7276e20258ee1257dbf1329250e9fc2d1bbe436e7a72eb7a36b67ec7cbc5cb41->enter($__internal_7276e20258ee1257dbf1329250e9fc2d1bbe436e7a72eb7a36b67ec7cbc5cb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7276e20258ee1257dbf1329250e9fc2d1bbe436e7a72eb7a36b67ec7cbc5cb41->leave($__internal_7276e20258ee1257dbf1329250e9fc2d1bbe436e7a72eb7a36b67ec7cbc5cb41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72852815ca6c81eb1d7c17b49afa202cd411f5db5c80beecf4efb665368505b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72852815ca6c81eb1d7c17b49afa202cd411f5db5c80beecf4efb665368505b4->enter($__internal_72852815ca6c81eb1d7c17b49afa202cd411f5db5c80beecf4efb665368505b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72852815ca6c81eb1d7c17b49afa202cd411f5db5c80beecf4efb665368505b4->leave($__internal_72852815ca6c81eb1d7c17b49afa202cd411f5db5c80beecf4efb665368505b4_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
