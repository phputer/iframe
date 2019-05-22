<?php

/* Index/index.html */
class __TwigTemplate_0771b191de34e5035e4960fb3c58486a87693f533fae7e5beadd2e1956cd137e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "Index/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content %}
{{ data }}
{% endblock %}", "Index/index.html", "/alidata/www/frame/app/views/Index/index.html");
    }
}
