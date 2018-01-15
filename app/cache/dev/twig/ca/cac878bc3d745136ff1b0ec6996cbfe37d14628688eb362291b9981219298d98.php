<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_11c12d930cf3de8e48a0f25b96198daefc36b93c9ddf25c422328e2d92ef37b2 extends Twig_Template
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
        $__internal_7a9acae9c8dfde16e0d2fc9715459067a52ce2ac94a3e0898c152f65c91c0134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9acae9c8dfde16e0d2fc9715459067a52ce2ac94a3e0898c152f65c91c0134->enter($__internal_7a9acae9c8dfde16e0d2fc9715459067a52ce2ac94a3e0898c152f65c91c0134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a9acae9c8dfde16e0d2fc9715459067a52ce2ac94a3e0898c152f65c91c0134->leave($__internal_7a9acae9c8dfde16e0d2fc9715459067a52ce2ac94a3e0898c152f65c91c0134_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
