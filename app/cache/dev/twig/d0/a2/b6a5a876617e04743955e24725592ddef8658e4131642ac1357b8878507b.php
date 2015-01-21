<?php

/* OmarSiteBundle:Default:login.html.twig */
class __TwigTemplate_d0a2b6a5a876617e04743955e24725592ddef8658e4131642ac1357b8878507b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>تسجيل الدخول</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">من فضلك ادخل الاسم المستعار</h3>
                    </div>
                    <div class=\"panel-body\">
                        
                        ";
        // line 46
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 47
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "
                                هناك خطأ في الاسم المستعار او الرقم السري
                            </div>
                        ";
        }
        // line 52
        echo "
                        <form role=\"form\"  action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"login\">
                            <fieldset>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"الاسم المستعار\" id=\"username\" name=\"_username\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" autofocus>
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"الرقم السري\"  type=\"password\"  id=\"password\" name=\"_password\"  >
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">تذكرني
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type=\"submit\" value=\"تسجيل الدخول\" class=\"btn btn-lg btn-success btn-block\"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "OmarSiteBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 86,  135 => 83,  129 => 80,  123 => 77,  99 => 56,  93 => 53,  90 => 52,  83 => 48,  80 => 47,  78 => 46,  53 => 24,  47 => 21,  41 => 18,  35 => 15,  19 => 1,);
    }
}
