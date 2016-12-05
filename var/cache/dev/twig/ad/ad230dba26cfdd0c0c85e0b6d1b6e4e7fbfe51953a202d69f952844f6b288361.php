<?php

/* contest/index.html.twig */
class __TwigTemplate_fb882625a7001b4cf699508ef67f195ad844454cd384997bff36762e50c5d7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contest/index.html.twig", 1);
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
        $__internal_2a52619396717559709abc123e516f2143984f81f51f5d78fb66c35c0b341529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a52619396717559709abc123e516f2143984f81f51f5d78fb66c35c0b341529->enter($__internal_2a52619396717559709abc123e516f2143984f81f51f5d78fb66c35c0b341529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contest/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a52619396717559709abc123e516f2143984f81f51f5d78fb66c35c0b341529->leave($__internal_2a52619396717559709abc123e516f2143984f81f51f5d78fb66c35c0b341529_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47b559a1556bf8535f41a229bd70f459d439b1669db27522adcd4b898395d500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b559a1556bf8535f41a229bd70f459d439b1669db27522adcd4b898395d500->enter($__internal_47b559a1556bf8535f41a229bd70f459d439b1669db27522adcd4b898395d500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contest/index.html.twig"));

        // line 4
        echo "\t<h2>Contest</h2>
\t<a href=\"contest/create\" class=\"btn btn-default\">Add Contest</a>
\t<table class=\"table table-hover\">
\t    <thead>
\t      <tr>
\t        <th>Name</th>
\t        <th>Start date</th>
\t        <th>End date</th>
\t        <th>Status</th>
\t      </tr>
\t    </thead>
\t    <tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contests"]) ? $context["contests"] : $this->getContext($context, "contests")));
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 17
            echo "\t\t      <tr>
\t\t        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["contest"], "name", array()), "html", null, true);
            echo "</td>
\t\t        <td></td>
\t\t        <td></td>
\t\t        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["contest"], "status", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"contest/details/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["contest"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">view</a>
\t\t\t\t\t<a href=\"contest/edit/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["contest"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">edit</a>
\t\t\t\t\t<a href=\"contest/delete/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contest"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">delete</a>
\t\t\t\t</td>\t        
\t\t      </tr>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t    </tbody>
\t</table>
";
        
        $__internal_47b559a1556bf8535f41a229bd70f459d439b1669db27522adcd4b898395d500->leave($__internal_47b559a1556bf8535f41a229bd70f459d439b1669db27522adcd4b898395d500_prof);

    }

    public function getTemplateName()
    {
        return "contest/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  80 => 25,  76 => 24,  72 => 23,  67 => 21,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
\t<h2>Contest</h2>
\t<a href=\"contest/create\" class=\"btn btn-default\">Add Contest</a>
\t<table class=\"table table-hover\">
\t    <thead>
\t      <tr>
\t        <th>Name</th>
\t        <th>Start date</th>
\t        <th>End date</th>
\t        <th>Status</th>
\t      </tr>
\t    </thead>
\t    <tbody>
\t\t\t{% for contest in contests %}
\t\t      <tr>
\t\t        <td>{{contest.name}}</td>
\t\t        <td></td>
\t\t        <td></td>
\t\t        <td>{{contest.status}}</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"contest/details/{{contest.id}}\" class=\"btn btn-success\">view</a>
\t\t\t\t\t<a href=\"contest/edit/{{contest.id}}\" class=\"btn btn-default\">edit</a>
\t\t\t\t\t<a href=\"contest/delete/{{contest.id}}\" class=\"btn btn-danger\">delete</a>
\t\t\t\t</td>\t        
\t\t      </tr>
\t\t    {% endfor %}
\t    </tbody>
\t</table>
{% endblock %}
", "contest/index.html.twig", "C:\\wamp\\www\\fbappsymfo\\app\\Resources\\views\\contest\\index.html.twig");
    }
}
