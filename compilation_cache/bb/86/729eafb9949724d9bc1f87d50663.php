<?php

/* people.html */
class __TwigTemplate_bb86729eafb9949724d9bc1f87d50663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<form method=\"POST\" action=\"/result.php\" target=\"_blank\">
    ";
        // line 9
        if (isset($context["peoples"])) { $_peoples_ = $context["peoples"]; } else { $_peoples_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_peoples_);
        foreach ($context['_seq'] as $context["_key"] => $context["people"]) {
            // line 10
            echo "    <div class=\"people\" id=\"pp";
            if (isset($context["people"])) { $_people_ = $context["people"]; } else { $_people_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_people_, "n"), "html", null, true);
            echo "\" onclick=\"vibor(";
            if (isset($context["people"])) { $_people_ = $context["people"]; } else { $_people_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_people_, "n"), "html", null, true);
            echo ")\">
    \t<img src=\"/img/";
            // line 11
            if (isset($context["people"])) { $_people_ = $context["people"]; } else { $_people_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_people_, "num"), "html", null, true);
            echo ".jpg\" alt=\"\" />
\t\t<input type=\"hidden\" name=\"re";
            // line 12
            if (isset($context["people"])) { $_people_ = $context["people"]; } else { $_people_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_people_, "n"), "html", null, true);
            echo "\" id=\"re";
            if (isset($context["people"])) { $_people_ = $context["people"]; } else { $_people_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_people_, "n"), "html", null, true);
            echo "\" value=\"0\" >
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t<p style=\"text-align:center;\"><input type=\"submit\" value=\"голосовать\" id=\"inp\" name=\"inp\"></p>
</form>
";
    }

    public function getTemplateName()
    {
        return "people.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  55 => 12,  50 => 11,  41 => 10,  36 => 9,  31 => 6,  28 => 5,);
    }
}
