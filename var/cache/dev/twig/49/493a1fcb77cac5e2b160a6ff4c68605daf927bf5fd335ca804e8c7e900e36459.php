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
        $__internal_d5871d50071f0041381cf0397072915058fb12f63cd9ecc9ad05c5daa1144449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5871d50071f0041381cf0397072915058fb12f63cd9ecc9ad05c5daa1144449->enter($__internal_d5871d50071f0041381cf0397072915058fb12f63cd9ecc9ad05c5daa1144449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5871d50071f0041381cf0397072915058fb12f63cd9ecc9ad05c5daa1144449->leave($__internal_d5871d50071f0041381cf0397072915058fb12f63cd9ecc9ad05c5daa1144449_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57190d8dc8f6046a6dcbcb7c1467dc521863b1076181815a1337dfaf69e95929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57190d8dc8f6046a6dcbcb7c1467dc521863b1076181815a1337dfaf69e95929->enter($__internal_57190d8dc8f6046a6dcbcb7c1467dc521863b1076181815a1337dfaf69e95929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_57190d8dc8f6046a6dcbcb7c1467dc521863b1076181815a1337dfaf69e95929->leave($__internal_57190d8dc8f6046a6dcbcb7c1467dc521863b1076181815a1337dfaf69e95929_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0a450a6d46f2639ab5db9e9822be9c909e7098dde1997e6ea34e1f8ceb06480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a450a6d46f2639ab5db9e9822be9c909e7098dde1997e6ea34e1f8ceb06480->enter($__internal_a0a450a6d46f2639ab5db9e9822be9c909e7098dde1997e6ea34e1f8ceb06480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0a450a6d46f2639ab5db9e9822be9c909e7098dde1997e6ea34e1f8ceb06480->leave($__internal_a0a450a6d46f2639ab5db9e9822be9c909e7098dde1997e6ea34e1f8ceb06480_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_009ef32c4f8e802f5154121ff29250027646f9888fb3f9b2969618a3b3378acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009ef32c4f8e802f5154121ff29250027646f9888fb3f9b2969618a3b3378acd->enter($__internal_009ef32c4f8e802f5154121ff29250027646f9888fb3f9b2969618a3b3378acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_009ef32c4f8e802f5154121ff29250027646f9888fb3f9b2969618a3b3378acd->leave($__internal_009ef32c4f8e802f5154121ff29250027646f9888fb3f9b2969618a3b3378acd_prof);

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
