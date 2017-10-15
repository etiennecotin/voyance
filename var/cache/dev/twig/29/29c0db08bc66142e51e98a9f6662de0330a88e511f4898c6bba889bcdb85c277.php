<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b598e84aec14c060585ded596f118e45e3d93293b1aa41c44e25509b4ecd0d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_1fd786cded2e2b5091e9d9ddf74119c0d5ed3360a7102886311b930826e7a194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd786cded2e2b5091e9d9ddf74119c0d5ed3360a7102886311b930826e7a194->enter($__internal_1fd786cded2e2b5091e9d9ddf74119c0d5ed3360a7102886311b930826e7a194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6552a61a8d79e2048645febab01778a6a4bd28c1f38dacd7b85dadb7fd09b8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6552a61a8d79e2048645febab01778a6a4bd28c1f38dacd7b85dadb7fd09b8db->enter($__internal_6552a61a8d79e2048645febab01778a6a4bd28c1f38dacd7b85dadb7fd09b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd786cded2e2b5091e9d9ddf74119c0d5ed3360a7102886311b930826e7a194->leave($__internal_1fd786cded2e2b5091e9d9ddf74119c0d5ed3360a7102886311b930826e7a194_prof);

        
        $__internal_6552a61a8d79e2048645febab01778a6a4bd28c1f38dacd7b85dadb7fd09b8db->leave($__internal_6552a61a8d79e2048645febab01778a6a4bd28c1f38dacd7b85dadb7fd09b8db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22c008b908b95f1f2e7771e70f8c9aab8b157cdc687a98ebed40f2c56aa6799b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c008b908b95f1f2e7771e70f8c9aab8b157cdc687a98ebed40f2c56aa6799b->enter($__internal_22c008b908b95f1f2e7771e70f8c9aab8b157cdc687a98ebed40f2c56aa6799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ea57d8d6129819aa8fb76c91e521b353cec6421b5884b3aaa20c6980f45a936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea57d8d6129819aa8fb76c91e521b353cec6421b5884b3aaa20c6980f45a936->enter($__internal_7ea57d8d6129819aa8fb76c91e521b353cec6421b5884b3aaa20c6980f45a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7ea57d8d6129819aa8fb76c91e521b353cec6421b5884b3aaa20c6980f45a936->leave($__internal_7ea57d8d6129819aa8fb76c91e521b353cec6421b5884b3aaa20c6980f45a936_prof);

        
        $__internal_22c008b908b95f1f2e7771e70f8c9aab8b157cdc687a98ebed40f2c56aa6799b->leave($__internal_22c008b908b95f1f2e7771e70f8c9aab8b157cdc687a98ebed40f2c56aa6799b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock body %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
