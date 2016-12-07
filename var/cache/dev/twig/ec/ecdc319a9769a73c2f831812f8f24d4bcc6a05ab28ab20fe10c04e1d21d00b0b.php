<?php

/* base.html.twig */
class __TwigTemplate_520a0c17d60180d256262d6c7e513105d3a5b1011a474889a30ac41fbba9fc07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a6c6ef7d97256352a91ed9bca67b5be1571e4a95ba7976128e5402c73cee5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6c6ef7d97256352a91ed9bca67b5be1571e4a95ba7976128e5402c73cee5f7->enter($__internal_8a6c6ef7d97256352a91ed9bca67b5be1571e4a95ba7976128e5402c73cee5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Bootstrap Core CSS -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font awesome -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
            ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Custom CSS -->
        <style>
        body {
            /*padding-top: 70px;*/
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
        </style>
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-left\">
          <a class=\"navbar-brand\" href=\"#\">Fbapp</a>
          <ul class=\"nav navbar-nav\">
           <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contest <span class=\"caret\"></span></a>
             <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"contest\">contest list</a></li>
              <li><a href=\"contest/create\">Add contest</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Sub Menu4</a></li>
              <li><a href=\"#\">Sub Menu5</a></li>
             </ul>
           </li>
           <li><a href=\"#\">Pictures</a></li>
           <li><a href=\"#\">Users</a></li>
           <li><a href=\"#\">Theme option</a></li>
          </ul>
        </div>
        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 49
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </body>
</html>
";
        
        $__internal_8a6c6ef7d97256352a91ed9bca67b5be1571e4a95ba7976128e5402c73cee5f7->leave($__internal_8a6c6ef7d97256352a91ed9bca67b5be1571e4a95ba7976128e5402c73cee5f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d37ef31618f210f3ec42a58cb0275a7b6924c076423e83d3feef7797243472f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d37ef31618f210f3ec42a58cb0275a7b6924c076423e83d3feef7797243472f->enter($__internal_5d37ef31618f210f3ec42a58cb0275a7b6924c076423e83d3feef7797243472f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "fbapp";
        
        $__internal_5d37ef31618f210f3ec42a58cb0275a7b6924c076423e83d3feef7797243472f->leave($__internal_5d37ef31618f210f3ec42a58cb0275a7b6924c076423e83d3feef7797243472f_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a793437ae9d33e6f6cec308d33960670581f35ad9a3dc57fc00d18dd3ceee844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a793437ae9d33e6f6cec308d33960670581f35ad9a3dc57fc00d18dd3ceee844->enter($__internal_a793437ae9d33e6f6cec308d33960670581f35ad9a3dc57fc00d18dd3ceee844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a793437ae9d33e6f6cec308d33960670581f35ad9a3dc57fc00d18dd3ceee844->leave($__internal_a793437ae9d33e6f6cec308d33960670581f35ad9a3dc57fc00d18dd3ceee844_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68683986cfed3c3719987cfd4d7209577cbfa25a38ec759da515c83e7ef323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68683986cfed3c3719987cfd4d7209577cbfa25a38ec759da515c83e7ef323c->enter($__internal_e68683986cfed3c3719987cfd4d7209577cbfa25a38ec759da515c83e7ef323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e68683986cfed3c3719987cfd4d7209577cbfa25a38ec759da515c83e7ef323c->leave($__internal_e68683986cfed3c3719987cfd4d7209577cbfa25a38ec759da515c83e7ef323c_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f211f0bbfa14b078f419ff5e1f6b8f623d5fd330c02d0264212c3e53c2c62788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f211f0bbfa14b078f419ff5e1f6b8f623d5fd330c02d0264212c3e53c2c62788->enter($__internal_f211f0bbfa14b078f419ff5e1f6b8f623d5fd330c02d0264212c3e53c2c62788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f211f0bbfa14b078f419ff5e1f6b8f623d5fd330c02d0264212c3e53c2c62788->leave($__internal_f211f0bbfa14b078f419ff5e1f6b8f623d5fd330c02d0264212c3e53c2c62788_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  153 => 52,  142 => 13,  130 => 5,  119 => 61,  117 => 60,  108 => 53,  105 => 52,  96 => 49,  93 => 48,  89 => 47,  54 => 15,  51 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}fbapp{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- Bootstrap Core CSS -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Font awesome -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
            {% block stylesheets %}{% endblock %}

            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <!-- Custom CSS -->
        <style>
        body {
            /*padding-top: 70px;*/
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
        </style>
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-left\">
          <a class=\"navbar-brand\" href=\"#\">Fbapp</a>
          <ul class=\"nav navbar-nav\">
           <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Contest <span class=\"caret\"></span></a>
             <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"contest\">contest list</a></li>
              <li><a href=\"contest/create\">Add contest</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"#\">Sub Menu4</a></li>
              <li><a href=\"#\">Sub Menu5</a></li>
             </ul>
           </li>
           <li><a href=\"#\">Pictures</a></li>
           <li><a href=\"#\">Users</a></li>
           <li><a href=\"#\">Theme option</a></li>
          </ul>
        </div>
        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                  {% for flash_message in app.session.flashBag.get('notice') %}
                    <div class=\"flash-notice alert alert-success\">
                      {{ flash_message }}
                    </div>
                  {% endfor %}
                  {% block body %}{% endblock %}
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        {% block javascripts %}{% endblock %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/app/Resources/views/base.html.twig");
    }
}
