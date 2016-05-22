<?php

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_1be633e26c8a1fec5910014cf8a25afa5d0c02071c1bfe10993139a12f3b4175 extends Twig_Template
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
        if ( !(isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData"))) {
            // line 2
            echo "    <div class=\"pk-emptyDataTable\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ThereIsNoDataForThisReport")), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "<div class=\"visitor-profile\"
     data-visitor-id=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getFirstRow", array(), "method"), "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
            echo "\"
     data-next-visitor=\"";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "nextVisitorId", array()), "html", null, true);
            echo "\"
     data-prev-visitor=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "previousVisitorId", array()), "html", null, true);
            echo "\"
     tabindex=\"0\">
    <a href class=\"visitor-profile-close\"></a>
    <div class=\"visitor-profile-info\">
        <div>
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-avatar\">
                    <div>
                        <div class=\"visitor-profile-image-frame\">
                            <img src=\"";
            // line 16
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorAvatar", array()), "plugins/Live/images/unknown_avatar.jpg")) : ("plugins/Live/images/unknown_avatar.jpg")), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array()), "")) : ("")), "html", null, true);
            echo "\"
                                 title=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "visitorDescription", array()), "")) : ("")), "html", null, true);
            echo "\" />
                        </div>
                        <img src=\"plugins/Live/images/paperclip.png\" alt=\"\"/>
                    </div>
                    <div>
                        <div class=\"visitor-profile-header\">
                            ";
            // line 24
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "previousVisitorId", array()))) {
                echo "<a class=\"visitor-profile-prev-visitor\" href=\"#\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_PreviousVisitor")), "html", null, true);
                echo "\">&larr;</a>";
            }
            // line 25
            echo "                            <h1>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
            // line 26
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array()))) {
                echo ": <span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UserId")), "html", null, true);
                echo ": ";
                echo $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array());
                echo "\">";
                echo $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "userId", array());
                echo "</span>";
            }
            // line 27
            echo "<img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                            </h1>
                            <a href=\"http://piwik.org/docs/user-profile/\" class=\"visitorProfileHelp\" rel=\"noreferrer\"  target=\"_blank\" title=\"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ViewDocumentationFor", ucwords(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile"))))), "html", null, true);
            echo "\">
                                <span class=\"icon-help\"></span>
                            </a>
                            ";
            // line 32
            if ( !twig_test_empty($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "nextVisitorId", array()))) {
                echo "<a class=\"visitor-profile-next-visitor\" href=\"#\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NextVisitor")), "html", null, true);
                echo "\">&rarr;</a>";
            }
            // line 33
            echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            ";
            // line 35
            $this->loadTemplate("@Live/getSingleVisitSummary.twig", "@Live/getVisitorProfilePopup.twig", 35)->display(array_merge($context, array("visitData" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getFirstRow", array(), "method"), "getColumns", array(), "method"), "showLocation" => false)));
            // line 36
            echo "                        </div>
                    </div>
                    <p style=\"clear:both; border:none!important;\"></p>
                </div>
                <div class=\"visitor-profile-summary\">
                    <h1>";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Summary")), "html", null, true);
            echo "</h1>
                    <div>
                        ";
            // line 43
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array()) != $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array()))) {
                // line 44
                echo "                            ";
                $context["actionDetails"] = array();
                // line 45
                echo "                            ";
                if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array()) > 0)) {
                    $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnPageviews")))));
                }
                // line 46
                echo "                            ";
                if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEvents", array()) > 0)) {
                    $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEvents", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Events")))));
                }
                // line 47
                echo "                            ";
                if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalDownloads", array()) > 0)) {
                    $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalDownloads", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")))));
                }
                // line 48
                echo "                            ";
                if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalOutlinks", array()) > 0)) {
                    $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalOutlinks", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Outlinks")))));
                }
                // line 49
                echo "                            ";
                if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalSearches", array()) > 0)) {
                    $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalSearches", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnSearches")))));
                }
                // line 50
                echo "                            <p>";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummaryWithActionDetails", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisitDurationPretty", array())) . "</strong>"), "", "", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array())), "</strong>", twig_join_filter((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), ", "), ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array())), "</strong>"));
                echo "</p>
                        ";
            } else {
                // line 52
                echo "                            <p>";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummary", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisitDurationPretty", array())) . "</strong>"), "", "", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array())), "</strong>", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array())), "</strong>"));
                echo "</p>
                        ";
            }
            // line 54
            echo "                        <p>";
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "<strong>";
            }
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ConvertedNGoals", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array()))), "html", null, true);
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "</strong>";
            }
            // line 55
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo " (";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalConversionsByGoal", array()));
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
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 57
                    $context["idGoal"] = twig_slice($this->env, $context["idGoal"], 7, null);
                    // line 58
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    echo \Piwik\piwik_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                    echo " ";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goals"]) ? $context["goals"] : $this->getContext($context, "goals")), $context["idGoal"], array(), "array"), "name", array(), "array"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo ")";
            }
            echo ".</p>
                        ";
            // line 61
            if ((((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array()), 0)) : (0)) > 0) || ((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array()), 0)) : (0)) > 0))) {
                // line 62
                echo "                        <p>
                            ";
                // line 63
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Ecommerce")), "html", null, true);
                echo ":";
                // line 64
                if (((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEcommerceConversions", array()), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_EcommerceSummaryConversions", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceConversions", array())), "</strong>", ("<strong>" . call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceRevenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))))), "</strong>", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEcommerceItems", array())), "</strong>"));
                }
                // line 66
                if (((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalAbandonedCarts", array()), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AbandonedCartSummary", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCarts", array())), "</strong>", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCartsItems", array())), "</strong>", ("<strong>" . call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalAbandonedCartsRevenue", array()), (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))))), "</strong>"));
                }
                // line 67
                echo "</p>
                        ";
            }
            // line 69
            echo "                        ";
            if ((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array()), 0)) : (0))) {
                // line 70
                echo "                        <p>
                            ";
                // line 71
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
                echo ":";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "searches", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    echo " <strong title=\"";
                    if (($this->getAttribute($context["entry"], "searches", array()) == 1)) {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_OneSearch")), "html", null, true);
                    } else {
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_Searches", $this->getAttribute($context["entry"], "searches", array()))), "html", null, true);
                    }
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "keyword", array()), "html", null, true);
                    echo "</strong>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                        </p>
                        ";
            }
            // line 75
            echo "                        ";
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "averagePageGenerationTime", array(), "any", true, true)) {
                // line 76
                echo "                        <p title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_CalculatedOverNPageViews", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViewsWithTiming", array()))), "html", null, true);
                echo "\">
                            ";
                // line 77
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "averagePageGenerationTime", array())) . "s</strong>")));
                echo "
                        </p>
                        ";
            }
            // line 80
            echo "                    </div>
                </div>
                <div class=\"visitor-profile-important-visits\">";
            // line 83
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
            // line 84
            echo "<div>
                        <h1>";
            // line 85
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "visitsAggregated", array()) == 100)) {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
                echo "# 100";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_FirstVisit")), "html", null, true);
            }
            echo "</h1>
                        <div>
                            <p><strong>";
            // line 87
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "prettyDate", array()), "html", null, true);
            echo "</strong>&nbsp;- ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "daysAgo", array()))), "html", null, true);
            echo "</p>
                            <p>
                            ";
            // line 89
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
            echo "<strong ";
            if ((($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referrerType", array()) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referralSummary", array())))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "firstVisit", array()), "referralSummary", array()), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                    ";
            // line 92
            if (($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getRowsCount", array(), "method") != 1)) {
                // line 93
                echo "                    <div>
                        <h1>";
                // line 94
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastVisit")), "html", null, true);
                echo "</h1>
                        <div>
                            <p><strong>";
                // line 96
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "prettyDate", array()), "html", null, true);
                echo "</strong>&nbsp;- ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "daysAgo", array()))), "html", null, true);
                echo "</p>
                            <p>
                                ";
                // line 98
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo "<strong ";
                if ((($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referrerType", array()) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referralSummary", array())))) {
                    echo "title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) ? $context["keywordNotDefined"] : $this->getContext($context, "keywordNotDefined")), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisit", array()), "referralSummary", array()), "html", null, true);
                echo "</strong></p>
                        </div>
                    </div>
                    ";
            }
            // line 102
            echo "                </div>
                <div>
                    <div class=\"visitor-profile-location\">
                        <h1>";
            // line 105
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Location")), "html", null, true);
            echo "</h1>
                        <p>";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "countries", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 109
                ob_start();
                // line 110
                if ((($this->getAttribute($context["entry"], "cities", array(), "any", true, true) && (1 == twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", array())))) && twig_join_filter($this->getAttribute($context["entry"], "cities", array())))) {
                    // line 111
                    echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", array())), "html", null, true);
                } elseif (($this->getAttribute(                // line 112
$context["entry"], "cities", array(), "any", true, true) && (1 < twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", array()))))) {
                    // line 113
                    echo "<span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", array()), ", "), "html", null, true);
                    echo "\">";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_FromDifferentCities")), "html", null, true);
                    echo "</span>";
                }
                $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 116
                echo "
                                ";
                // line 117
                ob_start();
                // line 118
                echo "<strong>
                                        ";
                // line 119
                if (($this->getAttribute($context["entry"], "nb_visits", array()) == 1)) {
                    // line 120
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneVisit")), "html", null, true);
                } else {
                    // line 122
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($context["entry"], "nb_visits", array()))), "html", null, true);
                }
                // line 124
                echo "</strong>";
                $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 126
                echo "
                                ";
                // line 127
                ob_start();
                // line 128
                if ((isset($context["entryCity"]) ? $context["entryCity"] : $this->getContext($context, "entryCity"))) {
                    // line 129
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CityAndCountry", (isset($context["entryCity"]) ? $context["entryCity"] : $this->getContext($context, "entryCity")), $this->getAttribute($context["entry"], "prettyName", array())));
                } else {
                    // line 131
                    echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", array()), "html", null, true);
                }
                // line 134
                echo "&nbsp;<img src=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "flag", array()), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", array()), "html", null, true);
                echo "\"/>";
                $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 137
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_XFromY", (isset($context["entryVisits"]) ? $context["entryVisits"] : $this->getContext($context, "entryVisits")), (isset($context["entryCountry"]) ? $context["entryCountry"] : $this->getContext($context, "entryCountry"))));
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                                <a class=\"visitor-profile-show-map\" href=\"#\" ";
            if (twig_test_empty(((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) ? $context["userCountryMapUrl"] : $this->getContext($context, "userCountryMapUrl")), "")) : ("")))) {
                echo "style=\"display:none\"";
            }
            echo ">(";
            echo twig_replace_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ShowMap")), array(" " => "&nbsp;"));
            echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </p>
                        <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
            // line 141
            echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter((isset($context["userCountryMapUrl"]) ? $context["userCountryMapUrl"] : $this->getContext($context, "userCountryMapUrl")), "")) : ("")), "html", null, true);
            echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-pages-visited\">
                    <h1>";
            // line 148
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitedPages")), "html", null, true);
            echo "</h1>
                </div>
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 152
            $this->loadTemplate("@Live/getVisitList.twig", "@Live/getVisitorProfilePopup.twig", 152)->display(array_merge($context, array("visits" => $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "startCounter" => 1)));
            // line 153
            echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 156
            if (($this->getAttribute($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "lastVisits", array()), "getRowsCount", array(), "method") >= twig_constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
                // line 157
                echo "                    <a href=\"#\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LoadMoreVisits")), "html", null, true);
                echo "</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 159
                echo "                    <span class=\"visitor-profile-no-visits\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NoMoreVisits")), "html", null, true);
                echo "</span>
                    ";
            }
            // line 161
            echo "                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
