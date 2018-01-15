<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_19ec49fb8cef568410d6598eec55e7ebb1dc6e80ac549cf6b001122cec15230c extends Twig_Template
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
        $__internal_76b4cf539febc4a2cd193820abfee4032bd02e38730a2e6d216c4f2dc6cd8d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b4cf539febc4a2cd193820abfee4032bd02e38730a2e6d216c4f2dc6cd8d43->enter($__internal_76b4cf539febc4a2cd193820abfee4032bd02e38730a2e6d216c4f2dc6cd8d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_76b4cf539febc4a2cd193820abfee4032bd02e38730a2e6d216c4f2dc6cd8d43->leave($__internal_76b4cf539febc4a2cd193820abfee4032bd02e38730a2e6d216c4f2dc6cd8d43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
