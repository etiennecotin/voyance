<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_152944c304b11997edfdf71099752205441568696b9a257a905589d97b2e6d9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf94315720ed6d32aa738d5a11f58c21f21b8e98c419789dc74a3c7069583045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf94315720ed6d32aa738d5a11f58c21f21b8e98c419789dc74a3c7069583045->enter($__internal_bf94315720ed6d32aa738d5a11f58c21f21b8e98c419789dc74a3c7069583045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $__internal_e2eafd68494cd631b5f1acdd0e1ba2d78efde5b263562aa448dd95dbb7b0533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2eafd68494cd631b5f1acdd0e1ba2d78efde5b263562aa448dd95dbb7b0533a->enter($__internal_e2eafd68494cd631b5f1acdd0e1ba2d78efde5b263562aa448dd95dbb7b0533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf94315720ed6d32aa738d5a11f58c21f21b8e98c419789dc74a3c7069583045->leave($__internal_bf94315720ed6d32aa738d5a11f58c21f21b8e98c419789dc74a3c7069583045_prof);

        
        $__internal_e2eafd68494cd631b5f1acdd0e1ba2d78efde5b263562aa448dd95dbb7b0533a->leave($__internal_e2eafd68494cd631b5f1acdd0e1ba2d78efde5b263562aa448dd95dbb7b0533a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c85be9f6cf31cfce3913c8b9e3c733c5f8ebc116f706183aeabab7f5f6dd0392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c85be9f6cf31cfce3913c8b9e3c733c5f8ebc116f706183aeabab7f5f6dd0392->enter($__internal_c85be9f6cf31cfce3913c8b9e3c733c5f8ebc116f706183aeabab7f5f6dd0392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3488d78c9ce55ca4fb1ba588ce6e37e8c8178459ca2867dcba86dc033fc15c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3488d78c9ce55ca4fb1ba588ce6e37e8c8178459ca2867dcba86dc033fc15c10->enter($__internal_3488d78c9ce55ca4fb1ba588ce6e37e8c8178459ca2867dcba86dc033fc15c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isEasyAdminAction", array())) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = ((((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) ? $context["icon_fill_color"] : $this->getContext($context, "icon_fill_color")), "height" => (isset($context["icon_height"]) ? $context["icon_height"] : $this->getContext($context, "icon_height"))));
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_3488d78c9ce55ca4fb1ba588ce6e37e8c8178459ca2867dcba86dc033fc15c10->leave($__internal_3488d78c9ce55ca4fb1ba588ce6e37e8c8178459ca2867dcba86dc033fc15c10_prof);

        
        $__internal_c85be9f6cf31cfce3913c8b9e3c733c5f8ebc116f706183aeabab7f5f6dd0392->leave($__internal_c85be9f6cf31cfce3913c8b9e3c733c5f8ebc116f706183aeabab7f5f6dd0392_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb3601d1578426b15a0e87e7dd50bfd6c68f5a7e12fb9184cbc080022f9b30f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3601d1578426b15a0e87e7dd50bfd6c68f5a7e12fb9184cbc080022f9b30f0->enter($__internal_fb3601d1578426b15a0e87e7dd50bfd6c68f5a7e12fb9184cbc080022f9b30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3378b06df1409b1bf936000f95b2853a1bd81a84d140304d8d30af8fa0169743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3378b06df1409b1bf936000f95b2853a1bd81a84d140304d8d30af8fa0169743->enter($__internal_3378b06df1409b1bf936000f95b2853a1bd81a84d140304d8d30af8fa0169743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "isEasyAdminAction", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_3378b06df1409b1bf936000f95b2853a1bd81a84d140304d8d30af8fa0169743->leave($__internal_3378b06df1409b1bf936000f95b2853a1bd81a84d140304d8d30af8fa0169743_prof);

        
        $__internal_fb3601d1578426b15a0e87e7dd50bfd6c68f5a7e12fb9184cbc080022f9b30f0->leave($__internal_fb3601d1578426b15a0e87e7dd50bfd6c68f5a7e12fb9184cbc080022f9b30f0_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1aaef6b9a9a2f268f706dcf93f04df55987fdf07ca5f1532ff241ea7d32aeedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaef6b9a9a2f268f706dcf93f04df55987fdf07ca5f1532ff241ea7d32aeedb->enter($__internal_1aaef6b9a9a2f268f706dcf93f04df55987fdf07ca5f1532ff241ea7d32aeedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_239fd119217ed336a318440abd9ede4046dcffc7c03557a836420fb8af694661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239fd119217ed336a318440abd9ede4046dcffc7c03557a836420fb8af694661->enter($__internal_239fd119217ed336a318440abd9ede4046dcffc7c03557a836420fb8af694661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 42
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 44
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 47
            echo "
        ";
            // line 48
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array())) {
                // line 49
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 51
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 56
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 60
                if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                    // line 61
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 65
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array())) {
                    // line 66
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                    echo ")</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            ";
                }
                // line 71
                echo "        </div>
        ";
            }
            // line 73
            echo "
    ";
        }
        // line 75
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                ";
        // line 80
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "currentEntityConfig", array())), "method");
        echo "
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                ";
        // line 91
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 92
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 93
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "formats", array(), "array"))), "method");
        // line 94
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 97
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 98
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "design", array(), "array"))), "method");
        // line 99
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 102
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 103
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 104
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 105
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 106
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 107
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "show", array(), "array"))), "method");
        // line 108
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 111
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 112
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()), "entities", array(), "array"))), "method");
        // line 113
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 116
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 117
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "backendConfig", array()))), "method");
        // line 118
        echo "
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_239fd119217ed336a318440abd9ede4046dcffc7c03557a836420fb8af694661->leave($__internal_239fd119217ed336a318440abd9ede4046dcffc7c03557a836420fb8af694661_prof);

        
        $__internal_1aaef6b9a9a2f268f706dcf93f04df55987fdf07ca5f1532ff241ea7d32aeedb->leave($__internal_1aaef6b9a9a2f268f706dcf93f04df55987fdf07ca5f1532ff241ea7d32aeedb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 118,  292 => 117,  291 => 116,  286 => 113,  284 => 112,  283 => 111,  278 => 108,  276 => 107,  275 => 106,  274 => 105,  273 => 104,  272 => 103,  271 => 102,  266 => 99,  264 => 98,  263 => 97,  258 => 94,  256 => 93,  255 => 92,  254 => 91,  240 => 80,  233 => 75,  229 => 73,  225 => 71,  216 => 67,  213 => 66,  211 => 65,  205 => 62,  202 => 61,  200 => 60,  193 => 56,  185 => 51,  181 => 49,  179 => 48,  176 => 47,  170 => 44,  166 => 42,  164 => 41,  159 => 39,  156 => 38,  153 => 37,  144 => 36,  130 => 31,  125 => 30,  116 => 29,  103 => 25,  100 => 24,  94 => 21,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  73 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.isEasyAdminAction %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
            {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
            <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
        {% endset %}

        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">{{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label status-{{ not collector.isEasyAdminAction ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if profiler_markup_version == 1 %}

        <h3>Request Parameters</h3>
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

    {% else %}

        {% if collector.requestParameters %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                <span class=\"label\">Entity Name</span>
            </div>

            {% if collector.requestParameters.id %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.id }}</span>
                    <span class=\"label\">ID</span>
                </div>
            {% elseif collector.requestParameters.sort_field %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            {% endif %}
        </div>
        {% endif %}

    {% endif %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                {{ collector.dump(collector.currentEntityConfig)|raw }}
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                {{ collector.dump({
                    'site_name': collector.backendConfig['site_name'],
                    'formats': collector.backendConfig['formats']
                })|raw }}

                <h4>Design Configuration</h4>
                {{ collector.dump({
                    'design': collector.backendConfig['design']
                })|raw }}

                <h4>Actions Configuration</h4>
                {{ collector.dump({
                    'disabled_actions': collector.backendConfig['disabled_actions'],
                    'list': collector.backendConfig['list'],
                    'edit': collector.backendConfig['edit'],
                    'new': collector.backendConfig['new'],
                    'show': collector.backendConfig['show'],
                })|raw }}

                <h4>Entities Configuration</h4>
                {{ collector.dump({
                    'entities': collector.backendConfig['entities']
                })|raw }}

                <h4>Full Backend Configuration</h4>
                {{ collector.dump({
                    'easy_admin': collector.backendConfig
                })|raw }}
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\data_collector\\easyadmin.html.twig");
    }
}
