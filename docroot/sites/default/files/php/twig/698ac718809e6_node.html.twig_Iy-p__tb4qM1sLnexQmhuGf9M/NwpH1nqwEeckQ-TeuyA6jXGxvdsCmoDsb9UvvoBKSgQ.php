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

/* core/profiles/demo_umami/themes/umami/templates/content/node.html.twig */
class __TwigTemplate_e81e111052f73d07a196da31e909bb7f extends Template
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
        // line 62
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 64
($context["node"] ?? null), "bundle", [], "any", false, false, true, 64))), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 65
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--promoted") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--sticky") : ("")), (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("node--unpublished") : ("")), (((($tmp =         // line 68
($context["view_mode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 71
        $context["created_date"] = $this->env->getFilter('format_date')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "any", false, false, true, 71), "umami_dates");
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("umami/classy.node"), "html", null, true);
        yield "

<article";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 74), "html", null, true);
        yield ">

  ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 77
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "    ";
            if ((($context["view_mode"] ?? null) == "full")) {
                // line 79
                yield "      <header class=\"node__header\">
        <h1 class=\"page-title\">
          ";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "
        </h1>
      </header>
    ";
            } else {
                // line 85
                yield "      <h2";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
                yield ">
        <a href=\"";
                // line 86
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
                yield "\" rel=\"bookmark\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
                yield "</a>
      </h2>
    ";
            }
            // line 89
            yield "  ";
        }
        // line 90
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 92
        if ((($tmp = ($context["display_submitted"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "    <footer class=\"node__meta\">
      ";
            // line 94
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
            yield "
      <div";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node__submitted"], "method", false, false, true, 95), "html", null, true);
            yield ">
        ";
            // line 96
            yield t("<span class=\"by-author\">by @author_name</span> @created_date", ["@author_name" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["author_name"] ?? null)), "@created_date" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["created_date"] ?? null)), ]);
            // line 97
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
      </div>
    </footer>
  ";
        }
        // line 101
        yield "
  <div";
        // line 102
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content"], "method", false, false, true, 102), "html", null, true);
        yield ">
    ";
        // line 103
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>

</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "label", "title_attributes", "url", "title_suffix", "display_submitted", "author_picture", "author_attributes", "author_name", "metadata", "content_attributes", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node.html.twig";
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
        return array (  135 => 103,  131 => 102,  128 => 101,  120 => 97,  118 => 96,  114 => 95,  110 => 94,  107 => 93,  105 => 92,  99 => 90,  96 => 89,  88 => 86,  83 => 85,  76 => 81,  72 => 79,  69 => 78,  67 => 77,  63 => 76,  58 => 74,  53 => 72,  51 => 71,  49 => 68,  48 => 67,  47 => 66,  46 => 65,  45 => 64,  44 => 62,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node.html.twig", "/var/www/html/docroot/core/profiles/demo_umami/themes/umami/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 62, "if" => 77, "trans" => 96];
        static $filters = ["clean_class" => 64, "format_date" => 71, "escape" => 72];
        static $functions = ["attach_library" => 72];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'format_date', 'escape'],
                ['attach_library'],
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
