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
        $__internal_00586c114aadeed67b2dd959f06bc58e0d99c643046d607f0e77b693a1465cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00586c114aadeed67b2dd959f06bc58e0d99c643046d607f0e77b693a1465cae->enter($__internal_00586c114aadeed67b2dd959f06bc58e0d99c643046d607f0e77b693a1465cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 49
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 50
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_00586c114aadeed67b2dd959f06bc58e0d99c643046d607f0e77b693a1465cae->leave($__internal_00586c114aadeed67b2dd959f06bc58e0d99c643046d607f0e77b693a1465cae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_802397d355c3ebb01e5b488149a8a19e32905391367e29dd98223981e83a6534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802397d355c3ebb01e5b488149a8a19e32905391367e29dd98223981e83a6534->enter($__internal_802397d355c3ebb01e5b488149a8a19e32905391367e29dd98223981e83a6534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "fbapp";
        
        $__internal_802397d355c3ebb01e5b488149a8a19e32905391367e29dd98223981e83a6534->leave($__internal_802397d355c3ebb01e5b488149a8a19e32905391367e29dd98223981e83a6534_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9bcab4bcc60c1d2ef588c76e124e5a5b8e81da1d9ba1eb3ba612eb67eeb6cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9bcab4bcc60c1d2ef588c76e124e5a5b8e81da1d9ba1eb3ba612eb67eeb6cd4->enter($__internal_d9bcab4bcc60c1d2ef588c76e124e5a5b8e81da1d9ba1eb3ba612eb67eeb6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d9bcab4bcc60c1d2ef588c76e124e5a5b8e81da1d9ba1eb3ba612eb67eeb6cd4->leave($__internal_d9bcab4bcc60c1d2ef588c76e124e5a5b8e81da1d9ba1eb3ba612eb67eeb6cd4_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1cf151b0e904c07b8eff9af24c3ff941da4a76b96ba07f0116563c73109fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1cf151b0e904c07b8eff9af24c3ff941da4a76b96ba07f0116563c73109fd0->enter($__internal_8c1cf151b0e904c07b8eff9af24c3ff941da4a76b96ba07f0116563c73109fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_8c1cf151b0e904c07b8eff9af24c3ff941da4a76b96ba07f0116563c73109fd0->leave($__internal_8c1cf151b0e904c07b8eff9af24c3ff941da4a76b96ba07f0116563c73109fd0_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1133dfac49ffa8d23f6a65294991f4f48bac4b6cfdf86bb7149b14a72406bccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1133dfac49ffa8d23f6a65294991f4f48bac4b6cfdf86bb7149b14a72406bccb->enter($__internal_1133dfac49ffa8d23f6a65294991f4f48bac4b6cfdf86bb7149b14a72406bccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_1133dfac49ffa8d23f6a65294991f4f48bac4b6cfdf86bb7149b14a72406bccb->leave($__internal_1133dfac49ffa8d23f6a65294991f4f48bac4b6cfdf86bb7149b14a72406bccb_prof);

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
        return array (  171 => 61,  160 => 53,  149 => 13,  137 => 5,  125 => 65,  120 => 62,  118 => 61,  109 => 54,  106 => 53,  97 => 50,  94 => 49,  90 => 48,  54 => 15,  51 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
