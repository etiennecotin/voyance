<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_620b8c748cbff85abe58b646b7eeb7a4c3f897fc323abb243f1179aeb7f6dc6b extends Twig_Template
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
        $__internal_2afb1440c6205cab5c731dfc1b6c375ddddff186a6fcda0475b8f608116fcaaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afb1440c6205cab5c731dfc1b6c375ddddff186a6fcda0475b8f608116fcaaa->enter($__internal_2afb1440c6205cab5c731dfc1b6c375ddddff186a6fcda0475b8f608116fcaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_37baa1db9358397022e6a1d6b45a7a14d572cfb61027f167db67ed16752d0a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37baa1db9358397022e6a1d6b45a7a14d572cfb61027f167db67ed16752d0a8a->enter($__internal_37baa1db9358397022e6a1d6b45a7a14d572cfb61027f167db67ed16752d0a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2afb1440c6205cab5c731dfc1b6c375ddddff186a6fcda0475b8f608116fcaaa->leave($__internal_2afb1440c6205cab5c731dfc1b6c375ddddff186a6fcda0475b8f608116fcaaa_prof);

        
        $__internal_37baa1db9358397022e6a1d6b45a7a14d572cfb61027f167db67ed16752d0a8a->leave($__internal_37baa1db9358397022e6a1d6b45a7a14d572cfb61027f167db67ed16752d0a8a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bffe80307c08497aaa28533dadb80fe10ea01d238aa4dbb7a15f5f9829a8a55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bffe80307c08497aaa28533dadb80fe10ea01d238aa4dbb7a15f5f9829a8a55f->enter($__internal_bffe80307c08497aaa28533dadb80fe10ea01d238aa4dbb7a15f5f9829a8a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7190e52122c3047433b12f06a75e92131b142c973feb301e15829f0368ab53e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7190e52122c3047433b12f06a75e92131b142c973feb301e15829f0368ab53e2->enter($__internal_7190e52122c3047433b12f06a75e92131b142c973feb301e15829f0368ab53e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7190e52122c3047433b12f06a75e92131b142c973feb301e15829f0368ab53e2->leave($__internal_7190e52122c3047433b12f06a75e92131b142c973feb301e15829f0368ab53e2_prof);

        
        $__internal_bffe80307c08497aaa28533dadb80fe10ea01d238aa4dbb7a15f5f9829a8a55f->leave($__internal_bffe80307c08497aaa28533dadb80fe10ea01d238aa4dbb7a15f5f9829a8a55f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e82d55db893210a97a8e67501f4fc6c5ccb050acde7ca05fb8cbe02a656e4461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82d55db893210a97a8e67501f4fc6c5ccb050acde7ca05fb8cbe02a656e4461->enter($__internal_e82d55db893210a97a8e67501f4fc6c5ccb050acde7ca05fb8cbe02a656e4461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a979291c9d3e940ee012a1cd5006497b6f91c0d6b05d9238f8829ac96bfc8f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a979291c9d3e940ee012a1cd5006497b6f91c0d6b05d9238f8829ac96bfc8f54->enter($__internal_a979291c9d3e940ee012a1cd5006497b6f91c0d6b05d9238f8829ac96bfc8f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a979291c9d3e940ee012a1cd5006497b6f91c0d6b05d9238f8829ac96bfc8f54->leave($__internal_a979291c9d3e940ee012a1cd5006497b6f91c0d6b05d9238f8829ac96bfc8f54_prof);

        
        $__internal_e82d55db893210a97a8e67501f4fc6c5ccb050acde7ca05fb8cbe02a656e4461->leave($__internal_e82d55db893210a97a8e67501f4fc6c5ccb050acde7ca05fb8cbe02a656e4461_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_814cd376dbe0c21755ef33430099034cb4b7edea212245e6ce4815e63a8f6ccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814cd376dbe0c21755ef33430099034cb4b7edea212245e6ce4815e63a8f6ccc->enter($__internal_814cd376dbe0c21755ef33430099034cb4b7edea212245e6ce4815e63a8f6ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4b18120042072fd948b92ff202f788c543a9e4b08812d05ab4b90408828ff0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b18120042072fd948b92ff202f788c543a9e4b08812d05ab4b90408828ff0e->enter($__internal_e4b18120042072fd948b92ff202f788c543a9e4b08812d05ab4b90408828ff0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e4b18120042072fd948b92ff202f788c543a9e4b08812d05ab4b90408828ff0e->leave($__internal_e4b18120042072fd948b92ff202f788c543a9e4b08812d05ab4b90408828ff0e_prof);

        
        $__internal_814cd376dbe0c21755ef33430099034cb4b7edea212245e6ce4815e63a8f6ccc->leave($__internal_814cd376dbe0c21755ef33430099034cb4b7edea212245e6ce4815e63a8f6ccc_prof);

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
