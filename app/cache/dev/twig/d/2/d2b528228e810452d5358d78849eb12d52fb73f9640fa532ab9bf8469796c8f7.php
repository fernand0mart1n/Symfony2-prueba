<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_d2b528228e810452d5358d78849eb12d52fb73f9640fa532ab9bf8469796c8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94c63ec3fd68025ccdde0288f5ccbcdfff3205e3a97fdcd681000cdd5a6af1a5 = $this->env->getExtension("native_profiler");
        $__internal_94c63ec3fd68025ccdde0288f5ccbcdfff3205e3a97fdcd681000cdd5a6af1a5->enter($__internal_94c63ec3fd68025ccdde0288f5ccbcdfff3205e3a97fdcd681000cdd5a6af1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_94c63ec3fd68025ccdde0288f5ccbcdfff3205e3a97fdcd681000cdd5a6af1a5->leave($__internal_94c63ec3fd68025ccdde0288f5ccbcdfff3205e3a97fdcd681000cdd5a6af1a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
