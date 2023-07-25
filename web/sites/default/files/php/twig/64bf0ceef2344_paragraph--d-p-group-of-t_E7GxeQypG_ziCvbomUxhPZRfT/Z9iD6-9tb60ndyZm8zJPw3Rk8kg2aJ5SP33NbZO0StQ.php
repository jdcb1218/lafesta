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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig */
class __TwigTemplate_40bf0107a2cc56c882f844d931e621ed616e96c08078fb100f1979f277e330f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'paragraph_content' => [$this, 'block_paragraph_content'],
            'tiles_content' => [$this, 'block_tiles_content'],
            'paragraph_cta_content' => [$this, 'block_paragraph_cta_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => "d-p-group-of-text-blocks", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : (""))];
        // line 47
        echo "
";
        // line 48
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_long_text", [], "any", false, false, true, 48))) {
            // line 49
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 49, $this->source), [0 => "with-long-text"]);
        }
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "  <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 53, $this->source), "html", null, true);
        echo ">
    <div";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        echo ">
      ";
        // line 55
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 60
        echo "      ";
        $this->displayBlock('tiles_content', $context, $blocks);
        // line 67
        echo "      ";
        $this->displayBlock('paragraph_cta_content', $context, $blocks);
        // line 74
        echo "    </div>
  </section>
";
    }

    // line 55
    public function block_paragraph_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        <div class=\"container d-p-group-of-text-blocks-header-wrapper\">
          ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 57, $this->source), "field_d_p_tb_block_reference", "field_d_cta_link"), "html", null, true);
        echo "
        </div>
      ";
    }

    // line 60
    public function block_tiles_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_d_p_tb_block_reference", [], "any", false, false, true, 61), "isEmpty", [], "method", false, false, true, 61) == false)) {
            // line 62
            echo "          <div class=\"d-p-tiles-wrapper container expandable-content\">
            ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_p_tb_block_reference", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 66
        echo "      ";
    }

    // line 67
    public function block_paragraph_cta_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_cta_link", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68)) {
            // line 69
            echo "          <div class=\"container mt-4\">
            ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_cta_link", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 73
        echo "      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 73,  133 => 70,  130 => 69,  127 => 68,  123 => 67,  119 => 66,  113 => 63,  110 => 62,  107 => 61,  103 => 60,  96 => 57,  93 => 56,  89 => 55,  83 => 74,  80 => 67,  77 => 60,  75 => 55,  71 => 54,  66 => 53,  59 => 52,  56 => 51,  52 => 49,  50 => 48,  47 => 47,  45 => 45,  44 => 44,  43 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 48, "block" => 52);
        static $filters = array("clean_class" => 44, "render" => 48, "merge" => 49, "escape" => 53, "without" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'merge', 'escape', 'without'],
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
