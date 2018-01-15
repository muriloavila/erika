<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_32a7f63944b78baa17a55061469467ac69077478eb8d2487f0ca3418dd6437a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f92e653723301f6d2518bcf2251310309099089cde7c5ffe733ff9ae0c64a055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92e653723301f6d2518bcf2251310309099089cde7c5ffe733ff9ae0c64a055->enter($__internal_f92e653723301f6d2518bcf2251310309099089cde7c5ffe733ff9ae0c64a055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f92e653723301f6d2518bcf2251310309099089cde7c5ffe733ff9ae0c64a055->leave($__internal_f92e653723301f6d2518bcf2251310309099089cde7c5ffe733ff9ae0c64a055_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29281073636a996df7f824d4353431d60f96e382ee45ac572816fb0addc687c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29281073636a996df7f824d4353431d60f96e382ee45ac572816fb0addc687c1->enter($__internal_29281073636a996df7f824d4353431d60f96e382ee45ac572816fb0addc687c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29281073636a996df7f824d4353431d60f96e382ee45ac572816fb0addc687c1->leave($__internal_29281073636a996df7f824d4353431d60f96e382ee45ac572816fb0addc687c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_820c17d1c95883b40a3b526cca5814b309a7799e9b62a4829de29c451ad6501a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820c17d1c95883b40a3b526cca5814b309a7799e9b62a4829de29c451ad6501a->enter($__internal_820c17d1c95883b40a3b526cca5814b309a7799e9b62a4829de29c451ad6501a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_820c17d1c95883b40a3b526cca5814b309a7799e9b62a4829de29c451ad6501a->leave($__internal_820c17d1c95883b40a3b526cca5814b309a7799e9b62a4829de29c451ad6501a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_774c83bb30b0e636f97d1a2167aaa9b25d6defa80d07f500e9f581503813c110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774c83bb30b0e636f97d1a2167aaa9b25d6defa80d07f500e9f581503813c110->enter($__internal_774c83bb30b0e636f97d1a2167aaa9b25d6defa80d07f500e9f581503813c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_774c83bb30b0e636f97d1a2167aaa9b25d6defa80d07f500e9f581503813c110->leave($__internal_774c83bb30b0e636f97d1a2167aaa9b25d6defa80d07f500e9f581503813c110_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
