<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_27ac0f1d8596f35084c3782b375f9fdb2c5ae3c23337864f831468673eb80083 extends Twig_Template
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
        $__internal_311ea4b94a79277a9e957a36ca3f9f04762c8abbedbdb260bd88c7f195893600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311ea4b94a79277a9e957a36ca3f9f04762c8abbedbdb260bd88c7f195893600->enter($__internal_311ea4b94a79277a9e957a36ca3f9f04762c8abbedbdb260bd88c7f195893600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_36258de86f179a760ccace94c491376403c65a2377565d25c35039082c86aa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36258de86f179a760ccace94c491376403c65a2377565d25c35039082c86aa39->enter($__internal_36258de86f179a760ccace94c491376403c65a2377565d25c35039082c86aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311ea4b94a79277a9e957a36ca3f9f04762c8abbedbdb260bd88c7f195893600->leave($__internal_311ea4b94a79277a9e957a36ca3f9f04762c8abbedbdb260bd88c7f195893600_prof);

        
        $__internal_36258de86f179a760ccace94c491376403c65a2377565d25c35039082c86aa39->leave($__internal_36258de86f179a760ccace94c491376403c65a2377565d25c35039082c86aa39_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e01829528a66c701bfd8eb1f88f8bca732a270f649597149164422e9d1368dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e01829528a66c701bfd8eb1f88f8bca732a270f649597149164422e9d1368dc->enter($__internal_5e01829528a66c701bfd8eb1f88f8bca732a270f649597149164422e9d1368dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00e766b49ee15d484c90a369c7f24cf0f8d4b3569a52886cbb3420e0859cd9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e766b49ee15d484c90a369c7f24cf0f8d4b3569a52886cbb3420e0859cd9db->enter($__internal_00e766b49ee15d484c90a369c7f24cf0f8d4b3569a52886cbb3420e0859cd9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00e766b49ee15d484c90a369c7f24cf0f8d4b3569a52886cbb3420e0859cd9db->leave($__internal_00e766b49ee15d484c90a369c7f24cf0f8d4b3569a52886cbb3420e0859cd9db_prof);

        
        $__internal_5e01829528a66c701bfd8eb1f88f8bca732a270f649597149164422e9d1368dc->leave($__internal_5e01829528a66c701bfd8eb1f88f8bca732a270f649597149164422e9d1368dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ffc5148cf47b16263e7f632b1fee5961daacf1526cf6e9af52ead99f4936b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffc5148cf47b16263e7f632b1fee5961daacf1526cf6e9af52ead99f4936b94->enter($__internal_1ffc5148cf47b16263e7f632b1fee5961daacf1526cf6e9af52ead99f4936b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_32982d8eec38600a17045e4593e57b24e6a6304ee886e664916127649b2e5ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32982d8eec38600a17045e4593e57b24e6a6304ee886e664916127649b2e5ce1->enter($__internal_32982d8eec38600a17045e4593e57b24e6a6304ee886e664916127649b2e5ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32982d8eec38600a17045e4593e57b24e6a6304ee886e664916127649b2e5ce1->leave($__internal_32982d8eec38600a17045e4593e57b24e6a6304ee886e664916127649b2e5ce1_prof);

        
        $__internal_1ffc5148cf47b16263e7f632b1fee5961daacf1526cf6e9af52ead99f4936b94->leave($__internal_1ffc5148cf47b16263e7f632b1fee5961daacf1526cf6e9af52ead99f4936b94_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c375b543d65d98eb2e36525a8d6dd85ded02ca5f6a39f01e019978d190ffedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c375b543d65d98eb2e36525a8d6dd85ded02ca5f6a39f01e019978d190ffedb->enter($__internal_6c375b543d65d98eb2e36525a8d6dd85ded02ca5f6a39f01e019978d190ffedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08e73c55a20625eaf8c527142ac4c9a96d70d4b59a06466cb0bd473a918f499b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e73c55a20625eaf8c527142ac4c9a96d70d4b59a06466cb0bd473a918f499b->enter($__internal_08e73c55a20625eaf8c527142ac4c9a96d70d4b59a06466cb0bd473a918f499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08e73c55a20625eaf8c527142ac4c9a96d70d4b59a06466cb0bd473a918f499b->leave($__internal_08e73c55a20625eaf8c527142ac4c9a96d70d4b59a06466cb0bd473a918f499b_prof);

        
        $__internal_6c375b543d65d98eb2e36525a8d6dd85ded02ca5f6a39f01e019978d190ffedb->leave($__internal_6c375b543d65d98eb2e36525a8d6dd85ded02ca5f6a39f01e019978d190ffedb_prof);

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
