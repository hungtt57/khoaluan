<?php

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_a9d498ba77fa6d7ac21b89e0210828d7ccb1eff3bf3984b6322c838a5c6a810b extends Twig_Template
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
        echo "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" class=\"sites_autocomplete\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="top_bar_sites_selector piwikTopControl">*/
/*     <div piwik-siteselector show-selected-site="true" class="sites_autocomplete"></div>*/
/* </div>*/
