<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_430614bf3dd8b81df81c5df94ce5b0e6ff26a01f69946f4d7275b5b8ffc16c0b extends Twig_Template
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
        $__internal_7c368fac4ef5a63e29df559987e1b388544b437fe92ab7a522f2fbe9e90299e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c368fac4ef5a63e29df559987e1b388544b437fe92ab7a522f2fbe9e90299e8->enter($__internal_7c368fac4ef5a63e29df559987e1b388544b437fe92ab7a522f2fbe9e90299e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5effa308a74fe2afd3d21b627610438eb74d344ba998513449e05203cdb421a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5effa308a74fe2afd3d21b627610438eb74d344ba998513449e05203cdb421a5->enter($__internal_5effa308a74fe2afd3d21b627610438eb74d344ba998513449e05203cdb421a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c368fac4ef5a63e29df559987e1b388544b437fe92ab7a522f2fbe9e90299e8->leave($__internal_7c368fac4ef5a63e29df559987e1b388544b437fe92ab7a522f2fbe9e90299e8_prof);

        
        $__internal_5effa308a74fe2afd3d21b627610438eb74d344ba998513449e05203cdb421a5->leave($__internal_5effa308a74fe2afd3d21b627610438eb74d344ba998513449e05203cdb421a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5032a39c0e35a9c2d0aa8287db9ef4afcf543a3a44659655d8e7da681fcf779d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5032a39c0e35a9c2d0aa8287db9ef4afcf543a3a44659655d8e7da681fcf779d->enter($__internal_5032a39c0e35a9c2d0aa8287db9ef4afcf543a3a44659655d8e7da681fcf779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb745c1baaddebeb43d24e71841ee957df8c784b056d25b7ba6b979d3807a5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb745c1baaddebeb43d24e71841ee957df8c784b056d25b7ba6b979d3807a5f4->enter($__internal_eb745c1baaddebeb43d24e71841ee957df8c784b056d25b7ba6b979d3807a5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb745c1baaddebeb43d24e71841ee957df8c784b056d25b7ba6b979d3807a5f4->leave($__internal_eb745c1baaddebeb43d24e71841ee957df8c784b056d25b7ba6b979d3807a5f4_prof);

        
        $__internal_5032a39c0e35a9c2d0aa8287db9ef4afcf543a3a44659655d8e7da681fcf779d->leave($__internal_5032a39c0e35a9c2d0aa8287db9ef4afcf543a3a44659655d8e7da681fcf779d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_737e2bcc5811293d6a045756a8d4b152fd5c3fa6cc1db41f6e0dc45920fbde5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737e2bcc5811293d6a045756a8d4b152fd5c3fa6cc1db41f6e0dc45920fbde5b->enter($__internal_737e2bcc5811293d6a045756a8d4b152fd5c3fa6cc1db41f6e0dc45920fbde5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed8208932910e4df36fe6f741aa288e7adf3103688839004d2779c459189f2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8208932910e4df36fe6f741aa288e7adf3103688839004d2779c459189f2bf->enter($__internal_ed8208932910e4df36fe6f741aa288e7adf3103688839004d2779c459189f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ed8208932910e4df36fe6f741aa288e7adf3103688839004d2779c459189f2bf->leave($__internal_ed8208932910e4df36fe6f741aa288e7adf3103688839004d2779c459189f2bf_prof);

        
        $__internal_737e2bcc5811293d6a045756a8d4b152fd5c3fa6cc1db41f6e0dc45920fbde5b->leave($__internal_737e2bcc5811293d6a045756a8d4b152fd5c3fa6cc1db41f6e0dc45920fbde5b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad07003f3cf00f6a3d83d0630a9f8c47ca02dbbfb8a7dd880d26f0953b154d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad07003f3cf00f6a3d83d0630a9f8c47ca02dbbfb8a7dd880d26f0953b154d12->enter($__internal_ad07003f3cf00f6a3d83d0630a9f8c47ca02dbbfb8a7dd880d26f0953b154d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c908850b13b6e68f8a70184a4f98d46aa8ffd6983c844c6503dfb66bd548710c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c908850b13b6e68f8a70184a4f98d46aa8ffd6983c844c6503dfb66bd548710c->enter($__internal_c908850b13b6e68f8a70184a4f98d46aa8ffd6983c844c6503dfb66bd548710c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c908850b13b6e68f8a70184a4f98d46aa8ffd6983c844c6503dfb66bd548710c->leave($__internal_c908850b13b6e68f8a70184a4f98d46aa8ffd6983c844c6503dfb66bd548710c_prof);

        
        $__internal_ad07003f3cf00f6a3d83d0630a9f8c47ca02dbbfb8a7dd880d26f0953b154d12->leave($__internal_ad07003f3cf00f6a3d83d0630a9f8c47ca02dbbfb8a7dd880d26f0953b154d12_prof);

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
