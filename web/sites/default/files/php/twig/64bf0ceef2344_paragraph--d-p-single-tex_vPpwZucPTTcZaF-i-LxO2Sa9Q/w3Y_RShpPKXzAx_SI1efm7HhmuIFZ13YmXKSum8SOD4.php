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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig */
class __TwigTemplate_4bcf512211fe8c193c410f1fac759d95da73b69f8ce7136e992f96b3e223f22c extends \Twig\Template
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
            'background' => [$this, 'block_background'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => "d-p-text-block", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : (""))];
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "  <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null), 49, $this->source), "html", null, true);
        echo ">
    <div";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 50), 50, $this->source), "html", null, true);
        echo ">
      ";
        // line 51
        $this->displayBlock('background', $context, $blocks);
        // line 56
        echo "      <div class=\"content-wrapper\">
        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "      </div>

      ";
        // line 67
        if (($context["with_price"] ?? null)) {
            // line 68
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("d_p/d_p_with_price"), "html", null, true);
            echo "
        <div class=\"with-price-stripe\">
          <div class=\"with-price-wrapper\">
            <div class=\"with-price-data d-flex justify-content-center\">
          <span class=\"with-price-value\">
            <div class=\"spinner-border text-danger\" role=\"status\"><span class=\"sr-only\">Loading...</span></div>
          </span>&nbsp;
              <span class=\"with-price-currency\"></span>
            </div>
            <div class=\"change d-flex align-items-baseline justify-content-center\">
              <span class=\"with-price-arrow\"></span>
              <span class=\"with-price-percentage\"></span>
            </div>
            <div class=\"with-price-timestamp\"></div>
          </div>
        </div>
      ";
        }
        // line 85
        echo "    </div>
  </section>
";
    }

    // line 51
    public function block_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "        ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", 52)->display(twig_to_array(["content" => twig_get_attribute($this->env, $this->source,         // line 53
($context["content"] ?? null), "group_d_block_background", [], "any", false, false, true, 53)]));
        // line 55
        echo "      ";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 58), 58, $this->source), "field_d_cta_link"), "html", null, true);
        echo "
          ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 59), "field_d_cta_link", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59)) {
            // line 60
            echo "            <div class=\"mt-4\">
              ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_d_block_content", [], "any", false, false, true, 61), "field_d_cta_link", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 64
        echo "        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 64,  131 => 61,  128 => 60,  126 => 59,  121 => 58,  117 => 57,  113 => 55,  111 => 53,  109 => 52,  105 => 51,  99 => 85,  78 => 68,  76 => 67,  72 => 65,  70 => 57,  67 => 56,  65 => 51,  61 => 50,  56 => 49,  49 => 48,  46 => 47,  44 => 45,  43 => 44,  42 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "block" => 48, "if" => 67, "include" => 52);
        static $filters = array("clean_class" => 44, "escape" => 49, "without" => 58);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['clean_class', 'escape', 'without'],
                ['attach_library']
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
