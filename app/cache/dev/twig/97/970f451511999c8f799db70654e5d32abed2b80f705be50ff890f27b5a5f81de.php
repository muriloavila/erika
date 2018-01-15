<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_9047f997d65a766f93f067f3a6d964a4216d349aae591f55b2c6b317a86d4b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d55cf5173edf2664e405ad42d742cf9ffd830ef4676d2e83eb4dc7d7dd8ee55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55cf5173edf2664e405ad42d742cf9ffd830ef4676d2e83eb4dc7d7dd8ee55a->enter($__internal_d55cf5173edf2664e405ad42d742cf9ffd830ef4676d2e83eb4dc7d7dd8ee55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55cf5173edf2664e405ad42d742cf9ffd830ef4676d2e83eb4dc7d7dd8ee55a->leave($__internal_d55cf5173edf2664e405ad42d742cf9ffd830ef4676d2e83eb4dc7d7dd8ee55a_prof);

    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2638bc167006cdea4eed6051960d7e52abd90690a8fb8f264051fb5bc6a84e37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2638bc167006cdea4eed6051960d7e52abd90690a8fb8f264051fb5bc6a84e37->enter($__internal_2638bc167006cdea4eed6051960d7e52abd90690a8fb8f264051fb5bc6a84e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if (($context["tokens"] ?? $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tokens"] ?? $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 20
                echo "                    <tr>
                        <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["elements"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "token", array()), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "ip", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "method", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "url", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["elements"], "time", array()), "r"), "html", null, true);
                echo "</td>
                        <td>
                        ";
                // line 27
                if (($this->getAttribute($context["elements"], "status_code", array(), "any", true, true) && $this->getAttribute($context["elements"], "status_code", array()))) {
                    // line 28
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["elements"], "status_code", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 30
                    echo "                            unknown
                        ";
                }
                // line 32
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 38
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 42
        echo "
";
        
        $__internal_2638bc167006cdea4eed6051960d7e52abd90690a8fb8f264051fb5bc6a84e37->leave($__internal_2638bc167006cdea4eed6051960d7e52abd90690a8fb8f264051fb5bc6a84e37_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  115 => 38,  110 => 35,  102 => 32,  98 => 30,  92 => 28,  90 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block panel %}
    <h2>Search Results</h2>

    {% if tokens %}
        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Status</th>
                </tr>
            </thead>
            <tbody>
                {% for elements in tokens %}
                    <tr>
                        <td><a href=\"{{ path('_profiler', { 'token': elements.token }) }}\">{{ elements.token }}</a></td>
                        <td>{{ elements.ip }}</td>
                        <td>{{ elements.method }}</td>
                        <td>{{ elements.url }}</td>
                        <td>{{ elements.time|date('r') }}</td>
                        <td>
                        {% if elements.status_code is defined and elements.status_code %}
                            {{ elements.status_code }}
                        {% else %}
                            unknown
                        {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>
            <em>The query returned no result.</em>
        </p>
    {% endif %}

{% endblock %}
", "WebProfilerBundle:Profiler:results.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/results.html.twig");
    }
}
