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

/* core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig */
class __TwigTemplate_3509f57ff74d3c3588b6084a1588aa6e extends Template
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
        // line 41
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_name"] ?? null))), ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["field_type"] ?? null))), ("field--label-" .         // line 45
($context["label_display"] ?? null)), (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 49
        yield "
";
        // line 50
        yield from $this->load("core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", 50, 1394107279)->unwrap()->yield(CoreExtension::toArray(["icon" => "timer", "label" =>         // line 52
($context["label"] ?? null), "items" =>         // line 53
($context["items"] ?? null), "attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "label", "items", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig";
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
        return array (  56 => 54,  55 => 53,  54 => 52,  53 => 50,  50 => 49,  48 => 46,  47 => 45,  46 => 44,  45 => 43,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", "/var/www/html/docroot/core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 41, "embed" => 50];
        static $filters = ["clean_class" => 43];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig */
class __TwigTemplate_3509f57ff74d3c3588b6084a1588aa6e___1394107279 extends Template
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

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 50
        return "umami:badge";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("umami:badge", 50);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "items"]);    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 57
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "addClass", ["umami-badge__item"], "method", false, false, true, 61), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 61), "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig";
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
        return array (  197 => 63,  186 => 61,  181 => 60,  174 => 59,  166 => 57,  159 => 56,  147 => 50,  56 => 54,  55 => 53,  54 => 52,  53 => 50,  50 => 49,  48 => 46,  47 => 45,  46 => 44,  45 => 43,  44 => 41,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", "/var/www/html/docroot/core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 50, "for" => 60];
        static $filters = ["escape" => 57];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'for'],
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
