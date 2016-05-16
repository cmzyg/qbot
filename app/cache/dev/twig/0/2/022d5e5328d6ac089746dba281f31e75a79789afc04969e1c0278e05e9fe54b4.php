<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ce0231b9b29a26c0c97f1523d0d64dd64007472a001dfd8dd1504377dfed419 extends Twig_Template
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
        $__internal_7470a94f2851957c7d256a825a69567706040992c7ffd2cdfbbc33aa22b54a82 = $this->env->getExtension("native_profiler");
        $__internal_7470a94f2851957c7d256a825a69567706040992c7ffd2cdfbbc33aa22b54a82->enter($__internal_7470a94f2851957c7d256a825a69567706040992c7ffd2cdfbbc33aa22b54a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7470a94f2851957c7d256a825a69567706040992c7ffd2cdfbbc33aa22b54a82->leave($__internal_7470a94f2851957c7d256a825a69567706040992c7ffd2cdfbbc33aa22b54a82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17734c0f0002e2ed7ecadc45b34282379ae8c17e0680bf6f8378ff384700643c = $this->env->getExtension("native_profiler");
        $__internal_17734c0f0002e2ed7ecadc45b34282379ae8c17e0680bf6f8378ff384700643c->enter($__internal_17734c0f0002e2ed7ecadc45b34282379ae8c17e0680bf6f8378ff384700643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17734c0f0002e2ed7ecadc45b34282379ae8c17e0680bf6f8378ff384700643c->leave($__internal_17734c0f0002e2ed7ecadc45b34282379ae8c17e0680bf6f8378ff384700643c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_72b6fc3634784dacdbfda41c12a058c8f740c8ca07a97e2f48f1d8a805a8c452 = $this->env->getExtension("native_profiler");
        $__internal_72b6fc3634784dacdbfda41c12a058c8f740c8ca07a97e2f48f1d8a805a8c452->enter($__internal_72b6fc3634784dacdbfda41c12a058c8f740c8ca07a97e2f48f1d8a805a8c452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_72b6fc3634784dacdbfda41c12a058c8f740c8ca07a97e2f48f1d8a805a8c452->leave($__internal_72b6fc3634784dacdbfda41c12a058c8f740c8ca07a97e2f48f1d8a805a8c452_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2960f8e57adc9e327368bc970a4128f8a25bf9ee3124daea38e9c040a96f5d8 = $this->env->getExtension("native_profiler");
        $__internal_d2960f8e57adc9e327368bc970a4128f8a25bf9ee3124daea38e9c040a96f5d8->enter($__internal_d2960f8e57adc9e327368bc970a4128f8a25bf9ee3124daea38e9c040a96f5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d2960f8e57adc9e327368bc970a4128f8a25bf9ee3124daea38e9c040a96f5d8->leave($__internal_d2960f8e57adc9e327368bc970a4128f8a25bf9ee3124daea38e9c040a96f5d8_prof);

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
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
