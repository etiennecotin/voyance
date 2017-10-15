<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f879a5b56ee6ae95e890e2f2562fed6a0a1dd8d7810b81aa2fea049ebf3d837c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8c05ee943098860c6116e147eeac602d33e62f053eefa53dce1c2ee274d1ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c05ee943098860c6116e147eeac602d33e62f053eefa53dce1c2ee274d1ff1->enter($__internal_c8c05ee943098860c6116e147eeac602d33e62f053eefa53dce1c2ee274d1ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d425c15485a153e316d1c046e9281c252ff48ca64fdfe9916d85f5c2ce670903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d425c15485a153e316d1c046e9281c252ff48ca64fdfe9916d85f5c2ce670903->enter($__internal_d425c15485a153e316d1c046e9281c252ff48ca64fdfe9916d85f5c2ce670903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c05ee943098860c6116e147eeac602d33e62f053eefa53dce1c2ee274d1ff1->leave($__internal_c8c05ee943098860c6116e147eeac602d33e62f053eefa53dce1c2ee274d1ff1_prof);

        
        $__internal_d425c15485a153e316d1c046e9281c252ff48ca64fdfe9916d85f5c2ce670903->leave($__internal_d425c15485a153e316d1c046e9281c252ff48ca64fdfe9916d85f5c2ce670903_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e0d3307110783b2a1add77de7846e6e63224ed373d2dcb11e37199ae09846ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0d3307110783b2a1add77de7846e6e63224ed373d2dcb11e37199ae09846ca->enter($__internal_3e0d3307110783b2a1add77de7846e6e63224ed373d2dcb11e37199ae09846ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44e1a9806e80ba66d7be11951ee2bca9a24079f70120357c6ce4c11ecb0c8d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e1a9806e80ba66d7be11951ee2bca9a24079f70120357c6ce4c11ecb0c8d88->enter($__internal_44e1a9806e80ba66d7be11951ee2bca9a24079f70120357c6ce4c11ecb0c8d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_44e1a9806e80ba66d7be11951ee2bca9a24079f70120357c6ce4c11ecb0c8d88->leave($__internal_44e1a9806e80ba66d7be11951ee2bca9a24079f70120357c6ce4c11ecb0c8d88_prof);

        
        $__internal_3e0d3307110783b2a1add77de7846e6e63224ed373d2dcb11e37199ae09846ca->leave($__internal_3e0d3307110783b2a1add77de7846e6e63224ed373d2dcb11e37199ae09846ca_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
