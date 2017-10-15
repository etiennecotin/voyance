<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_88a684dd8373bad68cb9ef1d99e5f9ca4a44aa683a28674c97dcff90e3e99073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_584451a6686860e9e5a3d20fdec2da0023f6f429cd8c91ca65faef10c4a92190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584451a6686860e9e5a3d20fdec2da0023f6f429cd8c91ca65faef10c4a92190->enter($__internal_584451a6686860e9e5a3d20fdec2da0023f6f429cd8c91ca65faef10c4a92190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        $__internal_7b2b662ae5eb7a10a1c1e6c88ee5d38df8f2893fa43a9aa35e00eb76ab830663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2b662ae5eb7a10a1c1e6c88ee5d38df8f2893fa43a9aa35e00eb76ab830663->enter($__internal_7b2b662ae5eb7a10a1c1e6c88ee5d38df8f2893fa43a9aa35e00eb76ab830663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Voyance !</title>

    ";
        // line 8
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/perso.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
</head>
<body>
";
        // line 17
        $this->loadTemplate("AppBundle::Default/header.html.twig", "AppBundle::base.html.twig", 17)->display($context);
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        $this->displayBlock('scripts', $context, $blocks);
        // line 20
        echo "
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_584451a6686860e9e5a3d20fdec2da0023f6f429cd8c91ca65faef10c4a92190->leave($__internal_584451a6686860e9e5a3d20fdec2da0023f6f429cd8c91ca65faef10c4a92190_prof);

        
        $__internal_7b2b662ae5eb7a10a1c1e6c88ee5d38df8f2893fa43a9aa35e00eb76ab830663->leave($__internal_7b2b662ae5eb7a10a1c1e6c88ee5d38df8f2893fa43a9aa35e00eb76ab830663_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b5f6e17b5581cb29b8c8a314ef0a2c2a50fa8344c4e2370b87b544ef8c7cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b5f6e17b5581cb29b8c8a314ef0a2c2a50fa8344c4e2370b87b544ef8c7cbd->enter($__internal_15b5f6e17b5581cb29b8c8a314ef0a2c2a50fa8344c4e2370b87b544ef8c7cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c4ab828b4d42d26865b4d0bd4bd23b3e5a050c33d26692886545aaa8801564e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4ab828b4d42d26865b4d0bd4bd23b3e5a050c33d26692886545aaa8801564e->enter($__internal_7c4ab828b4d42d26865b4d0bd4bd23b3e5a050c33d26692886545aaa8801564e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c4ab828b4d42d26865b4d0bd4bd23b3e5a050c33d26692886545aaa8801564e->leave($__internal_7c4ab828b4d42d26865b4d0bd4bd23b3e5a050c33d26692886545aaa8801564e_prof);

        
        $__internal_15b5f6e17b5581cb29b8c8a314ef0a2c2a50fa8344c4e2370b87b544ef8c7cbd->leave($__internal_15b5f6e17b5581cb29b8c8a314ef0a2c2a50fa8344c4e2370b87b544ef8c7cbd_prof);

    }

    // line 19
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_99c493fd2f0faf5e6706ad8a957c44f0eb059983b3431cbd86e25725413a2b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c493fd2f0faf5e6706ad8a957c44f0eb059983b3431cbd86e25725413a2b56->enter($__internal_99c493fd2f0faf5e6706ad8a957c44f0eb059983b3431cbd86e25725413a2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_ea2eaa06436552a3ac3a08a1e24a9f41053e149a87e5316584d9edb33ac14d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2eaa06436552a3ac3a08a1e24a9f41053e149a87e5316584d9edb33ac14d55->enter($__internal_ea2eaa06436552a3ac3a08a1e24a9f41053e149a87e5316584d9edb33ac14d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_ea2eaa06436552a3ac3a08a1e24a9f41053e149a87e5316584d9edb33ac14d55->leave($__internal_ea2eaa06436552a3ac3a08a1e24a9f41053e149a87e5316584d9edb33ac14d55_prof);

        
        $__internal_99c493fd2f0faf5e6706ad8a957c44f0eb059983b3431cbd86e25725413a2b56->leave($__internal_99c493fd2f0faf5e6706ad8a957c44f0eb059983b3431cbd86e25725413a2b56_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  77 => 18,  64 => 21,  61 => 20,  59 => 19,  57 => 18,  55 => 17,  47 => 12,  42 => 10,  38 => 9,  35 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Voyance !</title>

    {#<link rel=\"stylesheet\" href=\"{{ asset('assets/css/screen2.css') }}\">#}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/perso.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"{{ asset('assets/js/jquery.min.js')}}\"></script>

    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">
</head>
<body>
{% include 'AppBundle::Default/header.html.twig' %}
{% block body %}{% endblock %}
{% block scripts %}{% endblock %}

<script src=\"{{ asset('assets/js/bootstrap.js') }}\"></script>
</body>
</html>", "AppBundle::base.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\src\\AppBundle/Resources/views/base.html.twig");
    }
}
