<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b0329cc3c845900bf0a75b9c8a5a15d4786eaa790874fd1ffafe4435caac09f4 extends Twig_Template
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
        $__internal_b21dedc490aef8fbeef09904765bbb4301c19239262fa1aa0c28dac4d70698e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21dedc490aef8fbeef09904765bbb4301c19239262fa1aa0c28dac4d70698e3->enter($__internal_b21dedc490aef8fbeef09904765bbb4301c19239262fa1aa0c28dac4d70698e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21dedc490aef8fbeef09904765bbb4301c19239262fa1aa0c28dac4d70698e3->leave($__internal_b21dedc490aef8fbeef09904765bbb4301c19239262fa1aa0c28dac4d70698e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a2a7292b815209f6bbfe7e88056571f7a05c84b898654f5ef56366c6260d52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2a7292b815209f6bbfe7e88056571f7a05c84b898654f5ef56366c6260d52d->enter($__internal_0a2a7292b815209f6bbfe7e88056571f7a05c84b898654f5ef56366c6260d52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a2a7292b815209f6bbfe7e88056571f7a05c84b898654f5ef56366c6260d52d->leave($__internal_0a2a7292b815209f6bbfe7e88056571f7a05c84b898654f5ef56366c6260d52d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a757e700507a93ade1e2c90812ef4e24fff3da114443b66e52320345caeade1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a757e700507a93ade1e2c90812ef4e24fff3da114443b66e52320345caeade1->enter($__internal_3a757e700507a93ade1e2c90812ef4e24fff3da114443b66e52320345caeade1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a757e700507a93ade1e2c90812ef4e24fff3da114443b66e52320345caeade1->leave($__internal_3a757e700507a93ade1e2c90812ef4e24fff3da114443b66e52320345caeade1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bad17901130cc785d04e6d471826f4797c4d56e7534d150ea1d271dd7344201e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad17901130cc785d04e6d471826f4797c4d56e7534d150ea1d271dd7344201e->enter($__internal_bad17901130cc785d04e6d471826f4797c4d56e7534d150ea1d271dd7344201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bad17901130cc785d04e6d471826f4797c4d56e7534d150ea1d271dd7344201e->leave($__internal_bad17901130cc785d04e6d471826f4797c4d56e7534d150ea1d271dd7344201e_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/desenvolvimento/workspace/erika/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
