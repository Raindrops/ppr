<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fb940c91064c5b8deac8dd101257d002eec1a0548fee603cf551e4303641a4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b4df4fbc34ff9eff14f7c0f3ff8fc52133f68904f576dcbd3d256628bb55aaa = $this->env->getExtension("native_profiler");
        $__internal_3b4df4fbc34ff9eff14f7c0f3ff8fc52133f68904f576dcbd3d256628bb55aaa->enter($__internal_3b4df4fbc34ff9eff14f7c0f3ff8fc52133f68904f576dcbd3d256628bb55aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4df4fbc34ff9eff14f7c0f3ff8fc52133f68904f576dcbd3d256628bb55aaa->leave($__internal_3b4df4fbc34ff9eff14f7c0f3ff8fc52133f68904f576dcbd3d256628bb55aaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_98d835ba914bf09a873f41529cd4845dcedfafcf8c50fb6868c8d0fccc8bd27f = $this->env->getExtension("native_profiler");
        $__internal_98d835ba914bf09a873f41529cd4845dcedfafcf8c50fb6868c8d0fccc8bd27f->enter($__internal_98d835ba914bf09a873f41529cd4845dcedfafcf8c50fb6868c8d0fccc8bd27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_98d835ba914bf09a873f41529cd4845dcedfafcf8c50fb6868c8d0fccc8bd27f->leave($__internal_98d835ba914bf09a873f41529cd4845dcedfafcf8c50fb6868c8d0fccc8bd27f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdc6b1e0faca26fcf990b8eba388d39fccccbec94e01e5ddc42c7e41ee187069 = $this->env->getExtension("native_profiler");
        $__internal_fdc6b1e0faca26fcf990b8eba388d39fccccbec94e01e5ddc42c7e41ee187069->enter($__internal_fdc6b1e0faca26fcf990b8eba388d39fccccbec94e01e5ddc42c7e41ee187069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdc6b1e0faca26fcf990b8eba388d39fccccbec94e01e5ddc42c7e41ee187069->leave($__internal_fdc6b1e0faca26fcf990b8eba388d39fccccbec94e01e5ddc42c7e41ee187069_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58ef86462863a543e079963f84ad5a3148be4d1774fa4941c3316d94bf96f8d = $this->env->getExtension("native_profiler");
        $__internal_c58ef86462863a543e079963f84ad5a3148be4d1774fa4941c3316d94bf96f8d->enter($__internal_c58ef86462863a543e079963f84ad5a3148be4d1774fa4941c3316d94bf96f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c58ef86462863a543e079963f84ad5a3148be4d1774fa4941c3316d94bf96f8d->leave($__internal_c58ef86462863a543e079963f84ad5a3148be4d1774fa4941c3316d94bf96f8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
