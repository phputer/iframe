<?php

/* layout.html */
class __TwigTemplate_d1ced88b4681910623fdf8069a261115a3eef31355222f60e1c4fb803750fb12 extends Twig_Template
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
        return new Twig_Source("", "layout.html", "/alidata/www/frame/app/views/Index/layout.html");
    }
}
