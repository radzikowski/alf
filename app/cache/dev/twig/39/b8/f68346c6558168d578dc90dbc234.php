<?php

/* KnplabsPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_39b8f68346c6558168d578dc90dbc234 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
";
        // line 3
        if (($this->getContext($context, 'pageCount') > 1)) {
            // line 4
            echo "<div class=\"pagination\">
\t";
            // line 5
            if ((twig_test_defined("first", $context) && ($this->getContext($context, 'current') != $this->getContext($context, 'first')))) {
                // line 6
                echo "        <span class=\"first\">
        \t<a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, 'route'), twig_array_merge($this->getContext($context, 'query'), array("page" => $this->getContext($context, 'first')))), "html");
                echo "\">&lt;&lt;</a>
        </span>
    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (twig_test_defined("previous", $context)) {
                // line 12
                echo "        <span class=\"previous\">
        \t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, 'route'), twig_array_merge($this->getContext($context, 'query'), array("page" => $this->getContext($context, 'previous')))), "html");
                echo "\">&lt;</a>
        </span>
    ";
            }
            // line 16
            echo "
    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'pagesInRange'));
            foreach ($context['_seq'] as $context['_key'] => $context['page']) {
                // line 18
                echo "        ";
                if (($this->getContext($context, 'page') != $this->getContext($context, 'current'))) {
                    // line 19
                    echo "            <span class=\"page\">
            \t<a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, 'route'), twig_array_merge($this->getContext($context, 'query'), array("page" => $this->getContext($context, 'page')))), "html");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</a>
            </span>
        ";
                } else {
                    // line 23
                    echo "            <span class=\"current\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'page'), "html");
                    echo "</span>
        ";
                }
                // line 25
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "
    ";
            // line 28
            if (twig_test_defined("next", $context)) {
                // line 29
                echo "        <span class=\"next\">
        \t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, 'route'), twig_array_merge($this->getContext($context, 'query'), array("page" => $this->getContext($context, 'next')))), "html");
                echo "\">&gt;</a>
        </span>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            if ((twig_test_defined("last", $context) && ($this->getContext($context, 'current') != $this->getContext($context, 'last')))) {
                // line 35
                echo "        <span class=\"last\">
        \t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, 'route'), twig_array_merge($this->getContext($context, 'query'), array("page" => $this->getContext($context, 'last')))), "html");
                echo "\">&gt;&gt;</a>
        </span>
    ";
            }
            // line 39
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnplabsPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
