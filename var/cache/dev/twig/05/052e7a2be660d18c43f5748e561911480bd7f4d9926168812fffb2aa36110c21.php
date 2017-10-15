<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5dc5949c615629a3c53f2b13981699ef1368f0bb7d65a039571da9e1beee6f1a extends Twig_Template
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
        $__internal_3febea8b4852ad4f426c04f8d373df1eff5d333ea5aed93dfc090fb1180a57a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3febea8b4852ad4f426c04f8d373df1eff5d333ea5aed93dfc090fb1180a57a0->enter($__internal_3febea8b4852ad4f426c04f8d373df1eff5d333ea5aed93dfc090fb1180a57a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_96f9c1bc28132df108f41747fef2b886f9a361fe5f84a270920b99de191de70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f9c1bc28132df108f41747fef2b886f9a361fe5f84a270920b99de191de70c->enter($__internal_96f9c1bc28132df108f41747fef2b886f9a361fe5f84a270920b99de191de70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3febea8b4852ad4f426c04f8d373df1eff5d333ea5aed93dfc090fb1180a57a0->leave($__internal_3febea8b4852ad4f426c04f8d373df1eff5d333ea5aed93dfc090fb1180a57a0_prof);

        
        $__internal_96f9c1bc28132df108f41747fef2b886f9a361fe5f84a270920b99de191de70c->leave($__internal_96f9c1bc28132df108f41747fef2b886f9a361fe5f84a270920b99de191de70c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4e5d50e6c2465e3c58295382879608528ddc977ae6169113fa8200c391845bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e5d50e6c2465e3c58295382879608528ddc977ae6169113fa8200c391845bc->enter($__internal_c4e5d50e6c2465e3c58295382879608528ddc977ae6169113fa8200c391845bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_40ebbd124623a1fef030d3163d8ef28ea3fe51aae8f5934aeaeb12b032dc0dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ebbd124623a1fef030d3163d8ef28ea3fe51aae8f5934aeaeb12b032dc0dd7->enter($__internal_40ebbd124623a1fef030d3163d8ef28ea3fe51aae8f5934aeaeb12b032dc0dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40ebbd124623a1fef030d3163d8ef28ea3fe51aae8f5934aeaeb12b032dc0dd7->leave($__internal_40ebbd124623a1fef030d3163d8ef28ea3fe51aae8f5934aeaeb12b032dc0dd7_prof);

        
        $__internal_c4e5d50e6c2465e3c58295382879608528ddc977ae6169113fa8200c391845bc->leave($__internal_c4e5d50e6c2465e3c58295382879608528ddc977ae6169113fa8200c391845bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e35150cb39c44c23ef5c5ac9afa0ca1d13ac86d92d4f462975432ed73ec6699c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35150cb39c44c23ef5c5ac9afa0ca1d13ac86d92d4f462975432ed73ec6699c->enter($__internal_e35150cb39c44c23ef5c5ac9afa0ca1d13ac86d92d4f462975432ed73ec6699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15619fe53c8e98da2cef6929329ae8710ac42eb4e84149c98e2e0e2c9683ecc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15619fe53c8e98da2cef6929329ae8710ac42eb4e84149c98e2e0e2c9683ecc2->enter($__internal_15619fe53c8e98da2cef6929329ae8710ac42eb4e84149c98e2e0e2c9683ecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15619fe53c8e98da2cef6929329ae8710ac42eb4e84149c98e2e0e2c9683ecc2->leave($__internal_15619fe53c8e98da2cef6929329ae8710ac42eb4e84149c98e2e0e2c9683ecc2_prof);

        
        $__internal_e35150cb39c44c23ef5c5ac9afa0ca1d13ac86d92d4f462975432ed73ec6699c->leave($__internal_e35150cb39c44c23ef5c5ac9afa0ca1d13ac86d92d4f462975432ed73ec6699c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e84c46ab9eb5d2798db6f0cf6940b2bab353ab570cca13f50fcd80373ad43dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e84c46ab9eb5d2798db6f0cf6940b2bab353ab570cca13f50fcd80373ad43dd->enter($__internal_3e84c46ab9eb5d2798db6f0cf6940b2bab353ab570cca13f50fcd80373ad43dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e7f3d42f9c20fa88a39a7616e9f593cd47cce674a3e9cefb45807cc194cf6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7f3d42f9c20fa88a39a7616e9f593cd47cce674a3e9cefb45807cc194cf6ec->enter($__internal_4e7f3d42f9c20fa88a39a7616e9f593cd47cce674a3e9cefb45807cc194cf6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e7f3d42f9c20fa88a39a7616e9f593cd47cce674a3e9cefb45807cc194cf6ec->leave($__internal_4e7f3d42f9c20fa88a39a7616e9f593cd47cce674a3e9cefb45807cc194cf6ec_prof);

        
        $__internal_3e84c46ab9eb5d2798db6f0cf6940b2bab353ab570cca13f50fcd80373ad43dd->leave($__internal_3e84c46ab9eb5d2798db6f0cf6940b2bab353ab570cca13f50fcd80373ad43dd_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
