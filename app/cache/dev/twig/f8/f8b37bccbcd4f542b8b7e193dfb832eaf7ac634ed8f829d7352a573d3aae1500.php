<?php

/* base.html.twig */
class __TwigTemplate_e725d400335b5ca5feaebd5501dbed2da2613534abd9f2566baa2959583d7361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba3609254cbd2a2f9e95c8f8b070691eeabd1e9b2d4e44f747cb1db359e10044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3609254cbd2a2f9e95c8f8b070691eeabd1e9b2d4e44f747cb1db359e10044->enter($__internal_ba3609254cbd2a2f9e95c8f8b070691eeabd1e9b2d4e44f747cb1db359e10044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ba3609254cbd2a2f9e95c8f8b070691eeabd1e9b2d4e44f747cb1db359e10044->leave($__internal_ba3609254cbd2a2f9e95c8f8b070691eeabd1e9b2d4e44f747cb1db359e10044_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6bf711d045671c26265dddb7652f7b47d871a8caa67914ae48d5e4670501c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6bf711d045671c26265dddb7652f7b47d871a8caa67914ae48d5e4670501c28->enter($__internal_a6bf711d045671c26265dddb7652f7b47d871a8caa67914ae48d5e4670501c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a6bf711d045671c26265dddb7652f7b47d871a8caa67914ae48d5e4670501c28->leave($__internal_a6bf711d045671c26265dddb7652f7b47d871a8caa67914ae48d5e4670501c28_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1e2ac777b79fa73d26b939432c0429a316ad86edda344811c58757095bc63ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e2ac777b79fa73d26b939432c0429a316ad86edda344811c58757095bc63ad->enter($__internal_a1e2ac777b79fa73d26b939432c0429a316ad86edda344811c58757095bc63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1e2ac777b79fa73d26b939432c0429a316ad86edda344811c58757095bc63ad->leave($__internal_a1e2ac777b79fa73d26b939432c0429a316ad86edda344811c58757095bc63ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d48febbd0cfa5a4736be702ef4b119e5b8bd9609358f16c79d408e7623f87a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d48febbd0cfa5a4736be702ef4b119e5b8bd9609358f16c79d408e7623f87a8->enter($__internal_4d48febbd0cfa5a4736be702ef4b119e5b8bd9609358f16c79d408e7623f87a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d48febbd0cfa5a4736be702ef4b119e5b8bd9609358f16c79d408e7623f87a8->leave($__internal_4d48febbd0cfa5a4736be702ef4b119e5b8bd9609358f16c79d408e7623f87a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4887b26fe3c9e9a3c8dad52f78164ac07daa0e840c5a6776bbb3e149c86bba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4887b26fe3c9e9a3c8dad52f78164ac07daa0e840c5a6776bbb3e149c86bba8->enter($__internal_f4887b26fe3c9e9a3c8dad52f78164ac07daa0e840c5a6776bbb3e149c86bba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4887b26fe3c9e9a3c8dad52f78164ac07daa0e840c5a6776bbb3e149c86bba8->leave($__internal_f4887b26fe3c9e9a3c8dad52f78164ac07daa0e840c5a6776bbb3e149c86bba8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/murilo/workspace/still-hamlet-13528/app/Resources/views/base.html.twig");
    }
}
