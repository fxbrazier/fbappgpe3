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
        $__internal_31e336d0c4d00afb274a759a9bebdd95b50e191a4a2fd4b46cfc2f7be89576c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e336d0c4d00afb274a759a9bebdd95b50e191a4a2fd4b46cfc2f7be89576c5->enter($__internal_31e336d0c4d00afb274a759a9bebdd95b50e191a4a2fd4b46cfc2f7be89576c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "picture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e336d0c4d00afb274a759a9bebdd95b50e191a4a2fd4b46cfc2f7be89576c5->leave($__internal_31e336d0c4d00afb274a759a9bebdd95b50e191a4a2fd4b46cfc2f7be89576c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5afb64482008ded9dcccc29836c9a2f95078f1ec0e78c39dd360c3080926b8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afb64482008ded9dcccc29836c9a2f95078f1ec0e78c39dd360c3080926b8a5->enter($__internal_5afb64482008ded9dcccc29836c9a2f95078f1ec0e78c39dd360c3080926b8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "picture/index.html.twig"));

        // line 4
        echo "\t<h2>Pictures lists</h2>
\t\t<ul class=\"grid effect-6\" id=\"grid\">
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/11.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/11.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/11.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/11.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/12.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/13.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/10.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/11.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/14.png"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/1.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/6.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/7.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/8.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/9.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 763
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 772
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/2.jpg"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js\"></script>
\t<script src=\"";
        // line 791
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/imagesloaded.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 792
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/classie.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/AnimOnScroll.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t\tnew AnimOnScroll( document.getElementById( 'grid' ), {
\t\t\tminDuration : 0.4,
\t\t\tmaxDuration : 0.7,
\t\t\tviewportFactor : 0.2
\t\t} );
\t</script>
";
        
        $__internal_5afb64482008ded9dcccc29836c9a2f95078f1ec0e78c39dd360c3080926b8a5->leave($__internal_5afb64482008ded9dcccc29836c9a2f95078f1ec0e78c39dd360c3080926b8a5_prof);

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
        return array (  1102 => 794,  1098 => 793,  1094 => 792,  1090 => 791,  1077 => 781,  1065 => 772,  1053 => 763,  1041 => 754,  1029 => 745,  1017 => 736,  1005 => 727,  993 => 718,  981 => 709,  969 => 700,  957 => 691,  945 => 682,  933 => 673,  921 => 664,  909 => 655,  897 => 646,  885 => 637,  873 => 628,  861 => 619,  849 => 610,  837 => 601,  825 => 592,  813 => 583,  801 => 574,  789 => 565,  777 => 556,  765 => 547,  753 => 538,  741 => 529,  729 => 520,  717 => 511,  705 => 502,  693 => 493,  681 => 484,  669 => 475,  657 => 466,  645 => 457,  633 => 448,  621 => 439,  609 => 430,  597 => 421,  585 => 412,  573 => 403,  561 => 394,  549 => 385,  537 => 376,  525 => 367,  513 => 358,  501 => 349,  489 => 340,  477 => 331,  465 => 322,  453 => 313,  441 => 304,  429 => 295,  417 => 286,  405 => 277,  393 => 268,  381 => 259,  369 => 250,  357 => 241,  345 => 232,  333 => 223,  321 => 214,  309 => 205,  297 => 196,  285 => 187,  273 => 178,  261 => 169,  249 => 160,  237 => 151,  225 => 142,  213 => 133,  201 => 124,  189 => 115,  177 => 106,  165 => 97,  153 => 88,  141 => 79,  129 => 70,  117 => 61,  105 => 52,  93 => 43,  81 => 34,  69 => 25,  57 => 16,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t<ul class=\"grid effect-6\" id=\"grid\">
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/11.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/11.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/11.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/11.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/12.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/13.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/10.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/11.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/14.png') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/4.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/6.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/7.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/8.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/9.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/3.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/5.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/2.jpg') }}\">
\t\t\t\t\t<div class=\"hover-box\">
\t\t\t\t\t\t<h3>Stay Foolish</h3>
\t\t\t\t\t\t<div><i class=\"fa fa-user\"></i> creemson</div>
\t\t\t\t\t\t<div><i class=\"fa fa-heart\"></i>23</div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js\"></script>
\t<script src=\"{{ asset('js/imagesloaded.js') }}\"></script>
\t<script src=\"{{ asset('js/classie.js') }}\"></script>
\t<script src=\"{{ asset('js/modernizr.custom.js') }}\"></script>
\t<script src=\"{{ asset('js/AnimOnScroll.js') }}\"></script>

\t<script>
\t\tnew AnimOnScroll( document.getElementById( 'grid' ), {
\t\t\tminDuration : 0.4,
\t\t\tmaxDuration : 0.7,
\t\t\tviewportFactor : 0.2
\t\t} );
\t</script>
{% endblock %}", "picture/index.html.twig", "C:\\wamp\\www\\fbappgpe3\\app\\Resources\\views\\picture\\index.html.twig");
    }
}
