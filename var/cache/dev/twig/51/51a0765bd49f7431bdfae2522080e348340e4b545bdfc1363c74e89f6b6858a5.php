<?php

/* picture/index.html.twig */
class __TwigTemplate_cc5c38c248e178b455e56ec17e009f9221d37a7a686d480b876d9aa6775efa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "picture/index.html.twig", 1);
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
        $__internal_fe9ffb508c21a4407df372934bde6a98e1c3a4e503d92f460394d101c33767c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9ffb508c21a4407df372934bde6a98e1c3a4e503d92f460394d101c33767c5->enter($__internal_fe9ffb508c21a4407df372934bde6a98e1c3a4e503d92f460394d101c33767c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "picture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe9ffb508c21a4407df372934bde6a98e1c3a4e503d92f460394d101c33767c5->leave($__internal_fe9ffb508c21a4407df372934bde6a98e1c3a4e503d92f460394d101c33767c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecb06f1ab97b37811e56650c0a2c66dc8c3316ec31e4e61d04fb059fdf2cbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecb06f1ab97b37811e56650c0a2c66dc8c3316ec31e4e61d04fb059fdf2cbda->enter($__internal_5ecb06f1ab97b37811e56650c0a2c66dc8c3316ec31e4e61d04fb059fdf2cbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "picture/index.html.twig"));

        // line 4
        echo "\t<h2>Pictures lists</h2>
\t
\t<div class=\"container\">
\t\t<div class=\"row grid\">
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/IMG_2.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/IMG.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/satc_collage/IMG_0030-basis.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/sommer13/_DSC9400.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/siehste/_DSC9307.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/kameraunterwegs/IMG_0011.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/Untitled-1.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=blog2012/sacity/speedhaus.jpg\" />
\t        </div>    
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js\"></script>

";
        
        $__internal_5ecb06f1ab97b37811e56650c0a2c66dc8c3316ec31e4e61d04fb059fdf2cbda->leave($__internal_5ecb06f1ab97b37811e56650c0a2c66dc8c3316ec31e4e61d04fb059fdf2cbda_prof);

    }

    public function getTemplateName()
    {
        return "picture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
\t<h2>Pictures lists</h2>
\t
\t<div class=\"container\">
\t\t<div class=\"row grid\">
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/IMG_2.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/IMG.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/satc_collage/IMG_0030-basis.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/sommer13/_DSC9400.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/siehste/_DSC9307.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/kameraunterwegs/IMG_0011.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=2013/Untitled-1.jpg\" />
\t        </div>    
\t        <div class=\"col-xs-4 thumbnail\">
\t            <img src=\"http://shobase.de/api/thumb.php?p=blog2012/sacity/speedhaus.jpg\" />
\t        </div>    
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js\"></script>

{% endblock %}", "picture/index.html.twig", "C:\\wamp\\www\\fbappgpe3\\app\\Resources\\views\\picture\\index.html.twig");
    }
}
