<?php

/* contest/edit.html.twig */
class __TwigTemplate_bf62b202f2b4006a90eef2731d513de0f33e329962c2d265541e87f1502cccf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contest/edit.html.twig", 1);
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
        $__internal_31662be71e5afad7cf776ada80e655cf124ac827ed39abafba2988d8428c296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31662be71e5afad7cf776ada80e655cf124ac827ed39abafba2988d8428c296e->enter($__internal_31662be71e5afad7cf776ada80e655cf124ac827ed39abafba2988d8428c296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contest/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31662be71e5afad7cf776ada80e655cf124ac827ed39abafba2988d8428c296e->leave($__internal_31662be71e5afad7cf776ada80e655cf124ac827ed39abafba2988d8428c296e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_76befc7821848e34022b3f2c9688ab668ed7df41b050a632f1177aa9c8f0d948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76befc7821848e34022b3f2c9688ab668ed7df41b050a632f1177aa9c8f0d948->enter($__internal_76befc7821848e34022b3f2c9688ab668ed7df41b050a632f1177aa9c8f0d948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contest/edit.html.twig"));

        // line 4
        echo "\t<h2>Edit contest</h2>

\t";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_76befc7821848e34022b3f2c9688ab668ed7df41b050a632f1177aa9c8f0d948->leave($__internal_76befc7821848e34022b3f2c9688ab668ed7df41b050a632f1177aa9c8f0d948_prof);

    }

    public function getTemplateName()
    {
        return "contest/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
\t<h2>Edit contest</h2>

\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_end(form)}}

{% endblock %}", "contest/edit.html.twig", "C:\\wamp\\www\\fbappsymfo\\app\\Resources\\views\\contest\\edit.html.twig");
    }
}
