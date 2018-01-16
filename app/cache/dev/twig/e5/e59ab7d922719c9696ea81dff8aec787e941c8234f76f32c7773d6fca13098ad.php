<?php

/* ErikaBundle:Default:index.html.twig */
class __TwigTemplate_da1be2cfa4193134595b4c437b9cdc5f786993bc5547b6813a78055adecdca3f extends Twig_Template
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
        $__internal_d7d7658cbb84bb4e78a72aa121580ad32f451f96e47dd1fd51cc84dd68781213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7d7658cbb84bb4e78a72aa121580ad32f451f96e47dd1fd51cc84dd68781213->enter($__internal_d7d7658cbb84bb4e78a72aa121580ad32f451f96e47dd1fd51cc84dd68781213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ErikaBundle:Default:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d7d7658cbb84bb4e78a72aa121580ad32f451f96e47dd1fd51cc84dd68781213->leave($__internal_d7d7658cbb84bb4e78a72aa121580ad32f451f96e47dd1fd51cc84dd68781213_prof);

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
        return new Twig_Source("{{ name }}!
", "ErikaBundle:Default:index.html.twig", "/home/desenvolvimento/workspace/erika/src/ErikaBundle/Resources/views/Default/index.html.twig");
    }
}
