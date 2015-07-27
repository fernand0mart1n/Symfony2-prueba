<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_71b2b80f83e10177feea7c5df15e7a4405344581265b8f8db593b5047261a240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b328aee042b5c7050cbccd1335b5b411e8d521dcb2da4b4f680a65f58f7a4694 = $this->env->getExtension("native_profiler");
        $__internal_b328aee042b5c7050cbccd1335b5b411e8d521dcb2da4b4f680a65f58f7a4694->enter($__internal_b328aee042b5c7050cbccd1335b5b411e8d521dcb2da4b4f680a65f58f7a4694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b328aee042b5c7050cbccd1335b5b411e8d521dcb2da4b4f680a65f58f7a4694->leave($__internal_b328aee042b5c7050cbccd1335b5b411e8d521dcb2da4b4f680a65f58f7a4694_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc0a97c8605d6ee41bf6e0c02c592a69630532babd288fbe570059497d9a878 = $this->env->getExtension("native_profiler");
        $__internal_0dc0a97c8605d6ee41bf6e0c02c592a69630532babd288fbe570059497d9a878->enter($__internal_0dc0a97c8605d6ee41bf6e0c02c592a69630532babd288fbe570059497d9a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "@WebProfiler/Profiler/info.html.twig", 5)->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "@WebProfiler/Profiler/info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0dc0a97c8605d6ee41bf6e0c02c592a69630532babd288fbe570059497d9a878->leave($__internal_0dc0a97c8605d6ee41bf6e0c02c592a69630532babd288fbe570059497d9a878_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62c33eeefd52c6bc9964454c85a6659026e2ebd32ef0902a527f401b9ce23717 = $this->env->getExtension("native_profiler");
        $__internal_62c33eeefd52c6bc9964454c85a6659026e2ebd32ef0902a527f401b9ce23717->enter($__internal_62c33eeefd52c6bc9964454c85a6659026e2ebd32ef0902a527f401b9ce23717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
(isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_62c33eeefd52c6bc9964454c85a6659026e2ebd32ef0902a527f401b9ce23717->leave($__internal_62c33eeefd52c6bc9964454c85a6659026e2ebd32ef0902a527f401b9ce23717_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
