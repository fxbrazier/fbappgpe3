<?php

/* base.html.twig */
class __TwigTemplate_7196d870590c3814f5d88ea4150bbf6a4375d21f3df65eadef08270d902ba132 extends Twig_Template
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
        $__internal_6b2378631db708ee85360c88e604614bb137d2f183c6e175fbd5e8cd11c79a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b2378631db708ee85360c88e604614bb137d2f183c6e175fbd5e8cd11c79a22->enter($__internal_6b2378631db708ee85360c88e604614bb137d2f183c6e175fbd5e8cd11c79a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" />
            ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
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
           <li><a href=\"dashboard\">Dashbord</a></li>
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
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 52
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_6b2378631db708ee85360c88e604614bb137d2f183c6e175fbd5e8cd11c79a22->leave($__internal_6b2378631db708ee85360c88e604614bb137d2f183c6e175fbd5e8cd11c79a22_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc2ce4eaf7b28d0e9e3ec30b720b0451b98c762f7ac00b57ac8fdc3f792b68ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2ce4eaf7b28d0e9e3ec30b720b0451b98c762f7ac00b57ac8fdc3f792b68ac->enter($__internal_cc2ce4eaf7b28d0e9e3ec30b720b0451b98c762f7ac00b57ac8fdc3f792b68ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "fbapp";
        
        $__internal_cc2ce4eaf7b28d0e9e3ec30b720b0451b98c762f7ac00b57ac8fdc3f792b68ac->leave($__internal_cc2ce4eaf7b28d0e9e3ec30b720b0451b98c762f7ac00b57ac8fdc3f792b68ac_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c01778ae25db83bef2b770de6122fdd6d421b3201ac6d108bc77e99b0c48fc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01778ae25db83bef2b770de6122fdd6d421b3201ac6d108bc77e99b0c48fc48->enter($__internal_c01778ae25db83bef2b770de6122fdd6d421b3201ac6d108bc77e99b0c48fc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c01778ae25db83bef2b770de6122fdd6d421b3201ac6d108bc77e99b0c48fc48->leave($__internal_c01778ae25db83bef2b770de6122fdd6d421b3201ac6d108bc77e99b0c48fc48_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_caae20cb4ffdd161083a3bf18354c4aac41f9250ce17dfbd7827835064c2b6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caae20cb4ffdd161083a3bf18354c4aac41f9250ce17dfbd7827835064c2b6d3->enter($__internal_caae20cb4ffdd161083a3bf18354c4aac41f9250ce17dfbd7827835064c2b6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_caae20cb4ffdd161083a3bf18354c4aac41f9250ce17dfbd7827835064c2b6d3->leave($__internal_caae20cb4ffdd161083a3bf18354c4aac41f9250ce17dfbd7827835064c2b6d3_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b2bbdaa04baa37666f2d16658d7827a2e7d7bffab31ed7abf3ef1912440053f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2bbdaa04baa37666f2d16658d7827a2e7d7bffab31ed7abf3ef1912440053f->enter($__internal_7b2bbdaa04baa37666f2d16658d7827a2e7d7bffab31ed7abf3ef1912440053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7b2bbdaa04baa37666f2d16658d7827a2e7d7bffab31ed7abf3ef1912440053f->leave($__internal_7b2bbdaa04baa37666f2d16658d7827a2e7d7bffab31ed7abf3ef1912440053f_prof);

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
        return array (  179 => 63,  168 => 55,  157 => 15,  145 => 5,  133 => 67,  128 => 64,  126 => 63,  117 => 56,  114 => 55,  105 => 52,  102 => 51,  98 => 50,  62 => 17,  59 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/component.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\" />
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
           <li><a href=\"dashboard\">Dashbord</a></li>
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
        <script src=\"{{ asset('js/script.js') }}\"></script>

    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\fbappgpe3\\app\\Resources\\views\\base.html.twig");
    }
}
