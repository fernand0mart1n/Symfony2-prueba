<?php

/* default/index.html.twig */
class __TwigTemplate_1a9b4a07374e883dfd4d9b792c8a6554afaf1743e7b0a77a8579db21686c2ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_7848c4104b299207a651673066bec0956929ce930c8cbb0784a03fa7d2049edd = $this->env->getExtension("native_profiler");
        $__internal_7848c4104b299207a651673066bec0956929ce930c8cbb0784a03fa7d2049edd->enter($__internal_7848c4104b299207a651673066bec0956929ce930c8cbb0784a03fa7d2049edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7848c4104b299207a651673066bec0956929ce930c8cbb0784a03fa7d2049edd->leave($__internal_7848c4104b299207a651673066bec0956929ce930c8cbb0784a03fa7d2049edd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf1ec4435cdb6bad4d141041e9274d21ff4499a7f6cf402d45882954194932d = $this->env->getExtension("native_profiler");
        $__internal_8cf1ec4435cdb6bad4d141041e9274d21ff4499a7f6cf402d45882954194932d->enter($__internal_8cf1ec4435cdb6bad4d141041e9274d21ff4499a7f6cf402d45882954194932d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_8cf1ec4435cdb6bad4d141041e9274d21ff4499a7f6cf402d45882954194932d->leave($__internal_8cf1ec4435cdb6bad4d141041e9274d21ff4499a7f6cf402d45882954194932d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
