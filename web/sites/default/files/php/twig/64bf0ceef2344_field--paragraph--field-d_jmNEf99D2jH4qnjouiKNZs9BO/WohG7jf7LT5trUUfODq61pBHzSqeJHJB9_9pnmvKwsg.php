<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig */
class __TwigTemplate_4ebd86c75f8dff4a281069dc642a68d8dedbad2715bb6ae99639976bef66f9c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "
";
        // line 42
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_name"] ?? null), 44, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 45
($context["field_type"] ?? null), 45, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["label_display"] ?? null), 46, $this->source))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        $context["field_classes"] = [0 => "d-flex", 1 => "flex-wrap", 2 => "field--wrapper"];
        // line 60
        $context["item_classes"] = [0 => "d-flex", 1 => "field__item--wrapper", 2 => "col-lg-3", 3 => "col-sm-6", 4 => "col-xs-12"];
        // line 67
        echo "
";
        // line 68
        $context["justify"] = [0 => "justify-content-between"];
        // line 71
        $context["spacing"] = [];
        // line 74
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) < 4)) {
            // line 75
            echo "    ";
            $context["justify"] = [0 => "justify-content-center"];
            // line 78
            echo "    ";
            $context["spacing"] = [];
        }
        // line 82
        echo "
";
        // line 83
        if (($context["label_hidden"] ?? null)) {
            // line 84
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 85
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "field__items", 1 => ($context["field_classes"] ?? null), 2 => ($context["justify"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
                echo ">
            ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 87
                    echo "                <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 87), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ($context["spacing"] ?? null), 2 => "field__item"], "method", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        </div>
    ";
            } else {
                // line 91
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 92
                    echo "            <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "field__item", 1 => ($context["field_classes"] ?? null), 2 => ($context["justify"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "    ";
            }
        } else {
            // line 96
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">
        <div";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source), "html", null, true);
            echo "</div>
        ";
            // line 98
            if (($context["multiple"] ?? null)) {
                // line 99
                echo "        <div ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["field_classes"] ?? null), 1 => ($context["justify"] ?? null), 2 => "field__items"], "method", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\">
            ";
            }
            // line 101
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 102
                echo "                <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 102), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ($context["spacing"] ?? null), 2 => "field__item"], "method", false, false, true, 102), 102, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            ";
            if (($context["multiple"] ?? null)) {
                // line 105
                echo "        </div>
        ";
            }
            // line 107
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 107,  160 => 105,  157 => 104,  146 => 102,  141 => 101,  135 => 99,  133 => 98,  127 => 97,  122 => 96,  118 => 94,  107 => 92,  102 => 91,  98 => 89,  87 => 87,  83 => 86,  78 => 85,  75 => 84,  73 => 83,  70 => 82,  66 => 78,  63 => 75,  61 => 74,  59 => 71,  57 => 68,  54 => 67,  52 => 60,  50 => 55,  48 => 52,  47 => 50,  45 => 46,  44 => 45,  43 => 44,  42 => 42,  39 => 40,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 74, "for" => 86);
        static $filters = array("clean_class" => 44, "length" => 74, "escape" => 85);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'length', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
