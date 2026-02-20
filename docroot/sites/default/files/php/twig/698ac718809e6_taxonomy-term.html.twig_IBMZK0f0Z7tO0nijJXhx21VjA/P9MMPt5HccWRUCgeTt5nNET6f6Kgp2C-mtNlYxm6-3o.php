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

/* core/profiles/demo_umami/themes/umami/templates/classy/content/taxonomy-term.html.twig */
class __TwigTemplate_e85f206266106c2282017bf0ff26bcf1 extends Template
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
        // line 26
        $context["classes"] = ["taxonomy-term", ("vocabulary-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["term"] ?? null), "bundle", [], "any", false, false, true, 28)))];
        // line 31
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ("taxonomy-term-" . CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "id", [], "any", false, false, true, 31))], "method", false, false, true, 31), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), "html", null, true);
        yield ">
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 33
        if ((($context["name"] ?? null) && (($context["view_mode"] ?? null) != "full"))) {
            // line 34
            yield "    <h2><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true);
            yield "</a></h2>
  ";
        }
        // line 36
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  <div class=\"content\">
    ";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["term", "attributes", "title_prefix", "name", "view_mode", "url", "title_suffix", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/classy/content/taxonomy-term.html.twig";
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
        return array (  72 => 38,  66 => 36,  58 => 34,  56 => 33,  52 => 32,  47 => 31,  45 => 28,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/classy/content/taxonomy-term.html.twig", "/var/www/html/docroot/core/profiles/demo_umami/themes/umami/templates/classy/content/taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 33];
        static $filters = ["clean_class" => 28, "escape" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
