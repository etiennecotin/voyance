<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_00e5ba318fe74b26ecff40800365a474029c9a88f2b21aebab459cbb9ca16507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c70d47ecea8ff2ab35e846fc4c96067acf864ceeb77a375a53bf12a09cd5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c70d47ecea8ff2ab35e846fc4c96067acf864ceeb77a375a53bf12a09cd5bf->enter($__internal_41c70d47ecea8ff2ab35e846fc4c96067acf864ceeb77a375a53bf12a09cd5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_71d95b127d7ffdd54dc80e87225d2154e434c48b469cbc4f5a71306a8ea69d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d95b127d7ffdd54dc80e87225d2154e434c48b469cbc4f5a71306a8ea69d74->enter($__internal_71d95b127d7ffdd54dc80e87225d2154e434c48b469cbc4f5a71306a8ea69d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c70d47ecea8ff2ab35e846fc4c96067acf864ceeb77a375a53bf12a09cd5bf->leave($__internal_41c70d47ecea8ff2ab35e846fc4c96067acf864ceeb77a375a53bf12a09cd5bf_prof);

        
        $__internal_71d95b127d7ffdd54dc80e87225d2154e434c48b469cbc4f5a71306a8ea69d74->leave($__internal_71d95b127d7ffdd54dc80e87225d2154e434c48b469cbc4f5a71306a8ea69d74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8685ecaf711d159a629b19c29b0fba8843458195df2a569692271d1949d9d65d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8685ecaf711d159a629b19c29b0fba8843458195df2a569692271d1949d9d65d->enter($__internal_8685ecaf711d159a629b19c29b0fba8843458195df2a569692271d1949d9d65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5b2205b8864c998468b72d1f21fc36403a8a914b207a7cde9d24cf38778131a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b2205b8864c998468b72d1f21fc36403a8a914b207a7cde9d24cf38778131a->enter($__internal_d5b2205b8864c998468b72d1f21fc36403a8a914b207a7cde9d24cf38778131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d5b2205b8864c998468b72d1f21fc36403a8a914b207a7cde9d24cf38778131a->leave($__internal_d5b2205b8864c998468b72d1f21fc36403a8a914b207a7cde9d24cf38778131a_prof);

        
        $__internal_8685ecaf711d159a629b19c29b0fba8843458195df2a569692271d1949d9d65d->leave($__internal_8685ecaf711d159a629b19c29b0fba8843458195df2a569692271d1949d9d65d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
