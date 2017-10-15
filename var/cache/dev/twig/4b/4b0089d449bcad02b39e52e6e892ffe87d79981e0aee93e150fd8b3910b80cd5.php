<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_18b4be7c431ebffae789e0402cfaca5ebde829c044dad3a240740f9a2fd1db30 extends Twig_Template
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
        $__internal_d644a2b4384eabc03c1642d35cff4e47a1fddf54297473ab4bd51187e13ec7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d644a2b4384eabc03c1642d35cff4e47a1fddf54297473ab4bd51187e13ec7a2->enter($__internal_d644a2b4384eabc03c1642d35cff4e47a1fddf54297473ab4bd51187e13ec7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_e5cb3cc87ae696204add828ade2d63d13a28de057177223db1c98c6755997573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cb3cc87ae696204add828ade2d63d13a28de057177223db1c98c6755997573->enter($__internal_e5cb3cc87ae696204add828ade2d63d13a28de057177223db1c98c6755997573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
            <h3>Me connecter</h3>
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"\">
            ";
        // line 7
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 8
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 10
        echo "



            <div class=\"form-group\">
                <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" />
            </div>

            <div class=\"form-group\">
                <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
            </div>

            <div class=\"checkbox\">

                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  />
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
            </div>


            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-default\" />
        </form>

        ";
        // line 36
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 37
            echo "            <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 39
        echo "
    </div>
</div>";
        
        $__internal_d644a2b4384eabc03c1642d35cff4e47a1fddf54297473ab4bd51187e13ec7a2->leave($__internal_d644a2b4384eabc03c1642d35cff4e47a1fddf54297473ab4bd51187e13ec7a2_prof);

        
        $__internal_e5cb3cc87ae696204add828ade2d63d13a28de057177223db1c98c6755997573->leave($__internal_e5cb3cc87ae696204add828ade2d63d13a28de057177223db1c98c6755997573_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  88 => 37,  86 => 36,  80 => 33,  72 => 28,  61 => 20,  54 => 16,  50 => 15,  43 => 10,  37 => 8,  35 => 7,  31 => 6,  25 => 2,);
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
            <h3>Me connecter</h3>
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}




            <div class=\"form-group\">
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" />
            </div>

            <div class=\"form-group\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
            </div>

            <div class=\"checkbox\">

                <label for=\"remember_me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"  />
                    {{ 'security.login.remember_me'|trans }}
                </label>
            </div>


            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" class=\"btn btn-default\" />
        </form>

        {% if error %}
            <div class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

    </div>
</div>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
