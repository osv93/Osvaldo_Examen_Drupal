<?php

/* modules/social_media_links/templates/social-media-links-platforms.html.twig */
class __TwigTemplate_d8f18037bf1bfd69c535de86838b0ea30d9af20aaefe22eb473fa3366575223e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 8, "for" => 16, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 6
        echo "
";
        // line 8
        $context["classes"] = array(0 => "social-media-links--platforms", 1 => "platforms", 2 => ((($this->getAttribute(        // line 11
(isset($context["appearance"]) ? $context["appearance"] : null), "orientation", array()) == "h")) ? ("inline horizontal") : ("vertical")));
        // line 14
        echo "
<ul";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 17
            echo "    <li>
      <a href=\"";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "url", array()), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "attributes", array()), "html", null, true));
            echo " >
        ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "element", array()), "html", null, true));
            echo "
      </a>

      ";
            // line 22
            if ($this->getAttribute((isset($context["appearance"]) ? $context["appearance"] : null), "show_name", array())) {
                // line 23
                echo "        ";
                if (($this->getAttribute((isset($context["appearance"]) ? $context["appearance"] : null), "orientation", array()) == "h")) {
                    // line 24
                    echo "          <br />
        ";
                }
                // line 26
                echo "
        <span><a href=\"";
                // line 27
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "url", array()), "html", null, true));
                echo "\" ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_attributes"]) ? $context["link_attributes"] : null), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "name", array()), "html", null, true));
                echo "</a></span>
      ";
            }
            // line 29
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/social_media_links/templates/social-media-links-platforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  96 => 29,  87 => 27,  84 => 26,  80 => 24,  77 => 23,  75 => 22,  69 => 19,  63 => 18,  60 => 17,  56 => 16,  52 => 15,  49 => 14,  47 => 11,  46 => 8,  43 => 6,);
    }

    public function getSource()
    {
        return "{#
/**
 * @ingroup themeable
 */
#}

{%
  set classes = [
    'social-media-links--platforms',
    'platforms',
    appearance.orientation == 'h' ? 'inline horizontal' : 'vertical',
  ]
%}

<ul{{ attributes.addClass(classes) }}>
  {% for platform in platforms %}
    <li>
      <a href=\"{{ platform.url }}\" {{ platform.attributes}} >
        {{ platform.element }}
      </a>

      {% if appearance.show_name %}
        {% if appearance.orientation == 'h' %}
          <br />
        {% endif %}

        <span><a href=\"{{ platform.url }}\" {{ link_attributes }}>{{ platform.name }}</a></span>
      {% endif %}
    </li>
  {% endfor %}
</ul>
";
    }
}
