<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_365af701f76a758c667cca5df2f2090d0747199acd34f237fedf67ebf6a596bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f191de24cd6a01ba9181d200a1a311563329766870db5616fc11f4be1c5282f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f191de24cd6a01ba9181d200a1a311563329766870db5616fc11f4be1c5282f->enter($__internal_6f191de24cd6a01ba9181d200a1a311563329766870db5616fc11f4be1c5282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_52ab23584b12baa2f13a9913d8d566def80081be8007d7e3d9db39faafb70020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ab23584b12baa2f13a9913d8d566def80081be8007d7e3d9db39faafb70020->enter($__internal_52ab23584b12baa2f13a9913d8d566def80081be8007d7e3d9db39faafb70020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6f191de24cd6a01ba9181d200a1a311563329766870db5616fc11f4be1c5282f->leave($__internal_6f191de24cd6a01ba9181d200a1a311563329766870db5616fc11f4be1c5282f_prof);

        
        $__internal_52ab23584b12baa2f13a9913d8d566def80081be8007d7e3d9db39faafb70020->leave($__internal_52ab23584b12baa2f13a9913d8d566def80081be8007d7e3d9db39faafb70020_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45b363d5e8ef47d7459cb68dee8a79b0e9b5f8eb3e9d8386fc2875d4c8b95c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45b363d5e8ef47d7459cb68dee8a79b0e9b5f8eb3e9d8386fc2875d4c8b95c9->enter($__internal_b45b363d5e8ef47d7459cb68dee8a79b0e9b5f8eb3e9d8386fc2875d4c8b95c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c337dbdf7ad6c07739789c07371615e164c4f086baa0a3be99b8e21019ce79c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c337dbdf7ad6c07739789c07371615e164c4f086baa0a3be99b8e21019ce79c6->enter($__internal_c337dbdf7ad6c07739789c07371615e164c4f086baa0a3be99b8e21019ce79c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c337dbdf7ad6c07739789c07371615e164c4f086baa0a3be99b8e21019ce79c6->leave($__internal_c337dbdf7ad6c07739789c07371615e164c4f086baa0a3be99b8e21019ce79c6_prof);

        
        $__internal_b45b363d5e8ef47d7459cb68dee8a79b0e9b5f8eb3e9d8386fc2875d4c8b95c9->leave($__internal_b45b363d5e8ef47d7459cb68dee8a79b0e9b5f8eb3e9d8386fc2875d4c8b95c9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bea86ecb72602d8afa4fe72442b547d5b75891aff9ec420fdcc8c0cf0392313b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea86ecb72602d8afa4fe72442b547d5b75891aff9ec420fdcc8c0cf0392313b->enter($__internal_bea86ecb72602d8afa4fe72442b547d5b75891aff9ec420fdcc8c0cf0392313b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ca25faf53b24f723e2aeb8e41e3a23a821e59649ea465a6ec1b3174ccd89a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca25faf53b24f723e2aeb8e41e3a23a821e59649ea465a6ec1b3174ccd89a1a->enter($__internal_8ca25faf53b24f723e2aeb8e41e3a23a821e59649ea465a6ec1b3174ccd89a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8ca25faf53b24f723e2aeb8e41e3a23a821e59649ea465a6ec1b3174ccd89a1a->leave($__internal_8ca25faf53b24f723e2aeb8e41e3a23a821e59649ea465a6ec1b3174ccd89a1a_prof);

        
        $__internal_bea86ecb72602d8afa4fe72442b547d5b75891aff9ec420fdcc8c0cf0392313b->leave($__internal_bea86ecb72602d8afa4fe72442b547d5b75891aff9ec420fdcc8c0cf0392313b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b25ab0c0764ee5c4e8ae10fc0e0176f1a663d159ff8c0ca46a1f30d247fb301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b25ab0c0764ee5c4e8ae10fc0e0176f1a663d159ff8c0ca46a1f30d247fb301->enter($__internal_3b25ab0c0764ee5c4e8ae10fc0e0176f1a663d159ff8c0ca46a1f30d247fb301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b95525e863a4e85ca7b6376968164b13eaecfbf7c1d2170b8d079992a6edc93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95525e863a4e85ca7b6376968164b13eaecfbf7c1d2170b8d079992a6edc93a->enter($__internal_b95525e863a4e85ca7b6376968164b13eaecfbf7c1d2170b8d079992a6edc93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b95525e863a4e85ca7b6376968164b13eaecfbf7c1d2170b8d079992a6edc93a->leave($__internal_b95525e863a4e85ca7b6376968164b13eaecfbf7c1d2170b8d079992a6edc93a_prof);

        
        $__internal_3b25ab0c0764ee5c4e8ae10fc0e0176f1a663d159ff8c0ca46a1f30d247fb301->leave($__internal_3b25ab0c0764ee5c4e8ae10fc0e0176f1a663d159ff8c0ca46a1f30d247fb301_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
