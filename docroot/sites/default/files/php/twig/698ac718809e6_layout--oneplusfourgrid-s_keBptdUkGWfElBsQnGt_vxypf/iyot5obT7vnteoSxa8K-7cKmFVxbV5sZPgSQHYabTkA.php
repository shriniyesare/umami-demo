<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig */
class __TwigTemplate_69d4855c440e88210e3e781a10110c46 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        $context["classes"] = ["layout", "layout--oneplusfourgrid-section"];
        // line 20
        if ((($tmp = ($context["content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 21), "html", null, true);
            yield ">

    ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 24), "addClass", ["layout__region", "layout__region--first"], "method", false, false, true, 24), "html", null, true);
                yield ">
        ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 25), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 28
            yield "
    ";
            // line 29
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 29) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 29)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 29)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 29))) {
                // line 30
                yield "      <div class=\"layout__four-grid-group\">
    ";
            }
            // line 32
            yield "
      ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 34), "addClass", ["layout__region", "layout__region--second"], "method", false, false, true, 34), "html", null, true);
                yield ">
          ";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 35), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 38
            yield "
      ";
            // line 39
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 40), "addClass", ["layout__region", "layout__region--third"], "method", false, false, true, 40), "html", null, true);
                yield ">
          ";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 41), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 44
            yield "
      ";
            // line 45
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fourth", [], "any", false, false, true, 46), "addClass", ["layout__region", "layout__region--fourth"], "method", false, false, true, 46), "html", null, true);
                yield ">
          ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 47), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 50
            yield "
      ";
            // line 51
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fifth", [], "any", false, false, true, 52), "addClass", ["layout__region", "layout__region--fifth"], "method", false, false, true, 52), "html", null, true);
                yield ">
          ";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 53), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 56
            yield "
    ";
            // line 57
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 57) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 57)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 57)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 57))) {
                // line 58
                yield "      </div>
    ";
            }
            // line 60
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "region_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  149 => 60,  145 => 58,  143 => 57,  140 => 56,  134 => 53,  129 => 52,  127 => 51,  124 => 50,  118 => 47,  113 => 46,  111 => 45,  108 => 44,  102 => 41,  97 => 40,  95 => 39,  92 => 38,  86 => 35,  81 => 34,  79 => 33,  76 => 32,  72 => 30,  70 => 29,  67 => 28,  61 => 25,  56 => 24,  54 => 23,  48 => 21,  46 => 20,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig", "/var/www/html/docroot/core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 20];
        static $filters = ["escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
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
