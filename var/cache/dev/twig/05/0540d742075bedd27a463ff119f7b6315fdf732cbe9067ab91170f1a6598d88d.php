<?php

/* AcmeHelloBundle:Default:index.html.twig */
class __TwigTemplate_14903de6a804bc7496dc47b2e1dc72c17601365f504e6c9e6f03916544e0b918 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92b6a87f8712b1dc7a43fb06ea0dfe4875b3ab39d197f36488fea891862a51d9 = $this->env->getExtension("native_profiler");
        $__internal_92b6a87f8712b1dc7a43fb06ea0dfe4875b3ab39d197f36488fea891862a51d9->enter($__internal_92b6a87f8712b1dc7a43fb06ea0dfe4875b3ab39d197f36488fea891862a51d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeHelloBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_92b6a87f8712b1dc7a43fb06ea0dfe4875b3ab39d197f36488fea891862a51d9->leave($__internal_92b6a87f8712b1dc7a43fb06ea0dfe4875b3ab39d197f36488fea891862a51d9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4af4fdbb96a167a9d03b7f64fdb59e40af267e0f7e5109d55d4e028d2c18a32f = $this->env->getExtension("native_profiler");
        $__internal_4af4fdbb96a167a9d03b7f64fdb59e40af267e0f7e5109d55d4e028d2c18a32f->enter($__internal_4af4fdbb96a167a9d03b7f64fdb59e40af267e0f7e5109d55d4e028d2c18a32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
    ,  ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name2"]) ? $context["name2"] : $this->getContext($context, "name2")), "html", null, true);
        echo "!
    ,  ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["Apellido"]) ? $context["Apellido"] : $this->getContext($context, "Apellido")), "html", null, true);
        echo "!
";
        
        $__internal_4af4fdbb96a167a9d03b7f64fdb59e40af267e0f7e5109d55d4e028d2c18a32f->leave($__internal_4af4fdbb96a167a9d03b7f64fdb59e40af267e0f7e5109d55d4e028d2c18a32f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*     Hello {{ name }}!*/
/*     ,  {{ name2 }}!*/
/*     ,  {{ Apellido }}!*/
/* {% endblock %}*/
