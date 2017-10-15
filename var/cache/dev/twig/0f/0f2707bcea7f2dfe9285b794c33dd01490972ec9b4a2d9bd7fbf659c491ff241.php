<?php

/* AppBundle:Prediction:index.html.twig */
class __TwigTemplate_d1c14cb21a14cf96cc53c905ebc5a31de1c67a6614f94336c70f32a6b4bce196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Prediction:index.html.twig", 1);
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
        $__internal_cdd54310a48086599bca31a14a72d95afe6eba82a028eaf840cae51fe942b32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd54310a48086599bca31a14a72d95afe6eba82a028eaf840cae51fe942b32f->enter($__internal_cdd54310a48086599bca31a14a72d95afe6eba82a028eaf840cae51fe942b32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prediction:index.html.twig"));

        $__internal_f86dd00cf5352d89d245faf652c02355afa4982cf74e2d18f1a5c8fd54523b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86dd00cf5352d89d245faf652c02355afa4982cf74e2d18f1a5c8fd54523b20->enter($__internal_f86dd00cf5352d89d245faf652c02355afa4982cf74e2d18f1a5c8fd54523b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prediction:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd54310a48086599bca31a14a72d95afe6eba82a028eaf840cae51fe942b32f->leave($__internal_cdd54310a48086599bca31a14a72d95afe6eba82a028eaf840cae51fe942b32f_prof);

        
        $__internal_f86dd00cf5352d89d245faf652c02355afa4982cf74e2d18f1a5c8fd54523b20->leave($__internal_f86dd00cf5352d89d245faf652c02355afa4982cf74e2d18f1a5c8fd54523b20_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf53a575978af03ab6eb79ca24e48d3c4c2887eea3777b9693c13ad7f83c4418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf53a575978af03ab6eb79ca24e48d3c4c2887eea3777b9693c13ad7f83c4418->enter($__internal_bf53a575978af03ab6eb79ca24e48d3c4c2887eea3777b9693c13ad7f83c4418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e475b42af5a3fb0371dd312a0a97e3dcbb79c156e72790330f11850b24ec3ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e475b42af5a3fb0371dd312a0a97e3dcbb79c156e72790330f11850b24ec3ee8->enter($__internal_e475b42af5a3fb0371dd312a0a97e3dcbb79c156e72790330f11850b24ec3ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3\">
                <h3 class=\"text-center\">Content de vous voir ici, tirez les cartes pour abtenir votre prediction du jour !</h3>
            </div>
        </div>
        <br>
        <br>
        <section class=\"section col-sm-12\">

            ";
        // line 16
        echo "                <div class=\"col-sm-2 col-lg-offset-3\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/DosCarte.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                </div>

                <div class=\"col-sm-2 \">
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/DosCarte.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                </div>

                <div class=\"col-sm-2 \">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/DosCarte.gif"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
                </div>
            ";
        // line 28
        echo "
        </section>
        <br>
        <br>
        <section class=\"col-sm-12\">
            <div class=\"col-sm-6 col-sm-offset-3 contain\">

                <div class=\"col-lg12 text-center contain\">
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("accueilpage");
        echo "\"><button class=\"btn text-center\">Retour à l'accueil</button></a>
                </div>

            </div>
        </section>

    </div>

";
        
        $__internal_e475b42af5a3fb0371dd312a0a97e3dcbb79c156e72790330f11850b24ec3ee8->leave($__internal_e475b42af5a3fb0371dd312a0a97e3dcbb79c156e72790330f11850b24ec3ee8_prof);

        
        $__internal_bf53a575978af03ab6eb79ca24e48d3c4c2887eea3777b9693c13ad7f83c4418->leave($__internal_bf53a575978af03ab6eb79ca24e48d3c4c2887eea3777b9693c13ad7f83c4418_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prediction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 36,  84 => 28,  79 => 25,  72 => 21,  65 => 17,  62 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
                <h3 class=\"text-center\">Content de vous voir ici, tirez les cartes pour abtenir votre prediction du jour !</h3>
            </div>
        </div>
        <br>
        <br>
        <section class=\"section col-sm-12\">

            {#<div class=\"col-lg-9 col-lg-offset-3\">#}
                <div class=\"col-sm-2 col-lg-offset-3\">
                    <img src=\"{{ asset('assets/img/DosCarte.gif') }}\" alt=\"\" class=\"img-responsive\">
                </div>

                <div class=\"col-sm-2 \">
                    <img src=\"{{ asset('assets/img/DosCarte.gif') }}\" alt=\"\" class=\"img-responsive\">
                </div>

                <div class=\"col-sm-2 \">
                    <img src=\"{{ asset('assets/img/DosCarte.gif') }}\" alt=\"\" class=\"img-responsive\">
                </div>
            {#</div>#}

        </section>
        <br>
        <br>
        <section class=\"col-sm-12\">
            <div class=\"col-sm-6 col-sm-offset-3 contain\">

                <div class=\"col-lg12 text-center contain\">
                    <a href=\"{{ url('accueilpage') }}\"><button class=\"btn text-center\">Retour à l'accueil</button></a>
                </div>

            </div>
        </section>

    </div>

{% endblock %}", "AppBundle:Prediction:index.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\src\\AppBundle/Resources/views/Prediction/index.html.twig");
    }
}
