<?php

/* LswApiCallerBundle:Collector:api.html.twig */
class __TwigTemplate_4ac2637e46a0fb118fecc677074cf7dcd5f7e2f6abdfc7a7d808505227a7a750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "LswApiCallerBundle:Collector:api.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce10ea07af93230ffe808233ff8d0036db7b0d80e993f9e52f9a5d0fd1172fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce10ea07af93230ffe808233ff8d0036db7b0d80e993f9e52f9a5d0fd1172fcf->enter($__internal_ce10ea07af93230ffe808233ff8d0036db7b0d80e993f9e52f9a5d0fd1172fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LswApiCallerBundle:Collector:api.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce10ea07af93230ffe808233ff8d0036db7b0d80e993f9e52f9a5d0fd1172fcf->leave($__internal_ce10ea07af93230ffe808233ff8d0036db7b0d80e993f9e52f9a5d0fd1172fcf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c44fc2caf21dff87e2b2ef903234588fbd3a6ff905138050a8b7d24e05198a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44fc2caf21dff87e2b2ef903234588fbd3a6ff905138050a8b7d24e05198a0a->enter($__internal_c44fc2caf21dff87e2b2ef903234588fbd3a6ff905138050a8b7d24e05198a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"22\" height=\"28\" alt=\"API\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90DGg4mOhU8H+YAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAACjElEQVRIx+2Wz08TURDHP+/ttlssrZhgWw5gOBhOFCImkJgmHjwgKIkJxIN/AgFjCCZgTI3Gv0Dj3YuGGAU1YOLFRA9E4Aht8KAeEBIbgaVsMW23z4Ow2napP6o3JtnDzNv5ZuY7M28eHMiuiOGhIbm1sXnaNM0Ou1DIVwOmlBKHg8FsbaD2vr7+Zb3O3Nx4aVkZTQhRdaSWZdHkadJkW3tbAIQmhOBffaFIuEtKTfvn/Pp8NZquUG5cAaBrGkLK/Qglb9sopSilUCmldDdQpRThSISenh4CgYArbqFgs7CwwNzbOVdw3c3pSF0dY+NjtEajFVM+29vL7Zu3mJ2dLTsry1MIwYX+flqjUZLJJFdHR8qc9uw+n4+xa+MYXq9DnyuwUgpd1xm4OADAdnqLxcXFMuCf7Yf8fs739ZHL5fYHLhRsjre04PV49+Lfp3jF9lOxGLadrxQxRMJhR8/nc2yn02WwpfZQ6CiFQgUqhIAt03T0Ex0nmZh4BEAmY5FKpQCItrXz+MmU859pmmVdUQQspUYiseTohmEQaWjAsixGR0aIxWK8W17G7/dTX1/vFGx+fgG9ZNBkaUfs7HxlZnq6qKez2Sxra2sArKysOGdCCHL5HM+fPUX3eH7dxxMPHtIajdLY2AhAMBjkejxOeivt9PZe6vfu3CX1OYUsKbLr5H1aXeVGPM7g4CDh3WKGQmFCoTAZyyJjWeTzNlOTk7yYnsHtVtTdBgTg4/sPXBm+XNb4Rc4eHSm13wP+UUiJ1zD++oaTqP+xmBT6d9JVxZT/cD0hpJT6sebmnTPd3SSXltCkVmWcCo/uobOrMylevXntNQwjXuPznRNSZqtdzrZt5xKJxKWDd4oj3wARYAMtKR6xuAAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if ((5 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()) > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "returnedErrorCount", array()) > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>API Calls</b>
            <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 21
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "returnedErrorCount", array()) > 0)) ? ("red") : ("green"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "returnedErrorCount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "LswApiCallerBundle:Collector:api.html.twig", 28)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_c44fc2caf21dff87e2b2ef903234588fbd3a6ff905138050a8b7d24e05198a0a->leave($__internal_c44fc2caf21dff87e2b2ef903234588fbd3a6ff905138050a8b7d24e05198a0a_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49f65a80474a5dbe02bc3b6a86992f43cc82a1d86551c693e769184c0636fea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f65a80474a5dbe02bc3b6a86992f43cc82a1d86551c693e769184c0636fea0->enter($__internal_49f65a80474a5dbe02bc3b6a86992f43cc82a1d86551c693e769184c0636fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\">
      <img width=\"32\" height=\"33\" alt=\"API\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAYAAAC4JqlRAAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90DGRciClbL3V8AAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAAC9klEQVRYw+2Xv08TYRjHv8/dvZeUhspw59AfiWy1JEpSwQUHdTCiiUZkN62jQBxJHBzVwRDUKCI6mBD5B5zUxFR+FIOUFZfCIkh7oS2ltL3e60Bai70rV0JoTHiTm+7uuc/7PN/n+7xHgwMD91bj8afFos6ICEe1iIC2E20fqf9Wn65pmogmLckolcRdImoKgIAmr2OApgNI9lqG4Ha7IdgUKgeQTCaRzWYhCMLBATjnyOVyGHk2imAw2FCnpNNp3B8cwko8DkEUD1YCURAwPvEGXV1dICLbFwC4XC68Gn8Nt8cDwzAaBygWi+jrv41ARwc453t2zzm3zFi1p8iyjNEXz5HP71i+Iwb8/oc7+XzNB1T1JB49eVwJqOs6AoEABAK6u89basXv92M7u4WengvgnMPhcIAxGUuxmGkJLTMQCofMRSPtr9vyM0QEzjkuXr4EmTH7JWCSBP9pv2XaGhs6BK/XC6fTaRrPFEBiDIqqHup8ONN5FqVSyR4AEcHpdB6q4ZxqbzftBksA65zWNxbR4n3GGGBSAsm8nQwUCgXIsvw3sCgiEolYZqbcql+/ReBwtNTcX1tbB5m4oul2SnoJyURyj2iICKqqoqVlN7imaQiH7qD36hV8+fyponhFUU0hFxcWIJo4oilAoVjE6upK3VKMjb1EbHERG783MDQ4ULd0mqYhkUjY9wHOOaY+TNV1vbVf60CV9WYyGUtnXIrFUCgU7AMQEaJzc5ifi1ZS+++SmQRZlsEYg8yY6aQsf3B0ZMRyI9R34ybfTKVq6DjncLla8X5yslL36mcSiQR2crnK+PV4PHtGb1mUD4aHMT09Y+mgQj0HS6XSuBsOYyuTqQFUFAVenw9enw8+n69m7huGgXcTbzE7M1vXvi0zUB3I5WpF77XrECV7p3fOge/RKH4uL4MEoa6Y9wUop1PX9YacTxTFfU9DDR3JmMU0Oz4V//8AzfonLItb6DwX5M2A2B1cCmj+x8KEqqihowYgAjZTqe0//VcdSxbB1vAAAAAASUVORK5CYII=\" />
    </span>
    <strong>API CALLS</strong>
    <span class=\"count\">
        <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array()), "html", null, true);
        echo "</span>
        <span>";
        // line 39
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_49f65a80474a5dbe02bc3b6a86992f43cc82a1d86551c693e769184c0636fea0->leave($__internal_49f65a80474a5dbe02bc3b6a86992f43cc82a1d86551c693e769184c0636fea0_prof);

    }

    // line 44
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4165c25a3464592b526dfc4771e091d81369396b38dc0485f25732ae583adff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4165c25a3464592b526dfc4771e091d81369396b38dc0485f25732ae583adff->enter($__internal_b4165c25a3464592b526dfc4771e091d81369396b38dc0485f25732ae583adff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 45
        echo "    <h2>API Calls</h2>

    ";
        // line 47
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callcount", array())) {
            // line 48
            echo "        <p>
            <em>No calls.</em>
        </p>
    ";
        } else {
            // line 52
            echo "        <ul class=\"alt\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
            foreach ($context['_seq'] as $context["i"] => $context["call"]) {
                // line 54
                echo "                <li class=\"";
                echo ((($context["i"] % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <div>
                        <strong>Status</strong>: ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "status", array()), "html", null, true);
                echo "<br />
                        <strong>URL</strong>: ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "url", array()), "html", null, true);
                echo "<br />
                        <strong>Type</strong>: ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "type", array()), "html", null, true);
                echo "<br />
                        <strong>Request</strong>: ";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["call"], "requestData", array())), "html", null, true);
                echo " bytes
                          <a href=\"data:text/plain;,";
                // line 60
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "requestData", array()), true), "html", null, true);
                echo "\">raw</a>
                          <a href=\"data:text/html;,";
                // line 61
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "requestData", array()), true), "html", null, true);
                echo "\">html</a>
                          <a href=\"data:text/plain;,";
                // line 62
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "requestObject", array()), true), "html", null, true);
                echo "\">parsed</a>
                          <br />
                        <strong>Response</strong>: ";
                // line 64
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["call"], "responseData", array())), "html", null, true);
                echo " bytes
                          <a href=\"data:text/plain;,";
                // line 65
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "responseData", array()), true), "html", null, true);
                echo "\">raw</a>
                          <a href=\"data:text/html;,";
                // line 66
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "responseData", array()), true), "html", null, true);
                echo "\">html</a>
                          <a href=\"data:text/plain;,";
                // line 67
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getAttribute($context["call"], "responseObject", array()), true), "html", null, true);
                echo "\">parsed</a>
                          <br />
                    </div>
                    <small>
                        <strong>Time</strong>: ";
                // line 71
                echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["call"], "executionMS", array()) * 1000)), "html", null, true);
                echo " ms
                    </small>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['call'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </ul>
    ";
        }
        // line 77
        echo "
