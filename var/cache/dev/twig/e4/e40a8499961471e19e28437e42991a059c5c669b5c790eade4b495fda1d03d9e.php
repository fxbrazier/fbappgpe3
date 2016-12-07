<?php

/* base_front.html.twig */
class __TwigTemplate_2e615bd184174826b5a87c7b204b83834a40c9acc003781c8fa1e11e062eec09 extends Twig_Template
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
        $__internal_b337b36f7890bd396f5377fc4fe653d046d95368d7e2f891b9ee00af32a874c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b337b36f7890bd396f5377fc4fe653d046d95368d7e2f891b9ee00af32a874c7->enter($__internal_b337b36f7890bd396f5377fc4fe653d046d95368d7e2f891b9ee00af32a874c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_front.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style_front.css"), "html", null, true);
        echo "\" />
            ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
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
    <div class=\"row\">
    
      <div class=\"col-md-2\"> img salon</div>
      
      <div class=\"col-md-8\">
        <div class=\"container-fluid\">
          
            <!-- navbar -->
            <div class=\"container-fluid\">
              <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                      <li><a href=\"#\">Home</a></li>
                      <li><a href=\"#\">About</a></li>
                      <li><a href=\"#\">Services</a></li>
                      <li><a href=\"#\">Works</a></li>
                      <li><a href=\"#\">News</a></li>
                      <li><a href=\"#\">Contact</a></li>
                      <li>
                        <a class=\"btn btn-default btn-outline btn-circle\"  data-toggle=\"collapse\" href=\"#nav-collapse1\" aria-expanded=\"false\" aria-controls=\"nav-collapse1\">Categories</a>
                      </li>
                    </ul>
                    <ul class=\"collapse nav navbar-nav nav-collapse\" id=\"nav-collapse1\">
                      <li><a href=\"#\">Web design</a></li>
                      <li><a href=\"#\">Development</a></li>
                      <li><a href=\"#\">Graphic design</a></li>
                      <li><a href=\"#\">Print</a></li>
                      <li><a href=\"#\">Motion</a></li>
                      <li><a href=\"#\">Mobile apps</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav><!-- /.navbar -->
            </div>
          
      </div>
      
      <div class=\"col-md-2\"></div>
    </div>  
        
    <div class=\"row\">
      <div class=\"col-md-4\"></div>
      <div class=\"col-md-2\">
          <!-- Filters -->
          


      </div>

      <div class=\"col-md-2\">
        <!-- Search tags -->
        


      </div> 
      
      <div class=\"col-md-4\"></div>                          
    </div>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                  ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 104
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 105
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "                </div>
            </div>
            <!-- /.row -->






        </div>
        <!-- /.container -->

        ";
        // line 121
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </body>
</html>
";
        
        $__internal_b337b36f7890bd396f5377fc4fe653d046d95368d7e2f891b9ee00af32a874c7->leave($__internal_b337b36f7890bd396f5377fc4fe653d046d95368d7e2f891b9ee00af32a874c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb273c0c8f2baa5bb1d93653825dcfb41c43bfdf3543fd73c3590731d985362c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb273c0c8f2baa5bb1d93653825dcfb41c43bfdf3543fd73c3590731d985362c->enter($__internal_cb273c0c8f2baa5bb1d93653825dcfb41c43bfdf3543fd73c3590731d985362c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        echo "fbapp";
        
        $__internal_cb273c0c8f2baa5bb1d93653825dcfb41c43bfdf3543fd73c3590731d985362c->leave($__internal_cb273c0c8f2baa5bb1d93653825dcfb41c43bfdf3543fd73c3590731d985362c_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44de2d98edf47f6dfd03de554c5c93120f998a392ff9595c5d00c87c5259ba7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44de2d98edf47f6dfd03de554c5c93120f998a392ff9595c5d00c87c5259ba7c->enter($__internal_44de2d98edf47f6dfd03de554c5c93120f998a392ff9595c5d00c87c5259ba7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_44de2d98edf47f6dfd03de554c5c93120f998a392ff9595c5d00c87c5259ba7c->leave($__internal_44de2d98edf47f6dfd03de554c5c93120f998a392ff9595c5d00c87c5259ba7c_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec18cdaaba1c88deaa8ec0cb2d0e9462dd72cab8b5c608936a1f25b5bd3abffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec18cdaaba1c88deaa8ec0cb2d0e9462dd72cab8b5c608936a1f25b5bd3abffa->enter($__internal_ec18cdaaba1c88deaa8ec0cb2d0e9462dd72cab8b5c608936a1f25b5bd3abffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_ec18cdaaba1c88deaa8ec0cb2d0e9462dd72cab8b5c608936a1f25b5bd3abffa->leave($__internal_ec18cdaaba1c88deaa8ec0cb2d0e9462dd72cab8b5c608936a1f25b5bd3abffa_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5e8eb93695f810daed3f11cfa625056dddc4da451c56ad6bac8019e6e79aa9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8eb93695f810daed3f11cfa625056dddc4da451c56ad6bac8019e6e79aa9ef->enter($__internal_5e8eb93695f810daed3f11cfa625056dddc4da451c56ad6bac8019e6e79aa9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_5e8eb93695f810daed3f11cfa625056dddc4da451c56ad6bac8019e6e79aa9ef->leave($__internal_5e8eb93695f810daed3f11cfa625056dddc4da451c56ad6bac8019e6e79aa9ef_prof);

    }

    public function getTemplateName()
    {
        return "base_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 121,  217 => 108,  206 => 14,  194 => 5,  183 => 122,  181 => 121,  167 => 109,  164 => 108,  155 => 105,  152 => 104,  148 => 103,  58 => 16,  55 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/style_front.css') }}\" />
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
    <div class=\"row\">
    
      <div class=\"col-md-2\"> img salon</div>
      
      <div class=\"col-md-8\">
        <div class=\"container-fluid\">
          
            <!-- navbar -->
            <div class=\"container-fluid\">
              <nav class=\"navbar navbar-default\">
                <div class=\"container\">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\">
                      <span class=\"sr-only\">Toggle navigation</span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                      <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                      <li><a href=\"#\">Home</a></li>
                      <li><a href=\"#\">About</a></li>
                      <li><a href=\"#\">Services</a></li>
                      <li><a href=\"#\">Works</a></li>
                      <li><a href=\"#\">News</a></li>
                      <li><a href=\"#\">Contact</a></li>
                      <li>
                        <a class=\"btn btn-default btn-outline btn-circle\"  data-toggle=\"collapse\" href=\"#nav-collapse1\" aria-expanded=\"false\" aria-controls=\"nav-collapse1\">Categories</a>
                      </li>
                    </ul>
                    <ul class=\"collapse nav navbar-nav nav-collapse\" id=\"nav-collapse1\">
                      <li><a href=\"#\">Web design</a></li>
                      <li><a href=\"#\">Development</a></li>
                      <li><a href=\"#\">Graphic design</a></li>
                      <li><a href=\"#\">Print</a></li>
                      <li><a href=\"#\">Motion</a></li>
                      <li><a href=\"#\">Mobile apps</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav><!-- /.navbar -->
            </div>
          
      </div>
      
      <div class=\"col-md-2\"></div>
    </div>  
        
    <div class=\"row\">
      <div class=\"col-md-4\"></div>
      <div class=\"col-md-2\">
          <!-- Filters -->
          


      </div>

      <div class=\"col-md-2\">
        <!-- Search tags -->
        


      </div> 
      
      <div class=\"col-md-4\"></div>                          
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
", "base_front.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/app/Resources/views/base_front.html.twig");
    }
}
