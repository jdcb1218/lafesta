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

/* modules/contrib/we_megamenu/templates/we-megamenu-block.html.twig */
class __TwigTemplate_9d4a8dbbecd7291ebb97089c308df1e16fbf0c92206812cbf10b45362d1e278c extends \Twig\Template
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
        // line 2
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["block_content"] ?? null), 2, $this->source));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/we_megamenu/templates/we-megamenu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/we_megamenu/templates/we-megamenu-block.html.twig", "/Library/WebServer/Documents/lafesta/web/modules/contrib/we_megamenu/templates/we-megamenu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("autoescape" => 1);
        static $filters = array("raw" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['autoescape'],
                ['raw'],
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
