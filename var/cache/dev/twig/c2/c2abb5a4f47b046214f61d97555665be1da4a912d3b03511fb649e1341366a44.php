<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_a433755ea64e06ea63103350524956973935f2202067b8ea0f79c62f2a345f52 extends Twig_Template
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
        $__internal_2cd6a6663bce6476a2dd153e5d3087499949ec2957b1c866ad0d3804fd5486ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd6a6663bce6476a2dd153e5d3087499949ec2957b1c866ad0d3804fd5486ed->enter($__internal_2cd6a6663bce6476a2dd153e5d3087499949ec2957b1c866ad0d3804fd5486ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        $__internal_b4b7a3bbcc383e6fe6c3d7376ce14b2187cd556bbcb05b17230962441da0508f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b7a3bbcc383e6fe6c3d7376ce14b2187cd556bbcb05b17230962441da0508f->enter($__internal_b4b7a3bbcc383e6fe6c3d7376ce14b2187cd556bbcb05b17230962441da0508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show") || twig_in_filter("edit", $this->getAttribute((isset($context["backend_config"]) ? $context["backend_config"] : $this->getContext($context, "backend_config")), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_2cd6a6663bce6476a2dd153e5d3087499949ec2957b1c866ad0d3804fd5486ed->leave($__internal_2cd6a6663bce6476a2dd153e5d3087499949ec2957b1c866ad0d3804fd5486ed_prof);

        
        $__internal_b4b7a3bbcc383e6fe6c3d7376ce14b2187cd556bbcb05b17230962441da0508f->leave($__internal_b4b7a3bbcc383e6fe6c3d7376ce14b2187cd556bbcb05b17230962441da0508f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_toggle.html.twig");
    }
}
