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
        $__internal_3cbd8c543e9ba31eb3d854f1c148e57f9a94c2c45e34e15c8143b3d481b39141 = $this->env->getExtension("native_profiler");
        $__internal_3cbd8c543e9ba31eb3d854f1c148e57f9a94c2c45e34e15c8143b3d481b39141->enter($__internal_3cbd8c543e9ba31eb3d854f1c148e57f9a94c2c45e34e15c8143b3d481b39141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cbd8c543e9ba31eb3d854f1c148e57f9a94c2c45e34e15c8143b3d481b39141->leave($__internal_3cbd8c543e9ba31eb3d854f1c148e57f9a94c2c45e34e15c8143b3d481b39141_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67e7bf72a2077f3a7f31e65da2dfbff9c4ddb3413183bd6d5b5abce980ce355d = $this->env->getExtension("native_profiler");
        $__internal_67e7bf72a2077f3a7f31e65da2dfbff9c4ddb3413183bd6d5b5abce980ce355d->enter($__internal_67e7bf72a2077f3a7f31e65da2dfbff9c4ddb3413183bd6d5b5abce980ce355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67e7bf72a2077f3a7f31e65da2dfbff9c4ddb3413183bd6d5b5abce980ce355d->leave($__internal_67e7bf72a2077f3a7f31e65da2dfbff9c4ddb3413183bd6d5b5abce980ce355d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c531c81e8b3a7b03e889850da0cbdf55500506246f99ce880ac0f85517b9110a = $this->env->getExtension("native_profiler");
        $__internal_c531c81e8b3a7b03e889850da0cbdf55500506246f99ce880ac0f85517b9110a->enter($__internal_c531c81e8b3a7b03e889850da0cbdf55500506246f99ce880ac0f85517b9110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c531c81e8b3a7b03e889850da0cbdf55500506246f99ce880ac0f85517b9110a->leave($__internal_c531c81e8b3a7b03e889850da0cbdf55500506246f99ce880ac0f85517b9110a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd73e905e42ae8ea1a7af085fc138539c596788b5a48d914bcae566b1e0a5c26 = $this->env->getExtension("native_profiler");
        $__internal_bd73e905e42ae8ea1a7af085fc138539c596788b5a48d914bcae566b1e0a5c26->enter($__internal_bd73e905e42ae8ea1a7af085fc138539c596788b5a48d914bcae566b1e0a5c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bd73e905e42ae8ea1a7af085fc138539c596788b5a48d914bcae566b1e0a5c26->leave($__internal_bd73e905e42ae8ea1a7af085fc138539c596788b5a48d914bcae566b1e0a5c26_prof);

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
