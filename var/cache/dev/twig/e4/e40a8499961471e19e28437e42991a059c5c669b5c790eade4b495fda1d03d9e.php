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
        $__internal_55af5a376e38be80437ce49f475a5cabdc71ee8d1dc4b80a9ea970e2d8ced4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55af5a376e38be80437ce49f475a5cabdc71ee8d1dc4b80a9ea970e2d8ced4cf->enter($__internal_55af5a376e38be80437ce49f475a5cabdc71ee8d1dc4b80a9ea970e2d8ced4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_front.html.twig"));

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

    <div id=\"wrapper\" class=\"row row_header\">
    
      <div class=\"col-md-3 col-xs-12\">
        <img src=\"/fbappgpe3/web/images/pardon_maman.jpg\" alt=\"Pardon Maman\" class=\"img_logo\">
      </div>

      
      <div class=\"col-md-6 col-xs-12 col_entete\">
        <div class=\"row\">
          
        </div>
        <div class=\"row container-fluid title-page\">
        
          <h2 class='text-center'>
            <img src=\"/fbappgpe3/web/images/tatoo-machine.png\" alt=\"\">
            CONCOURS PHOTO JANVIER 2016 PARDON MAMAN
            <img src=\"/fbappgpe3/web/images/tatoo-machine.png\" alt=\"\">
          </h2>
        </div>
        <div class=\"row\">
          <div class=\"container-fluid \">
            
              <!-- navbar -->
              <hr class=\"hr-warning \" />
                <ol class=\"breadcrumb bread-warning\">
                  <li><a href=\"#\" class='menu-link'>HOME</a></li>
                  <li><a href=\"#\" class=\"menu-link\">RULES</a></li>
                  <li><a href=\"#\" class=\"menu-link\">FINISHED CONTESTS</a></li>
                  <button href=\"#\" class=\"btn btn-contest\">ENTER <i class=\"glyphicon glyphicon-camera\"></i></button>
                </ol>
          </div>
        </div>
        
      </div>
      <div class=\"col-md-3 col-xs-12\"></div>
    </div>  
        
    <div class=\"row row_filter\">
      <div class=\"col-md-4\"></div>
      <div class=\"col-md-2 col-xs-6\">
          <!-- Filters -->
              <div class=\"\">
                <button class=\"btn btn-default dropdown-toggle custom-dropdown-filter\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                  Filter
                  <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                  <li><a href=\"#\" class=\"filter_like\">Likes</a></li>
                  <li><a href=\"#\" class=\"filter_date\">Date</a></li>
                  <li role=\"separator\" class=\"divider\"></li>
                  <li><a href=\"#\" class=\"filter_like\">My phtoto</a></li>
                </ul>
              </div>
      </div>

      <div class=\"col-md-2 col-xs-6\">
        <!-- Search tags -->
        <div id=\"custom-search-input\">
              <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control search-input input-md\" placeholder=\"Add tags\" />
                  <span class=\"input-group-btn\">
                      <button class=\"btn btn-info btn-lg btn-search\" type=\"button\">
                          <i class=\"glyphicon glyphicon-search\"></i>
                      </button>
                  </span>
              </div>
        </div>


      </div> 
      
      <div class=\"col-md-4\"></div>                          
    </div>

    <div class=\"row row-results\">
      <div class=\"col-md-12 col-xs-12 col-results container\">
        <span class=\"hashtag\">#photo</span>
      </div>
    </div>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                  ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 115
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 116
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 120
        echo "                </div>
            </div>
            <!-- /.row -->






        </div>
        <!-- /.container -->

        ";
        // line 132
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/fbappgpe3/web/js/script_front.js\" type=\"text/javascript\" charset=\"utf-8\" async defer></script>
    </body>
</html>
";
        
        $__internal_55af5a376e38be80437ce49f475a5cabdc71ee8d1dc4b80a9ea970e2d8ced4cf->leave($__internal_55af5a376e38be80437ce49f475a5cabdc71ee8d1dc4b80a9ea970e2d8ced4cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb3eae6076d59286bf22306f93fa50d12698b37b353479761ef3eafa93f6fa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3eae6076d59286bf22306f93fa50d12698b37b353479761ef3eafa93f6fa1d->enter($__internal_eb3eae6076d59286bf22306f93fa50d12698b37b353479761ef3eafa93f6fa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        echo "fbapp";
        
        $__internal_eb3eae6076d59286bf22306f93fa50d12698b37b353479761ef3eafa93f6fa1d->leave($__internal_eb3eae6076d59286bf22306f93fa50d12698b37b353479761ef3eafa93f6fa1d_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bdeb1652cc1ac3ad5f8290895b9c800f51e48891b4fcdce56b3daa1daf5051f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdeb1652cc1ac3ad5f8290895b9c800f51e48891b4fcdce56b3daa1daf5051f2->enter($__internal_bdeb1652cc1ac3ad5f8290895b9c800f51e48891b4fcdce56b3daa1daf5051f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_bdeb1652cc1ac3ad5f8290895b9c800f51e48891b4fcdce56b3daa1daf5051f2->leave($__internal_bdeb1652cc1ac3ad5f8290895b9c800f51e48891b4fcdce56b3daa1daf5051f2_prof);

    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b38f1cbb5eae99a58bd9978abb2d574c94c1f78185d725a7f89c1ae5a6a5eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b38f1cbb5eae99a58bd9978abb2d574c94c1f78185d725a7f89c1ae5a6a5eea->enter($__internal_2b38f1cbb5eae99a58bd9978abb2d574c94c1f78185d725a7f89c1ae5a6a5eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_2b38f1cbb5eae99a58bd9978abb2d574c94c1f78185d725a7f89c1ae5a6a5eea->leave($__internal_2b38f1cbb5eae99a58bd9978abb2d574c94c1f78185d725a7f89c1ae5a6a5eea_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22ed93cda2addf66a788ae2813fb1fc5b5f6db7b1a6fefabb80f54e04166fb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ed93cda2addf66a788ae2813fb1fc5b5f6db7b1a6fefabb80f54e04166fb8c->enter($__internal_22ed93cda2addf66a788ae2813fb1fc5b5f6db7b1a6fefabb80f54e04166fb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_22ed93cda2addf66a788ae2813fb1fc5b5f6db7b1a6fefabb80f54e04166fb8c->leave($__internal_22ed93cda2addf66a788ae2813fb1fc5b5f6db7b1a6fefabb80f54e04166fb8c_prof);

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
        return array (  240 => 132,  229 => 119,  218 => 14,  206 => 5,  194 => 133,  192 => 132,  178 => 120,  175 => 119,  166 => 116,  163 => 115,  159 => 114,  58 => 16,  55 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
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

    <div id=\"wrapper\" class=\"row row_header\">
    
      <div class=\"col-md-3 col-xs-12\">
        <img src=\"/fbappgpe3/web/images/pardon_maman.jpg\" alt=\"Pardon Maman\" class=\"img_logo\">
      </div>

      
      <div class=\"col-md-6 col-xs-12 col_entete\">
        <div class=\"row\">
          
        </div>
        <div class=\"row container-fluid title-page\">
        
          <h2 class='text-center'>
            <img src=\"/fbappgpe3/web/images/tatoo-machine.png\" alt=\"\">
            CONCOURS PHOTO JANVIER 2016 PARDON MAMAN
            <img src=\"/fbappgpe3/web/images/tatoo-machine.png\" alt=\"\">
          </h2>
        </div>
        <div class=\"row\">
          <div class=\"container-fluid \">
            
              <!-- navbar -->
              <hr class=\"hr-warning \" />
                <ol class=\"breadcrumb bread-warning\">
                  <li><a href=\"#\" class='menu-link'>HOME</a></li>
                  <li><a href=\"#\" class=\"menu-link\">RULES</a></li>
                  <li><a href=\"#\" class=\"menu-link\">FINISHED CONTESTS</a></li>
                  <button href=\"#\" class=\"btn btn-contest\">ENTER <i class=\"glyphicon glyphicon-camera\"></i></button>
                </ol>
          </div>
        </div>
        
      </div>
      <div class=\"col-md-3 col-xs-12\"></div>
    </div>  
        
    <div class=\"row row_filter\">
      <div class=\"col-md-4\"></div>
      <div class=\"col-md-2 col-xs-6\">
          <!-- Filters -->
              <div class=\"\">
                <button class=\"btn btn-default dropdown-toggle custom-dropdown-filter\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                  Filter
                  <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                  <li><a href=\"#\" class=\"filter_like\">Likes</a></li>
                  <li><a href=\"#\" class=\"filter_date\">Date</a></li>
                  <li role=\"separator\" class=\"divider\"></li>
                  <li><a href=\"#\" class=\"filter_like\">My phtoto</a></li>
                </ul>
              </div>
      </div>

      <div class=\"col-md-2 col-xs-6\">
        <!-- Search tags -->
        <div id=\"custom-search-input\">
              <div class=\"input-group\">
                  <input type=\"text\" class=\"form-control search-input input-md\" placeholder=\"Add tags\" />
                  <span class=\"input-group-btn\">
                      <button class=\"btn btn-info btn-lg btn-search\" type=\"button\">
                          <i class=\"glyphicon glyphicon-search\"></i>
                      </button>
                  </span>
              </div>
        </div>


      </div> 
      
      <div class=\"col-md-4\"></div>                          
    </div>

    <div class=\"row row-results\">
      <div class=\"col-md-12 col-xs-12 col-results container\">
        <span class=\"hashtag\">#photo</span>
      </div>
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
        <script src=\"/fbappgpe3/web/js/script_front.js\" type=\"text/javascript\" charset=\"utf-8\" async defer></script>
    </body>
</html>
", "base_front.html.twig", "/Applications/MAMP/htdocs/fbappgpe3/app/Resources/views/base_front.html.twig");
    }
}
