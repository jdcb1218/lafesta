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

/* profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-main-title--d-p-reference-content.html.twig */
class __TwigTemplate_051e5081ceba857f4d55d39d2122cc1f6e27e2183ed2e9c2095d56de61e031fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "@d_p/field--field-d-main-title.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["title_classes"] = [0 => "container", 1 => "text-center"];
        // line 22
        $this->parent = $this->loadTemplate("@d_p/field--field-d-main-title.html.twig", "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-main-title--d-p-reference-content.html.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-main-title--d-p-reference-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 22,  43 => 24,  36 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-main-title--d-p-reference-content.html.twig", "/Library/WebServer/Documents/lafesta/web/profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-main-title--d-p-reference-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                [],
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
