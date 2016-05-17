<?php

/* AppBundle:project:project_overview.html.twig */
class __TwigTemplate_72df5ce68f87813d54cf9bfa327402729b996e374664b573742ab0e7121b3098 extends Twig_Template
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
        $__internal_007a00f75cb81939ccd515ff3c6692a75cdefe35c0eda9bbdeddf395247ed8b2 = $this->env->getExtension("native_profiler");
        $__internal_007a00f75cb81939ccd515ff3c6692a75cdefe35c0eda9bbdeddf395247ed8b2->enter($__internal_007a00f75cb81939ccd515ff3c6692a75cdefe35c0eda9bbdeddf395247ed8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:project:project_overview.html.twig"));

        // line 1
        $this->loadTemplate("AppBundle::header.html.twig", "AppBundle:project:project_overview.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "

";
        
        $__internal_007a00f75cb81939ccd515ff3c6692a75cdefe35c0eda9bbdeddf395247ed8b2->leave($__internal_007a00f75cb81939ccd515ff3c6692a75cdefe35c0eda9bbdeddf395247ed8b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a0abecb41530f4c8775d5cc73ba6b89928a45d7f6ec4eb2ee505c24ea5c518 = $this->env->getExtension("native_profiler");
        $__internal_e6a0abecb41530f4c8775d5cc73ba6b89928a45d7f6ec4eb2ee505c24ea5c518->enter($__internal_e6a0abecb41530f4c8775d5cc73ba6b89928a45d7f6ec4eb2ee505c24ea5c518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\tProject Overview

";
        
        $__internal_e6a0abecb41530f4c8775d5cc73ba6b89928a45d7f6ec4eb2ee505c24ea5c518->leave($__internal_e6a0abecb41530f4c8775d5cc73ba6b89928a45d7f6ec4eb2ee505c24ea5c518_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:project:project_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 3,  30 => 8,  28 => 3,  25 => 2,  23 => 1,);
    }
}
/* {% include 'AppBundle::header.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	Project Overview*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
