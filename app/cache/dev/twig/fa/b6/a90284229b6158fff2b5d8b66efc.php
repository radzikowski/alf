<?php

/* AlfShopBundle::layout.html.twig */
class __TwigTemplate_fab6a90284229b6158fff2b5d8b66efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/alfshop/css/main.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
    </head>
    <body>
        <div class=\"mainContainer\">
            ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Shop Bundle";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "            ";
    }

    public function getTemplateName()
    {
        return "AlfShopBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
