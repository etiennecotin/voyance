<?php

/* AppBundle::Default/header.html.twig */
class __TwigTemplate_47a465bbf0b3050172f5c167e965a1b53af4ee3d2733be747779b36745d8f219 extends Twig_Template
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
        $__internal_06629905fff625f79f2ce542fcf7014de72b9fc839da80bee5d33ce34e994bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06629905fff625f79f2ce542fcf7014de72b9fc839da80bee5d33ce34e994bea->enter($__internal_06629905fff625f79f2ce542fcf7014de72b9fc839da80bee5d33ce34e994bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Default/header.html.twig"));

        $__internal_01ca1b2fb1772c7c1ef681ed45000eb5634b94673d97d76c66def6f7a24c003a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ca1b2fb1772c7c1ef681ed45000eb5634b94673d97d76c66def6f7a24c003a->enter($__internal_01ca1b2fb1772c7c1ef681ed45000eb5634b94673d97d76c66def6f7a24c003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::Default/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        ";
        // line 5
        echo "            ";
        // line 6
        echo "                ";
        // line 7
        echo "                ";
        // line 8
        echo "                ";
        // line 9
        echo "                ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "        ";
        // line 13
        echo "

            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("accueilpage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("predictionpage");
        echo "\">Prédiction</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("horoscopepage");
        echo "\">Horoscope</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                        ";
        } else {
            // line 24
            echo "                            Mon compte
                        ";
        }
        // line 26
        echo "                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "
                                ";
            // line 31
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                                    <li>
                                        <a href=\"";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\" target=\"_blank\"> Admin</a>
                                    </li>
                                ";
            }
            // line 36
            echo "
                            <li> <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"> Mon profil </a></li>
                           <li> <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                               </a>
                           </li>
                        ";
        } else {
            // line 43
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                            <li><a href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.register", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_06629905fff625f79f2ce542fcf7014de72b9fc839da80bee5d33ce34e994bea->leave($__internal_06629905fff625f79f2ce542fcf7014de72b9fc839da80bee5d33ce34e994bea_prof);

        
        $__internal_01ca1b2fb1772c7c1ef681ed45000eb5634b94673d97d76c66def6f7a24c003a->leave($__internal_01ca1b2fb1772c7c1ef681ed45000eb5634b94673d97d76c66def6f7a24c003a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::Default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 44,  116 => 43,  109 => 39,  105 => 38,  101 => 37,  98 => 36,  92 => 33,  89 => 32,  87 => 31,  84 => 30,  82 => 29,  77 => 26,  73 => 24,  67 => 22,  65 => 21,  59 => 18,  55 => 17,  51 => 16,  46 => 13,  44 => 12,  42 => 11,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  30 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        {#<div class=\"navbar-header\">#}
            {#<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">#}
                {#<span class=\"sr-only\">Toggle navigation</span>#}
                {#<span class=\"icon-bar\"></span>#}
                {#<span class=\"icon-bar\"></span>#}
                {#<span class=\"icon-bar\"></span>#}
            {#</button>#}
            {#<a class=\"navbar-brand\" href=\"#\">Brand</a>#}
        {#</div>#}


            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"{{ url('accueilpage') }}\">Accueil</a></li>
                <li><a href=\"{{ url('predictionpage') }}\">Prédiction</a></li>
                <li><a href=\"{{ url('horoscopepage') }}\">Horoscope</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}
                        {% else %}
                            Mon compte
                        {% endif %}
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                                {% if is_granted(\"ROLE_ADMIN\") %}
                                    <li>
                                        <a href=\"{{ path('admin') }}\" target=\"_blank\"> Admin</a>
                                    </li>
                                {% endif %}

                            <li> <a href=\"{{ path('fos_user_profile_show') }}\"> Mon profil </a></li>
                           <li> <a href=\"{{ path('fos_user_security_logout') }}\">
                                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                               </a>
                           </li>
                        {% else %}
                            <li><a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>
                            <li><a href=\"{{ path('fos_user_registration_register') }}\">{{ 'layout.register'|trans({}, 'FOSUserBundle') }}</a></li>
                        {% endif %}
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "AppBundle::Default/header.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\src\\AppBundle/Resources/views/Default/header.html.twig");
    }
}
