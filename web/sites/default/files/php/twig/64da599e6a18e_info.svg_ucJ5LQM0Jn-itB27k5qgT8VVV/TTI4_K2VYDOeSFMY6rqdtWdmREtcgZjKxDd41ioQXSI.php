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

/* @olivero/../images/info.svg */
class __TwigTemplate_9a09fb200a27b9728d7679e9dd885c26 extends Template
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
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32px\" height=\"32px\" viewBox=\"0 0 32 32\">
  <path d=\"M32,16c0,8.8-7.2,16-16,16S0,24.8,0,16C0,7.2,7.2,0,16,0S32,7.2,32,16z M16.4,5.3c-3.5,0-5.8,1.5-7.5,4.1c-0.2,0.3-0.2,0.8,0.2,1l2.2,1.7c0.3,0.3,0.8,0.2,1.1-0.1c1.2-1.5,1.9-2.3,3.7-2.3c1.3,0,2.9,0.8,2.9,2.1c0,1-0.8,1.5-2.1,2.2c-1.5,0.9-3.5,1.9-3.5,4.6v0.3c0,0.4,0.3,0.8,0.8,0.8h3.6c0.4,0,0.8-0.3,0.8-0.8v-0.1c0-1.8,5.4-1.9,5.4-6.9C23.9,8.1,20.1,5.3,16.4,5.3z M16,21.3c-1.6,0-3,1.3-3,3c0,1.6,1.3,3,3,3s3-1.3,3-3C19,22.6,17.6,21.3,16,21.3z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@olivero/../images/info.svg";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/../images/info.svg", "/var/www/html/web/core/themes/olivero/images/info.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
