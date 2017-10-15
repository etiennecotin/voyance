<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_2114eff038007c6807da2856d6d62fbbcd30dca90df3f08130e25cb13f7137d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe991bfd977c9077042f4b40e0088c52d07d31f1f37149c7e0ddeba00ff84c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe991bfd977c9077042f4b40e0088c52d07d31f1f37149c7e0ddeba00ff84c7d->enter($__internal_fe991bfd977c9077042f4b40e0088c52d07d31f1f37149c7e0ddeba00ff84c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_28de6a67754bf4bc7653d08483aa0de544ad32f2700ba937473f6c57d0bceccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28de6a67754bf4bc7653d08483aa0de544ad32f2700ba937473f6c57d0bceccc->enter($__internal_28de6a67754bf4bc7653d08483aa0de544ad32f2700ba937473f6c57d0bceccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">

        <h3>M'inscrire</h3>

            ";
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 9
        echo "
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
</div>
";
        
        $__internal_fe991bfd977c9077042f4b40e0088c52d07d31f1f37149c7e0ddeba00ff84c7d->leave($__internal_fe991bfd977c9077042f4b40e0088c52d07d31f1f37149c7e0ddeba00ff84c7d_prof);

        
        $__internal_28de6a67754bf4bc7653d08483aa0de544ad32f2700ba937473f6c57d0bceccc->leave($__internal_28de6a67754bf4bc7653d08483aa0de544ad32f2700ba937473f6c57d0bceccc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 13,  42 => 11,  38 => 10,  35 => 9,  33 => 8,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
    <div class=\"row\">

        <h3>M'inscrire</h3>

            {% form_theme form 'bootstrap_3_layout.html.twig' %}

            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                {{ form_widget(form) }}
                <div>
                    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                </div>
            {{ form_end(form) }}

    </div>
</div>
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
