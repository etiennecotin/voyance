<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_cf695093a7dc1a72d00739d2e52454318d0e0ea3f1faa4f4248f8ed51133fe3e extends Twig_Template
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
        $__internal_34786a68228925743ed5f4618c8a2cf8aceea6cc71727a210a0abb088c318b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34786a68228925743ed5f4618c8a2cf8aceea6cc71727a210a0abb088c318b74->enter($__internal_34786a68228925743ed5f4618c8a2cf8aceea6cc71727a210a0abb088c318b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_8f2f3bc6f8b4cd5a5d65fb96a1777450be407f57a6b40c4e5e1d2f0fe00500ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2f3bc6f8b4cd5a5d65fb96a1777450be407f57a6b40c4e5e1d2f0fe00500ef->enter($__internal_8f2f3bc6f8b4cd5a5d65fb96a1777450be407f57a6b40c4e5e1d2f0fe00500ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_34786a68228925743ed5f4618c8a2cf8aceea6cc71727a210a0abb088c318b74->leave($__internal_34786a68228925743ed5f4618c8a2cf8aceea6cc71727a210a0abb088c318b74_prof);

        
        $__internal_8f2f3bc6f8b4cd5a5d65fb96a1777450be407f57a6b40c4e5e1d2f0fe00500ef->leave($__internal_8f2f3bc6f8b4cd5a5d65fb96a1777450be407f57a6b40c4e5e1d2f0fe00500ef_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
