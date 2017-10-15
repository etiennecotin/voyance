<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_04808bf67ecdafc3557a7f8d74ecfe9ea77b2acf19cd8c4608f795213412e277 extends Twig_Template
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
        $__internal_0695b143e82344207ba7edf61ad1ef2d677a49e4996f80e6d194c0f5295cc7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0695b143e82344207ba7edf61ad1ef2d677a49e4996f80e6d194c0f5295cc7dd->enter($__internal_0695b143e82344207ba7edf61ad1ef2d677a49e4996f80e6d194c0f5295cc7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_9372b543f3248439e77da524ba5eda437d977904b021fca5d09c103c55d3f95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9372b543f3248439e77da524ba5eda437d977904b021fca5d09c103c55d3f95e->enter($__internal_9372b543f3248439e77da524ba5eda437d977904b021fca5d09c103c55d3f95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0695b143e82344207ba7edf61ad1ef2d677a49e4996f80e6d194c0f5295cc7dd->leave($__internal_0695b143e82344207ba7edf61ad1ef2d677a49e4996f80e6d194c0f5295cc7dd_prof);

        
        $__internal_9372b543f3248439e77da524ba5eda437d977904b021fca5d09c103c55d3f95e->leave($__internal_9372b543f3248439e77da524ba5eda437d977904b021fca5d09c103c55d3f95e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
