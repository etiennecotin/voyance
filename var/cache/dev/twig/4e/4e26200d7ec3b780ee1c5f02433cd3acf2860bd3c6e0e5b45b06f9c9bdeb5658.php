<?php

/* @EasyAdmin/default/list.html.twig */
class __TwigTemplate_3fbff5e3c566b0289dc5dff2b1f22e3f2241b1bd870bf99f5aca1037adb3445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b70e788acc14c3ca0bf6eb47023d49bb9d90e181ca27123ead20e999ed5ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b70e788acc14c3ca0bf6eb47023d49bb9d90e181ca27123ead20e999ed5ee9->enter($__internal_b1b70e788acc14c3ca0bf6eb47023d49bb9d90e181ca27123ead20e999ed5ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        $__internal_cf5271b6cf28b000e45e04be24c8fd4d8de1b7973f2abce81852ce5f6bf3d91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5271b6cf28b000e45e04be24c8fd4d8de1b7973f2abce81852ce5f6bf3d91b->enter($__internal_cf5271b6cf28b000e45e04be24c8fd4d8de1b7973f2abce81852ce5f6bf3d91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters"))))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b70e788acc14c3ca0bf6eb47023d49bb9d90e181ca27123ead20e999ed5ee9->leave($__internal_b1b70e788acc14c3ca0bf6eb47023d49bb9d90e181ca27123ead20e999ed5ee9_prof);

        
        $__internal_cf5271b6cf28b000e45e04be24c8fd4d8de1b7973f2abce81852ce5f6bf3d91b->leave($__internal_cf5271b6cf28b000e45e04be24c8fd4d8de1b7973f2abce81852ce5f6bf3d91b_prof);

    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8e52b19b5335d9973ebfdaee40ece97451ad5020a07fe355ea52365dddc49440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e52b19b5335d9973ebfdaee40ece97451ad5020a07fe355ea52365dddc49440->enter($__internal_8e52b19b5335d9973ebfdaee40ece97451ad5020a07fe355ea52365dddc49440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6829efbd1da55adefdb1644d3dc0a798b76df1bbf4efc06ab8dd2cd6e6ab764d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6829efbd1da55adefdb1644d3dc0a798b76df1bbf4efc06ab8dd2cd6e6ab764d->enter($__internal_6829efbd1da55adefdb1644d3dc0a798b76df1bbf4efc06ab8dd2cd6e6ab764d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_6829efbd1da55adefdb1644d3dc0a798b76df1bbf4efc06ab8dd2cd6e6ab764d->leave($__internal_6829efbd1da55adefdb1644d3dc0a798b76df1bbf4efc06ab8dd2cd6e6ab764d_prof);

        
        $__internal_8e52b19b5335d9973ebfdaee40ece97451ad5020a07fe355ea52365dddc49440->leave($__internal_8e52b19b5335d9973ebfdaee40ece97451ad5020a07fe355ea52365dddc49440_prof);

    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_93b2ffe7dd7ddea32bf4d0df6adcc06e47a861471df5666bc1a79d9f998e9e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b2ffe7dd7ddea32bf4d0df6adcc06e47a861471df5666bc1a79d9f998e9e50->enter($__internal_93b2ffe7dd7ddea32bf4d0df6adcc06e47a861471df5666bc1a79d9f998e9e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_3d334bcbb0f621f632673107b46de463e00a9ff82d0d31b349fc0f3faddba6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d334bcbb0f621f632673107b46de463e00a9ff82d0d31b349fc0f3faddba6c1->enter($__internal_3d334bcbb0f621f632673107b46de463e00a9ff82d0d31b349fc0f3faddba6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_3d334bcbb0f621f632673107b46de463e00a9ff82d0d31b349fc0f3faddba6c1->leave($__internal_3d334bcbb0f621f632673107b46de463e00a9ff82d0d31b349fc0f3faddba6c1_prof);

        
        $__internal_93b2ffe7dd7ddea32bf4d0df6adcc06e47a861471df5666bc1a79d9f998e9e50->leave($__internal_93b2ffe7dd7ddea32bf4d0df6adcc06e47a861471df5666bc1a79d9f998e9e50_prof);

    }

    // line 26
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_fe37f7ae5f20e30d36e2a0aea0c71d137802f19bbfa7bd39a232b6f1bb6b15a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe37f7ae5f20e30d36e2a0aea0c71d137802f19bbfa7bd39a232b6f1bb6b15a1->enter($__internal_fe37f7ae5f20e30d36e2a0aea0c71d137802f19bbfa7bd39a232b6f1bb6b15a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_94a9a0120d8cf900d896ac85dee26c96837a36cc6e9555baf3b55ac98483ad79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a9a0120d8cf900d896ac85dee26c96837a36cc6e9555baf3b55ac98483ad79->enter($__internal_94a9a0120d8cf900d896ac85dee26c96837a36cc6e9555baf3b55ac98483ad79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            // line 30
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "search", array()), "title", array()), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbResults", array()), array(),             // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4")))) : (            // line 30
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title"))));
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 33
            echo "        ";
            echo (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "list", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4")))) : (            // line 33
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title"))));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_94a9a0120d8cf900d896ac85dee26c96837a36cc6e9555baf3b55ac98483ad79->leave($__internal_94a9a0120d8cf900d896ac85dee26c96837a36cc6e9555baf3b55ac98483ad79_prof);

        
        $__internal_fe37f7ae5f20e30d36e2a0aea0c71d137802f19bbfa7bd39a232b6f1bb6b15a1->leave($__internal_fe37f7ae5f20e30d36e2a0aea0c71d137802f19bbfa7bd39a232b6f1bb6b15a1_prof);

    }

    // line 38
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e37ee362ec00a0ed325d730e7cc82054394ef066add19af62b9688a40c119489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37ee362ec00a0ed325d730e7cc82054394ef066add19af62b9688a40c119489->enter($__internal_e37ee362ec00a0ed325d730e7cc82054394ef066add19af62b9688a40c119489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_e2164e74aa32bce58b37b3c61d9e44fe1dcf9cce635b45491c8ba727dc1b1fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2164e74aa32bce58b37b3c61d9e44fe1dcf9cce635b45491c8ba727dc1b1fad->enter($__internal_e2164e74aa32bce58b37b3c61d9e44fe1dcf9cce635b45491c8ba727dc1b1fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 39
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 41
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 44
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 48
        $this->displayBlock('global_actions', $context, $blocks);
        // line 89
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_e2164e74aa32bce58b37b3c61d9e44fe1dcf9cce635b45491c8ba727dc1b1fad->leave($__internal_e2164e74aa32bce58b37b3c61d9e44fe1dcf9cce635b45491c8ba727dc1b1fad_prof);

        
        $__internal_e37ee362ec00a0ed325d730e7cc82054394ef066add19af62b9688a40c119489->leave($__internal_e37ee362ec00a0ed325d730e7cc82054394ef066add19af62b9688a40c119489_prof);

    }

    // line 41
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_dd0e6fc69637c17161b1b879e4e6d87f7e991600f45c29ea84379b5e30f2cf5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0e6fc69637c17161b1b879e4e6d87f7e991600f45c29ea84379b5e30f2cf5f->enter($__internal_dd0e6fc69637c17161b1b879e4e6d87f7e991600f45c29ea84379b5e30f2cf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_923c5369f4fb9cc1eff0fc5fdd35b78492de594a1524f2f6635a2a2a4908f51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923c5369f4fb9cc1eff0fc5fdd35b78492de594a1524f2f6635a2a2a4908f51b->enter($__internal_923c5369f4fb9cc1eff0fc5fdd35b78492de594a1524f2f6635a2a2a4908f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 42
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_923c5369f4fb9cc1eff0fc5fdd35b78492de594a1524f2f6635a2a2a4908f51b->leave($__internal_923c5369f4fb9cc1eff0fc5fdd35b78492de594a1524f2f6635a2a2a4908f51b_prof);

        
        $__internal_dd0e6fc69637c17161b1b879e4e6d87f7e991600f45c29ea84379b5e30f2cf5f->leave($__internal_dd0e6fc69637c17161b1b879e4e6d87f7e991600f45c29ea84379b5e30f2cf5f_prof);

    }

    // line 48
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_8d9434fd620f147f7c5c28639ffb02de1da1565c3580754a8b2fe2f19a747c4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9434fd620f147f7c5c28639ffb02de1da1565c3580754a8b2fe2f19a747c4b->enter($__internal_8d9434fd620f147f7c5c28639ffb02de1da1565c3580754a8b2fe2f19a747c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_d61c8e249a11d577a584f526e8771f35a424c146f97e3323c70f76ff30c2a2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61c8e249a11d577a584f526e8771f35a424c146f97e3323c70f76ff30c2a2bd->enter($__internal_d61c8e249a11d577a584f526e8771f35a424c146f97e3323c70f76ff30c2a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 49
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 50
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 51
            echo "
                        ";
            // line 52
            $this->displayBlock('search_action', $context, $blocks);
            // line 75
            echo "                    ";
        }
        // line 76
        echo "
                    ";
        // line 77
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 78
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
            // line 79
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 87
            echo "                    ";
        }
        // line 88
        echo "                ";
        
        $__internal_d61c8e249a11d577a584f526e8771f35a424c146f97e3323c70f76ff30c2a2bd->leave($__internal_d61c8e249a11d577a584f526e8771f35a424c146f97e3323c70f76ff30c2a2bd_prof);

        
        $__internal_8d9434fd620f147f7c5c28639ffb02de1da1565c3580754a8b2fe2f19a747c4b->leave($__internal_8d9434fd620f147f7c5c28639ffb02de1da1565c3580754a8b2fe2f19a747c4b_prof);

    }

    // line 52
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_c134c431f46a586ee3f2e051de1eef13fb93d6911a2c03ef7fd0605dd60d671d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c134c431f46a586ee3f2e051de1eef13fb93d6911a2c03ef7fd0605dd60d671d->enter($__internal_c134c431f46a586ee3f2e051de1eef13fb93d6911a2c03ef7fd0605dd60d671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_959300e292646d06235e6b25c28a8b79483e56e4504008a011db0134ba202fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959300e292646d06235e6b25c28a8b79483e56e4504008a011db0134ba202fff->enter($__internal_959300e292646d06235e6b25c28a8b79483e56e4504008a011db0134ba202fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 53
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 55
        $this->displayBlock('search_form', $context, $blocks);
        // line 72
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_959300e292646d06235e6b25c28a8b79483e56e4504008a011db0134ba202fff->leave($__internal_959300e292646d06235e6b25c28a8b79483e56e4504008a011db0134ba202fff_prof);

        
        $__internal_c134c431f46a586ee3f2e051de1eef13fb93d6911a2c03ef7fd0605dd60d671d->leave($__internal_c134c431f46a586ee3f2e051de1eef13fb93d6911a2c03ef7fd0605dd60d671d_prof);

    }

    // line 55
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_399868160701b8569ffcba9d435397c38ebc74ddc583c3ad855d15893a0ead6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399868160701b8569ffcba9d435397c38ebc74ddc583c3ad855d15893a0ead6d->enter($__internal_399868160701b8569ffcba9d435397c38ebc74ddc583c3ad855d15893a0ead6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_79f40a60b24380bf3c95c4a3c1e532a09bf50763bb5ce396882400cee9560d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f40a60b24380bf3c95c4a3c1e532a09bf50763bb5ce396882400cee9560d0b->enter($__internal_79f40a60b24380bf3c95c4a3c1e532a09bf50763bb5ce396882400cee9560d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 56
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"))), "html", null, true);
        // line 67
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_79f40a60b24380bf3c95c4a3c1e532a09bf50763bb5ce396882400cee9560d0b->leave($__internal_79f40a60b24380bf3c95c4a3c1e532a09bf50763bb5ce396882400cee9560d0b_prof);

        
        $__internal_399868160701b8569ffcba9d435397c38ebc74ddc583c3ad855d15893a0ead6d->leave($__internal_399868160701b8569ffcba9d435397c38ebc74ddc583c3ad855d15893a0ead6d_prof);

    }

    // line 79
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_b7e28b957e94d096ffa89d1c8a65f894909145e0677a0c594c082c79e71a24a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e28b957e94d096ffa89d1c8a65f894909145e0677a0c594c082c79e71a24a2->enter($__internal_b7e28b957e94d096ffa89d1c8a65f894909145e0677a0c594c082c79e71a24a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_37b453177e38e46573edf3632480640747db09597cc07d07887ea8fe4b605ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b453177e38e46573edf3632480640747db09597cc07d07887ea8fe4b605ad3->enter($__internal_37b453177e38e46573edf3632480640747db09597cc07d07887ea8fe4b605ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 80
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 81
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 82
        if ($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 83
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["_action"]) ? $context["_action"] : null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_action"]) ? $context["_action"] : $this->getContext($context, "_action")), "label", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4")))) : ("")), "html", null, true);
        // line 83
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_37b453177e38e46573edf3632480640747db09597cc07d07887ea8fe4b605ad3->leave($__internal_37b453177e38e46573edf3632480640747db09597cc07d07887ea8fe4b605ad3_prof);

        
        $__internal_b7e28b957e94d096ffa89d1c8a65f894909145e0677a0c594c082c79e71a24a2->leave($__internal_b7e28b957e94d096ffa89d1c8a65f894909145e0677a0c594c082c79e71a24a2_prof);

    }

    // line 94
    public function block_main($context, array $blocks = array())
    {
        $__internal_dcdb582ee62f9a6f03a1ee36385fad611c616c3ca0aa9125620663af07ce3c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdb582ee62f9a6f03a1ee36385fad611c616c3ca0aa9125620663af07ce3c99->enter($__internal_dcdb582ee62f9a6f03a1ee36385fad611c616c3ca0aa9125620663af07ce3c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_edfc292b33f604660042df6abd63080591a16a822de9656f71712926274aa832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfc292b33f604660042df6abd63080591a16a822de9656f71712926274aa832->enter($__internal_edfc292b33f604660042df6abd63080591a16a822de9656f71712926274aa832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 95
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 96
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 100
        $this->displayBlock('table_head', $context, $blocks);
        // line 127
        echo "        </thead>

        <tbody>
        ";
        // line 130
        $this->displayBlock('table_body', $context, $blocks);
        // line 167
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 171
        $this->displayBlock('paginator', $context, $blocks);
        // line 174
        echo "
    ";
        // line 175
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_edfc292b33f604660042df6abd63080591a16a822de9656f71712926274aa832->leave($__internal_edfc292b33f604660042df6abd63080591a16a822de9656f71712926274aa832_prof);

        
        $__internal_dcdb582ee62f9a6f03a1ee36385fad611c616c3ca0aa9125620663af07ce3c99->leave($__internal_dcdb582ee62f9a6f03a1ee36385fad611c616c3ca0aa9125620663af07ce3c99_prof);

    }

    // line 100
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_b25b7563a88558acdd8d00d4b6a42ad37fd12bb9f49e0b766c3b13ce913ff392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25b7563a88558acdd8d00d4b6a42ad37fd12bb9f49e0b766c3b13ce913ff392->enter($__internal_b25b7563a88558acdd8d00d4b6a42ad37fd12bb9f49e0b766c3b13ce913ff392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_b02bf6c8a912c23a42290b156cb2584c6930feb296eee76ff3fb0fa624454ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b02bf6c8a912c23a42290b156cb2584c6930feb296eee76ff3fb0fa624454ae8->enter($__internal_b02bf6c8a912c23a42290b156cb2584c6930feb296eee76ff3fb0fa624454ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 101
        echo "            <tr>
                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 103
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 104
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 105
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),             // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4")));
            // line 106
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? (((((isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 107
            echo "
                    <th data-property-name=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 109
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 110
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) ? $context["nextSortDirection"] : $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 111
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) ? $context["_column_icon"] : $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 112
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 115
                echo "                            <span>";
                echo (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 117
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
                ";
        // line 120
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 121
            echo "                    <th>
                        <span>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 125
        echo "            </tr>
        ";
        
        $__internal_b02bf6c8a912c23a42290b156cb2584c6930feb296eee76ff3fb0fa624454ae8->leave($__internal_b02bf6c8a912c23a42290b156cb2584c6930feb296eee76ff3fb0fa624454ae8_prof);

        
        $__internal_b25b7563a88558acdd8d00d4b6a42ad37fd12bb9f49e0b766c3b13ce913ff392->leave($__internal_b25b7563a88558acdd8d00d4b6a42ad37fd12bb9f49e0b766c3b13ce913ff392_prof);

    }

    // line 130
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_33068d9682522d72f4b3a5ed6a3a7c551135cbaca87059af2d7f6284aaee1985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33068d9682522d72f4b3a5ed6a3a7c551135cbaca87059af2d7f6284aaee1985->enter($__internal_33068d9682522d72f4b3a5ed6a3a7c551135cbaca87059af2d7f6284aaee1985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6e6ab03b63e75d8d71ade0af4d8f8d05836265629582fb612ff89f5e676af916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6ab03b63e75d8d71ade0af4d8f8d05836265629582fb612ff89f5e676af916->enter($__internal_6e6ab03b63e75d8d71ade0af4d8f8d05836265629582fb612ff89f5e676af916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 131
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 132
            echo "                ";
            // line 133
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 134
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 136
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 137
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),                 // line 2
(isset($context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"]) ? $context["__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4"] : $this->getContext($context, "__internal_dceaa05b0347887cc56e8753fe058a1c4f9309fb5efbfa2bfc493824245379d4")));
                // line 138
                echo "
                        <td data-label=\"";
                // line 139
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) ? $context["isSortingField"] : $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 140
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "
                    ";
            // line 144
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 145
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 146
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) ? $context["_column_label"] : $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 147
                $this->displayBlock('item_actions', $context, $blocks);
                // line 156
                echo "                        </td>
                    ";
            }
            // line 158
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 160
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 161
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 162
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "        ";
        
        $__internal_6e6ab03b63e75d8d71ade0af4d8f8d05836265629582fb612ff89f5e676af916->leave($__internal_6e6ab03b63e75d8d71ade0af4d8f8d05836265629582fb612ff89f5e676af916_prof);

        
        $__internal_33068d9682522d72f4b3a5ed6a3a7c551135cbaca87059af2d7f6284aaee1985->leave($__internal_33068d9682522d72f4b3a5ed6a3a7c551135cbaca87059af2d7f6284aaee1985_prof);

    }

    // line 147
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_1e3d9b2973c2e00d7daabce19bbb408e521af593f752118811dedae44da5c88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3d9b2973c2e00d7daabce19bbb408e521af593f752118811dedae44da5c88b->enter($__internal_1e3d9b2973c2e00d7daabce19bbb408e521af593f752118811dedae44da5c88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_c21c19d909fefada7ef11fb474949ae636afebd9bd1a3275641ed60906fa2ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21c19d909fefada7ef11fb474949ae636afebd9bd1a3275641ed60906fa2ef2->enter($__internal_c21c19d909fefada7ef11fb474949ae636afebd9bd1a3275641ed60906fa2ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 148
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 149
(isset($context["_list_item_actions"]) ? $context["_list_item_actions"] : $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 150
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 151
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 152
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 153
(isset($context["_item_id"]) ? $context["_item_id"] : $this->getContext($context, "_item_id"))), false);
        // line 154
        echo "
                        ";
        
        $__internal_c21c19d909fefada7ef11fb474949ae636afebd9bd1a3275641ed60906fa2ef2->leave($__internal_c21c19d909fefada7ef11fb474949ae636afebd9bd1a3275641ed60906fa2ef2_prof);

        
        $__internal_1e3d9b2973c2e00d7daabce19bbb408e521af593f752118811dedae44da5c88b->leave($__internal_1e3d9b2973c2e00d7daabce19bbb408e521af593f752118811dedae44da5c88b_prof);

    }

    // line 171
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_7307b3a810da6d8488f319d61e3177a6f7097aa5694f8ed7a891bd19662ee7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7307b3a810da6d8488f319d61e3177a6f7097aa5694f8ed7a891bd19662ee7e7->enter($__internal_7307b3a810da6d8488f319d61e3177a6f7097aa5694f8ed7a891bd19662ee7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_bd1f431b42f8a1ba952efa1e31d7bc380829a4754ce6836127a66dbfcf9199a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1f431b42f8a1ba952efa1e31d7bc380829a4754ce6836127a66dbfcf9199a5->enter($__internal_bd1f431b42f8a1ba952efa1e31d7bc380829a4754ce6836127a66dbfcf9199a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 172
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_bd1f431b42f8a1ba952efa1e31d7bc380829a4754ce6836127a66dbfcf9199a5->leave($__internal_bd1f431b42f8a1ba952efa1e31d7bc380829a4754ce6836127a66dbfcf9199a5_prof);

        
        $__internal_7307b3a810da6d8488f319d61e3177a6f7097aa5694f8ed7a891bd19662ee7e7->leave($__internal_7307b3a810da6d8488f319d61e3177a6f7097aa5694f8ed7a891bd19662ee7e7_prof);

    }

    // line 175
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_cd413e224257276a30ee765bcb93a24842bd5bf81729096dcb147202bf33a20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd413e224257276a30ee765bcb93a24842bd5bf81729096dcb147202bf33a20c->enter($__internal_cd413e224257276a30ee765bcb93a24842bd5bf81729096dcb147202bf33a20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_927775d1c070a99c535159a7894c88824a2d8bdf1f3aec7720d90540aff674b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927775d1c070a99c535159a7894c88824a2d8bdf1f3aec7720d90540aff674b8->enter($__internal_927775d1c070a99c535159a7894c88824a2d8bdf1f3aec7720d90540aff674b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 176
        echo "        ";
        $context["referer"] = ((((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 177
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 178
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 180
        echo "
        ";
        // line 181
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 183
(isset($context["referer"]) ? $context["referer"] : $this->getContext($context, "referer"))), "delete_form" =>         // line 184
(isset($context["delete_form_template"]) ? $context["delete_form_template"] : $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 185
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 186
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 187
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 188
        echo "
    ";
        
        $__internal_927775d1c070a99c535159a7894c88824a2d8bdf1f3aec7720d90540aff674b8->leave($__internal_927775d1c070a99c535159a7894c88824a2d8bdf1f3aec7720d90540aff674b8_prof);

        
        $__internal_cd413e224257276a30ee765bcb93a24842bd5bf81729096dcb147202bf33a20c->leave($__internal_cd413e224257276a30ee765bcb93a24842bd5bf81729096dcb147202bf33a20c_prof);

    }

    // line 192
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_da249497eac0db8ff75aa03b90adb7c992033398f06275f9aa27bcdf1a5171e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da249497eac0db8ff75aa03b90adb7c992033398f06275f9aa27bcdf1a5171e6->enter($__internal_da249497eac0db8ff75aa03b90adb7c992033398f06275f9aa27bcdf1a5171e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_f22477d7a7eac7d60e15f6080835ba136962147e8c1e523214755b4ba945b6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22477d7a7eac7d60e15f6080835ba136962147e8c1e523214755b4ba945b6f2->enter($__internal_f22477d7a7eac7d60e15f6080835ba136962147e8c1e523214755b4ba945b6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 193
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 236
        if (("search" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 237
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 238
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_f22477d7a7eac7d60e15f6080835ba136962147e8c1e523214755b4ba945b6f2->leave($__internal_f22477d7a7eac7d60e15f6080835ba136962147e8c1e523214755b4ba945b6f2_prof);

        
        $__internal_da249497eac0db8ff75aa03b90adb7c992033398f06275f9aa27bcdf1a5171e6->leave($__internal_da249497eac0db8ff75aa03b90adb7c992033398f06275f9aa27bcdf1a5171e6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 238,  825 => 237,  823 => 236,  789 => 205,  773 => 193,  764 => 192,  753 => 188,  751 => 187,  750 => 186,  749 => 185,  748 => 184,  747 => 183,  746 => 181,  743 => 180,  741 => 178,  740 => 177,  738 => 176,  729 => 175,  716 => 172,  707 => 171,  696 => 154,  694 => 153,  693 => 152,  692 => 151,  691 => 150,  690 => 149,  688 => 148,  679 => 147,  669 => 166,  659 => 162,  655 => 161,  652 => 160,  638 => 158,  634 => 156,  632 => 147,  627 => 146,  624 => 145,  622 => 144,  619 => 143,  610 => 140,  600 => 139,  597 => 138,  595 => 2,  593 => 137,  590 => 136,  586 => 135,  581 => 134,  578 => 133,  576 => 132,  557 => 131,  548 => 130,  537 => 125,  531 => 122,  528 => 121,  526 => 120,  523 => 119,  516 => 117,  510 => 115,  504 => 112,  500 => 111,  495 => 110,  493 => 109,  481 => 108,  478 => 107,  475 => 106,  473 => 2,  471 => 105,  468 => 104,  465 => 103,  461 => 102,  458 => 101,  449 => 100,  439 => 175,  436 => 174,  434 => 171,  428 => 167,  426 => 130,  421 => 127,  419 => 100,  413 => 96,  410 => 95,  401 => 94,  388 => 83,  386 => 2,  384 => 83,  378 => 82,  370 => 81,  367 => 80,  358 => 79,  344 => 67,  342 => 2,  341 => 67,  336 => 65,  331 => 63,  326 => 61,  322 => 60,  318 => 59,  314 => 58,  310 => 57,  307 => 56,  298 => 55,  286 => 72,  284 => 55,  280 => 54,  275 => 53,  266 => 52,  256 => 88,  253 => 87,  250 => 79,  247 => 78,  245 => 77,  242 => 76,  239 => 75,  237 => 52,  234 => 51,  231 => 50,  228 => 49,  219 => 48,  206 => 42,  197 => 41,  184 => 89,  182 => 48,  176 => 44,  174 => 41,  170 => 39,  161 => 38,  147 => 33,  146 => 2,  144 => 33,  141 => 32,  136 => 30,  135 => 2,  133 => 30,  130 => 29,  127 => 28,  125 => 27,  116 => 26,  98 => 24,  80 => 23,  70 => 5,  68 => 21,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "@EasyAdmin/default/list.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\list.html.twig");
    }
}
