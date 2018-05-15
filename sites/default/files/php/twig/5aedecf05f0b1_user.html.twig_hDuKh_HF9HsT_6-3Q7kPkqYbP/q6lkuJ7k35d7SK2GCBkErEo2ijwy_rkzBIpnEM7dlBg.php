<?php

/* themes/simple_gym/templates/user/user.html.twig */
class __TwigTemplate_fe15a713fa6127533a31ab8eb7b5cce2e5e1683f5da319813a794ba4224cbba0 extends Twig_Template
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
        $tags = array("set" => 24, "if" => 35, "trans" => 37);
        $filters = array("join" => 28, "clean_class" => 30, "without" => 33);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('join', 'clean_class', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 24
        $context["classes"] = array(0 => "user", 1 => "user--profile", 2 => ("user--id-" . $this->getAttribute(        // line 27
($context["user"] ?? null), "id", array())), 3 => ((        // line 28
($context["roles"] ?? null)) ? (twig_join_filter(($context["roles"] ?? null), " ")) : ("")), 4 => (($this->getAttribute(        // line 29
($context["user"] ?? null), "isBlocked", array(), "method")) ? ("user--is-blocked") : ("user--is-active")), 5 => ((        // line 30
($context["view_mode"] ?? null)) ? (("user--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 33
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "setAttribute", array(0 => "role", 1 => "article"), "method"), "id"), "html", null, true));
        echo ">";
        // line 35
        if ($this->getAttribute(($context["user"] ?? null), "isBlocked", array(), "method")) {
            // line 36
            echo "<span class=\"user__status user--is-blocked marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
      <span class=\"visually-hidden\">";
            // line 37
            echo t("This user is", array());
            echo "</span>";
            echo t("Blocked", array());
            // line 38
            echo "</span>";
        }
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        // line 42
        if (($context["label"] ?? null)) {
            // line 43
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 44
                echo "<h1";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "user__title"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h1>";
            } else {
                // line 46
                echo "<h2";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "user__title"), "method"), "html", null, true));
                echo ">";
                // line 47
                if (($context["access_profiles"] ?? null)) {
                    // line 48
                    echo "<a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
                    echo "user/";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true));
                    echo "\" class=\"user__title-link\" rel=\"bookmark\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                    echo "</a>";
                } else {
                    // line 50
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                }
                // line 52
                echo "</h2>";
            }
        }
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        // line 57
        if (($context["content"] ?? null)) {
            // line 58
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        }
        // line 61
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/simple_gym/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 61,  104 => 58,  102 => 57,  100 => 55,  96 => 52,  93 => 50,  84 => 48,  82 => 47,  78 => 46,  71 => 44,  69 => 43,  67 => 42,  65 => 41,  62 => 38,  58 => 37,  55 => 36,  53 => 35,  49 => 33,  47 => 30,  46 => 29,  45 => 28,  44 => 27,  43 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/simple_gym/templates/user/user.html.twig", "D:\\Documents\\Mokslai\\Development_environments\\htdocs\\project1\\themes\\simple_gym\\templates\\user\\user.html.twig");
    }
}