";
        
        $__internal_b4165c25a3464592b526dfc4771e091d81369396b38dc0485f25732ae583adff->leave($__internal_b4165c25a3464592b526dfc4771e091d81369396b38dc0485f25732ae583adff_prof);

    }

    public function getTemplateName()
    {
        return "LswApiCallerBundle:Collector:api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 77,  229 => 75,  219 => 71,  212 => 67,  208 => 66,  204 => 65,  200 => 64,  195 => 62,  191 => 61,  187 => 60,  183 => 59,  179 => 58,  175 => 57,  171 => 56,  165 => 54,  161 => 53,  158 => 52,  152 => 48,  150 => 47,  146 => 45,  140 => 44,  129 => 39,  125 => 38,  117 => 32,  111 => 31,  103 => 28,  95 => 25,  88 => 21,  81 => 17,  77 => 15,  74 => 14,  71 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <img width=\"22\" height=\"28\" alt=\"API\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90DGg4mOhU8H+YAAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAACjElEQVRIx+2Wz08TURDHP+/ttlssrZhgWw5gOBhOFCImkJgmHjwgKIkJxIN/AgFjCCZgTI3Gv0Dj3YuGGAU1YOLFRA9E4Aht8KAeEBIbgaVsMW23z4Ow2napP6o3JtnDzNv5ZuY7M28eHMiuiOGhIbm1sXnaNM0Ou1DIVwOmlBKHg8FsbaD2vr7+Zb3O3Nx4aVkZTQhRdaSWZdHkadJkW3tbAIQmhOBffaFIuEtKTfvn/Pp8NZquUG5cAaBrGkLK/Qglb9sopSilUCmldDdQpRThSISenh4CgYArbqFgs7CwwNzbOVdw3c3pSF0dY+NjtEajFVM+29vL7Zu3mJ2dLTsry1MIwYX+flqjUZLJJFdHR8qc9uw+n4+xa+MYXq9DnyuwUgpd1xm4OADAdnqLxcXFMuCf7Yf8fs739ZHL5fYHLhRsjre04PV49+Lfp3jF9lOxGLadrxQxRMJhR8/nc2yn02WwpfZQ6CiFQgUqhIAt03T0Ex0nmZh4BEAmY5FKpQCItrXz+MmU859pmmVdUQQspUYiseTohmEQaWjAsixGR0aIxWK8W17G7/dTX1/vFGx+fgG9ZNBkaUfs7HxlZnq6qKez2Sxra2sArKysOGdCCHL5HM+fPUX3eH7dxxMPHtIajdLY2AhAMBjkejxOeivt9PZe6vfu3CX1OYUsKbLr5H1aXeVGPM7g4CDh3WKGQmFCoTAZyyJjWeTzNlOTk7yYnsHtVtTdBgTg4/sPXBm+XNb4Rc4eHSm13wP+UUiJ1zD++oaTqP+xmBT6d9JVxZT/cD0hpJT6sebmnTPd3SSXltCkVmWcCo/uobOrMylevXntNQwjXuPznRNSZqtdzrZt5xKJxKWDd4oj3wARYAMtKR6xuAAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status{% if 5 < collector.callcount %} sf-toolbar-status-yellow{% endif %}\">{{ collector.callcount }}</span>
        {% if collector.callcount > 0 %}
            <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
        {% endif %}
        {% if collector.returnedErrorCount > 0 %}
            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        {% endif %}
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>API Calls</b>
            <span>{{ collector.callcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Errors</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.returnedErrorCount > 0 ? 'red' : 'green' }}\">{{ collector.returnedErrorCount }}</span>
        </div>
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">
      <img width=\"32\" height=\"33\" alt=\"API\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAhCAYAAAC4JqlRAAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB90DGRciClbL3V8AAAAZdEVYdENvbW1lbnQAQ3JlYXRlZCB3aXRoIEdJTVBXgQ4XAAAC9klEQVRYw+2Xv08TYRjHv8/dvZeUhspw59AfiWy1JEpSwQUHdTCiiUZkN62jQBxJHBzVwRDUKCI6mBD5B5zUxFR+FIOUFZfCIkh7oS2ltL3e60Bai70rV0JoTHiTm+7uuc/7PN/n+7xHgwMD91bj8afFos6ICEe1iIC2E20fqf9Wn65pmogmLckolcRdImoKgIAmr2OApgNI9lqG4Ha7IdgUKgeQTCaRzWYhCMLBATjnyOVyGHk2imAw2FCnpNNp3B8cwko8DkEUD1YCURAwPvEGXV1dICLbFwC4XC68Gn8Nt8cDwzAaBygWi+jrv41ARwc453t2zzm3zFi1p8iyjNEXz5HP71i+Iwb8/oc7+XzNB1T1JB49eVwJqOs6AoEABAK6u89basXv92M7u4WengvgnMPhcIAxGUuxmGkJLTMQCofMRSPtr9vyM0QEzjkuXr4EmTH7JWCSBP9pv2XaGhs6BK/XC6fTaRrPFEBiDIqqHup8ONN5FqVSyR4AEcHpdB6q4ZxqbzftBksA65zWNxbR4n3GGGBSAsm8nQwUCgXIsvw3sCgiEolYZqbcql+/ReBwtNTcX1tbB5m4oul2SnoJyURyj2iICKqqoqVlN7imaQiH7qD36hV8+fyponhFUU0hFxcWIJo4oilAoVjE6upK3VKMjb1EbHERG783MDQ4ULd0mqYhkUjY9wHOOaY+TNV1vbVf60CV9WYyGUtnXIrFUCgU7AMQEaJzc5ifi1ZS+++SmQRZlsEYg8yY6aQsf3B0ZMRyI9R34ybfTKVq6DjncLla8X5yslL36mcSiQR2crnK+PV4PHtGb1mUD4aHMT09Y+mgQj0HS6XSuBsOYyuTqQFUFAVenw9enw8+n69m7huGgXcTbzE7M1vXvi0zUB3I5WpF77XrECV7p3fOge/RKH4uL4MEoa6Y9wUop1PX9YacTxTFfU9DDR3JmMU0Oz4V//8AzfonLItb6DwX5M2A2B1cCmj+x8KEqqihowYgAjZTqe0//VcdSxbB1vAAAAAASUVORK5CYII=\" />
    </span>
    <strong>API CALLS</strong>
    <span class=\"count\">
        <span>{{ collector.callcount }}</span>
        <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>API Calls</h2>

    {% if not collector.callcount %}
        <p>
            <em>No calls.</em>
        </p>
    {% else %}
        <ul class=\"alt\">
            {% for i, call in collector.calls %}
                <li class=\"{{ i is odd ? 'odd' : 'even' }}\">
                    <div>
                        <strong>Status</strong>: {{ call.status }}<br />
                        <strong>URL</strong>: {{ call.url }}<br />
                        <strong>Type</strong>: {{ call.type }}<br />
                        <strong>Request</strong>: {{ call.requestData|length }} bytes
                          <a href=\"data:text/plain;,{{ call.requestData|url_encode(true) }}\">raw</a>
                          <a href=\"data:text/html;,{{ call.requestData|url_encode(true) }}\">html</a>
                          <a href=\"data:text/plain;,{{ call.requestObject|url_encode(true) }}\">parsed</a>
                          <br />
                        <strong>Response</strong>: {{ call.responseData|length }} bytes
                          <a href=\"data:text/plain;,{{ call.responseData|url_encode(true) }}\">raw</a>
                          <a href=\"data:text/html;,{{ call.responseData|url_encode(true) }}\">html</a>
                          <a href=\"data:text/plain;,{{ call.responseObject|url_encode(true) }}\">parsed</a>
                          <br />
                    </div>
                    <small>
                        <strong>Time</strong>: {{ '%0.2f'|format(call.executionMS * 1000) }} ms
                    </small>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

{% endblock %}

", "LswApiCallerBundle:Collector:api.html.twig", "/home/desenvolvimento/workspace/erika/vendor/leaseweb/api-caller-bundle/Lsw/ApiCallerBundle/Resources/views/Collector/api.html.twig");
    }
}
