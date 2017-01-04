<?php

/* contest/index.html.twig */
class __TwigTemplate_ff395afc6812a90679b5a94b846726944d47e274e0d0a1ced3ffd46287e8af86 extends Twig_Template
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
        $__internal_9a7844cfc4354d6ed8bdd81624874534e56241dd1e9f70e41d8505176a36c8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7844cfc4354d6ed8bdd81624874534e56241dd1e9f70e41d8505176a36c8cd->enter($__internal_9a7844cfc4354d6ed8bdd81624874534e56241dd1e9f70e41d8505176a36c8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contest/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a7844cfc4354d6ed8bdd81624874534e56241dd1e9f70e41d8505176a36c8cd->leave($__internal_9a7844cfc4354d6ed8bdd81624874534e56241dd1e9f70e41d8505176a36c8cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5acd9e1c2669c813fa27de5aa4dc0b656c514ac9de3e3464bb4b3d85b3ef6c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acd9e1c2669c813fa27de5aa4dc0b656c514ac9de3e3464bb4b3d85b3ef6c86->enter($__internal_5acd9e1c2669c813fa27de5aa4dc0b656c514ac9de3e3464bb4b3d85b3ef6c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contest/index.html.twig"));

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
        
        $__internal_5acd9e1c2669c813fa27de5aa4dc0b656c514ac9de3e3464bb4b3d85b3ef6c86->leave($__internal_5acd9e1c2669c813fa27de5aa4dc0b656c514ac9de3e3464bb4b3d85b3ef6c86_prof);

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
", "contest/index.html.twig", "C:\\wamp\\www\\fbappgpe3\\app\\Resources\\views\\contest\\index.html.twig");
    }
}
