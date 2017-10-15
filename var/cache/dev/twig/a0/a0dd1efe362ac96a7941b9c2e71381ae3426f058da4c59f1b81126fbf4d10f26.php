<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_af8e8882846e5d1d032a7ff2c51a91ba3f5f0037b9b16386534a235a40f3f54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6406cac16d97249c9176dda22ff8898b26fc9003530b8ffd48e820524a24db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6406cac16d97249c9176dda22ff8898b26fc9003530b8ffd48e820524a24db8->enter($__internal_b6406cac16d97249c9176dda22ff8898b26fc9003530b8ffd48e820524a24db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_f04c6735969d30b59664c6dd05cf60df493ad1d2473c5e8d84517a82c8c27d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04c6735969d30b59664c6dd05cf60df493ad1d2473c5e8d84517a82c8c27d34->enter($__internal_f04c6735969d30b59664c6dd05cf60df493ad1d2473c5e8d84517a82c8c27d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_b6406cac16d97249c9176dda22ff8898b26fc9003530b8ffd48e820524a24db8->leave($__internal_b6406cac16d97249c9176dda22ff8898b26fc9003530b8ffd48e820524a24db8_prof);

        
        $__internal_f04c6735969d30b59664c6dd05cf60df493ad1d2473c5e8d84517a82c8c27d34->leave($__internal_f04c6735969d30b59664c6dd05cf60df493ad1d2473c5e8d84517a82c8c27d34_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_98dcdc0c180857cef7fd1f5096a6a80c5fa4b0f3bd7117cae2fd0c5238746271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dcdc0c180857cef7fd1f5096a6a80c5fa4b0f3bd7117cae2fd0c5238746271->enter($__internal_98dcdc0c180857cef7fd1f5096a6a80c5fa4b0f3bd7117cae2fd0c5238746271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f2b6c5f2a4f2ea9ccd3cb838b8b5561c33231b223b398cba7fd53baef4d14c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b6c5f2a4f2ea9ccd3cb838b8b5561c33231b223b398cba7fd53baef4d14c2e->enter($__internal_f2b6c5f2a4f2ea9ccd3cb838b8b5561c33231b223b398cba7fd53baef4d14c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f2b6c5f2a4f2ea9ccd3cb838b8b5561c33231b223b398cba7fd53baef4d14c2e->leave($__internal_f2b6c5f2a4f2ea9ccd3cb838b8b5561c33231b223b398cba7fd53baef4d14c2e_prof);

        
        $__internal_98dcdc0c180857cef7fd1f5096a6a80c5fa4b0f3bd7117cae2fd0c5238746271->leave($__internal_98dcdc0c180857cef7fd1f5096a6a80c5fa4b0f3bd7117cae2fd0c5238746271_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_1ed174704e8a0d5cd92c7bd8b523be8704d590b0eb8e8f4808d63a9cfd879ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed174704e8a0d5cd92c7bd8b523be8704d590b0eb8e8f4808d63a9cfd879ab4->enter($__internal_1ed174704e8a0d5cd92c7bd8b523be8704d590b0eb8e8f4808d63a9cfd879ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_830378619a996ef3a229b410980008747bb129815fcc40c1597088d25ac9aac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830378619a996ef3a229b410980008747bb129815fcc40c1597088d25ac9aac3->enter($__internal_830378619a996ef3a229b410980008747bb129815fcc40c1597088d25ac9aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_830378619a996ef3a229b410980008747bb129815fcc40c1597088d25ac9aac3->leave($__internal_830378619a996ef3a229b410980008747bb129815fcc40c1597088d25ac9aac3_prof);

        
        $__internal_1ed174704e8a0d5cd92c7bd8b523be8704d590b0eb8e8f4808d63a9cfd879ab4->leave($__internal_1ed174704e8a0d5cd92c7bd8b523be8704d590b0eb8e8f4808d63a9cfd879ab4_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_7eef20444d064f4e55d941dd13eccf3df25e2ee8f756d121f332a32e80bf16ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eef20444d064f4e55d941dd13eccf3df25e2ee8f756d121f332a32e80bf16ae->enter($__internal_7eef20444d064f4e55d941dd13eccf3df25e2ee8f756d121f332a32e80bf16ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_e00ed44f91e900553b61e1a00e6e2b6ae5e22d36553ba9e6569786e0dfa9eee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00ed44f91e900553b61e1a00e6e2b6ae5e22d36553ba9e6569786e0dfa9eee1->enter($__internal_e00ed44f91e900553b61e1a00e6e2b6ae5e22d36553ba9e6569786e0dfa9eee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e00ed44f91e900553b61e1a00e6e2b6ae5e22d36553ba9e6569786e0dfa9eee1->leave($__internal_e00ed44f91e900553b61e1a00e6e2b6ae5e22d36553ba9e6569786e0dfa9eee1_prof);

        
        $__internal_7eef20444d064f4e55d941dd13eccf3df25e2ee8f756d121f332a32e80bf16ae->leave($__internal_7eef20444d064f4e55d941dd13eccf3df25e2ee8f756d121f332a32e80bf16ae_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_1df078329ef3d09bef860015fff78cfb652199b6cee23e8f0ffa92d307b8b91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df078329ef3d09bef860015fff78cfb652199b6cee23e8f0ffa92d307b8b91c->enter($__internal_1df078329ef3d09bef860015fff78cfb652199b6cee23e8f0ffa92d307b8b91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_0d15f27ec8cb42dac95c1119cec75f0d25c735286541e96bc3ef34bae9d36c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d15f27ec8cb42dac95c1119cec75f0d25c735286541e96bc3ef34bae9d36c7b->enter($__internal_0d15f27ec8cb42dac95c1119cec75f0d25c735286541e96bc3ef34bae9d36c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0d15f27ec8cb42dac95c1119cec75f0d25c735286541e96bc3ef34bae9d36c7b->leave($__internal_0d15f27ec8cb42dac95c1119cec75f0d25c735286541e96bc3ef34bae9d36c7b_prof);

        
        $__internal_1df078329ef3d09bef860015fff78cfb652199b6cee23e8f0ffa92d307b8b91c->leave($__internal_1df078329ef3d09bef860015fff78cfb652199b6cee23e8f0ffa92d307b8b91c_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_87ab7ccc611e2644099bba877b5d5209a2e5b04ef6e146f1dac540d2e8cd7b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ab7ccc611e2644099bba877b5d5209a2e5b04ef6e146f1dac540d2e8cd7b06->enter($__internal_87ab7ccc611e2644099bba877b5d5209a2e5b04ef6e146f1dac540d2e8cd7b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_4ab9a602b27af12bf2781f31431d7769ae110ee191f0c993264a7e6727df2702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab9a602b27af12bf2781f31431d7769ae110ee191f0c993264a7e6727df2702->enter($__internal_4ab9a602b27af12bf2781f31431d7769ae110ee191f0c993264a7e6727df2702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_4ab9a602b27af12bf2781f31431d7769ae110ee191f0c993264a7e6727df2702->leave($__internal_4ab9a602b27af12bf2781f31431d7769ae110ee191f0c993264a7e6727df2702_prof);

        
        $__internal_87ab7ccc611e2644099bba877b5d5209a2e5b04ef6e146f1dac540d2e8cd7b06->leave($__internal_87ab7ccc611e2644099bba877b5d5209a2e5b04ef6e146f1dac540d2e8cd7b06_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_15e02edd1b68230fa83b3fa34eaba80aa07dd28b1f375fa8bdcf8529b8c53241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e02edd1b68230fa83b3fa34eaba80aa07dd28b1f375fa8bdcf8529b8c53241->enter($__internal_15e02edd1b68230fa83b3fa34eaba80aa07dd28b1f375fa8bdcf8529b8c53241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ff0401692b0a4a6bcc9e468b561e9d5d63fae77a334595a9632c3390baebcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff0401692b0a4a6bcc9e468b561e9d5d63fae77a334595a9632c3390baebcd3->enter($__internal_8ff0401692b0a4a6bcc9e468b561e9d5d63fae77a334595a9632c3390baebcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_8ff0401692b0a4a6bcc9e468b561e9d5d63fae77a334595a9632c3390baebcd3->leave($__internal_8ff0401692b0a4a6bcc9e468b561e9d5d63fae77a334595a9632c3390baebcd3_prof);

        
        $__internal_15e02edd1b68230fa83b3fa34eaba80aa07dd28b1f375fa8bdcf8529b8c53241->leave($__internal_15e02edd1b68230fa83b3fa34eaba80aa07dd28b1f375fa8bdcf8529b8c53241_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_5a23b0c47b06a0dd5a3fd2aba14a827fcc90e79dc955c0e6f7a5155bad0b649d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a23b0c47b06a0dd5a3fd2aba14a827fcc90e79dc955c0e6f7a5155bad0b649d->enter($__internal_5a23b0c47b06a0dd5a3fd2aba14a827fcc90e79dc955c0e6f7a5155bad0b649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_50f54ee6b5a4860d41e32a85288431fcaa1005a593f84f5e9926923872e79b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f54ee6b5a4860d41e32a85288431fcaa1005a593f84f5e9926923872e79b50->enter($__internal_50f54ee6b5a4860d41e32a85288431fcaa1005a593f84f5e9926923872e79b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_50f54ee6b5a4860d41e32a85288431fcaa1005a593f84f5e9926923872e79b50->leave($__internal_50f54ee6b5a4860d41e32a85288431fcaa1005a593f84f5e9926923872e79b50_prof);

        
        $__internal_5a23b0c47b06a0dd5a3fd2aba14a827fcc90e79dc955c0e6f7a5155bad0b649d->leave($__internal_5a23b0c47b06a0dd5a3fd2aba14a827fcc90e79dc955c0e6f7a5155bad0b649d_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8e1acb587ff9a689baadc8db01be6d78b495b0b80705bc628aad3d20feae356a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1acb587ff9a689baadc8db01be6d78b495b0b80705bc628aad3d20feae356a->enter($__internal_8e1acb587ff9a689baadc8db01be6d78b495b0b80705bc628aad3d20feae356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_4fa1cefa81aae17e4f6b86bc5aab4c3b5379c5efc3c06d85af09bc98ebf3c955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa1cefa81aae17e4f6b86bc5aab4c3b5379c5efc3c06d85af09bc98ebf3c955->enter($__internal_4fa1cefa81aae17e4f6b86bc5aab4c3b5379c5efc3c06d85af09bc98ebf3c955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_4fa1cefa81aae17e4f6b86bc5aab4c3b5379c5efc3c06d85af09bc98ebf3c955->leave($__internal_4fa1cefa81aae17e4f6b86bc5aab4c3b5379c5efc3c06d85af09bc98ebf3c955_prof);

        
        $__internal_8e1acb587ff9a689baadc8db01be6d78b495b0b80705bc628aad3d20feae356a->leave($__internal_8e1acb587ff9a689baadc8db01be6d78b495b0b80705bc628aad3d20feae356a_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_8016df1f5363472c126ccfa6830e0d3ac97a579b4b8ad743fe49053cf2bf0ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8016df1f5363472c126ccfa6830e0d3ac97a579b4b8ad743fe49053cf2bf0ce3->enter($__internal_8016df1f5363472c126ccfa6830e0d3ac97a579b4b8ad743fe49053cf2bf0ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_ce4a0845d17f80a91288544d872f57b74adaaab257221a1f0b38cf38d71c805a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4a0845d17f80a91288544d872f57b74adaaab257221a1f0b38cf38d71c805a->enter($__internal_ce4a0845d17f80a91288544d872f57b74adaaab257221a1f0b38cf38d71c805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_ce4a0845d17f80a91288544d872f57b74adaaab257221a1f0b38cf38d71c805a->leave($__internal_ce4a0845d17f80a91288544d872f57b74adaaab257221a1f0b38cf38d71c805a_prof);

        
        $__internal_8016df1f5363472c126ccfa6830e0d3ac97a579b4b8ad743fe49053cf2bf0ce3->leave($__internal_8016df1f5363472c126ccfa6830e0d3ac97a579b4b8ad743fe49053cf2bf0ce3_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_3f49f4a289d4a6a638eef3ab65c10bdba4e88edec78bb4264b57920081ce8aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f49f4a289d4a6a638eef3ab65c10bdba4e88edec78bb4264b57920081ce8aeb->enter($__internal_3f49f4a289d4a6a638eef3ab65c10bdba4e88edec78bb4264b57920081ce8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_596ba8c36aa1fad7f0f9c0c10f60892d7935ea4a68feecb5eafd6008a4df028f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596ba8c36aa1fad7f0f9c0c10f60892d7935ea4a68feecb5eafd6008a4df028f->enter($__internal_596ba8c36aa1fad7f0f9c0c10f60892d7935ea4a68feecb5eafd6008a4df028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_596ba8c36aa1fad7f0f9c0c10f60892d7935ea4a68feecb5eafd6008a4df028f->leave($__internal_596ba8c36aa1fad7f0f9c0c10f60892d7935ea4a68feecb5eafd6008a4df028f_prof);

        
        $__internal_3f49f4a289d4a6a638eef3ab65c10bdba4e88edec78bb4264b57920081ce8aeb->leave($__internal_3f49f4a289d4a6a638eef3ab65c10bdba4e88edec78bb4264b57920081ce8aeb_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_f50286d394dc9e4e949ca05736be856c53e7289ac2be4200c7bc70d5c236d329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50286d394dc9e4e949ca05736be856c53e7289ac2be4200c7bc70d5c236d329->enter($__internal_f50286d394dc9e4e949ca05736be856c53e7289ac2be4200c7bc70d5c236d329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_c1359939867b1129a5412e0e7ae45fac51dff46fb3677b386fee1d984244117f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1359939867b1129a5412e0e7ae45fac51dff46fb3677b386fee1d984244117f->enter($__internal_c1359939867b1129a5412e0e7ae45fac51dff46fb3677b386fee1d984244117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_c1359939867b1129a5412e0e7ae45fac51dff46fb3677b386fee1d984244117f->leave($__internal_c1359939867b1129a5412e0e7ae45fac51dff46fb3677b386fee1d984244117f_prof);

        
        $__internal_f50286d394dc9e4e949ca05736be856c53e7289ac2be4200c7bc70d5c236d329->leave($__internal_f50286d394dc9e4e949ca05736be856c53e7289ac2be4200c7bc70d5c236d329_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_1809b3160c2c4425cc4ee0b77dae8ec53f570cd10b5710af44d462414d0ccd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1809b3160c2c4425cc4ee0b77dae8ec53f570cd10b5710af44d462414d0ccd01->enter($__internal_1809b3160c2c4425cc4ee0b77dae8ec53f570cd10b5710af44d462414d0ccd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_19620f2fe2f45996a926c63335a42f33050fc2be14afbd735327a61649c23340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19620f2fe2f45996a926c63335a42f33050fc2be14afbd735327a61649c23340->enter($__internal_19620f2fe2f45996a926c63335a42f33050fc2be14afbd735327a61649c23340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_19620f2fe2f45996a926c63335a42f33050fc2be14afbd735327a61649c23340->leave($__internal_19620f2fe2f45996a926c63335a42f33050fc2be14afbd735327a61649c23340_prof);

        
        $__internal_1809b3160c2c4425cc4ee0b77dae8ec53f570cd10b5710af44d462414d0ccd01->leave($__internal_1809b3160c2c4425cc4ee0b77dae8ec53f570cd10b5710af44d462414d0ccd01_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_86c775ae2f5308be398d9cb103110f5c6aeb552c7f4a54546fcf0179187386dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c775ae2f5308be398d9cb103110f5c6aeb552c7f4a54546fcf0179187386dd->enter($__internal_86c775ae2f5308be398d9cb103110f5c6aeb552c7f4a54546fcf0179187386dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_23e699fd305331889f13940ff55fff640fef64eb7bf4a4965aab1a12c5735752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e699fd305331889f13940ff55fff640fef64eb7bf4a4965aab1a12c5735752->enter($__internal_23e699fd305331889f13940ff55fff640fef64eb7bf4a4965aab1a12c5735752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_23e699fd305331889f13940ff55fff640fef64eb7bf4a4965aab1a12c5735752->leave($__internal_23e699fd305331889f13940ff55fff640fef64eb7bf4a4965aab1a12c5735752_prof);

        
        $__internal_86c775ae2f5308be398d9cb103110f5c6aeb552c7f4a54546fcf0179187386dd->leave($__internal_86c775ae2f5308be398d9cb103110f5c6aeb552c7f4a54546fcf0179187386dd_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_3bf07c814ac480cf7b7842a6d892e1f7a21dcd4831c0c987c076dde4b2653caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf07c814ac480cf7b7842a6d892e1f7a21dcd4831c0c987c076dde4b2653caf->enter($__internal_3bf07c814ac480cf7b7842a6d892e1f7a21dcd4831c0c987c076dde4b2653caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_2735a811c408e7a9b13f09c655848717dfce6244d737fb5dd4b37d91287ab5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2735a811c408e7a9b13f09c655848717dfce6244d737fb5dd4b37d91287ab5ba->enter($__internal_2735a811c408e7a9b13f09c655848717dfce6244d737fb5dd4b37d91287ab5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) ? $context["_logout_path"] : $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_2735a811c408e7a9b13f09c655848717dfce6244d737fb5dd4b37d91287ab5ba->leave($__internal_2735a811c408e7a9b13f09c655848717dfce6244d737fb5dd4b37d91287ab5ba_prof);

        
        $__internal_3bf07c814ac480cf7b7842a6d892e1f7a21dcd4831c0c987c076dde4b2653caf->leave($__internal_3bf07c814ac480cf7b7842a6d892e1f7a21dcd4831c0c987c076dde4b2653caf_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ecf481f8799e9dd375c7945e96144e7c7f4c4cf4bcc48727ba2a269adb568f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf481f8799e9dd375c7945e96144e7c7f4c4cf4bcc48727ba2a269adb568f4c->enter($__internal_ecf481f8799e9dd375c7945e96144e7c7f4c4cf4bcc48727ba2a269adb568f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_68278fd6ba43192eab78e874f56b7d9677a56643f27fe397fe0b3806f89a8a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68278fd6ba43192eab78e874f56b7d9677a56643f27fe397fe0b3806f89a8a62->enter($__internal_68278fd6ba43192eab78e874f56b7d9677a56643f27fe397fe0b3806f89a8a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_68278fd6ba43192eab78e874f56b7d9677a56643f27fe397fe0b3806f89a8a62->leave($__internal_68278fd6ba43192eab78e874f56b7d9677a56643f27fe397fe0b3806f89a8a62_prof);

        
        $__internal_ecf481f8799e9dd375c7945e96144e7c7f4c4cf4bcc48727ba2a269adb568f4c->leave($__internal_ecf481f8799e9dd375c7945e96144e7c7f4c4cf4bcc48727ba2a269adb568f4c_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f5ab9b2dd3d08d1b58dcd88bc2fc3d44a65ebf7936705993b3b20183e706282f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ab9b2dd3d08d1b58dcd88bc2fc3d44a65ebf7936705993b3b20183e706282f->enter($__internal_f5ab9b2dd3d08d1b58dcd88bc2fc3d44a65ebf7936705993b3b20183e706282f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_1fc64739e03f5d86cb0eddbd4501348dfe741bdac521a4f27bffb879bcf5053f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc64739e03f5d86cb0eddbd4501348dfe741bdac521a4f27bffb879bcf5053f->enter($__internal_1fc64739e03f5d86cb0eddbd4501348dfe741bdac521a4f27bffb879bcf5053f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_1fc64739e03f5d86cb0eddbd4501348dfe741bdac521a4f27bffb879bcf5053f->leave($__internal_1fc64739e03f5d86cb0eddbd4501348dfe741bdac521a4f27bffb879bcf5053f_prof);

        
        $__internal_f5ab9b2dd3d08d1b58dcd88bc2fc3d44a65ebf7936705993b3b20183e706282f->leave($__internal_f5ab9b2dd3d08d1b58dcd88bc2fc3d44a65ebf7936705993b3b20183e706282f_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1f99f2f42209bc06a77f1d9ffa6bd1a3af0d6434518b2e4bb3b1f6bab954ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f99f2f42209bc06a77f1d9ffa6bd1a3af0d6434518b2e4bb3b1f6bab954ffd->enter($__internal_d1f99f2f42209bc06a77f1d9ffa6bd1a3af0d6434518b2e4bb3b1f6bab954ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_41c500b49841f6655fe53e58ba66d9591729287ab253649f4ddab37931b01bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c500b49841f6655fe53e58ba66d9591729287ab253649f4ddab37931b01bfa->enter($__internal_41c500b49841f6655fe53e58ba66d9591729287ab253649f4ddab37931b01bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_41c500b49841f6655fe53e58ba66d9591729287ab253649f4ddab37931b01bfa->leave($__internal_41c500b49841f6655fe53e58ba66d9591729287ab253649f4ddab37931b01bfa_prof);

        
        $__internal_d1f99f2f42209bc06a77f1d9ffa6bd1a3af0d6434518b2e4bb3b1f6bab954ffd->leave($__internal_d1f99f2f42209bc06a77f1d9ffa6bd1a3af0d6434518b2e4bb3b1f6bab954ffd_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_64d66e0c5b698f197a14c19c50c99a16387727f20d7f53f52bc334e77de4b6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d66e0c5b698f197a14c19c50c99a16387727f20d7f53f52bc334e77de4b6da->enter($__internal_64d66e0c5b698f197a14c19c50c99a16387727f20d7f53f52bc334e77de4b6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_0033fb7f7af2ac809d46de80178f1691e51b5ab4c4f8eb541cf79ed7f469fd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0033fb7f7af2ac809d46de80178f1691e51b5ab4c4f8eb541cf79ed7f469fd8f->enter($__internal_0033fb7f7af2ac809d46de80178f1691e51b5ab4c4f8eb541cf79ed7f469fd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_0033fb7f7af2ac809d46de80178f1691e51b5ab4c4f8eb541cf79ed7f469fd8f->leave($__internal_0033fb7f7af2ac809d46de80178f1691e51b5ab4c4f8eb541cf79ed7f469fd8f_prof);

        
        $__internal_64d66e0c5b698f197a14c19c50c99a16387727f20d7f53f52bc334e77de4b6da->leave($__internal_64d66e0c5b698f197a14c19c50c99a16387727f20d7f53f52bc334e77de4b6da_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f0bb4a05f7726b7f473e8c7d1c5206d011a4d183a700185c84191c464483c205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bb4a05f7726b7f473e8c7d1c5206d011a4d183a700185c84191c464483c205->enter($__internal_f0bb4a05f7726b7f473e8c7d1c5206d011a4d183a700185c84191c464483c205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_383a37928479a2430f80ffc3d0fe01eeee3ef82c279da3d961870b475d6aa607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383a37928479a2430f80ffc3d0fe01eeee3ef82c279da3d961870b475d6aa607->enter($__internal_383a37928479a2430f80ffc3d0fe01eeee3ef82c279da3d961870b475d6aa607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_383a37928479a2430f80ffc3d0fe01eeee3ef82c279da3d961870b475d6aa607->leave($__internal_383a37928479a2430f80ffc3d0fe01eeee3ef82c279da3d961870b475d6aa607_prof);

        
        $__internal_f0bb4a05f7726b7f473e8c7d1c5206d011a4d183a700185c84191c464483c205->leave($__internal_f0bb4a05f7726b7f473e8c7d1c5206d011a4d183a700185c84191c464483c205_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_b75810540a2c2e965854f85d443f5ea1eea570def3d2da584d5c28b4784c568b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75810540a2c2e965854f85d443f5ea1eea570def3d2da584d5c28b4784c568b->enter($__internal_b75810540a2c2e965854f85d443f5ea1eea570def3d2da584d5c28b4784c568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_f6cb410b6683022406a4b56acc1977ebad82f65572feb0ed625ea2e2b11e5643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cb410b6683022406a4b56acc1977ebad82f65572feb0ed625ea2e2b11e5643->enter($__internal_f6cb410b6683022406a4b56acc1977ebad82f65572feb0ed625ea2e2b11e5643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_f6cb410b6683022406a4b56acc1977ebad82f65572feb0ed625ea2e2b11e5643->leave($__internal_f6cb410b6683022406a4b56acc1977ebad82f65572feb0ed625ea2e2b11e5643_prof);

        
        $__internal_b75810540a2c2e965854f85d443f5ea1eea570def3d2da584d5c28b4784c568b->leave($__internal_b75810540a2c2e965854f85d443f5ea1eea570def3d2da584d5c28b4784c568b_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_1d2791e39d5541efb8d28cf7c9b20ea7751181cee483590b5ef9a3a895a45bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2791e39d5541efb8d28cf7c9b20ea7751181cee483590b5ef9a3a895a45bfe->enter($__internal_1d2791e39d5541efb8d28cf7c9b20ea7751181cee483590b5ef9a3a895a45bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_eaba28ebaa38984717bc840b262369ebcc4159fd185800e6e87e0faf7ea66684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaba28ebaa38984717bc840b262369ebcc4159fd185800e6e87e0faf7ea66684->enter($__internal_eaba28ebaa38984717bc840b262369ebcc4159fd185800e6e87e0faf7ea66684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_eaba28ebaa38984717bc840b262369ebcc4159fd185800e6e87e0faf7ea66684->leave($__internal_eaba28ebaa38984717bc840b262369ebcc4159fd185800e6e87e0faf7ea66684_prof);

        
        $__internal_1d2791e39d5541efb8d28cf7c9b20ea7751181cee483590b5ef9a3a895a45bfe->leave($__internal_1d2791e39d5541efb8d28cf7c9b20ea7751181cee483590b5ef9a3a895a45bfe_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_541c3272396ab9893e2790857340e640c6c851ff7cbcc41b52af61ea958d320b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541c3272396ab9893e2790857340e640c6c851ff7cbcc41b52af61ea958d320b->enter($__internal_541c3272396ab9893e2790857340e640c6c851ff7cbcc41b52af61ea958d320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_dc5f82a936aeb89bb05bbedaf3c2ad34e815bc95d964489cdf191d6343a11674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5f82a936aeb89bb05bbedaf3c2ad34e815bc95d964489cdf191d6343a11674->enter($__internal_dc5f82a936aeb89bb05bbedaf3c2ad34e815bc95d964489cdf191d6343a11674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_dc5f82a936aeb89bb05bbedaf3c2ad34e815bc95d964489cdf191d6343a11674->leave($__internal_dc5f82a936aeb89bb05bbedaf3c2ad34e815bc95d964489cdf191d6343a11674_prof);

        
        $__internal_541c3272396ab9893e2790857340e640c6c851ff7cbcc41b52af61ea958d320b->leave($__internal_541c3272396ab9893e2790857340e640c6c851ff7cbcc41b52af61ea958d320b_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_43c5eeac709035dea1bf04c90cb2460dcc754bb1c017b2e53b5597300648194b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c5eeac709035dea1bf04c90cb2460dcc754bb1c017b2e53b5597300648194b->enter($__internal_43c5eeac709035dea1bf04c90cb2460dcc754bb1c017b2e53b5597300648194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_77dd74bcd033aa61e9c282494345ba82eec8c4a6c91af81abf2a754d79a3fb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dd74bcd033aa61e9c282494345ba82eec8c4a6c91af81abf2a754d79a3fb73->enter($__internal_77dd74bcd033aa61e9c282494345ba82eec8c4a6c91af81abf2a754d79a3fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_77dd74bcd033aa61e9c282494345ba82eec8c4a6c91af81abf2a754d79a3fb73->leave($__internal_77dd74bcd033aa61e9c282494345ba82eec8c4a6c91af81abf2a754d79a3fb73_prof);

        
        $__internal_43c5eeac709035dea1bf04c90cb2460dcc754bb1c017b2e53b5597300648194b->leave($__internal_43c5eeac709035dea1bf04c90cb2460dcc754bb1c017b2e53b5597300648194b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
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
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
