<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_44156aea02fdf44251aee0e795379cdfbd791001bf3472e3af1d3ae293b99f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2c1ff13b856403e71b5cce458daf18aed252e6de5d3229bcbf29d2c8a35e33a = $this->env->getExtension("native_profiler");
        $__internal_a2c1ff13b856403e71b5cce458daf18aed252e6de5d3229bcbf29d2c8a35e33a->enter($__internal_a2c1ff13b856403e71b5cce458daf18aed252e6de5d3229bcbf29d2c8a35e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c1ff13b856403e71b5cce458daf18aed252e6de5d3229bcbf29d2c8a35e33a->leave($__internal_a2c1ff13b856403e71b5cce458daf18aed252e6de5d3229bcbf29d2c8a35e33a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5df3f00c372ad9e49dfb99f5e1f5018e96a9ab4ca40e9e55f178c613c0010a41 = $this->env->getExtension("native_profiler");
        $__internal_5df3f00c372ad9e49dfb99f5e1f5018e96a9ab4ca40e9e55f178c613c0010a41->enter($__internal_5df3f00c372ad9e49dfb99f5e1f5018e96a9ab4ca40e9e55f178c613c0010a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5df3f00c372ad9e49dfb99f5e1f5018e96a9ab4ca40e9e55f178c613c0010a41->leave($__internal_5df3f00c372ad9e49dfb99f5e1f5018e96a9ab4ca40e9e55f178c613c0010a41_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed34f9ef39594c93030393ad4b451d608269fad081e2c992171e2e26adfd3bee = $this->env->getExtension("native_profiler");
        $__internal_ed34f9ef39594c93030393ad4b451d608269fad081e2c992171e2e26adfd3bee->enter($__internal_ed34f9ef39594c93030393ad4b451d608269fad081e2c992171e2e26adfd3bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ed34f9ef39594c93030393ad4b451d608269fad081e2c992171e2e26adfd3bee->leave($__internal_ed34f9ef39594c93030393ad4b451d608269fad081e2c992171e2e26adfd3bee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fee5a2b9bff229e3252da20fa5ca6871dd30b4dd4c231fd900d78f244e63675c = $this->env->getExtension("native_profiler");
        $__internal_fee5a2b9bff229e3252da20fa5ca6871dd30b4dd4c231fd900d78f244e63675c->enter($__internal_fee5a2b9bff229e3252da20fa5ca6871dd30b4dd4c231fd900d78f244e63675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fee5a2b9bff229e3252da20fa5ca6871dd30b4dd4c231fd900d78f244e63675c->leave($__internal_fee5a2b9bff229e3252da20fa5ca6871dd30b4dd4c231fd900d78f244e63675c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
