<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_e757c56b17f2ce7ba29d773c656ce3d035d5478fa5ce697a905225f28e58d953 extends Twig_Template
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
        $__internal_7d2b33eb86cbe43b0fc08188e78ab8a6773133cbc8baee29650efb4438ab8dfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2b33eb86cbe43b0fc08188e78ab8a6773133cbc8baee29650efb4438ab8dfd->enter($__internal_7d2b33eb86cbe43b0fc08188e78ab8a6773133cbc8baee29650efb4438ab8dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_0919b1e2a79181ae18e2eda8f6373d3b4db4274c467b2d1f5ea864adf116ac85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0919b1e2a79181ae18e2eda8f6373d3b4db4274c467b2d1f5ea864adf116ac85->enter($__internal_0919b1e2a79181ae18e2eda8f6373d3b4db4274c467b2d1f5ea864adf116ac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7d2b33eb86cbe43b0fc08188e78ab8a6773133cbc8baee29650efb4438ab8dfd->leave($__internal_7d2b33eb86cbe43b0fc08188e78ab8a6773133cbc8baee29650efb4438ab8dfd_prof);

        
        $__internal_0919b1e2a79181ae18e2eda8f6373d3b4db4274c467b2d1f5ea864adf116ac85->leave($__internal_0919b1e2a79181ae18e2eda8f6373d3b4db4274c467b2d1f5ea864adf116ac85_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\label_null.html.twig");
    }
}
