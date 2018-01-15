<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_160d9439b0498dd3b3018e25e82e96d46603abe0b27c56058d65c54567dc2bf7 extends Twig_Template
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
        $__internal_be463424c9e596fcf4894ed52521b938d45832983c9dbbb7d4d6437d369aa18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be463424c9e596fcf4894ed52521b938d45832983c9dbbb7d4d6437d369aa18f->enter($__internal_be463424c9e596fcf4894ed52521b938d45832983c9dbbb7d4d6437d369aa18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_be463424c9e596fcf4894ed52521b938d45832983c9dbbb7d4d6437d369aa18f->leave($__internal_be463424c9e596fcf4894ed52521b938d45832983c9dbbb7d4d6437d369aa18f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/murilo/workspace/still-hamlet-13528/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
