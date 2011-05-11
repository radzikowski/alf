<?php

/* AlfShopBundle:Shop:leftMenu.html.twig */
class __TwigTemplate_fb2acb2e874c65953cff9708505b7579 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'menuList'));
        foreach ($context['_seq'] as $context['_key'] => $context['menu']) {
            // line 3
            echo "  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'menu'), "name", array(), "any", false), "html");
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</ul>

<table>

<tr>
    <th>";
        // line 10
        echo $this->env->getExtension('paginator')->sortable($this->getContext($context, 'paginator'), "Id", "c.id");
        echo "</th>
    <th>";
        // line 11
        echo $this->env->getExtension('paginator')->sortable($this->getContext($context, 'paginator'), "Name", "c.name");
        echo "</th>
</tr>

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'paginator'));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context['_key'] => $context['menu']) {
            // line 16
            echo "<tr ";
            if (twig_test_odd($this->getAttribute($this->getContext($context, 'loop'), "index", array(), "any", false))) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'menu'), "id", array(), "any", false), "html");
            echo "</td>
    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'menu'), "name", array(), "any", false), "html");
            echo "</td>
</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</table>

<div id=\"navigation\">
";
        // line 24
        echo $this->env->getExtension('paginator')->paginate($this->getContext($context, 'paginator'));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AlfShopBundle:Shop:leftMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
