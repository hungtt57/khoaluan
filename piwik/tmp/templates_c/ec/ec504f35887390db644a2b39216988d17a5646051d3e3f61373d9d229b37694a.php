<?php

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_b4e2bc376ab85a1f8dee5163405bd815c73db5b4f7d7dcf50107284dbc902978 extends Twig_Template
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
        echo "<script type=\"text/javascript\" defer=\"defer\">
    \$(document).ready(function () {
        require('piwik/UI/DataTable').initNewDataTables();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript" defer="defer">*/
/*     $(document).ready(function () {*/
/*         require('piwik/UI/DataTable').initNewDataTables();*/
/*     });*/
/* </script>*/
/* */
