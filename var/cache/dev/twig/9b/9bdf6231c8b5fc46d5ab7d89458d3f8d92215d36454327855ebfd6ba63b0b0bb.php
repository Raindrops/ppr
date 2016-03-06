<?php

/* base.html.twig */
class __TwigTemplate_de2d3f6811424be2f353af9bbc7bbb4a2d9a23486f9d0709c87b7ef89fee08b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89756e79aa15efbcbcafd4cbc7a3d81f69fe58c049fad6c72056fa5d38e8b646 = $this->env->getExtension("native_profiler");
        $__internal_89756e79aa15efbcbcafd4cbc7a3d81f69fe58c049fad6c72056fa5d38e8b646->enter($__internal_89756e79aa15efbcbcafd4cbc7a3d81f69fe58c049fad6c72056fa5d38e8b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_89756e79aa15efbcbcafd4cbc7a3d81f69fe58c049fad6c72056fa5d38e8b646->leave($__internal_89756e79aa15efbcbcafd4cbc7a3d81f69fe58c049fad6c72056fa5d38e8b646_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae445abc1934d8246855807338e27b2a26bab612f4c2110cb801b19e483f2530 = $this->env->getExtension("native_profiler");
        $__internal_ae445abc1934d8246855807338e27b2a26bab612f4c2110cb801b19e483f2530->enter($__internal_ae445abc1934d8246855807338e27b2a26bab612f4c2110cb801b19e483f2530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae445abc1934d8246855807338e27b2a26bab612f4c2110cb801b19e483f2530->leave($__internal_ae445abc1934d8246855807338e27b2a26bab612f4c2110cb801b19e483f2530_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2efe4268456481af8f774ceeaf85d4ca78c9d61095ed98e6b0339da2cee0ea53 = $this->env->getExtension("native_profiler");
        $__internal_2efe4268456481af8f774ceeaf85d4ca78c9d61095ed98e6b0339da2cee0ea53->enter($__internal_2efe4268456481af8f774ceeaf85d4ca78c9d61095ed98e6b0339da2cee0ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2efe4268456481af8f774ceeaf85d4ca78c9d61095ed98e6b0339da2cee0ea53->leave($__internal_2efe4268456481af8f774ceeaf85d4ca78c9d61095ed98e6b0339da2cee0ea53_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0064354bf5d9ffc82d0a53125ded329a85000235b18d2b4e3100cbda58b8cf3 = $this->env->getExtension("native_profiler");
        $__internal_f0064354bf5d9ffc82d0a53125ded329a85000235b18d2b4e3100cbda58b8cf3->enter($__internal_f0064354bf5d9ffc82d0a53125ded329a85000235b18d2b4e3100cbda58b8cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0064354bf5d9ffc82d0a53125ded329a85000235b18d2b4e3100cbda58b8cf3->leave($__internal_f0064354bf5d9ffc82d0a53125ded329a85000235b18d2b4e3100cbda58b8cf3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c48cab6faaf458c51dcb5b6726b26cc0e7f9d97db7d3d0b1d4ead1cc992db346 = $this->env->getExtension("native_profiler");
        $__internal_c48cab6faaf458c51dcb5b6726b26cc0e7f9d97db7d3d0b1d4ead1cc992db346->enter($__internal_c48cab6faaf458c51dcb5b6726b26cc0e7f9d97db7d3d0b1d4ead1cc992db346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c48cab6faaf458c51dcb5b6726b26cc0e7f9d97db7d3d0b1d4ead1cc992db346->leave($__internal_c48cab6faaf458c51dcb5b6726b26cc0e7f9d97db7d3d0b1d4ead1cc992db346_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
