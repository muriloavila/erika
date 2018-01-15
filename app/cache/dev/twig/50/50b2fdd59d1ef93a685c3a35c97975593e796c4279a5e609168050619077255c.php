<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_05e38a15436af5997a6683bcc50ff599c3ac5b6c505ed9e4a41ee69cf7206398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_62be1f235f219a743ff13df5ae072d5ca23a16d654760b9a480b509e051eb362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62be1f235f219a743ff13df5ae072d5ca23a16d654760b9a480b509e051eb362->enter($__internal_62be1f235f219a743ff13df5ae072d5ca23a16d654760b9a480b509e051eb362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62be1f235f219a743ff13df5ae072d5ca23a16d654760b9a480b509e051eb362->leave($__internal_62be1f235f219a743ff13df5ae072d5ca23a16d654760b9a480b509e051eb362_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1234213a48f1e74c599b43fcc5ca14928bf209d2099bd2c61135082e0d2564c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1234213a48f1e74c599b43fcc5ca14928bf209d2099bd2c61135082e0d2564c->enter($__internal_d1234213a48f1e74c599b43fcc5ca14928bf209d2099bd2c61135082e0d2564c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d1234213a48f1e74c599b43fcc5ca14928bf209d2099bd2c61135082e0d2564c->leave($__internal_d1234213a48f1e74c599b43fcc5ca14928bf209d2099bd2c61135082e0d2564c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa018c3754955b5b7c4e0cf96b26763582309725de79cb2d359fd599b8876d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa018c3754955b5b7c4e0cf96b26763582309725de79cb2d359fd599b8876d61->enter($__internal_fa018c3754955b5b7c4e0cf96b26763582309725de79cb2d359fd599b8876d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fa018c3754955b5b7c4e0cf96b26763582309725de79cb2d359fd599b8876d61->leave($__internal_fa018c3754955b5b7c4e0cf96b26763582309725de79cb2d359fd599b8876d61_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
