<?php

/* layout.html */
class __TwigTemplate_d4aa5c28a22527e5a0fddf55f0dba05f2049c20a69995c4242a3e34eb42a8839 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
</head>
<body>
<header>header</header>
<content>
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "</content>
<footer>footer</footer>
</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  43 => 9,  36 => 11,  34 => 9,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
</head>
<body>
<header>header</header>
<content>
    {% block content %}
    {% endblock %}
</content>
<footer>footer</footer>
</body>
</html>", "layout.html", "/alidata/www/frame/app/views/Index/layout.html");
    }
}
