<?php

/* ::base.html.twig */
class __TwigTemplate_c92809b837d044a37f3b056371c6c261f61ce26424656d210b1ba16d663f4c51 extends Twig_Template
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
        $__internal_ed5865b8f329f6e40bfd99af910365576e21847986c01a982a6a22d7893edb6a = $this->env->getExtension("native_profiler");
        $__internal_ed5865b8f329f6e40bfd99af910365576e21847986c01a982a6a22d7893edb6a->enter($__internal_ed5865b8f329f6e40bfd99af910365576e21847986c01a982a6a22d7893edb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ed5865b8f329f6e40bfd99af910365576e21847986c01a982a6a22d7893edb6a->leave($__internal_ed5865b8f329f6e40bfd99af910365576e21847986c01a982a6a22d7893edb6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea4657258bd83ebf8b24640b7f56526807e572f69d79813dd6b64ad19f6eedf5 = $this->env->getExtension("native_profiler");
        $__internal_ea4657258bd83ebf8b24640b7f56526807e572f69d79813dd6b64ad19f6eedf5->enter($__internal_ea4657258bd83ebf8b24640b7f56526807e572f69d79813dd6b64ad19f6eedf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ea4657258bd83ebf8b24640b7f56526807e572f69d79813dd6b64ad19f6eedf5->leave($__internal_ea4657258bd83ebf8b24640b7f56526807e572f69d79813dd6b64ad19f6eedf5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_564516f173efc7a63eea8b6996f385241ca3e2966f8db64768c35ff4cb013e44 = $this->env->getExtension("native_profiler");
        $__internal_564516f173efc7a63eea8b6996f385241ca3e2966f8db64768c35ff4cb013e44->enter($__internal_564516f173efc7a63eea8b6996f385241ca3e2966f8db64768c35ff4cb013e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_564516f173efc7a63eea8b6996f385241ca3e2966f8db64768c35ff4cb013e44->leave($__internal_564516f173efc7a63eea8b6996f385241ca3e2966f8db64768c35ff4cb013e44_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff8a5727d34c33b0abe746ae732a067065530b066aa2fef9099b2fc6056472bc = $this->env->getExtension("native_profiler");
        $__internal_ff8a5727d34c33b0abe746ae732a067065530b066aa2fef9099b2fc6056472bc->enter($__internal_ff8a5727d34c33b0abe746ae732a067065530b066aa2fef9099b2fc6056472bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ff8a5727d34c33b0abe746ae732a067065530b066aa2fef9099b2fc6056472bc->leave($__internal_ff8a5727d34c33b0abe746ae732a067065530b066aa2fef9099b2fc6056472bc_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eeb6204a0f9160a8a6158b27009a4d0ac78d0fdb3ea7dc610bb35568c955116 = $this->env->getExtension("native_profiler");
        $__internal_5eeb6204a0f9160a8a6158b27009a4d0ac78d0fdb3ea7dc610bb35568c955116->enter($__internal_5eeb6204a0f9160a8a6158b27009a4d0ac78d0fdb3ea7dc610bb35568c955116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    
    ";
        
        $__internal_5eeb6204a0f9160a8a6158b27009a4d0ac78d0fdb3ea7dc610bb35568c955116->leave($__internal_5eeb6204a0f9160a8a6158b27009a4d0ac78d0fdb3ea7dc610bb35568c955116_prof);

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
