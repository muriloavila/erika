<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_54eff73853c887f9576640cb6728cda1785cd112633f74290faa6d5c459d1e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e403acfc71e1b4233e98dffdf33e55b809fb277435eded7b82f6d4aa115eaea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e403acfc71e1b4233e98dffdf33e55b809fb277435eded7b82f6d4aa115eaea0->enter($__internal_e403acfc71e1b4233e98dffdf33e55b809fb277435eded7b82f6d4aa115eaea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e403acfc71e1b4233e98dffdf33e55b809fb277435eded7b82f6d4aa115eaea0->leave($__internal_e403acfc71e1b4233e98dffdf33e55b809fb277435eded7b82f6d4aa115eaea0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_553c24031d20abbdac23db47093fe4899b19e3b26f78bce5fb883df591cfdf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553c24031d20abbdac23db47093fe4899b19e3b26f78bce5fb883df591cfdf04->enter($__internal_553c24031d20abbdac23db47093fe4899b19e3b26f78bce5fb883df591cfdf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_553c24031d20abbdac23db47093fe4899b19e3b26f78bce5fb883df591cfdf04->leave($__internal_553c24031d20abbdac23db47093fe4899b19e3b26f78bce5fb883df591cfdf04_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f880ffa32280b64cec05446c5d77218a61d94bf2d4db84611a93f0cf03f4bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f880ffa32280b64cec05446c5d77218a61d94bf2d4db84611a93f0cf03f4bff->enter($__internal_0f880ffa32280b64cec05446c5d77218a61d94bf2d4db84611a93f0cf03f4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_0f880ffa32280b64cec05446c5d77218a61d94bf2d4db84611a93f0cf03f4bff->leave($__internal_0f880ffa32280b64cec05446c5d77218a61d94bf2d4db84611a93f0cf03f4bff_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c63e6a9c9eb8a1de3f3f1871e5613dd1b7aeb6d41d42f061e846d6d8fd47899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c63e6a9c9eb8a1de3f3f1871e5613dd1b7aeb6d41d42f061e846d6d8fd47899->enter($__internal_1c63e6a9c9eb8a1de3f3f1871e5613dd1b7aeb6d41d42f061e846d6d8fd47899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1c63e6a9c9eb8a1de3f3f1871e5613dd1b7aeb6d41d42f061e846d6d8fd47899->leave($__internal_1c63e6a9c9eb8a1de3f3f1871e5613dd1b7aeb6d41d42f061e846d6d8fd47899_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_77f5a7f8081fa4f7b00c0f549f2113edaf2dd84ad2ecfe0544cb1521758536d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f5a7f8081fa4f7b00c0f549f2113edaf2dd84ad2ecfe0544cb1521758536d2->enter($__internal_77f5a7f8081fa4f7b00c0f549f2113edaf2dd84ad2ecfe0544cb1521758536d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_77f5a7f8081fa4f7b00c0f549f2113edaf2dd84ad2ecfe0544cb1521758536d2->leave($__internal_77f5a7f8081fa4f7b00c0f549f2113edaf2dd84ad2ecfe0544cb1521758536d2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
