<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6b5f5fffb280672941517034423f9f578d513f9c33a7481ca91d9bd6cc02ef33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a6d64d53828932d1086ac426d726325740973b9c393596a60a7651f78a8c61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6d64d53828932d1086ac426d726325740973b9c393596a60a7651f78a8c61c->enter($__internal_1a6d64d53828932d1086ac426d726325740973b9c393596a60a7651f78a8c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a6d64d53828932d1086ac426d726325740973b9c393596a60a7651f78a8c61c->leave($__internal_1a6d64d53828932d1086ac426d726325740973b9c393596a60a7651f78a8c61c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_68d3685c217ad2696098b43d46836de5b165e8a0641f1b881b580305afacb667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d3685c217ad2696098b43d46836de5b165e8a0641f1b881b580305afacb667->enter($__internal_68d3685c217ad2696098b43d46836de5b165e8a0641f1b881b580305afacb667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_68d3685c217ad2696098b43d46836de5b165e8a0641f1b881b580305afacb667->leave($__internal_68d3685c217ad2696098b43d46836de5b165e8a0641f1b881b580305afacb667_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
