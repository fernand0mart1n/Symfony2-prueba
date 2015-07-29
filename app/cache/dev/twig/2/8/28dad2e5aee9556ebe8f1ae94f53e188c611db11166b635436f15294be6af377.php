<?php

/* AcmeHelloBundle:Hello:index.html.twig */
class __TwigTemplate_28dad2e5aee9556ebe8f1ae94f53e188c611db11166b635436f15294be6af377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AcmeHelloBundle:Hello:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae134589c7a6642930cfd8941f27f03d660726efaeeda81195e3959093deb124 = $this->env->getExtension("native_profiler");
        $__internal_ae134589c7a6642930cfd8941f27f03d660726efaeeda81195e3959093deb124->enter($__internal_ae134589c7a6642930cfd8941f27f03d660726efaeeda81195e3959093deb124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHelloBundle:Hello:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae134589c7a6642930cfd8941f27f03d660726efaeeda81195e3959093deb124->leave($__internal_ae134589c7a6642930cfd8941f27f03d660726efaeeda81195e3959093deb124_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e671f3aec049f175e75a62da7510a0e8428b2da3b204dfaabab781d10ca30f08 = $this->env->getExtension("native_profiler");
        $__internal_e671f3aec049f175e75a62da7510a0e8428b2da3b204dfaabab781d10ca30f08->enter($__internal_e671f3aec049f175e75a62da7510a0e8428b2da3b204dfaabab781d10ca30f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Brand</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"#\">Link</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Action</a></li>
            <li><a href=\"#\">Another action</a></li>
            <li><a href=\"#\">Something else here</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">Separated link</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"#\">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class=\"navbar-form navbar-left\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
    Hello ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e671f3aec049f175e75a62da7510a0e8428b2da3b204dfaabab781d10ca30f08->leave($__internal_e671f3aec049f175e75a62da7510a0e8428b2da3b204dfaabab781d10ca30f08_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Hello:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  40 => 4,  34 => 3,  11 => 1,);
    }
}
