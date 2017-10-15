<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_a6bd8eb13c8fa2cb5f3e6a9dc1d0edc406d181d6d3579fcc4714da2cd2d745ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ec72a356926f07b8e9e968fd5f7f4e26ae14846aca25f24b87dc1201830a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ec72a356926f07b8e9e968fd5f7f4e26ae14846aca25f24b87dc1201830a29->enter($__internal_65ec72a356926f07b8e9e968fd5f7f4e26ae14846aca25f24b87dc1201830a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_24dbdb61067cb0d04fd4c89ddcd87d3232efb346a0ccf38758df63b2f60a9369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dbdb61067cb0d04fd4c89ddcd87d3232efb346a0ccf38758df63b2f60a9369->enter($__internal_24dbdb61067cb0d04fd4c89ddcd87d3232efb346a0ccf38758df63b2f60a9369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_65ec72a356926f07b8e9e968fd5f7f4e26ae14846aca25f24b87dc1201830a29->leave($__internal_65ec72a356926f07b8e9e968fd5f7f4e26ae14846aca25f24b87dc1201830a29_prof);

        
        $__internal_24dbdb61067cb0d04fd4c89ddcd87d3232efb346a0ccf38758df63b2f60a9369->leave($__internal_24dbdb61067cb0d04fd4c89ddcd87d3232efb346a0ccf38758df63b2f60a9369_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c50380eea4e25c7e9231191513558ceb24dfea1d6bca82c020ccf41606305b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50380eea4e25c7e9231191513558ceb24dfea1d6bca82c020ccf41606305b59->enter($__internal_c50380eea4e25c7e9231191513558ceb24dfea1d6bca82c020ccf41606305b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7205205184c5dc9687169eaa625e14c676292fd625fc3deec172c59612b5ef19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7205205184c5dc9687169eaa625e14c676292fd625fc3deec172c59612b5ef19->enter($__internal_7205205184c5dc9687169eaa625e14c676292fd625fc3deec172c59612b5ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7205205184c5dc9687169eaa625e14c676292fd625fc3deec172c59612b5ef19->leave($__internal_7205205184c5dc9687169eaa625e14c676292fd625fc3deec172c59612b5ef19_prof);

        
        $__internal_c50380eea4e25c7e9231191513558ceb24dfea1d6bca82c020ccf41606305b59->leave($__internal_c50380eea4e25c7e9231191513558ceb24dfea1d6bca82c020ccf41606305b59_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f8849b00f9c4a905c3b414cf51a120fdc5f47bbd66bdf851211f2bb63b356f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8849b00f9c4a905c3b414cf51a120fdc5f47bbd66bdf851211f2bb63b356f8d->enter($__internal_f8849b00f9c4a905c3b414cf51a120fdc5f47bbd66bdf851211f2bb63b356f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_96eb76df04114bbd48d8bbaf7cb5afaf8916c0a120d1909fae1d4f4de55e3ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eb76df04114bbd48d8bbaf7cb5afaf8916c0a120d1909fae1d4f4de55e3ae4->enter($__internal_96eb76df04114bbd48d8bbaf7cb5afaf8916c0a120d1909fae1d4f4de55e3ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_96eb76df04114bbd48d8bbaf7cb5afaf8916c0a120d1909fae1d4f4de55e3ae4->leave($__internal_96eb76df04114bbd48d8bbaf7cb5afaf8916c0a120d1909fae1d4f4de55e3ae4_prof);

        
        $__internal_f8849b00f9c4a905c3b414cf51a120fdc5f47bbd66bdf851211f2bb63b356f8d->leave($__internal_f8849b00f9c4a905c3b414cf51a120fdc5f47bbd66bdf851211f2bb63b356f8d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_158aaa1ba194f8ff079cd2a504d325a0459f947609535d809b69395c654f5aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158aaa1ba194f8ff079cd2a504d325a0459f947609535d809b69395c654f5aa9->enter($__internal_158aaa1ba194f8ff079cd2a504d325a0459f947609535d809b69395c654f5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cdeb8c71edd8e210942dbfb83b93e407d37cad5f0bb4189f8f7ab69fbd89370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdeb8c71edd8e210942dbfb83b93e407d37cad5f0bb4189f8f7ab69fbd89370d->enter($__internal_cdeb8c71edd8e210942dbfb83b93e407d37cad5f0bb4189f8f7ab69fbd89370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cdeb8c71edd8e210942dbfb83b93e407d37cad5f0bb4189f8f7ab69fbd89370d->leave($__internal_cdeb8c71edd8e210942dbfb83b93e407d37cad5f0bb4189f8f7ab69fbd89370d_prof);

        
        $__internal_158aaa1ba194f8ff079cd2a504d325a0459f947609535d809b69395c654f5aa9->leave($__internal_158aaa1ba194f8ff079cd2a504d325a0459f947609535d809b69395c654f5aa9_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_24c9a5da459b77dbbfb9d42bce22039d6e44b30d732763e814473bd837771e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c9a5da459b77dbbfb9d42bce22039d6e44b30d732763e814473bd837771e94->enter($__internal_24c9a5da459b77dbbfb9d42bce22039d6e44b30d732763e814473bd837771e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8bfc6bf982b75cbd28aa53ae96b60437b6f2ab341b9e1b966a32be772f8420b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bfc6bf982b75cbd28aa53ae96b60437b6f2ab341b9e1b966a32be772f8420b0->enter($__internal_8bfc6bf982b75cbd28aa53ae96b60437b6f2ab341b9e1b966a32be772f8420b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_ed658d8930c424cd7dc188fd7e587e936c503b62141d69e5b2d571a0e436383e = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_5213531655ce7df3bbff57edd4666ff059331a6402cc6122b272d0a2131eec2e = "{{") && ('' === $__internal_5213531655ce7df3bbff57edd4666ff059331a6402cc6122b272d0a2131eec2e || 0 === strpos($__internal_ed658d8930c424cd7dc188fd7e587e936c503b62141d69e5b2d571a0e436383e, $__internal_5213531655ce7df3bbff57edd4666ff059331a6402cc6122b272d0a2131eec2e)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_8bfc6bf982b75cbd28aa53ae96b60437b6f2ab341b9e1b966a32be772f8420b0->leave($__internal_8bfc6bf982b75cbd28aa53ae96b60437b6f2ab341b9e1b966a32be772f8420b0_prof);

        
        $__internal_24c9a5da459b77dbbfb9d42bce22039d6e44b30d732763e814473bd837771e94->leave($__internal_24c9a5da459b77dbbfb9d42bce22039d6e44b30d732763e814473bd837771e94_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e57a59413e6403a56237341ec3970cea4b4fb0b7cb09910362f5dd0d971d5b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57a59413e6403a56237341ec3970cea4b4fb0b7cb09910362f5dd0d971d5b57->enter($__internal_e57a59413e6403a56237341ec3970cea4b4fb0b7cb09910362f5dd0d971d5b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ff804aac6293e341c842f1c661f7a282b3113bf231d363058c28b60b4410b660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff804aac6293e341c842f1c661f7a282b3113bf231d363058c28b60b4410b660->enter($__internal_ff804aac6293e341c842f1c661f7a282b3113bf231d363058c28b60b4410b660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ff804aac6293e341c842f1c661f7a282b3113bf231d363058c28b60b4410b660->leave($__internal_ff804aac6293e341c842f1c661f7a282b3113bf231d363058c28b60b4410b660_prof);

        
        $__internal_e57a59413e6403a56237341ec3970cea4b4fb0b7cb09910362f5dd0d971d5b57->leave($__internal_e57a59413e6403a56237341ec3970cea4b4fb0b7cb09910362f5dd0d971d5b57_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8e0e0a33902788839a99127d8cddcc7bb525c522d24a945d8d8bac5a8e0f4fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0e0a33902788839a99127d8cddcc7bb525c522d24a945d8d8bac5a8e0f4fed->enter($__internal_8e0e0a33902788839a99127d8cddcc7bb525c522d24a945d8d8bac5a8e0f4fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_27660b0c01b03db60152075958ea650ed57da85bb49ae20a4fe415cf49903774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27660b0c01b03db60152075958ea650ed57da85bb49ae20a4fe415cf49903774->enter($__internal_27660b0c01b03db60152075958ea650ed57da85bb49ae20a4fe415cf49903774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_27660b0c01b03db60152075958ea650ed57da85bb49ae20a4fe415cf49903774->leave($__internal_27660b0c01b03db60152075958ea650ed57da85bb49ae20a4fe415cf49903774_prof);

        
        $__internal_8e0e0a33902788839a99127d8cddcc7bb525c522d24a945d8d8bac5a8e0f4fed->leave($__internal_8e0e0a33902788839a99127d8cddcc7bb525c522d24a945d8d8bac5a8e0f4fed_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8d79cc669cca75ccfab7f25fbe1c1998d9f7cdfcb5f00504b68eae90d077a1b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d79cc669cca75ccfab7f25fbe1c1998d9f7cdfcb5f00504b68eae90d077a1b3->enter($__internal_8d79cc669cca75ccfab7f25fbe1c1998d9f7cdfcb5f00504b68eae90d077a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9eba45c69e70440c07549f3eb72fca2ff8e783ec92a92475a855e8606d23c90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eba45c69e70440c07549f3eb72fca2ff8e783ec92a92475a855e8606d23c90d->enter($__internal_9eba45c69e70440c07549f3eb72fca2ff8e783ec92a92475a855e8606d23c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9eba45c69e70440c07549f3eb72fca2ff8e783ec92a92475a855e8606d23c90d->leave($__internal_9eba45c69e70440c07549f3eb72fca2ff8e783ec92a92475a855e8606d23c90d_prof);

        
        $__internal_8d79cc669cca75ccfab7f25fbe1c1998d9f7cdfcb5f00504b68eae90d077a1b3->leave($__internal_8d79cc669cca75ccfab7f25fbe1c1998d9f7cdfcb5f00504b68eae90d077a1b3_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_31321aaf37c41f3f9f28787eb6f70f0d1b478a7f1e21e3f3ba102939a807571f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31321aaf37c41f3f9f28787eb6f70f0d1b478a7f1e21e3f3ba102939a807571f->enter($__internal_31321aaf37c41f3f9f28787eb6f70f0d1b478a7f1e21e3f3ba102939a807571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0c2c13e43afd7e1d59f73332794ca19b09ec496c462992b4c4722d92f1ebb065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2c13e43afd7e1d59f73332794ca19b09ec496c462992b4c4722d92f1ebb065->enter($__internal_0c2c13e43afd7e1d59f73332794ca19b09ec496c462992b4c4722d92f1ebb065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_0c2c13e43afd7e1d59f73332794ca19b09ec496c462992b4c4722d92f1ebb065->leave($__internal_0c2c13e43afd7e1d59f73332794ca19b09ec496c462992b4c4722d92f1ebb065_prof);

        
        $__internal_31321aaf37c41f3f9f28787eb6f70f0d1b478a7f1e21e3f3ba102939a807571f->leave($__internal_31321aaf37c41f3f9f28787eb6f70f0d1b478a7f1e21e3f3ba102939a807571f_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_07085fc26973059da9544a526ea904808ac8b15338721de40e4c9a3565b61af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07085fc26973059da9544a526ea904808ac8b15338721de40e4c9a3565b61af8->enter($__internal_07085fc26973059da9544a526ea904808ac8b15338721de40e4c9a3565b61af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_dd89b8c68dfc666b17b53f2442ca3e8e8c69d4165f8ea3a0e17c77c3fe8d097f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd89b8c68dfc666b17b53f2442ca3e8e8c69d4165f8ea3a0e17c77c3fe8d097f->enter($__internal_dd89b8c68dfc666b17b53f2442ca3e8e8c69d4165f8ea3a0e17c77c3fe8d097f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_dd89b8c68dfc666b17b53f2442ca3e8e8c69d4165f8ea3a0e17c77c3fe8d097f->leave($__internal_dd89b8c68dfc666b17b53f2442ca3e8e8c69d4165f8ea3a0e17c77c3fe8d097f_prof);

        
        $__internal_07085fc26973059da9544a526ea904808ac8b15338721de40e4c9a3565b61af8->leave($__internal_07085fc26973059da9544a526ea904808ac8b15338721de40e4c9a3565b61af8_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_496e82f8d84bf2a88763af8afb68c7f81383ffd3092344ebf7da7c2baeef92f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496e82f8d84bf2a88763af8afb68c7f81383ffd3092344ebf7da7c2baeef92f6->enter($__internal_496e82f8d84bf2a88763af8afb68c7f81383ffd3092344ebf7da7c2baeef92f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_76f54d2e08f9f925dea3e327b5491164b18d3620592da79f02728aa3e44363af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f54d2e08f9f925dea3e327b5491164b18d3620592da79f02728aa3e44363af->enter($__internal_76f54d2e08f9f925dea3e327b5491164b18d3620592da79f02728aa3e44363af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_76f54d2e08f9f925dea3e327b5491164b18d3620592da79f02728aa3e44363af->leave($__internal_76f54d2e08f9f925dea3e327b5491164b18d3620592da79f02728aa3e44363af_prof);

        
        $__internal_496e82f8d84bf2a88763af8afb68c7f81383ffd3092344ebf7da7c2baeef92f6->leave($__internal_496e82f8d84bf2a88763af8afb68c7f81383ffd3092344ebf7da7c2baeef92f6_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2f0542cdccf81d21311b731a0d5a74a9140e74427888fbaa58126ed30523d1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0542cdccf81d21311b731a0d5a74a9140e74427888fbaa58126ed30523d1cf->enter($__internal_2f0542cdccf81d21311b731a0d5a74a9140e74427888fbaa58126ed30523d1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_383618945a25f342cd79e923ff5269ae04c01f586f89547724ec5f55c48bc15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383618945a25f342cd79e923ff5269ae04c01f586f89547724ec5f55c48bc15a->enter($__internal_383618945a25f342cd79e923ff5269ae04c01f586f89547724ec5f55c48bc15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_383618945a25f342cd79e923ff5269ae04c01f586f89547724ec5f55c48bc15a->leave($__internal_383618945a25f342cd79e923ff5269ae04c01f586f89547724ec5f55c48bc15a_prof);

        
        $__internal_2f0542cdccf81d21311b731a0d5a74a9140e74427888fbaa58126ed30523d1cf->leave($__internal_2f0542cdccf81d21311b731a0d5a74a9140e74427888fbaa58126ed30523d1cf_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8704ff7dc27fc140bffda7e17de7cd7e87bec67765de00138e8a8f4b094e90a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8704ff7dc27fc140bffda7e17de7cd7e87bec67765de00138e8a8f4b094e90a0->enter($__internal_8704ff7dc27fc140bffda7e17de7cd7e87bec67765de00138e8a8f4b094e90a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c1cc93ee95e340828073552610756a58a71ca55e0ab754af254503f29fa4e296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1cc93ee95e340828073552610756a58a71ca55e0ab754af254503f29fa4e296->enter($__internal_c1cc93ee95e340828073552610756a58a71ca55e0ab754af254503f29fa4e296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_c1cc93ee95e340828073552610756a58a71ca55e0ab754af254503f29fa4e296->leave($__internal_c1cc93ee95e340828073552610756a58a71ca55e0ab754af254503f29fa4e296_prof);

        
        $__internal_8704ff7dc27fc140bffda7e17de7cd7e87bec67765de00138e8a8f4b094e90a0->leave($__internal_8704ff7dc27fc140bffda7e17de7cd7e87bec67765de00138e8a8f4b094e90a0_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_3b05b7e2f6420879e63331007de33430e9b98551b43f39b2246443c107423951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b05b7e2f6420879e63331007de33430e9b98551b43f39b2246443c107423951->enter($__internal_3b05b7e2f6420879e63331007de33430e9b98551b43f39b2246443c107423951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_021a6ec42127f426bba080086fdeadc77c4f7d06830379658d3ce8c183fe1653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021a6ec42127f426bba080086fdeadc77c4f7d06830379658d3ce8c183fe1653->enter($__internal_021a6ec42127f426bba080086fdeadc77c4f7d06830379658d3ce8c183fe1653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_021a6ec42127f426bba080086fdeadc77c4f7d06830379658d3ce8c183fe1653->leave($__internal_021a6ec42127f426bba080086fdeadc77c4f7d06830379658d3ce8c183fe1653_prof);

        
        $__internal_3b05b7e2f6420879e63331007de33430e9b98551b43f39b2246443c107423951->leave($__internal_3b05b7e2f6420879e63331007de33430e9b98551b43f39b2246443c107423951_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e9403f250c3de2470fbb9d344a92916f4a484a287c5b837a7503a6ed9ed9845f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9403f250c3de2470fbb9d344a92916f4a484a287c5b837a7503a6ed9ed9845f->enter($__internal_e9403f250c3de2470fbb9d344a92916f4a484a287c5b837a7503a6ed9ed9845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e92334e292079c6cc9ec4f571bd282e9b8094d87b4481b2ee37e4a8cdeb5d5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92334e292079c6cc9ec4f571bd282e9b8094d87b4481b2ee37e4a8cdeb5d5ce->enter($__internal_e92334e292079c6cc9ec4f571bd282e9b8094d87b4481b2ee37e4a8cdeb5d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e92334e292079c6cc9ec4f571bd282e9b8094d87b4481b2ee37e4a8cdeb5d5ce->leave($__internal_e92334e292079c6cc9ec4f571bd282e9b8094d87b4481b2ee37e4a8cdeb5d5ce_prof);

        
        $__internal_e9403f250c3de2470fbb9d344a92916f4a484a287c5b837a7503a6ed9ed9845f->leave($__internal_e9403f250c3de2470fbb9d344a92916f4a484a287c5b837a7503a6ed9ed9845f_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_eaa1b99bec7b401c54f578948ca99768c570e7584cd592fa02572133a7f7bae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa1b99bec7b401c54f578948ca99768c570e7584cd592fa02572133a7f7bae8->enter($__internal_eaa1b99bec7b401c54f578948ca99768c570e7584cd592fa02572133a7f7bae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_149ce1f45b661f334a26f5679206021b75683804adaf4416a33eee8f92255149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149ce1f45b661f334a26f5679206021b75683804adaf4416a33eee8f92255149->enter($__internal_149ce1f45b661f334a26f5679206021b75683804adaf4416a33eee8f92255149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_149ce1f45b661f334a26f5679206021b75683804adaf4416a33eee8f92255149->leave($__internal_149ce1f45b661f334a26f5679206021b75683804adaf4416a33eee8f92255149_prof);

        
        $__internal_eaa1b99bec7b401c54f578948ca99768c570e7584cd592fa02572133a7f7bae8->leave($__internal_eaa1b99bec7b401c54f578948ca99768c570e7584cd592fa02572133a7f7bae8_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b7509d12ea98f78981daec99b01e18a41bd6127dd7164d4f22580190a6183d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7509d12ea98f78981daec99b01e18a41bd6127dd7164d4f22580190a6183d1b->enter($__internal_b7509d12ea98f78981daec99b01e18a41bd6127dd7164d4f22580190a6183d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_9f2f373cd6d20083366cbd30aef5f1d5fbe8c248fc84a722136156aff4f5134c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f373cd6d20083366cbd30aef5f1d5fbe8c248fc84a722136156aff4f5134c->enter($__internal_9f2f373cd6d20083366cbd30aef5f1d5fbe8c248fc84a722136156aff4f5134c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9f2f373cd6d20083366cbd30aef5f1d5fbe8c248fc84a722136156aff4f5134c->leave($__internal_9f2f373cd6d20083366cbd30aef5f1d5fbe8c248fc84a722136156aff4f5134c_prof);

        
        $__internal_b7509d12ea98f78981daec99b01e18a41bd6127dd7164d4f22580190a6183d1b->leave($__internal_b7509d12ea98f78981daec99b01e18a41bd6127dd7164d4f22580190a6183d1b_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a829d9122f5072fb93605703d5bb2e18b914a744c028ee94bb20b489ff63ad63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a829d9122f5072fb93605703d5bb2e18b914a744c028ee94bb20b489ff63ad63->enter($__internal_a829d9122f5072fb93605703d5bb2e18b914a744c028ee94bb20b489ff63ad63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_cfaa0bb351e1494f9c5102bc92221dbd23a29682ab1615cb3c275ccc2ac74374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaa0bb351e1494f9c5102bc92221dbd23a29682ab1615cb3c275ccc2ac74374->enter($__internal_cfaa0bb351e1494f9c5102bc92221dbd23a29682ab1615cb3c275ccc2ac74374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cfaa0bb351e1494f9c5102bc92221dbd23a29682ab1615cb3c275ccc2ac74374->leave($__internal_cfaa0bb351e1494f9c5102bc92221dbd23a29682ab1615cb3c275ccc2ac74374_prof);

        
        $__internal_a829d9122f5072fb93605703d5bb2e18b914a744c028ee94bb20b489ff63ad63->leave($__internal_a829d9122f5072fb93605703d5bb2e18b914a744c028ee94bb20b489ff63ad63_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_a2bd81fd3cd5490d549f4e02d33871004996bc17b208e91a241a0316a9b0c0f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bd81fd3cd5490d549f4e02d33871004996bc17b208e91a241a0316a9b0c0f7->enter($__internal_a2bd81fd3cd5490d549f4e02d33871004996bc17b208e91a241a0316a9b0c0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4298f28f7f8a978743b46a3725cf7340bb67ae773828fe9906822bfa35da8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4298f28f7f8a978743b46a3725cf7340bb67ae773828fe9906822bfa35da8f58->enter($__internal_4298f28f7f8a978743b46a3725cf7340bb67ae773828fe9906822bfa35da8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_4298f28f7f8a978743b46a3725cf7340bb67ae773828fe9906822bfa35da8f58->leave($__internal_4298f28f7f8a978743b46a3725cf7340bb67ae773828fe9906822bfa35da8f58_prof);

        
        $__internal_a2bd81fd3cd5490d549f4e02d33871004996bc17b208e91a241a0316a9b0c0f7->leave($__internal_a2bd81fd3cd5490d549f4e02d33871004996bc17b208e91a241a0316a9b0c0f7_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1d3cbabf4b71480179b0977588423a264be4ce2846e17e3087059bc62d866e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3cbabf4b71480179b0977588423a264be4ce2846e17e3087059bc62d866e50->enter($__internal_1d3cbabf4b71480179b0977588423a264be4ce2846e17e3087059bc62d866e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_186bdb9bbc661aedd01bff3d1ac18009d1267476c01be976479092a4eef1725e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186bdb9bbc661aedd01bff3d1ac18009d1267476c01be976479092a4eef1725e->enter($__internal_186bdb9bbc661aedd01bff3d1ac18009d1267476c01be976479092a4eef1725e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_186bdb9bbc661aedd01bff3d1ac18009d1267476c01be976479092a4eef1725e->leave($__internal_186bdb9bbc661aedd01bff3d1ac18009d1267476c01be976479092a4eef1725e_prof);

        
        $__internal_1d3cbabf4b71480179b0977588423a264be4ce2846e17e3087059bc62d866e50->leave($__internal_1d3cbabf4b71480179b0977588423a264be4ce2846e17e3087059bc62d866e50_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_329237f56280ae464e95973019e20d92500f4d289dfcc2da0227243d52869479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329237f56280ae464e95973019e20d92500f4d289dfcc2da0227243d52869479->enter($__internal_329237f56280ae464e95973019e20d92500f4d289dfcc2da0227243d52869479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ba0f500d6b6c6955fd05e2c68079dd63fb341a8154dd6461e28a0170bdf21cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0f500d6b6c6955fd05e2c68079dd63fb341a8154dd6461e28a0170bdf21cfb->enter($__internal_ba0f500d6b6c6955fd05e2c68079dd63fb341a8154dd6461e28a0170bdf21cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_ba0f500d6b6c6955fd05e2c68079dd63fb341a8154dd6461e28a0170bdf21cfb->leave($__internal_ba0f500d6b6c6955fd05e2c68079dd63fb341a8154dd6461e28a0170bdf21cfb_prof);

        
        $__internal_329237f56280ae464e95973019e20d92500f4d289dfcc2da0227243d52869479->leave($__internal_329237f56280ae464e95973019e20d92500f4d289dfcc2da0227243d52869479_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d3f2cc5ad357ac644c700040e5332bf6a87cf7ace32aba22fd84c915c45f95a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f2cc5ad357ac644c700040e5332bf6a87cf7ace32aba22fd84c915c45f95a2->enter($__internal_d3f2cc5ad357ac644c700040e5332bf6a87cf7ace32aba22fd84c915c45f95a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ad585d5740b5cdb9b51114caa1794cbfd1050f250411f8261c969107090dd393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad585d5740b5cdb9b51114caa1794cbfd1050f250411f8261c969107090dd393->enter($__internal_ad585d5740b5cdb9b51114caa1794cbfd1050f250411f8261c969107090dd393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ad585d5740b5cdb9b51114caa1794cbfd1050f250411f8261c969107090dd393->leave($__internal_ad585d5740b5cdb9b51114caa1794cbfd1050f250411f8261c969107090dd393_prof);

        
        $__internal_d3f2cc5ad357ac644c700040e5332bf6a87cf7ace32aba22fd84c915c45f95a2->leave($__internal_d3f2cc5ad357ac644c700040e5332bf6a87cf7ace32aba22fd84c915c45f95a2_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_c71b597d31d1c5a9590fce7d97eb6d9d2933043f2b7d5872d225690cb8eb07b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71b597d31d1c5a9590fce7d97eb6d9d2933043f2b7d5872d225690cb8eb07b2->enter($__internal_c71b597d31d1c5a9590fce7d97eb6d9d2933043f2b7d5872d225690cb8eb07b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_026ce3e02e922f152eb4ef1616ec5a6e225d00589342252f369533b8dc3c8251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026ce3e02e922f152eb4ef1616ec5a6e225d00589342252f369533b8dc3c8251->enter($__internal_026ce3e02e922f152eb4ef1616ec5a6e225d00589342252f369533b8dc3c8251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_026ce3e02e922f152eb4ef1616ec5a6e225d00589342252f369533b8dc3c8251->leave($__internal_026ce3e02e922f152eb4ef1616ec5a6e225d00589342252f369533b8dc3c8251_prof);

        
        $__internal_c71b597d31d1c5a9590fce7d97eb6d9d2933043f2b7d5872d225690cb8eb07b2->leave($__internal_c71b597d31d1c5a9590fce7d97eb6d9d2933043f2b7d5872d225690cb8eb07b2_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_e6596c7c7832f8df277a9d7a2dfaa4be2af2b81adf4f8f51cddd7cae7586d2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6596c7c7832f8df277a9d7a2dfaa4be2af2b81adf4f8f51cddd7cae7586d2ac->enter($__internal_e6596c7c7832f8df277a9d7a2dfaa4be2af2b81adf4f8f51cddd7cae7586d2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1c9fb038babed458e71611d7e7ee197f7a760afe5ba5be945178ed75c9a9cd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9fb038babed458e71611d7e7ee197f7a760afe5ba5be945178ed75c9a9cd70->enter($__internal_1c9fb038babed458e71611d7e7ee197f7a760afe5ba5be945178ed75c9a9cd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1c9fb038babed458e71611d7e7ee197f7a760afe5ba5be945178ed75c9a9cd70->leave($__internal_1c9fb038babed458e71611d7e7ee197f7a760afe5ba5be945178ed75c9a9cd70_prof);

        
        $__internal_e6596c7c7832f8df277a9d7a2dfaa4be2af2b81adf4f8f51cddd7cae7586d2ac->leave($__internal_e6596c7c7832f8df277a9d7a2dfaa4be2af2b81adf4f8f51cddd7cae7586d2ac_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a0f4108e859e77abc7216e405f1b669f4715b6c1b3fec01298ad6d580409cc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f4108e859e77abc7216e405f1b669f4715b6c1b3fec01298ad6d580409cc9c->enter($__internal_a0f4108e859e77abc7216e405f1b669f4715b6c1b3fec01298ad6d580409cc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_edbf53c10651cf41709acff1bef84b206d0f075e8909d3717c1f871afd1c308f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbf53c10651cf41709acff1bef84b206d0f075e8909d3717c1f871afd1c308f->enter($__internal_edbf53c10651cf41709acff1bef84b206d0f075e8909d3717c1f871afd1c308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_edbf53c10651cf41709acff1bef84b206d0f075e8909d3717c1f871afd1c308f->leave($__internal_edbf53c10651cf41709acff1bef84b206d0f075e8909d3717c1f871afd1c308f_prof);

        
        $__internal_a0f4108e859e77abc7216e405f1b669f4715b6c1b3fec01298ad6d580409cc9c->leave($__internal_a0f4108e859e77abc7216e405f1b669f4715b6c1b3fec01298ad6d580409cc9c_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2f46caba62ac4c078ddf896c574ce926f986211af50c78085ef78ba0f698368e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f46caba62ac4c078ddf896c574ce926f986211af50c78085ef78ba0f698368e->enter($__internal_2f46caba62ac4c078ddf896c574ce926f986211af50c78085ef78ba0f698368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_53d6ec8fa427b523d7184a8b539e12f688279ce5063618e1b9c59252cb606a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d6ec8fa427b523d7184a8b539e12f688279ce5063618e1b9c59252cb606a1a->enter($__internal_53d6ec8fa427b523d7184a8b539e12f688279ce5063618e1b9c59252cb606a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_53d6ec8fa427b523d7184a8b539e12f688279ce5063618e1b9c59252cb606a1a->leave($__internal_53d6ec8fa427b523d7184a8b539e12f688279ce5063618e1b9c59252cb606a1a_prof);

        
        $__internal_2f46caba62ac4c078ddf896c574ce926f986211af50c78085ef78ba0f698368e->leave($__internal_2f46caba62ac4c078ddf896c574ce926f986211af50c78085ef78ba0f698368e_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dded1c7eccad02d84b27f9e6ddc59a920c6806dda58432564069aaa15755b3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dded1c7eccad02d84b27f9e6ddc59a920c6806dda58432564069aaa15755b3f4->enter($__internal_dded1c7eccad02d84b27f9e6ddc59a920c6806dda58432564069aaa15755b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cc01e71a578badff4c97a98a382b71a650b932db3bd01aa8a67badaaf045dbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc01e71a578badff4c97a98a382b71a650b932db3bd01aa8a67badaaf045dbc4->enter($__internal_cc01e71a578badff4c97a98a382b71a650b932db3bd01aa8a67badaaf045dbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_cc01e71a578badff4c97a98a382b71a650b932db3bd01aa8a67badaaf045dbc4->leave($__internal_cc01e71a578badff4c97a98a382b71a650b932db3bd01aa8a67badaaf045dbc4_prof);

        
        $__internal_dded1c7eccad02d84b27f9e6ddc59a920c6806dda58432564069aaa15755b3f4->leave($__internal_dded1c7eccad02d84b27f9e6ddc59a920c6806dda58432564069aaa15755b3f4_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b6059cd9d21ea8a4b30687b755a7e843560a5a33b96ce82e34ec2c3817b8caff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6059cd9d21ea8a4b30687b755a7e843560a5a33b96ce82e34ec2c3817b8caff->enter($__internal_b6059cd9d21ea8a4b30687b755a7e843560a5a33b96ce82e34ec2c3817b8caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5da112522ff156ef57056a5b9eddc3cb6f364f80482ab10bb2212e2f451aa638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da112522ff156ef57056a5b9eddc3cb6f364f80482ab10bb2212e2f451aa638->enter($__internal_5da112522ff156ef57056a5b9eddc3cb6f364f80482ab10bb2212e2f451aa638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5da112522ff156ef57056a5b9eddc3cb6f364f80482ab10bb2212e2f451aa638->leave($__internal_5da112522ff156ef57056a5b9eddc3cb6f364f80482ab10bb2212e2f451aa638_prof);

        
        $__internal_b6059cd9d21ea8a4b30687b755a7e843560a5a33b96ce82e34ec2c3817b8caff->leave($__internal_b6059cd9d21ea8a4b30687b755a7e843560a5a33b96ce82e34ec2c3817b8caff_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\ecv\\voyance_v2\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
