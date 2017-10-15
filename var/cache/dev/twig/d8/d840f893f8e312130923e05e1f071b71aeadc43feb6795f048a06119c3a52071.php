<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a13630ce0d9f9496b8c9d93fccf15c2cad23380f31b061cb1cbd661af421378d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3dfbf3aaf732b355b7f3fbb84074e6e928a4217f773cfa7c3ad48fc7a6009c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dfbf3aaf732b355b7f3fbb84074e6e928a4217f773cfa7c3ad48fc7a6009c7->enter($__internal_b3dfbf3aaf732b355b7f3fbb84074e6e928a4217f773cfa7c3ad48fc7a6009c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e45be98a4d89d94a65768be5eb66e39a58da8d5b8df7a4a440717e2878f81dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45be98a4d89d94a65768be5eb66e39a58da8d5b8df7a4a440717e2878f81dff->enter($__internal_e45be98a4d89d94a65768be5eb66e39a58da8d5b8df7a4a440717e2878f81dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3dfbf3aaf732b355b7f3fbb84074e6e928a4217f773cfa7c3ad48fc7a6009c7->leave($__internal_b3dfbf3aaf732b355b7f3fbb84074e6e928a4217f773cfa7c3ad48fc7a6009c7_prof);

        
        $__internal_e45be98a4d89d94a65768be5eb66e39a58da8d5b8df7a4a440717e2878f81dff->leave($__internal_e45be98a4d89d94a65768be5eb66e39a58da8d5b8df7a4a440717e2878f81dff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0e56b6ca809c8ab5d0067882a9da81904fdfe069e9814546fe61bd4527cf39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e56b6ca809c8ab5d0067882a9da81904fdfe069e9814546fe61bd4527cf39c->enter($__internal_b0e56b6ca809c8ab5d0067882a9da81904fdfe069e9814546fe61bd4527cf39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1a30bf93364575c5e5fc28fa19b024966fdfd52daaf118f54fe6ec9556680af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a30bf93364575c5e5fc28fa19b024966fdfd52daaf118f54fe6ec9556680af->enter($__internal_c1a30bf93364575c5e5fc28fa19b024966fdfd52daaf118f54fe6ec9556680af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c1a30bf93364575c5e5fc28fa19b024966fdfd52daaf118f54fe6ec9556680af->leave($__internal_c1a30bf93364575c5e5fc28fa19b024966fdfd52daaf118f54fe6ec9556680af_prof);

        
        $__internal_b0e56b6ca809c8ab5d0067882a9da81904fdfe069e9814546fe61bd4527cf39c->leave($__internal_b0e56b6ca809c8ab5d0067882a9da81904fdfe069e9814546fe61bd4527cf39c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae750e0ccfde21979e27cdb4173c2ec63c364bb191dd6905c524be705b872b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae750e0ccfde21979e27cdb4173c2ec63c364bb191dd6905c524be705b872b83->enter($__internal_ae750e0ccfde21979e27cdb4173c2ec63c364bb191dd6905c524be705b872b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b8f6cdb32f996a08251123f8d1d626c4b4ccb9f4e5afc57302bcc66ac52ff7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8f6cdb32f996a08251123f8d1d626c4b4ccb9f4e5afc57302bcc66ac52ff7c->enter($__internal_4b8f6cdb32f996a08251123f8d1d626c4b4ccb9f4e5afc57302bcc66ac52ff7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b8f6cdb32f996a08251123f8d1d626c4b4ccb9f4e5afc57302bcc66ac52ff7c->leave($__internal_4b8f6cdb32f996a08251123f8d1d626c4b4ccb9f4e5afc57302bcc66ac52ff7c_prof);

        
        $__internal_ae750e0ccfde21979e27cdb4173c2ec63c364bb191dd6905c524be705b872b83->leave($__internal_ae750e0ccfde21979e27cdb4173c2ec63c364bb191dd6905c524be705b872b83_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3edf6eec3ce5c480d0ab7bd43e6101998e72a5d99b1d889e19eb48c9f9339440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edf6eec3ce5c480d0ab7bd43e6101998e72a5d99b1d889e19eb48c9f9339440->enter($__internal_3edf6eec3ce5c480d0ab7bd43e6101998e72a5d99b1d889e19eb48c9f9339440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3131545da7de06d5f11c7dec64700e8b384bddb16d8d6091623e4c4a451bc715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3131545da7de06d5f11c7dec64700e8b384bddb16d8d6091623e4c4a451bc715->enter($__internal_3131545da7de06d5f11c7dec64700e8b384bddb16d8d6091623e4c4a451bc715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3131545da7de06d5f11c7dec64700e8b384bddb16d8d6091623e4c4a451bc715->leave($__internal_3131545da7de06d5f11c7dec64700e8b384bddb16d8d6091623e4c4a451bc715_prof);

        
        $__internal_3edf6eec3ce5c480d0ab7bd43e6101998e72a5d99b1d889e19eb48c9f9339440->leave($__internal_3edf6eec3ce5c480d0ab7bd43e6101998e72a5d99b1d889e19eb48c9f9339440_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
