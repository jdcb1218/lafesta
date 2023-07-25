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

/* profiles/contrib/droopler/modules/custom/d_p_carousel/templates/paragraph--d-p-carousel.html.twig */
class __TwigTemplate_f0ac109b0b5943d45a30f7bbb2c6947bc9fed1580197f21985f3eca98193acd0 extends \Twig\Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => "d-p-carousel", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 45
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 45), 45, $this->source))), 3 => "with-forced-long-text-margin", 4 => ((        // line 47
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 47, $this->source)))) : (""))];
        // line 49
        $context["paragraph_classes"] = [0 => "d-p-carousel"];
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
      <div ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null)], "method", false, false, true, 55), 55, $this->source), "html", null, true);
        echo ">
        <div class=\"content-wrapper\">
          <div class=\"content container\">
            ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "          </div>
          <div class=\"container expandable-content\">
            ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_p_cs_item_reference", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"pt-4\">
          ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_d_cta_link", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 59, $this->source), "field_d_p_cs_item_reference", "field_d_cta_link"), "html", null, true);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_carousel/templates/paragraph--d-p-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 59,  92 => 58,  82 => 67,  75 => 63,  71 => 61,  69 => 58,  63 => 55,  59 => 54,  54 => 53,  47 => 52,  45 => 49,  43 => 47,  42 => 45,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_carousel/templates/paragraph--d-p-carousel.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_p_carousel/templates/paragraph--d-p-carousel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 52);
        static $filters = array("clean_class" => 45, "escape" => 53, "without" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'without'],
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
