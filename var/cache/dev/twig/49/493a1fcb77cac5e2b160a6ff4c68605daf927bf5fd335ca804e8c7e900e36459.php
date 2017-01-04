<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_338bc5d3bd4e7ad4b84ef92cdfa2a8f10d056a65ffefc6ce3261bffc9d05f355 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516368dba0744b1bef157f51fa56eaa361aeb89dffc6a05ec6c656d564815287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516368dba0744b1bef157f51fa56eaa361aeb89dffc6a05ec6c656d564815287->enter($__internal_516368dba0744b1bef157f51fa56eaa361aeb89dffc6a05ec6c656d564815287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516368dba0744b1bef157f51fa56eaa361aeb89dffc6a05ec6c656d564815287->leave($__internal_516368dba0744b1bef157f51fa56eaa361aeb89dffc6a05ec6c656d564815287_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7284db5d9cbd9119fcb37c328e60b57059a53cfb7b43c4778707ce9f71d0d8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7284db5d9cbd9119fcb37c328e60b57059a53cfb7b43c4778707ce9f71d0d8e9->enter($__internal_7284db5d9cbd9119fcb37c328e60b57059a53cfb7b43c4778707ce9f71d0d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7284db5d9cbd9119fcb37c328e60b57059a53cfb7b43c4778707ce9f71d0d8e9->leave($__internal_7284db5d9cbd9119fcb37c328e60b57059a53cfb7b43c4778707ce9f71d0d8e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74106d0771bae3b33a0a51c0adcc8108ac5484919b06811461d1bbaed512da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74106d0771bae3b33a0a51c0adcc8108ac5484919b06811461d1bbaed512da6->enter($__internal_c74106d0771bae3b33a0a51c0adcc8108ac5484919b06811461d1bbaed512da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c74106d0771bae3b33a0a51c0adcc8108ac5484919b06811461d1bbaed512da6->leave($__internal_c74106d0771bae3b33a0a51c0adcc8108ac5484919b06811461d1bbaed512da6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecafc0c52975044f731b3a5a80571f938e0c1caf04bf2455cf2e441517039124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecafc0c52975044f731b3a5a80571f938e0c1caf04bf2455cf2e441517039124->enter($__internal_ecafc0c52975044f731b3a5a80571f938e0c1caf04bf2455cf2e441517039124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ecafc0c52975044f731b3a5a80571f938e0c1caf04bf2455cf2e441517039124->leave($__internal_ecafc0c52975044f731b3a5a80571f938e0c1caf04bf2455cf2e441517039124_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\fbappgpe3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
