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

/* umami:badge */
class __TwigTemplate_83ce5df9366fa2f414bfa38508080b95 extends Template
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
            'label' => [$this, 'block_label'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.umami--badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "umami:badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "umami:badge"));
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["umami-badge"], "method", false, false, true, 1), "html", null, true);
        yield ">
  <div class=\"umami-badge__container\">
    ";
        // line 3
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "      <div class=\"umami-badge__icon\">
        ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, (((CoreExtension::getAttribute($this->env, $this->source, ($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 5) . "/icons/") . ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default(($context["icon"] ?? null), "knife")) : ("knife"))) . ".svg")));
            yield "
      </div>
    ";
        }
        // line 8
        yield "    ";
        if ((        $this->unwrap()->hasBlock("label", $context, $blocks) && Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("label", $context, $blocks)))) {
            // line 9
            yield "      <div class=\"umami-badge__label\">";
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            yield "</div>
    ";
        }
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('text', $context, $blocks);
        // line 12
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "icon", "componentMetadata"]);        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "umami:badge";
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
        return array (  96 => 11,  86 => 9,  78 => 12,  75 => 11,  69 => 9,  66 => 8,  60 => 5,  57 => 4,  55 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "umami:badge", "core/profiles/demo_umami/themes/umami/components/badge/badge.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "block" => 9];
        static $filters = ["escape" => 1, "default" => 5, "trim" => 8];
        static $functions = ["source" => 5];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'default', 'trim'],
                ['source'],
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
