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
        $__internal_6d2903182ee53d1cb5171ddf4ada28af606762e6a852ad280788074d7b5bac40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2903182ee53d1cb5171ddf4ada28af606762e6a852ad280788074d7b5bac40->enter($__internal_6d2903182ee53d1cb5171ddf4ada28af606762e6a852ad280788074d7b5bac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base_front.html.twig"));

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
    
      <div class=\"col-md-2 col-xs-12\">
        <img src=\"/fbappgpe3/web/images/pardon_maman.jpg\" alt=\"Pardon Maman\" class=\"img_logo\">
      </div>

      
      <div class=\"col-md-8 col-xs-12 entete\">
        <div class=\"row\">
          
        </div>
        <div class=\"row container mx-auto title-page\">
          <h2 class='text-center'>Concours photo Pardon Maman</h2>
        </div>
        <div class=\"row\">
          <div class=\"container text-center\">
            
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
      <div class=\"col-md-2 col-xs-12\"></div>
    </div>  
        
    <div class=\"row\">
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

    <div class=\"row\">
      <div class=\"col-md-2\">
        
      </div>
      <div class=\"col-md-8 col-xs-12 results container\">
        <span class=\"hashtag\">#photo</span>
      </div>
      <div class=\"col-md-2\">
        
      </div>
    </div>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-12\">
                  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 116
            echo "                    <div class=\"flash-notice alert alert-success\">
                      ";
            // line 117
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "                </div>
            </div>
            <!-- /.row -->






        </div>
        <!-- /.container -->

        ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 134
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/fbappgpe3/web/js/script_front.js\" type=\"text/javascript\" charset=\"utf-8\" async defer></script>
    </body>
</html>
";
        
        $__internal_6d2903182ee53d1cb5171ddf4ada28af606762e6a852ad280788074d7b5bac40->leave($__internal_6d2903182ee53d1cb5171ddf4ada28af606762e6a852ad280788074d7b5bac40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a08b0e4f6f5352fff896b8379979e1d9d9eb6d5884ae84113a523e58cba7210a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08b0e4f6f5352fff896b8379979e1d9d9eb6d5884ae84113a523e58cba7210a->enter($__internal_a08b0e4f6f5352fff896b8379979e1d9d9eb6d5884ae84113a523e58cba7210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        echo "fbapp";
        
        $__internal_a08b0e4f6f5352fff896b8379979e1d9d9eb6d5884ae84113a523e58cba7210a->leave($__internal_a08b0e4f6f5352fff896b8379979e1d9d9eb6d5884ae84113a523e58cba7210a_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67ce352bfca806ad74af9626ee049fce270d99e5ef748d0d0a527b17175b4f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ce352bfca806ad74af9626ee049fce270d99e5ef748d0d0a527b17175b4f17->enter($__internal_67ce352bfca806ad74af9626ee049fce270d99e5ef748d0d0a527b17175b4f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_67ce352bfca806ad74af9626ee049fce270d99e5ef748d0d0a527b17175b4f17->leave($__internal_67ce352bfca806ad74af9626ee049fce270d99e5ef748d0d0a527b17175b4f17_prof);

    }

    // line 120
    public function block_body($context, array $blocks = array())
    {
        $__internal_b15f86b5fa33affc6072ec35415a11522359694d0fd35ace0bfd3439f630d75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15f86b5fa33affc6072ec35415a11522359694d0fd35ace0bfd3439f630d75b->enter($__internal_b15f86b5fa33affc6072ec35415a11522359694d0fd35ace0bfd3439f630d75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_b15f86b5fa33affc6072ec35415a11522359694d0fd35ace0bfd3439f630d75b->leave($__internal_b15f86b5fa33affc6072ec35415a11522359694d0fd35ace0bfd3439f630d75b_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1277d8268c57eec656c7783f91d6ef05d040509c724d74823a8d0ea10c86d31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1277d8268c57eec656c7783f91d6ef05d040509c724d74823a8d0ea10c86d31d->enter($__internal_1277d8268c57eec656c7783f91d6ef05d040509c724d74823a8d0ea10c86d31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_front.html.twig"));

        
        $__internal_1277d8268c57eec656c7783f91d6ef05d040509c724d74823a8d0ea10c86d31d->leave($__internal_1277d8268c57eec656c7783f91d6ef05d040509c724d74823a8d0ea10c86d31d_prof);

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
        return array (  241 => 133,  230 => 120,  219 => 14,  207 => 5,  195 => 134,  193 => 133,  179 => 121,  176 => 120,  167 => 117,  164 => 116,  160 => 115,  58 => 16,  55 => 15,  53 => 14,  49 => 13,  45 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
    
      <div class=\"col-md-2 col-xs-12\">
        <img src=\"/fbappgpe3/web/images/pardon_maman.jpg\" alt=\"Pardon Maman\" class=\"img_logo\">
      </div>

      
      <div class=\"col-md-8 col-xs-12 entete\">
        <div class=\"row\">
          
        </div>
        <div class=\"row container mx-auto title-page\">
          <h2 class='text-center'>Concours photo Pardon Maman</h2>
        </div>
        <div class=\"row\">
          <div class=\"container text-center\">
            
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
      <div class=\"col-md-2 col-xs-12\"></div>
    </div>  
        
    <div class=\"row\">
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

    <div class=\"row\">
      <div class=\"col-md-2\">
        
      </div>
      <div class=\"col-md-8 col-xs-12 results container\">
        <span class=\"hashtag\">#photo</span>
      </div>
      <div class=\"col-md-2\">
        
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
