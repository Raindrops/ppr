<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_05f5c6a1fa7ff19a56b3e8c479d340a4687ef6a2f3ce5df2e3d6f62ec2947c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0ed01949d39c6ac0bd51371784f6b49e2e3eb48f7829575740eec4651b223d8 = $this->env->getExtension("native_profiler");
        $__internal_e0ed01949d39c6ac0bd51371784f6b49e2e3eb48f7829575740eec4651b223d8->enter($__internal_e0ed01949d39c6ac0bd51371784f6b49e2e3eb48f7829575740eec4651b223d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ed01949d39c6ac0bd51371784f6b49e2e3eb48f7829575740eec4651b223d8->leave($__internal_e0ed01949d39c6ac0bd51371784f6b49e2e3eb48f7829575740eec4651b223d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64336b01b67684a69a05584e2aeb0ddbb61af8720efe20017b253cb370809252 = $this->env->getExtension("native_profiler");
        $__internal_64336b01b67684a69a05584e2aeb0ddbb61af8720efe20017b253cb370809252->enter($__internal_64336b01b67684a69a05584e2aeb0ddbb61af8720efe20017b253cb370809252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64336b01b67684a69a05584e2aeb0ddbb61af8720efe20017b253cb370809252->leave($__internal_64336b01b67684a69a05584e2aeb0ddbb61af8720efe20017b253cb370809252_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dd58b928aeae1638f7467a61b04393cc4d4cad61af035147ff7e377af613f74 = $this->env->getExtension("native_profiler");
        $__internal_7dd58b928aeae1638f7467a61b04393cc4d4cad61af035147ff7e377af613f74->enter($__internal_7dd58b928aeae1638f7467a61b04393cc4d4cad61af035147ff7e377af613f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dd58b928aeae1638f7467a61b04393cc4d4cad61af035147ff7e377af613f74->leave($__internal_7dd58b928aeae1638f7467a61b04393cc4d4cad61af035147ff7e377af613f74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6cdadaebe29de2ba3d0ba98cd52993b7a4d138bc1648bc74aadd57e8a622910 = $this->env->getExtension("native_profiler");
        $__internal_a6cdadaebe29de2ba3d0ba98cd52993b7a4d138bc1648bc74aadd57e8a622910->enter($__internal_a6cdadaebe29de2ba3d0ba98cd52993b7a4d138bc1648bc74aadd57e8a622910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6cdadaebe29de2ba3d0ba98cd52993b7a4d138bc1648bc74aadd57e8a622910->leave($__internal_a6cdadaebe29de2ba3d0ba98cd52993b7a4d138bc1648bc74aadd57e8a622910_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
