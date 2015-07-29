<?php

/* ::base.html.twig */
class __TwigTemplate_deb9e1923d17f219b244ea5ef21c995484e4855164ad66bf1379780c41c65544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cacf096e97b34e97cc6840242ac0f18dea21eebdf437058a1d7ce58cc3ed0f3 = $this->env->getExtension("native_profiler");
        $__internal_6cacf096e97b34e97cc6840242ac0f18dea21eebdf437058a1d7ce58cc3ed0f3->enter($__internal_6cacf096e97b34e97cc6840242ac0f18dea21eebdf437058a1d7ce58cc3ed0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
    ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
</html>

";
        
        $__internal_6cacf096e97b34e97cc6840242ac0f18dea21eebdf437058a1d7ce58cc3ed0f3->leave($__internal_6cacf096e97b34e97cc6840242ac0f18dea21eebdf437058a1d7ce58cc3ed0f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_28fa7926671de22b742d8a3591675297ed9f7b54735eed97488061be68e61982 = $this->env->getExtension("native_profiler");
        $__internal_28fa7926671de22b742d8a3591675297ed9f7b54735eed97488061be68e61982->enter($__internal_28fa7926671de22b742d8a3591675297ed9f7b54735eed97488061be68e61982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28fa7926671de22b742d8a3591675297ed9f7b54735eed97488061be68e61982->leave($__internal_28fa7926671de22b742d8a3591675297ed9f7b54735eed97488061be68e61982_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_930524cd9631a4b6e318419016f777e21a8e83529ad6ad72625c2d9ff174c22e = $this->env->getExtension("native_profiler");
        $__internal_930524cd9631a4b6e318419016f777e21a8e83529ad6ad72625c2d9ff174c22e->enter($__internal_930524cd9631a4b6e318419016f777e21a8e83529ad6ad72625c2d9ff174c22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css.map"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_930524cd9631a4b6e318419016f777e21a8e83529ad6ad72625c2d9ff174c22e->leave($__internal_930524cd9631a4b6e318419016f777e21a8e83529ad6ad72625c2d9ff174c22e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcc95e711553cff16b866292de9473c8b486f82e03978ffc00208cf916c64a52 = $this->env->getExtension("native_profiler");
        $__internal_bcc95e711553cff16b866292de9473c8b486f82e03978ffc00208cf916c64a52->enter($__internal_bcc95e711553cff16b866292de9473c8b486f82e03978ffc00208cf916c64a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/npm.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
    ";
        
        $__internal_bcc95e711553cff16b866292de9473c8b486f82e03978ffc00208cf916c64a52->leave($__internal_bcc95e711553cff16b866292de9473c8b486f82e03978ffc00208cf916c64a52_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30d9d603a17a7303ffa98a556e3b92c8b6ce9b404bbf164da557d7f79031ac6 = $this->env->getExtension("native_profiler");
        $__internal_e30d9d603a17a7303ffa98a556e3b92c8b6ce9b404bbf164da557d7f79031ac6->enter($__internal_e30d9d603a17a7303ffa98a556e3b92c8b6ce9b404bbf164da557d7f79031ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    ";
        
        $__internal_e30d9d603a17a7303ffa98a556e3b92c8b6ce9b404bbf164da557d7f79031ac6->leave($__internal_e30d9d603a17a7303ffa98a556e3b92c8b6ce9b404bbf164da557d7f79031ac6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  122 => 20,  112 => 15,  108 => 14,  103 => 13,  97 => 12,  88 => 10,  84 => 9,  80 => 8,  75 => 7,  69 => 6,  57 => 5,  47 => 23,  45 => 20,  41 => 18,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
