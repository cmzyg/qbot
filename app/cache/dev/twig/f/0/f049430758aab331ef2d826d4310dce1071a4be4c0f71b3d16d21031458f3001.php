<?php

/* AppBundle::header.html.twig */
class __TwigTemplate_80d7d55d72406fc09f10b69c88ee7be7179a081b71f3b7e798a45213bec81737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97227da459608f1e252c295582ec246154565e94fba093a6d6fd4ab00e08a27f = $this->env->getExtension("native_profiler");
        $__internal_97227da459608f1e252c295582ec246154565e94fba093a6d6fd4ab00e08a27f->enter($__internal_97227da459608f1e252c295582ec246154565e94fba093a6d6fd4ab00e08a27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title></title>

";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
</head>

<body>

<nav class=\"navbar navbar-default navbar-static-top\">
  <div class=\"container\">
    <div class=\"row-fluid\">
\t    <div class=\"span12\">
\t\t\t<a class=\"inline\" href=\"all-projects\">All Projects</a>
\t\t\t<a class=\"inline\" href=\"project-overview\">Project Overview</a>
\t\t\t<a class=\"inline\" href=\"all-clients\">All Clients</a>
\t\t\t<a class=\"inline\" href=\"client-overview\">Client Overview</a>
\t\t\t<a class=\"inline\" href=\"create-project\">Create Project</a>
\t\t\t<a class=\"inline\" href=\"edit-profile\">Edit Profile</a>
\t\t\t<a class=\"inline\" href=\"add-qp-user\">Add QP User</a>
\t\t</div>
\t</div>
  </div>
</nav>";
        
        $__internal_97227da459608f1e252c295582ec246154565e94fba093a6d6fd4ab00e08a27f->leave($__internal_97227da459608f1e252c295582ec246154565e94fba093a6d6fd4ab00e08a27f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbca66ced63fa5c1b12de353bacd74f6e0fa0b760f485ac99986a508b64cf830 = $this->env->getExtension("native_profiler");
        $__internal_fbca66ced63fa5c1b12de353bacd74f6e0fa0b760f485ac99986a508b64cf830->enter($__internal_fbca66ced63fa5c1b12de353bacd74f6e0fa0b760f485ac99986a508b64cf830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_fbca66ced63fa5c1b12de353bacd74f6e0fa0b760f485ac99986a508b64cf830->leave($__internal_fbca66ced63fa5c1b12de353bacd74f6e0fa0b760f485ac99986a508b64cf830_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  64 => 7,  58 => 6,  32 => 10,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <title></title>*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('css/styles.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-default navbar-static-top">*/
/*   <div class="container">*/
/*     <div class="row-fluid">*/
/* 	    <div class="span12">*/
/* 			<a class="inline" href="all-projects">All Projects</a>*/
/* 			<a class="inline" href="project-overview">Project Overview</a>*/
/* 			<a class="inline" href="all-clients">All Clients</a>*/
/* 			<a class="inline" href="client-overview">Client Overview</a>*/
/* 			<a class="inline" href="create-project">Create Project</a>*/
/* 			<a class="inline" href="edit-profile">Edit Profile</a>*/
/* 			<a class="inline" href="add-qp-user">Add QP User</a>*/
/* 		</div>*/
/* 	</div>*/
/*   </div>*/
/* </nav>*/
