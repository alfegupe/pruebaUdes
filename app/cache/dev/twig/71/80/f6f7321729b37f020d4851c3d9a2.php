<?php

/* UdesPruebaBundle:User:index.html.twig */
class __TwigTemplate_7180f6f7321729b37f020d4851c3d9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "</br></br></br>

<div class=\"row\">

<div class=\"span1\"> </div>

  <div class=\"span3\"> 
<h1>Users</h1>

 

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
;
        echo ">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <p>
            <button type=\"submit\" class=\"btn btn-primary\">Save</button>
        </p>
    </form>

\t</div>

  <div class=\"span8\">

   <p class=\"text-right\"> 
\t<form class=\"form-search text-right\">
  <div class=\"input-prepend\">
    <button type=\"submit\" class=\"btn\">Search</button>
    <input type=\"text\" class=\"span2 search-query\" placeholder=\"Buscar...\">
  </div>
</form></p>



    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "            <tr>
                <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "code"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
               \t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> <i class=\"icon-search\"></i> </a>
                        \t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> <i class=\"icon-edit\"></i> </a>
\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> <i class=\"icon-remove\"></i> </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>

<a class=\"btn btn-primary\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">
                Nuevo
            </a>

</div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "UdesPruebaBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 66,  136 => 63,  126 => 59,  122 => 58,  118 => 57,  111 => 55,  107 => 54,  103 => 53,  97 => 52,  94 => 51,  90 => 50,  56 => 19,  49 => 18,  44 => 16,  31 => 5,  28 => 3,);
    }
}
