<?php

/* themes/simple_gym/templates/content/node--forum.html.twig */
class __TwigTemplate_97ff30e14ec080c8d277bb88b41896472cbb65869c7600ae0217e872f6af20fe extends Twig_Template
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
        $tags = array("set" => 71, "if" => 85, "trans" => 87);
        $filters = array("clean_class" => 74, "without" => 113);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'without'),
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

        // line 71
        $context["classes"] = array(0 => "node", 1 => ("node--id-" . $this->getAttribute(        // line 73
($context["node"] ?? null), "id", array())), 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 74
($context["node"] ?? null), "bundle", array()))), 3 => (($this->getAttribute(        // line 75
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 76
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 77
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 81
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "setAttribute", array(0 => "role", 1 => "article"), "method"), "html", null, true));
        echo ">
  <div class=\"node__container\">

    <header";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["header_attributes"] ?? null), "addClass", array(0 => "node__header"), "method"), "html", null, true));
        echo ">
      ";
        // line 85
        if ( !$this->getAttribute(($context["node"] ?? null), "isPublished", array(), "method")) {
            // line 86
            echo "        <span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 87
            echo t("This node is", array());
            echo "</span>";
            echo t("Unpublished", array());
            // line 88
            echo "        </span>
      ";
        }
        // line 90
        echo "
      ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 92
        if (($context["label"] ?? null)) {
            // line 93
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 94
                echo "<h1";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</h1>
        ";
            } else {
                // line 96
                echo "          <h2";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo "><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
                echo "</a></h2>
        ";
            }
            // line 98
            echo "      ";
        }
        // line 99
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 101
        if (($context["display_submitted"] ?? null)) {
            // line 102
            echo "        <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["meta_attributes"] ?? null), "html", null, true));
            echo ">
          ";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
            echo "
          <div";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_attributes"] ?? null), "html", null, true));
            echo ">
            ";
            // line 105
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 106
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 110
        echo "    </header>

    <div";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "comment_forum"), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment_forum", array()), "html", null, true));
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/simple_gym/templates/content/node--forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 117,  146 => 113,  142 => 112,  138 => 110,  130 => 106,  128 => 105,  124 => 104,  120 => 103,  115 => 102,  113 => 101,  107 => 99,  104 => 98,  94 => 96,  86 => 94,  84 => 93,  82 => 92,  78 => 91,  75 => 90,  71 => 88,  67 => 87,  64 => 86,  62 => 85,  58 => 84,  51 => 81,  49 => 78,  48 => 77,  47 => 76,  46 => 75,  45 => 74,  44 => 73,  43 => 71,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/simple_gym/templates/content/node--forum.html.twig", "D:\\Documents\\Mokslai\\Development_environments\\htdocs\\project1\\themes\\simple_gym\\templates\\content\\node--forum.html.twig");
    }
}
