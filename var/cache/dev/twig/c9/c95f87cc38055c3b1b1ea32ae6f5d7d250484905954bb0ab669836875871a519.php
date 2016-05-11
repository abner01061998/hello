<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c73c9bb3f3a0bf92d0a400a648847974bac56fbc8f13b26de501dc1557c53ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22a298aec448a279a36d05ea44e420855ca83408be26488b880aefb58f264137 = $this->env->getExtension("native_profiler");
        $__internal_22a298aec448a279a36d05ea44e420855ca83408be26488b880aefb58f264137->enter($__internal_22a298aec448a279a36d05ea44e420855ca83408be26488b880aefb58f264137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22a298aec448a279a36d05ea44e420855ca83408be26488b880aefb58f264137->leave($__internal_22a298aec448a279a36d05ea44e420855ca83408be26488b880aefb58f264137_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44efbdda8ff2d10f0120cf57fbfadffdd117da38844cefb28deda45cc4a15b27 = $this->env->getExtension("native_profiler");
        $__internal_44efbdda8ff2d10f0120cf57fbfadffdd117da38844cefb28deda45cc4a15b27->enter($__internal_44efbdda8ff2d10f0120cf57fbfadffdd117da38844cefb28deda45cc4a15b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44efbdda8ff2d10f0120cf57fbfadffdd117da38844cefb28deda45cc4a15b27->leave($__internal_44efbdda8ff2d10f0120cf57fbfadffdd117da38844cefb28deda45cc4a15b27_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_927734faaf77a957f0da1b0e0f5cfddeffca100886c42a11365ef7156fb3cda9 = $this->env->getExtension("native_profiler");
        $__internal_927734faaf77a957f0da1b0e0f5cfddeffca100886c42a11365ef7156fb3cda9->enter($__internal_927734faaf77a957f0da1b0e0f5cfddeffca100886c42a11365ef7156fb3cda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_927734faaf77a957f0da1b0e0f5cfddeffca100886c42a11365ef7156fb3cda9->leave($__internal_927734faaf77a957f0da1b0e0f5cfddeffca100886c42a11365ef7156fb3cda9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d498f7e4ad2bcc205a9dd26019b25deef21184fe42680dd9d4fb01b8624a0bf = $this->env->getExtension("native_profiler");
        $__internal_2d498f7e4ad2bcc205a9dd26019b25deef21184fe42680dd9d4fb01b8624a0bf->enter($__internal_2d498f7e4ad2bcc205a9dd26019b25deef21184fe42680dd9d4fb01b8624a0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d498f7e4ad2bcc205a9dd26019b25deef21184fe42680dd9d4fb01b8624a0bf->leave($__internal_2d498f7e4ad2bcc205a9dd26019b25deef21184fe42680dd9d4fb01b8624a0bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
