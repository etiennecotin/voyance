<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4096ade5e99596112844bb7eb3c5b368fbc7689c4cc16bc2d93a740b3ae53057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c2deeb9a70e570977c1ab0e0f1f80ad4ec2e06f9dd8a685c6cac9dd0640b1e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2deeb9a70e570977c1ab0e0f1f80ad4ec2e06f9dd8a685c6cac9dd0640b1e42->enter($__internal_c2deeb9a70e570977c1ab0e0f1f80ad4ec2e06f9dd8a685c6cac9dd0640b1e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ef20061794b582a490eb96471bafa622c72c6b24d77c28d4a0cbce780237566e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef20061794b582a490eb96471bafa622c72c6b24d77c28d4a0cbce780237566e->enter($__internal_ef20061794b582a490eb96471bafa622c72c6b24d77c28d4a0cbce780237566e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2deeb9a70e570977c1ab0e0f1f80ad4ec2e06f9dd8a685c6cac9dd0640b1e42->leave($__internal_c2deeb9a70e570977c1ab0e0f1f80ad4ec2e06f9dd8a685c6cac9dd0640b1e42_prof);

        
        $__internal_ef20061794b582a490eb96471bafa622c72c6b24d77c28d4a0cbce780237566e->leave($__internal_ef20061794b582a490eb96471bafa622c72c6b24d77c28d4a0cbce780237566e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8a8e44c0516e1786b73c9806917e6fcf9c85ac5aa81229d7ea81f33852b2e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a8e44c0516e1786b73c9806917e6fcf9c85ac5aa81229d7ea81f33852b2e31->enter($__internal_b8a8e44c0516e1786b73c9806917e6fcf9c85ac5aa81229d7ea81f33852b2e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c14e27f7897e7e06584f6515a5acf7ccb86fe407019349dfeee877c4f1fe81e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14e27f7897e7e06584f6515a5acf7ccb86fe407019349dfeee877c4f1fe81e8->enter($__internal_c14e27f7897e7e06584f6515a5acf7ccb86fe407019349dfeee877c4f1fe81e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c14e27f7897e7e06584f6515a5acf7ccb86fe407019349dfeee877c4f1fe81e8->leave($__internal_c14e27f7897e7e06584f6515a5acf7ccb86fe407019349dfeee877c4f1fe81e8_prof);

        
        $__internal_b8a8e44c0516e1786b73c9806917e6fcf9c85ac5aa81229d7ea81f33852b2e31->leave($__internal_b8a8e44c0516e1786b73c9806917e6fcf9c85ac5aa81229d7ea81f33852b2e31_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e3e0c9ff2085e737834c332a90deebe8db1360d94c5e9d5fc1c052b1ea78421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e0c9ff2085e737834c332a90deebe8db1360d94c5e9d5fc1c052b1ea78421->enter($__internal_3e3e0c9ff2085e737834c332a90deebe8db1360d94c5e9d5fc1c052b1ea78421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b52a7f53e0b4b0f1c1341e35061ac2797965534983d3fd3529487712efdd906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52a7f53e0b4b0f1c1341e35061ac2797965534983d3fd3529487712efdd906a->enter($__internal_b52a7f53e0b4b0f1c1341e35061ac2797965534983d3fd3529487712efdd906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b52a7f53e0b4b0f1c1341e35061ac2797965534983d3fd3529487712efdd906a->leave($__internal_b52a7f53e0b4b0f1c1341e35061ac2797965534983d3fd3529487712efdd906a_prof);

        
        $__internal_3e3e0c9ff2085e737834c332a90deebe8db1360d94c5e9d5fc1c052b1ea78421->leave($__internal_3e3e0c9ff2085e737834c332a90deebe8db1360d94c5e9d5fc1c052b1ea78421_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c801ab57b37b0de8b2be720b027e38ad8bb09ce533aafb60ed33632f0cd47c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c801ab57b37b0de8b2be720b027e38ad8bb09ce533aafb60ed33632f0cd47c9->enter($__internal_2c801ab57b37b0de8b2be720b027e38ad8bb09ce533aafb60ed33632f0cd47c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0fa823ddae6bb7532b8dd7a9849915a94366e80343937964569ac33961150807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa823ddae6bb7532b8dd7a9849915a94366e80343937964569ac33961150807->enter($__internal_0fa823ddae6bb7532b8dd7a9849915a94366e80343937964569ac33961150807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0fa823ddae6bb7532b8dd7a9849915a94366e80343937964569ac33961150807->leave($__internal_0fa823ddae6bb7532b8dd7a9849915a94366e80343937964569ac33961150807_prof);

        
        $__internal_2c801ab57b37b0de8b2be720b027e38ad8bb09ce533aafb60ed33632f0cd47c9->leave($__internal_2c801ab57b37b0de8b2be720b027e38ad8bb09ce533aafb60ed33632f0cd47c9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
