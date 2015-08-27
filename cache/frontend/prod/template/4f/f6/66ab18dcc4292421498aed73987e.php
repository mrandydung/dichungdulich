<?php

/* _creat_trip_step2_detailed_schedule.html */
class __TwigTemplate_4ff666ab18dcc4292421498aed73987e extends Twig_Template
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
        if ($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "isEn")) {
            // line 2
            echo "<script type=\"text/javascript\">
var language = '_en'
</script>
";
        } else {
            // line 6
            echo "<script type=\"text/javascript\">
var language = '';
</script>
";
        }
        // line 10
        echo "<script type=\"text/javascript\" src=\"/js/bootstrap-multiselect/js/bootstrap-multiselect.js?v=";
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"/assets/dichungdulich/js/add_scheduled_day.js?v=";
        // line 11
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
<link href=\"/js/bootstrap-multiselect/css/bootstrap-multiselect.css?v=";
        // line 12
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
<style type=\"text/css\">
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<div class=\"well\" id=\"div_content_schedule_day\"></div>";
    }

    public function getTemplateName()
    {
        return "_creat_trip_step2_detailed_schedule.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  36 => 11,  31 => 10,  25 => 6,  19 => 2,  17 => 1,);
    }
}
