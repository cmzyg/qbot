<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1a16db40e1336f74db9300382c0db6d95eea84c33460fcdd3302483b770196e5 extends Twig_Template
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
        $__internal_7ee0e635b93dd2df6bc321c66cc89f48d056c0dc5cdf4d36cf5d20bc95cade76 = $this->env->getExtension("native_profiler");
        $__internal_7ee0e635b93dd2df6bc321c66cc89f48d056c0dc5cdf4d36cf5d20bc95cade76->enter($__internal_7ee0e635b93dd2df6bc321c66cc89f48d056c0dc5cdf4d36cf5d20bc95cade76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7ee0e635b93dd2df6bc321c66cc89f48d056c0dc5cdf4d36cf5d20bc95cade76->leave($__internal_7ee0e635b93dd2df6bc321c66cc89f48d056c0dc5cdf4d36cf5d20bc95cade76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
