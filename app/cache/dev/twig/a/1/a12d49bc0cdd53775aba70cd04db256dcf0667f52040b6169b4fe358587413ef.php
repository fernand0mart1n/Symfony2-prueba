<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a12d49bc0cdd53775aba70cd04db256dcf0667f52040b6169b4fe358587413ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14dc129c0d3ee16774aa2e3c576134074b12814f1a1df1f910a7123928509c8e = $this->env->getExtension("native_profiler");
        $__internal_14dc129c0d3ee16774aa2e3c576134074b12814f1a1df1f910a7123928509c8e->enter($__internal_14dc129c0d3ee16774aa2e3c576134074b12814f1a1df1f910a7123928509c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14dc129c0d3ee16774aa2e3c576134074b12814f1a1df1f910a7123928509c8e->leave($__internal_14dc129c0d3ee16774aa2e3c576134074b12814f1a1df1f910a7123928509c8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc8ee2f5af115ba7413c2f878d9d8a6b5f9ff88c680857a5d40e999cf2d051ad = $this->env->getExtension("native_profiler");
        $__internal_cc8ee2f5af115ba7413c2f878d9d8a6b5f9ff88c680857a5d40e999cf2d051ad->enter($__internal_cc8ee2f5af115ba7413c2f878d9d8a6b5f9ff88c680857a5d40e999cf2d051ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc8ee2f5af115ba7413c2f878d9d8a6b5f9ff88c680857a5d40e999cf2d051ad->leave($__internal_cc8ee2f5af115ba7413c2f878d9d8a6b5f9ff88c680857a5d40e999cf2d051ad_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd1d63311cde306bc44d7515054f63bf29bfd39a99240c41b3a1c93edceb8a9d = $this->env->getExtension("native_profiler");
        $__internal_fd1d63311cde306bc44d7515054f63bf29bfd39a99240c41b3a1c93edceb8a9d->enter($__internal_fd1d63311cde306bc44d7515054f63bf29bfd39a99240c41b3a1c93edceb8a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd1d63311cde306bc44d7515054f63bf29bfd39a99240c41b3a1c93edceb8a9d->leave($__internal_fd1d63311cde306bc44d7515054f63bf29bfd39a99240c41b3a1c93edceb8a9d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_caeff970686cc554ac19696595e11db96abb331bdff5b459193bd19b3a1692fc = $this->env->getExtension("native_profiler");
        $__internal_caeff970686cc554ac19696595e11db96abb331bdff5b459193bd19b3a1692fc->enter($__internal_caeff970686cc554ac19696595e11db96abb331bdff5b459193bd19b3a1692fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_caeff970686cc554ac19696595e11db96abb331bdff5b459193bd19b3a1692fc->leave($__internal_caeff970686cc554ac19696595e11db96abb331bdff5b459193bd19b3a1692fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
