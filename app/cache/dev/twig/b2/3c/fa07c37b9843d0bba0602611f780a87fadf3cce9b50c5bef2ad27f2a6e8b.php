<?php

/* OmarSiteBundle:Dealer:index.html.twig */
class __TwigTemplate_b23cfa07c37b9843d0bba0602611f780a87fadf3cce9b50c5bef2ad27f2a6e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "عملاء الشغل";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    
     <!-- DataTables CSS -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        echo "عملاء الشغل";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    بيانات العملاء
                </div>
                
                <!-- /.panel-heading -->
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-list\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>الاسم كامل</th>
                                    <th>الاسم المتداول</th>
                                    <th>العنوان</th>
                                    <th>الهاتف</th>
                                    <th>المحمول</th>
                                    <th>نوع العلاقة</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 40
            echo "                                <tr>
                                    <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nickname", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "address", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phone", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mobile", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "relation", array()), "html", null, true);
            echo "</td>
                                    <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dealer_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    \$(document).ready(function() {
        \$('#dataTables-list').dataTable();
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OmarSiteBundle:Dealer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 76,  178 => 75,  171 => 72,  168 => 71,  155 => 60,  143 => 54,  137 => 51,  130 => 47,  126 => 46,  122 => 45,  118 => 44,  114 => 43,  110 => 42,  104 => 41,  101 => 40,  97 => 39,  71 => 15,  68 => 14,  62 => 11,  56 => 8,  49 => 5,  46 => 4,  40 => 2,  11 => 1,);
    }
}
