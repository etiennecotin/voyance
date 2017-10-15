<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_792a067ae6c68fa2e5d3767ec877d73555057be33a7265c42b5e35a3ad24628b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Default:index.html.twig", 1);
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
        $__internal_dbdc2b122ddf0b8fe563c4da6ec32a8f7268bfa6d103948b8ef399a6649c57e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdc2b122ddf0b8fe563c4da6ec32a8f7268bfa6d103948b8ef399a6649c57e0->enter($__internal_dbdc2b122ddf0b8fe563c4da6ec32a8f7268bfa6d103948b8ef399a6649c57e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_f840622ff637037cd625955d61a4b908232e680a61c4d4b146a5317d8b2581b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f840622ff637037cd625955d61a4b908232e680a61c4d4b146a5317d8b2581b4->enter($__internal_f840622ff637037cd625955d61a4b908232e680a61c4d4b146a5317d8b2581b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbdc2b122ddf0b8fe563c4da6ec32a8f7268bfa6d103948b8ef399a6649c57e0->leave($__internal_dbdc2b122ddf0b8fe563c4da6ec32a8f7268bfa6d103948b8ef399a6649c57e0_prof);

        
        $__internal_f840622ff637037cd625955d61a4b908232e680a61c4d4b146a5317d8b2581b4->leave($__internal_f840622ff637037cd625955d61a4b908232e680a61c4d4b146a5317d8b2581b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8ac86d53c074aa16a35b93f8f76ace5db79aa308abaf4cc4ba10bdb0d0d7da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ac86d53c074aa16a35b93f8f76ace5db79aa308abaf4cc4ba10bdb0d0d7da4->enter($__internal_a8ac86d53c074aa16a35b93f8f76ace5db79aa308abaf4cc4ba10bdb0d0d7da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edb4c72eb371a6b0112fa4a8e55e20592c3b33af429b0866f2280266f5c59bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb4c72eb371a6b0112fa4a8e55e20592c3b33af429b0866f2280266f5c59bba->enter($__internal_edb4c72eb371a6b0112fa4a8e55e20592c3b33af429b0866f2280266f5c59bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <h1 class=\"text-center\">Et si on devait mourir demain? Toi qu’est ce que tu ferai?</h1>
            </div>
        </div>

        <section class=\"section\">
            <div class=\"col-sm-6 col-sm-offset-3 \">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/voyanceBIS.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
            </div>
            <div class=\"col-sm-6 col-sm-offset-3 contain\">
                <p>La mort est inéluctable! Découvrez la votre, le lieu, la date de
                    celle-ci, et de quelle manière. <br>
                    Peut-être saurez-vous la déjouer?
                </p>

                <br>
                <br>
                <br>
                    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "

                        <div class=\"col-lg12 text-center contain\">
                            <h3 class=\"text-center\">Bonjour ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "userPrenom", array()), "html", null, true);
            echo "</h3>
                            <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("predictionpage");
            echo "\"><button class=\"text-center\">Faire ma prédiction du jour </button></a>
                        </div>
                    ";
        } else {
            // line 33
            echo "                        <h3>Me connecter pour effectuer une préduiction</h3>
                        <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><button class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</button></a>
                    ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 38
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 39
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 40
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 41
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                ";
        }
        // line 46
        echo "
            </div>

        </section>
    </div>

";
        
        $__internal_edb4c72eb371a6b0112fa4a8e55e20592c3b33af429b0866f2280266f5c59bba->leave($__internal_edb4c72eb371a6b0112fa4a8e55e20592c3b33af429b0866f2280266f5c59bba_prof);

        
        $__internal_a8ac86d53c074aa16a35b93f8f76ace5db79aa308abaf4cc4ba10bdb0d0d7da4->leave($__internal_a8ac86d53c074aa16a35b93f8f76ace5db79aa308abaf4cc4ba10bdb0d0d7da4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  137 => 45,  131 => 44,  122 => 41,  117 => 40,  112 => 39,  107 => 38,  105 => 37,  102 => 36,  95 => 34,  92 => 33,  86 => 30,  82 => 29,  77 => 26,  75 => 25,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::base.html.twig' %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <h1 class=\"text-center\">Et si on devait mourir demain? Toi qu’est ce que tu ferai?</h1>
            </div>
        </div>

        <section class=\"section\">
            <div class=\"col-sm-6 col-sm-offset-3 \">
                <img src=\"{{ asset('assets/img/voyanceBIS.jpg') }}\" alt=\"\" class=\"img-responsive\">
            </div>
            <div class=\"col-sm-6 col-sm-offset-3 contain\">
                <p>La mort est inéluctable! Découvrez la votre, le lieu, la date de
                    celle-ci, et de quelle manière. <br>
                    Peut-être saurez-vous la déjouer?
                </p>

                <br>
                <br>
                <br>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}


                        <div class=\"col-lg12 text-center contain\">
                            <h3 class=\"text-center\">Bonjour {{ app.user.userPrenom }}</h3>
                            <a href=\"{{ url('predictionpage') }}\"><button class=\"text-center\">Faire ma prédiction du jour </button></a>
                        </div>
                    {% else %}
                        <h3>Me connecter pour effectuer une préduiction</h3>
                        <a href=\"{{ path('fos_user_security_login') }}\"><button class=\"text-center\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</button></a>
                    {% endif %}

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}

            </div>

        </section>
    </div>

{% endblock %}", "AppBundle:Default:index.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\src\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
