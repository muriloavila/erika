<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_3a3558278453479c17415b406fd66b0dfae2877dc944fb524e29e6d491d8f9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_1245fe3d34a0daeb97dffa7d1e809c81eff99ec38c6e1397465cd5492209a451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1245fe3d34a0daeb97dffa7d1e809c81eff99ec38c6e1397465cd5492209a451->enter($__internal_1245fe3d34a0daeb97dffa7d1e809c81eff99ec38c6e1397465cd5492209a451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1245fe3d34a0daeb97dffa7d1e809c81eff99ec38c6e1397465cd5492209a451->leave($__internal_1245fe3d34a0daeb97dffa7d1e809c81eff99ec38c6e1397465cd5492209a451_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb09b10053d75e2ec1218ebc509a6a8f75a34b2cfe36b4f131b0988d8d87cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb09b10053d75e2ec1218ebc509a6a8f75a34b2cfe36b4f131b0988d8d87cde->enter($__internal_3bb09b10053d75e2ec1218ebc509a6a8f75a34b2cfe36b4f131b0988d8d87cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->loadTemplate("@WebProfiler/Profiler/header.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 5)->display(array());
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->loadTemplate("@WebProfiler/Profiler/admin.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 38)->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_3bb09b10053d75e2ec1218ebc509a6a8f75a34b2cfe36b4f131b0988d8d87cde->leave($__internal_3bb09b10053d75e2ec1218ebc509a6a8f75a34b2cfe36b4f131b0988d8d87cde_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e1682b9de8cb32033a52c1eea07c1fd5be2619ccc46aef48b6a158ecaf85745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1682b9de8cb32033a52c1eea07c1fd5be2619ccc46aef48b6a158ecaf85745->enter($__internal_5e1682b9de8cb32033a52c1eea07c1fd5be2619ccc46aef48b6a158ecaf85745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "                            ";
        if ((($context["about"] ?? $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif ((        // line 17
($context["about"] ?? $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif ((        // line 22
($context["about"] ?? $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif ((        // line 27
($context["about"] ?? $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
        
        $__internal_5e1682b9de8cb32033a52c1eea07c1fd5be2619ccc46aef48b6a158ecaf85745->leave($__internal_5e1682b9de8cb32033a52c1eea07c1fd5be2619ccc46aef48b6a158ecaf85745_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  114 => 30,  110 => 28,  108 => 27,  102 => 23,  100 => 22,  94 => 18,  92 => 17,  86 => 13,  83 => 12,  77 => 11,  66 => 39,  64 => 38,  60 => 37,  55 => 34,  53 => 11,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    <div id=\"content\">
        {% include '@WebProfiler/Profiler/header.html.twig' only %}

        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        {% block panel %}
                            {% if about == 'purge' %}
                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            {% elseif about == 'upload_error' %}
                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            {% elseif about == 'already_exists' %}
                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            {% elseif about == 'no_token' %}
                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"{{ token }}\" was not found in the database.</em>
                                </p>
                            {% endif %}
                        {% endblock %}
                    </div>
                </div>
                <div id=\"navigation\">
                    {{ render(path('_profiler_search_bar')) }}
                    {% include '@WebProfiler/Profiler/admin.html.twig' with { 'token': '' } only %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