\$(function() { require('piwik/UI').VisitorProfileControl.initElements(); });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 161,  519 => 159,  513 => 157,  511 => 156,  506 => 153,  504 => 152,  497 => 148,  487 => 141,  477 => 139,  460 => 137,  453 => 134,  450 => 131,  447 => 129,  445 => 128,  443 => 127,  440 => 126,  437 => 124,  434 => 122,  431 => 120,  429 => 119,  426 => 118,  424 => 117,  421 => 116,  413 => 113,  411 => 112,  409 => 111,  407 => 110,  405 => 109,  388 => 107,  384 => 105,  379 => 102,  364 => 98,  357 => 96,  352 => 94,  349 => 93,  347 => 92,  333 => 89,  326 => 87,  316 => 85,  313 => 84,  311 => 83,  307 => 80,  301 => 77,  296 => 76,  293 => 75,  289 => 73,  248 => 72,  245 => 71,  242 => 70,  239 => 69,  235 => 67,  230 => 66,  225 => 64,  222 => 63,  219 => 62,  217 => 61,  212 => 60,  193 => 58,  191 => 57,  174 => 56,  171 => 55,  162 => 54,  156 => 52,  150 => 50,  145 => 49,  140 => 48,  135 => 47,  130 => 46,  125 => 45,  122 => 44,  120 => 43,  115 => 41,  108 => 36,  106 => 35,  102 => 33,  96 => 32,  90 => 29,  86 => 27,  76 => 26,  73 => 25,  67 => 24,  58 => 18,  54 => 17,  50 => 16,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if not visitorData %}*/
/*     <div class="pk-emptyDataTable">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</div>*/
/* {% else %}*/
/* <div class="visitor-profile"*/
/*      data-visitor-id="{{ visitorData.lastVisits.getFirstRow().getColumn('visitorId') }}"*/
/*      data-next-visitor="{{ visitorData.nextVisitorId }}"*/
/*      data-prev-visitor="{{ visitorData.previousVisitorId }}"*/
/*      tabindex="0">*/
/*     <a href class="visitor-profile-close"></a>*/
/*     <div class="visitor-profile-info">*/
/*         <div>*/
/*             <div class="visitor-profile-overview">*/
/*                 <div class="visitor-profile-avatar">*/
/*                     <div>*/
/*                         <div class="visitor-profile-image-frame">*/
/*                             <img src="{{ visitorData.visitorAvatar|default("plugins/Live/images/unknown_avatar.jpg") }}"*/
/*                                  alt="{{ visitorData.visitorDescription|default('') }}"*/
/*                                  title="{{ visitorData.visitorDescription|default('') }}" />*/
/*                         </div>*/
/*                         <img src="plugins/Live/images/paperclip.png" alt=""/>*/
/*                     </div>*/
/*                     <div>*/
/*                         <div class="visitor-profile-header">*/
/*                             {% if visitorData.previousVisitorId is not empty %}<a class="visitor-profile-prev-visitor" href="#" title="{{ 'Live_PreviousVisitor'|translate }}">&larr;</a>{% endif %}*/
/*                             <h1>{{ 'Live_VisitorProfile'|translate }}*/
/*                                 {%- if visitorData.userId is not empty %}: <span title="{{'General_UserId'|translate}}: {{ visitorData.userId|raw }}">{{ visitorData.userId|raw }}</span>{% endif -%}*/
/*                                 <img class="loadingPiwik" style="display:none;" src="plugins/Morpheus/images/loading-blue.gif"/>*/
/*                             </h1>*/
/*                             <a href="http://piwik.org/docs/user-profile/" class="visitorProfileHelp" rel="noreferrer"  target="_blank" title="{{ 'General_ViewDocumentationFor'|translate("Live_VisitorProfile"|translate|ucwords) }}">*/
/*                                 <span class="icon-help"></span>*/
/*                             </a>*/
/*                             {% if visitorData.nextVisitorId is not empty %}<a class="visitor-profile-next-visitor" href="#" title="{{ 'Live_NextVisitor'|translate }}">&rarr;</a>{% endif %}*/
/*                         </div>*/
/*                         <div class="visitor-profile-latest-visit">*/
/*                             {% include "@Live/getSingleVisitSummary.twig" with {'visitData': visitorData.lastVisits.getFirstRow().getColumns(), 'showLocation': false} %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <p style="clear:both; border:none!important;"></p>*/
/*                 </div>*/
/*                 <div class="visitor-profile-summary">*/
/*                     <h1>{{ 'General_Summary'|translate }}</h1>*/
/*                     <div>*/
/*                         {% if visitorData.totalPageViews != visitorData.totalActions %}*/
/*                             {% set actionDetails = [] %}*/
/*                             {% if visitorData.totalPageViews > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalPageViews ~ ' ' ~ 'General_ColumnPageviews'|translate]) %}{% endif %}*/
/*                             {% if visitorData.totalEvents > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalEvents ~ ' ' ~ 'Events_Events'|translate]) %}{% endif %}*/
/*                             {% if visitorData.totalDownloads > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalDownloads ~ ' ' ~ 'General_Downloads'|translate]) %}{% endif %}*/
/*                             {% if visitorData.totalOutlinks > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalOutlinks ~ ' ' ~ 'General_Outlinks'|translate]) %}{% endif %}*/
/*                             {% if visitorData.totalSearches > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalSearches ~ ' ' ~ 'Actions_ColumnSearches'|translate]) %}{% endif %}*/
/*                             <p>{{ 'Live_VisitSummaryWithActionDetails'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions, '</strong>', actionDetails|join(', ') , '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>*/
/*                         {% else %}*/
/*                             <p>{{ 'Live_VisitSummary'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions,  '</strong>', '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>*/
/*                         {% endif %}*/
/*                         <p>{% if visitorData.totalGoalConversions %}<strong>{% endif %}{{ 'Live_ConvertedNGoals'|translate(visitorData.totalGoalConversions) }}{% if visitorData.totalGoalConversions %}</strong>{% endif %}*/
/*                         {%- if visitorData.totalGoalConversions %} (*/
/*                             {%- for idGoal, totalConversions in visitorData.totalConversionsByGoal -%}*/
/*                             {%- set idGoal = idGoal[7:] -%}*/
/*                             {%- if not loop.first %}, {% endif -%}{{- totalConversions }} {{ goals[idGoal]['name'] -}}*/
/*                             {%- endfor -%}*/
/*                         ){% endif %}.</p>*/
/*                         {% if visitorData.totalEcommerceConversions|default(0) > 0 or visitorData.totalAbandonedCarts|default(0) > 0%}*/
/*                         <p>*/
/*                             {{ 'Goals_Ecommerce'|translate }}:*/
/*                             {%- if visitorData.totalEcommerceConversions|default(0) > 0 %} {{ 'Live_EcommerceSummaryConversions'|translate('<strong>' ~ visitorData.totalEcommerceConversions, '</strong>', '<strong>' ~ visitorData.totalEcommerceRevenue|money(idSite), '</strong>', '<strong>' ~ visitorData.totalEcommerceItems, '</strong>')|raw }}*/
/*                             {%- endif -%}*/
/*                             {%- if visitorData.totalAbandonedCarts|default(0) > 0 %} {{ 'Live_AbandonedCartSummary'|translate('<strong>' ~ visitorData.totalAbandonedCarts, '</strong>', '<strong>' ~ visitorData.totalAbandonedCartsItems, '</strong>', '<strong>' ~ visitorData.totalAbandonedCartsRevenue|money(idSite), '</strong>')|raw }}{%- endif -%}*/
/*                         </p>*/
/*                         {% endif %}*/
/*                         {% if visitorData.totalSearches|default(0) %}*/
/*                         <p>*/
/*                             {{ 'Actions_WidgetSearchKeywords'|translate }}:*/
/*                             {%- for entry in visitorData.searches %} <strong title="{% if entry.searches == 1 %}{{ 'Actions_OneSearch'|translate }}{% else %}{{ 'UserCountryMap_Searches'|translate(entry.searches) }}{% endif %}">{{ entry.keyword }}</strong>{% if not loop.last %},{% endif %}{% endfor %}*/
/*                         </p>*/
/*                         {% endif %}*/
/*                         {% if visitorData.averagePageGenerationTime is defined %}*/
/*                         <p title="{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithTiming) }}">*/
/*                             {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageGenerationTime ~ 's</strong>')|raw }}*/
/*                         </p>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="visitor-profile-important-visits">*/
/*                     {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}*/
/*                     <div>*/
/*                         <h1>{% if visitorData.visitsAggregated == 100 %}{{ 'General_Visit'|translate }}# 100{% else %}{{ 'Live_FirstVisit'|translate }}{% endif %}</h1>*/
/*                         <div>*/
/*                             <p><strong>{{ visitorData.firstVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.firstVisit.daysAgo) }}</p>*/
/*                             <p>*/
/*                             {{ 'General_FromReferrer'|translate }}<strong {% if visitorData.firstVisit.referrerType == 'search' and '(' not in visitorData.firstVisit.referralSummary %}title="{{ keywordNotDefined }}"{% endif %}>{{ visitorData.firstVisit.referralSummary }}</strong></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% if visitorData.lastVisits.getRowsCount() != 1 %}*/
/*                     <div>*/
/*                         <h1>{{ 'Live_LastVisit'|translate }}</h1>*/
/*                         <div>*/
/*                             <p><strong>{{ visitorData.lastVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.lastVisit.daysAgo) }}</p>*/
/*                             <p>*/
/*                                 {{ 'General_FromReferrer'|translate }}<strong {% if visitorData.lastVisit.referrerType == 'search' and '(' not in visitorData.lastVisit.referralSummary %}title="{{ keywordNotDefined }}"{% endif %}>{{ visitorData.lastVisit.referralSummary }}</strong></p>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div>*/
/*                     <div class="visitor-profile-location">*/
/*                         <h1>{{ 'UserCountry_Location'|translate }}</h1>*/
/*                         <p>*/
/*                             {%- for entry in visitorData.countries -%}*/
/* */
/*                                 {% set entryCity -%}*/
/*                                     {% if entry.cities is defined and 1 == entry.cities|length and entry.cities|join -%}*/
/*                                         {{ entry.cities|join }}*/
/*                                     {%- elseif entry.cities is defined and 1 < entry.cities|length -%}*/
/*                                         <span title="{{ entry.cities|join(', ') }}">{{ 'UserCountry_FromDifferentCities'|translate }}</span>*/
/*                                     {%- endif %}*/
/*                                 {%- endset %}*/
/* */
/*                                 {% set entryVisits -%}*/
/*                                     <strong>*/
/*                                         {% if entry.nb_visits == 1 -%}*/
/*                                             {{ 'General_OneVisit'|translate }}*/
/*                                         {%- else -%}*/
/*                                             {{ 'General_NVisits'|translate(entry.nb_visits) }}*/
/*                                         {%- endif -%}*/
/*                                     </strong>*/
/*                                 {%- endset %}*/
/* */
/*                                 {% set entryCountry -%}*/
/*                                     {%- if entryCity -%}*/
/*                                         {{ 'UserCountry_CityAndCountry'|translate(entryCity, entry.prettyName)|raw }}*/
/*                                     {%- else -%}*/
/*                                         {{ entry.prettyName }}*/
/*                                     {%- endif -%}*/
/* */
/*                                     &nbsp;<img src="{{ entry.flag }}" title="{{ entry.prettyName }}"/>*/
/*                                 {%- endset %}*/
/* */
/*                                 {{- 'General_XFromY'|translate(entryVisits, entryCountry)|raw -}}{% if not loop.last %}, {% endif %}*/
/*                                 {%- endfor %}*/
/*                                 <a class="visitor-profile-show-map" href="#" {% if userCountryMapUrl|default('') is empty %}style="display:none"{% endif %}>({{ 'Live_ShowMap'|translate|replace({' ': '&nbsp;'})|raw }})</a> <img class="loadingPiwik" style="display:none;" src="plugins/Morpheus/images/loading-blue.gif"/>*/
/*                         </p>*/
/*                         <div class="visitor-profile-map" style="display:none" data-href="{{ userCountryMapUrl|default('') }}">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="visitor-profile-visits-info">*/
/*                 <div class="visitor-profile-pages-visited">*/
/*                     <h1>{{ 'Live_VisitedPages'|translate }}</h1>*/
/*                 </div>*/
/*                 <div class="visitor-profile-visits-container">*/
/*                     <ol class="visitor-profile-visits">*/
/*                         {% include "@Live/getVisitList.twig" with {'visits': visitorData.lastVisits, 'startCounter': 1} %}*/
/*                     </ol>*/
/*                 </div>*/
/*                 <div class="visitor-profile-more-info">*/
/*                     {% if visitorData.lastVisits.getRowsCount() >= constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW") %}*/
/*                     <a href="#">{{ 'Live_LoadMoreVisits'|translate }}</a> <img class="loadingPiwik" style="display:none;" src="plugins/Morpheus/images/loading-blue.gif"/>*/
/*                     {% else %}*/
/*                     <span class="visitor-profile-no-visits">{{ 'Live_NoMoreVisits'|translate }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $(function() { require('piwik/UI').VisitorProfileControl.initElements(); });*/
/* </script>*/
/* {% endif %}*/
/* */
