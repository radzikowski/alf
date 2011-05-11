<?php

/* AlfShopBundle:Shop:index.html.twig */
class __TwigTemplate_b3e760e24836480ae42fe54fd95a4e1c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AlfShopBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Alf Application";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"sidebar\">
    ";
        // line 7
        echo $this->env->getExtension('templating')->renderAction("AlfShopBundle:Shop:leftMenu", array(), array());
        // line 8
        echo "</div>
<hr>
\tjakis tekst

";
    }

    public function getTemplateName()
    {
        return "AlfShopBundle:Shop:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
