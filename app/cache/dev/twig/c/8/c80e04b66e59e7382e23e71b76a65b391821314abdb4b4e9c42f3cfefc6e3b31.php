<?php

/* AppBundle:project:index.html.twig */
class __TwigTemplate_c190187eaf6cb4a4de4787f472b5b5f5703c9b95a3eaa839473efb5cf06cf102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ed9303c11a2ac7a80e091504974ab7d2226bbe16d237867a8ca731e9e6d24e = $this->env->getExtension("native_profiler");
        $__internal_e5ed9303c11a2ac7a80e091504974ab7d2226bbe16d237867a8ca731e9e6d24e->enter($__internal_e5ed9303c11a2ac7a80e091504974ab7d2226bbe16d237867a8ca731e9e6d24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:project:index.html.twig"));

        // line 1
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle:project:index.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "

";
        
        $__internal_e5ed9303c11a2ac7a80e091504974ab7d2226bbe16d237867a8ca731e9e6d24e->leave($__internal_e5ed9303c11a2ac7a80e091504974ab7d2226bbe16d237867a8ca731e9e6d24e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48edcba53c55b302400c404a62b46f6e3a52ea5bf741a7283a906c0065e02c63 = $this->env->getExtension("native_profiler");
        $__internal_48edcba53c55b302400c404a62b46f6e3a52ea5bf741a7283a906c0065e02c63->enter($__internal_48edcba53c55b302400c404a62b46f6e3a52ea5bf741a7283a906c0065e02c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")));
        foreach ($context['_seq'] as $context["_key"] => $context["proj"]) {
            // line 6
            echo "\t\t<strong>Name:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proj"], "name", array()), "html", null, true);
            echo "
\t\t<br />
\t\t<strong>Value:</strong> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["proj"], "value", array()), "html", null, true);
            echo "
\t\t<br />
\t\t<strong>Due Date:</strong> ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proj"], "dueDate", array()), "Y-m-d"), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proj'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t<hr />

\t";
        // line 15
        $context["count"] = 1;
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["section"]) ? $context["section"] : $this->getContext($context, "section")));
        foreach ($context['_seq'] as $context["_key"] => $context["sect"]) {
            // line 17
            echo "\t\t<strong>Step ";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sect"], "sectionName", array()), "html", null, true);
            echo " <br />
\t\t";
            // line 18
            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
            // line 19
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  

";
        
        $__internal_48edcba53c55b302400c404a62b46f6e3a52ea5bf741a7283a906c0065e02c63->leave($__internal_48edcba53c55b302400c404a62b46f6e3a52ea5bf741a7283a906c0065e02c63_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:project:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  90 => 18,  83 => 17,  78 => 16,  76 => 15,  71 => 12,  63 => 10,  58 => 8,  52 => 6,  48 => 5,  45 => 4,  39 => 3,  30 => 22,  28 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% include 'AppBundle::header.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	{% for proj in project %}*/
/* 		<strong>Name:</strong> {{ proj.name }}*/
/* 		<br />*/
/* 		<strong>Value:</strong> {{ proj.value }}*/
/* 		<br />*/
/* 		<strong>Due Date:</strong> {{ proj.dueDate|date('Y-m-d') }}*/
/* 	{% endfor %}*/
/* */
/* 	<hr />*/
/* */
/* 	{% set count = 1 %}*/
/* 	{% for sect in section %}*/
/* 		<strong>Step {{ count }}:</strong> {{ sect.sectionName }} <br />*/
/* 		{% set count = count + 1 %}*/
/* 	{% endfor %}  */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
