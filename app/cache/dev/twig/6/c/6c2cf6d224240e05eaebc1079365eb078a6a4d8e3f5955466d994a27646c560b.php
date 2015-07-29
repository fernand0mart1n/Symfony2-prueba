<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6c2cf6d224240e05eaebc1079365eb078a6a4d8e3f5955466d994a27646c560b extends Twig_Template
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
        $__internal_65907603283e344f7e8c102052d83ca064d09ea3eb899844b17d51af82d1fa3e = $this->env->getExtension("native_profiler");
        $__internal_65907603283e344f7e8c102052d83ca064d09ea3eb899844b17d51af82d1fa3e->enter($__internal_65907603283e344f7e8c102052d83ca064d09ea3eb899844b17d51af82d1fa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65907603283e344f7e8c102052d83ca064d09ea3eb899844b17d51af82d1fa3e->leave($__internal_65907603283e344f7e8c102052d83ca064d09ea3eb899844b17d51af82d1fa3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de2047b8b946f9068004a55fde95d142cec72d2cc87ed7a8e48115dce34eac10 = $this->env->getExtension("native_profiler");
        $__internal_de2047b8b946f9068004a55fde95d142cec72d2cc87ed7a8e48115dce34eac10->enter($__internal_de2047b8b946f9068004a55fde95d142cec72d2cc87ed7a8e48115dce34eac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de2047b8b946f9068004a55fde95d142cec72d2cc87ed7a8e48115dce34eac10->leave($__internal_de2047b8b946f9068004a55fde95d142cec72d2cc87ed7a8e48115dce34eac10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b15d926de60a9fda45f9a41e4149b2d6919cf45e5ce166c878fcd2540909962 = $this->env->getExtension("native_profiler");
        $__internal_9b15d926de60a9fda45f9a41e4149b2d6919cf45e5ce166c878fcd2540909962->enter($__internal_9b15d926de60a9fda45f9a41e4149b2d6919cf45e5ce166c878fcd2540909962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b15d926de60a9fda45f9a41e4149b2d6919cf45e5ce166c878fcd2540909962->leave($__internal_9b15d926de60a9fda45f9a41e4149b2d6919cf45e5ce166c878fcd2540909962_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_245b0d7c3f7203003be69b0c643514d914bf3c0679280a69b00451988da7c6aa = $this->env->getExtension("native_profiler");
        $__internal_245b0d7c3f7203003be69b0c643514d914bf3c0679280a69b00451988da7c6aa->enter($__internal_245b0d7c3f7203003be69b0c643514d914bf3c0679280a69b00451988da7c6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_245b0d7c3f7203003be69b0c643514d914bf3c0679280a69b00451988da7c6aa->leave($__internal_245b0d7c3f7203003be69b0c643514d914bf3c0679280a69b00451988da7c6aa_prof);

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
