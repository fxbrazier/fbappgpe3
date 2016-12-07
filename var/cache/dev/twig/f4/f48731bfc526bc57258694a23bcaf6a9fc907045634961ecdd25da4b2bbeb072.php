<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbf48688192b1473e5b8c373fece0ee371170072bebc5d428ed1f6859d5ad743 extends Twig_Template
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
        $__internal_e0a9f8e7e487cb9121f934c2ff7e38b6edb4dd181715ee2287735abbeee5253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a9f8e7e487cb9121f934c2ff7e38b6edb4dd181715ee2287735abbeee5253d->enter($__internal_e0a9f8e7e487cb9121f934c2ff7e38b6edb4dd181715ee2287735abbeee5253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a9f8e7e487cb9121f934c2ff7e38b6edb4dd181715ee2287735abbeee5253d->leave($__internal_e0a9f8e7e487cb9121f934c2ff7e38b6edb4dd181715ee2287735abbeee5253d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_333018505a76ec56abb19c5671778d9c928901dc224e78b6ca5df392ba765d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333018505a76ec56abb19c5671778d9c928901dc224e78b6ca5df392ba765d9d->enter($__internal_333018505a76ec56abb19c5671778d9c928901dc224e78b6ca5df392ba765d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_333018505a76ec56abb19c5671778d9c928901dc224e78b6ca5df392ba765d9d->leave($__internal_333018505a76ec56abb19c5671778d9c928901dc224e78b6ca5df392ba765d9d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d1d6e6fc345581bf503b92cda25e8e88b5b07c19937189e238ea0eb7bff5fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1d6e6fc345581bf503b92cda25e8e88b5b07c19937189e238ea0eb7bff5fcc->enter($__internal_0d1d6e6fc345581bf503b92cda25e8e88b5b07c19937189e238ea0eb7bff5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d1d6e6fc345581bf503b92cda25e8e88b5b07c19937189e238ea0eb7bff5fcc->leave($__internal_0d1d6e6fc345581bf503b92cda25e8e88b5b07c19937189e238ea0eb7bff5fcc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15e5f726760a76ba216553f5dbf48561e10b58428727d9e0b4ccbbc660fcf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15e5f726760a76ba216553f5dbf48561e10b58428727d9e0b4ccbbc660fcf9a->enter($__internal_f15e5f726760a76ba216553f5dbf48561e10b58428727d9e0b4ccbbc660fcf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f15e5f726760a76ba216553f5dbf48561e10b58428727d9e0b4ccbbc660fcf9a->leave($__internal_f15e5f726760a76ba216553f5dbf48561e10b58428727d9e0b4ccbbc660fcf9a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
