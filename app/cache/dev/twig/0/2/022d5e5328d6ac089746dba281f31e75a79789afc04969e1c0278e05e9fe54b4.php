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
        $__internal_48be0b052e48ab0a30cb58a3eb41b5e5594d3dba104d3f60c073a8a96c8a01e8 = $this->env->getExtension("native_profiler");
        $__internal_48be0b052e48ab0a30cb58a3eb41b5e5594d3dba104d3f60c073a8a96c8a01e8->enter($__internal_48be0b052e48ab0a30cb58a3eb41b5e5594d3dba104d3f60c073a8a96c8a01e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48be0b052e48ab0a30cb58a3eb41b5e5594d3dba104d3f60c073a8a96c8a01e8->leave($__internal_48be0b052e48ab0a30cb58a3eb41b5e5594d3dba104d3f60c073a8a96c8a01e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e99dfdfb7cc49cbadc7e53089a16f8d313584da5d9501745f750ed39b3771a20 = $this->env->getExtension("native_profiler");
        $__internal_e99dfdfb7cc49cbadc7e53089a16f8d313584da5d9501745f750ed39b3771a20->enter($__internal_e99dfdfb7cc49cbadc7e53089a16f8d313584da5d9501745f750ed39b3771a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e99dfdfb7cc49cbadc7e53089a16f8d313584da5d9501745f750ed39b3771a20->leave($__internal_e99dfdfb7cc49cbadc7e53089a16f8d313584da5d9501745f750ed39b3771a20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_594e2bdc5c14edbd34eeae77645fe5b0c9331a5b6041bec0fab0defe55708092 = $this->env->getExtension("native_profiler");
        $__internal_594e2bdc5c14edbd34eeae77645fe5b0c9331a5b6041bec0fab0defe55708092->enter($__internal_594e2bdc5c14edbd34eeae77645fe5b0c9331a5b6041bec0fab0defe55708092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_594e2bdc5c14edbd34eeae77645fe5b0c9331a5b6041bec0fab0defe55708092->leave($__internal_594e2bdc5c14edbd34eeae77645fe5b0c9331a5b6041bec0fab0defe55708092_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe25ff137dbed854d5b6f4ade9cef65c1aee561d1f30bd7b02e091cfe01fa80c = $this->env->getExtension("native_profiler");
        $__internal_fe25ff137dbed854d5b6f4ade9cef65c1aee561d1f30bd7b02e091cfe01fa80c->enter($__internal_fe25ff137dbed854d5b6f4ade9cef65c1aee561d1f30bd7b02e091cfe01fa80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fe25ff137dbed854d5b6f4ade9cef65c1aee561d1f30bd7b02e091cfe01fa80c->leave($__internal_fe25ff137dbed854d5b6f4ade9cef65c1aee561d1f30bd7b02e091cfe01fa80c_prof);

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
