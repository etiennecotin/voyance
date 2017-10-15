<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ed8cc99fb6baceabb10bfa07efc040a8310022230172e7b40b0a17ce928629e4 extends Twig_Template
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
        $__internal_993ee12c33fd68e987f5dfbb46ef075ed481a3c5931d42fa1c99098356b81371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993ee12c33fd68e987f5dfbb46ef075ed481a3c5931d42fa1c99098356b81371->enter($__internal_993ee12c33fd68e987f5dfbb46ef075ed481a3c5931d42fa1c99098356b81371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_83de35132936821fc225b3b15ab76fded1e7a4236d1c812876cd72bc5b106d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83de35132936821fc225b3b15ab76fded1e7a4236d1c812876cd72bc5b106d18->enter($__internal_83de35132936821fc225b3b15ab76fded1e7a4236d1c812876cd72bc5b106d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993ee12c33fd68e987f5dfbb46ef075ed481a3c5931d42fa1c99098356b81371->leave($__internal_993ee12c33fd68e987f5dfbb46ef075ed481a3c5931d42fa1c99098356b81371_prof);

        
        $__internal_83de35132936821fc225b3b15ab76fded1e7a4236d1c812876cd72bc5b106d18->leave($__internal_83de35132936821fc225b3b15ab76fded1e7a4236d1c812876cd72bc5b106d18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b4a1ee34628d1036eb96b728a1ffddc5b68865ae934b735aedc44bdcddd061b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b4a1ee34628d1036eb96b728a1ffddc5b68865ae934b735aedc44bdcddd061b->enter($__internal_7b4a1ee34628d1036eb96b728a1ffddc5b68865ae934b735aedc44bdcddd061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3b441977944c701e03493908b5f84d903f888dae90ebd68dabee096b8a1439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b441977944c701e03493908b5f84d903f888dae90ebd68dabee096b8a1439a->enter($__internal_e3b441977944c701e03493908b5f84d903f888dae90ebd68dabee096b8a1439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e3b441977944c701e03493908b5f84d903f888dae90ebd68dabee096b8a1439a->leave($__internal_e3b441977944c701e03493908b5f84d903f888dae90ebd68dabee096b8a1439a_prof);

        
        $__internal_7b4a1ee34628d1036eb96b728a1ffddc5b68865ae934b735aedc44bdcddd061b->leave($__internal_7b4a1ee34628d1036eb96b728a1ffddc5b68865ae934b735aedc44bdcddd061b_prof);

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
