<?php

/* ErikaBundle:Default:index.html.twig */
class __TwigTemplate_8d17fb73c9619fead520ed58f87d1be3ba2f7c10818f72ec196afbfdabbb6d8d extends Twig_Template
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
        $__internal_b664e950ec7fc2055974a1ca1f99694c34c882bfaed5511fd1c95ece3a703fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b664e950ec7fc2055974a1ca1f99694c34c882bfaed5511fd1c95ece3a703fde->enter($__internal_b664e950ec7fc2055974a1ca1f99694c34c882bfaed5511fd1c95ece3a703fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ErikaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b664e950ec7fc2055974a1ca1f99694c34c882bfaed5511fd1c95ece3a703fde->leave($__internal_b664e950ec7fc2055974a1ca1f99694c34c882bfaed5511fd1c95ece3a703fde_prof);

    }

    public function getTemplateName()
    {
        return "ErikaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ name }}!
", "ErikaBundle:Default:index.html.twig", "/home/murilo/workspace/still-hamlet-13528/src/ErikaBundle/Resources/views/Default/index.html.twig");
    }
}
