<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_57828fca29554a5c1dc2865564de5243aaf1a0bb0ab967832df9f639a6426fad extends Twig_Template
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
        $__internal_8a758da11095e174a050aca7a4231ef7f2d470580d8f0ffee19bc71be1e72caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a758da11095e174a050aca7a4231ef7f2d470580d8f0ffee19bc71be1e72caa->enter($__internal_8a758da11095e174a050aca7a4231ef7f2d470580d8f0ffee19bc71be1e72caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_87fb650227673af2890352fcc961e439873eb8649c085fc595bafdddecba5be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fb650227673af2890352fcc961e439873eb8649c085fc595bafdddecba5be0->enter($__internal_87fb650227673af2890352fcc961e439873eb8649c085fc595bafdddecba5be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_8a758da11095e174a050aca7a4231ef7f2d470580d8f0ffee19bc71be1e72caa->leave($__internal_8a758da11095e174a050aca7a4231ef7f2d470580d8f0ffee19bc71be1e72caa_prof);

        
        $__internal_87fb650227673af2890352fcc961e439873eb8649c085fc595bafdddecba5be0->leave($__internal_87fb650227673af2890352fcc961e439873eb8649c085fc595bafdddecba5be0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_string.html.twig");
    }
}
