<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e0d23c0139856653cab375dd33a8b6749c1221721cbe153de8ce54128f2f323e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_336e213a7cc844562eb6ceb2c484de95cc267fdda8efea98f85bbfddbf4d76ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_336e213a7cc844562eb6ceb2c484de95cc267fdda8efea98f85bbfddbf4d76ab->enter($__internal_336e213a7cc844562eb6ceb2c484de95cc267fdda8efea98f85bbfddbf4d76ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_44ae4bb445b38a0afef1037cfad30b16acf7de697d9a3d93fbce12fc8f349b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ae4bb445b38a0afef1037cfad30b16acf7de697d9a3d93fbce12fc8f349b0e->enter($__internal_44ae4bb445b38a0afef1037cfad30b16acf7de697d9a3d93fbce12fc8f349b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_336e213a7cc844562eb6ceb2c484de95cc267fdda8efea98f85bbfddbf4d76ab->leave($__internal_336e213a7cc844562eb6ceb2c484de95cc267fdda8efea98f85bbfddbf4d76ab_prof);

        
        $__internal_44ae4bb445b38a0afef1037cfad30b16acf7de697d9a3d93fbce12fc8f349b0e->leave($__internal_44ae4bb445b38a0afef1037cfad30b16acf7de697d9a3d93fbce12fc8f349b0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7499bce5d6670bcfa478f4f0f732aaacf2574b1122728df8271d361b84315c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7499bce5d6670bcfa478f4f0f732aaacf2574b1122728df8271d361b84315c1c->enter($__internal_7499bce5d6670bcfa478f4f0f732aaacf2574b1122728df8271d361b84315c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52c0e6edc177313dd14865f74a5a6c19426dc67121ed1b7e00845b74fd3ee9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c0e6edc177313dd14865f74a5a6c19426dc67121ed1b7e00845b74fd3ee9bf->enter($__internal_52c0e6edc177313dd14865f74a5a6c19426dc67121ed1b7e00845b74fd3ee9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_52c0e6edc177313dd14865f74a5a6c19426dc67121ed1b7e00845b74fd3ee9bf->leave($__internal_52c0e6edc177313dd14865f74a5a6c19426dc67121ed1b7e00845b74fd3ee9bf_prof);

        
        $__internal_7499bce5d6670bcfa478f4f0f732aaacf2574b1122728df8271d361b84315c1c->leave($__internal_7499bce5d6670bcfa478f4f0f732aaacf2574b1122728df8271d361b84315c1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::base.html.twig\" %}

{% block body %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock body %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
