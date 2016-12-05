<?php

/* contest/create.html.twig */
class __TwigTemplate_e43166a8af28508c4f7ff3c54952d8a1238c5d9da94006aacc3efea7d4cca844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contest/create.html.twig", 1);
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
        $__internal_58c06b23ada44a7580fc598ab12e8701f9dde9ff3b73e1ce71ef329bdbd040ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c06b23ada44a7580fc598ab12e8701f9dde9ff3b73e1ce71ef329bdbd040ed->enter($__internal_58c06b23ada44a7580fc598ab12e8701f9dde9ff3b73e1ce71ef329bdbd040ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contest/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c06b23ada44a7580fc598ab12e8701f9dde9ff3b73e1ce71ef329bdbd040ed->leave($__internal_58c06b23ada44a7580fc598ab12e8701f9dde9ff3b73e1ce71ef329bdbd040ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_93cb64a3e44ff8b8c0263a663fdb420825790ea56711a8293c6c76274021566a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cb64a3e44ff8b8c0263a663fdb420825790ea56711a8293c6c76274021566a->enter($__internal_93cb64a3e44ff8b8c0263a663fdb420825790ea56711a8293c6c76274021566a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contest/create.html.twig"));

        // line 4
        echo "\t<h2>CREATE NEW CONTEST</h2>

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
        
        $__internal_93cb64a3e44ff8b8c0263a663fdb420825790ea56711a8293c6c76274021566a->leave($__internal_93cb64a3e44ff8b8c0263a663fdb420825790ea56711a8293c6c76274021566a_prof);

    }

    public function getTemplateName()
    {
        return "contest/create.html.twig";
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
\t<h2>CREATE NEW CONTEST</h2>

\t{{form_start(form)}}
\t{{form_widget(form)}}
\t{{form_end(form)}}

{% endblock %}", "contest/create.html.twig", "C:\\wamp\\www\\fbappsymfo\\app\\Resources\\views\\contest\\create.html.twig");
    }
}
