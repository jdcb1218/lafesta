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

/* profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser-small.html.twig */
class __TwigTemplate_aadb0bea7bb1dc0bdc385692cb13e48fb51f88a7d3a8b713d230a2a69595158c extends \Twig\Template
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
        // line 62
        echo "
";
        // line 63
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 65
($context["node"] ?? null), "bundle", [], "any", false, false, true, 65), 65, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 66)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 67)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 68)) ? ("node--unpublished") : ("")), 5 => ((        // line 69
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 69, $this->source)))) : ("")), 6 => "clearfix", 7 => "d-flex"];
        // line 73
        echo "
<article";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 74), 74, $this->source), "html", null, true);
        echo ">
    <div class=\"d-flex flex-column box\">
        ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_media_main_image", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
        <div class=\"text-area\">
            <h2";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">
                <a href=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 79, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 79, $this->source), "html", null, true);
        echo "</a>
            </h2>
            ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_teaser", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
            <a href=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 82, $this->source), "html", null, true);
        echo "\" class=\"link\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Learn more"));
        echo "</a>
        </div>
    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser-small.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 82,  73 => 81,  66 => 79,  62 => 78,  57 => 76,  52 => 74,  49 => 73,  47 => 69,  46 => 68,  45 => 67,  44 => 66,  43 => 65,  42 => 63,  39 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser-small.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser-small.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 63);
        static $filters = array("clean_class" => 65, "escape" => 74, "t" => 82);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 't'],
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
