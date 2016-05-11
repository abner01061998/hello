<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20b6940264730aa9693ed7bb4a43d247b08f8fbd4f47011791a9f1ba2d407eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_19eb5710c7c487f3446a41f44398d6fedac15090adedc9d04a268e5c177c9c62 = $this->env->getExtension("native_profiler");
        $__internal_19eb5710c7c487f3446a41f44398d6fedac15090adedc9d04a268e5c177c9c62->enter($__internal_19eb5710c7c487f3446a41f44398d6fedac15090adedc9d04a268e5c177c9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19eb5710c7c487f3446a41f44398d6fedac15090adedc9d04a268e5c177c9c62->leave($__internal_19eb5710c7c487f3446a41f44398d6fedac15090adedc9d04a268e5c177c9c62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f344324352c1a4d52b05a2d334bc9fc6d554f0945bb07b1881d5935ae331e73 = $this->env->getExtension("native_profiler");
        $__internal_4f344324352c1a4d52b05a2d334bc9fc6d554f0945bb07b1881d5935ae331e73->enter($__internal_4f344324352c1a4d52b05a2d334bc9fc6d554f0945bb07b1881d5935ae331e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f344324352c1a4d52b05a2d334bc9fc6d554f0945bb07b1881d5935ae331e73->leave($__internal_4f344324352c1a4d52b05a2d334bc9fc6d554f0945bb07b1881d5935ae331e73_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99a35ff9f97919c523c6f142edc0efb7e528406f65b878b010c943261cfac337 = $this->env->getExtension("native_profiler");
        $__internal_99a35ff9f97919c523c6f142edc0efb7e528406f65b878b010c943261cfac337->enter($__internal_99a35ff9f97919c523c6f142edc0efb7e528406f65b878b010c943261cfac337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99a35ff9f97919c523c6f142edc0efb7e528406f65b878b010c943261cfac337->leave($__internal_99a35ff9f97919c523c6f142edc0efb7e528406f65b878b010c943261cfac337_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9245551fc06158b08b4bc4b232e8d8bcee3f13e31ee524903465bc41eb8bbf4 = $this->env->getExtension("native_profiler");
        $__internal_f9245551fc06158b08b4bc4b232e8d8bcee3f13e31ee524903465bc41eb8bbf4->enter($__internal_f9245551fc06158b08b4bc4b232e8d8bcee3f13e31ee524903465bc41eb8bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9245551fc06158b08b4bc4b232e8d8bcee3f13e31ee524903465bc41eb8bbf4->leave($__internal_f9245551fc06158b08b4bc4b232e8d8bcee3f13e31ee524903465bc41eb8bbf4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
