<?php

/* base.html.twig */
class __TwigTemplate_1014c14da04b81e70135a7de6bb1dd683e0e0281ea552047929e1727c1703105 extends Twig_Template
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
        $__internal_e0046e8fcee9b9a8afebfda37c2b3543882e0b436e1329db12f65571974a178a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0046e8fcee9b9a8afebfda37c2b3543882e0b436e1329db12f65571974a178a->enter($__internal_e0046e8fcee9b9a8afebfda37c2b3543882e0b436e1329db12f65571974a178a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e0046e8fcee9b9a8afebfda37c2b3543882e0b436e1329db12f65571974a178a->leave($__internal_e0046e8fcee9b9a8afebfda37c2b3543882e0b436e1329db12f65571974a178a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a3d86a7c7910e2bbaa4f1423be807a89969ce350022f673ffd26ba057802f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d86a7c7910e2bbaa4f1423be807a89969ce350022f673ffd26ba057802f16->enter($__internal_1a3d86a7c7910e2bbaa4f1423be807a89969ce350022f673ffd26ba057802f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "fbapp";
        
        $__internal_1a3d86a7c7910e2bbaa4f1423be807a89969ce350022f673ffd26ba057802f16->leave($__internal_1a3d86a7c7910e2bbaa4f1423be807a89969ce350022f673ffd26ba057802f16_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_37c75c6e1f614e746e94812cf32fe32d705c86f53a5526507f2e37b6d379b5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c75c6e1f614e746e94812cf32fe32d705c86f53a5526507f2e37b6d379b5c0->enter($__internal_37c75c6e1f614e746e94812cf32fe32d705c86f53a5526507f2e37b6d379b5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_37c75c6e1f614e746e94812cf32fe32d705c86f53a5526507f2e37b6d379b5c0->leave($__internal_37c75c6e1f614e746e94812cf32fe32d705c86f53a5526507f2e37b6d379b5c0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_be33cec1e0155295e977b759aa96bb1c119924a05abdbf3d42ff6a0f48dbdb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be33cec1e0155295e977b759aa96bb1c119924a05abdbf3d42ff6a0f48dbdb33->enter($__internal_be33cec1e0155295e977b759aa96bb1c119924a05abdbf3d42ff6a0f48dbdb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_be33cec1e0155295e977b759aa96bb1c119924a05abdbf3d42ff6a0f48dbdb33->leave($__internal_be33cec1e0155295e977b759aa96bb1c119924a05abdbf3d42ff6a0f48dbdb33_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87d4ccefdc512e7fb3f115f88087f947f9986c02e6ebc3a2f2f0cd349884f82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d4ccefdc512e7fb3f115f88087f947f9986c02e6ebc3a2f2f0cd349884f82f->enter($__internal_87d4ccefdc512e7fb3f115f88087f947f9986c02e6ebc3a2f2f0cd349884f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_87d4ccefdc512e7fb3f115f88087f947f9986c02e6ebc3a2f2f0cd349884f82f->leave($__internal_87d4ccefdc512e7fb3f115f88087f947f9986c02e6ebc3a2f2f0cd349884f82f_prof);

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
", "base.html.twig", "C:\\wamp\\www\\fbappsymfo\\app\\Resources\\views\\base.html.twig");
    }
}
