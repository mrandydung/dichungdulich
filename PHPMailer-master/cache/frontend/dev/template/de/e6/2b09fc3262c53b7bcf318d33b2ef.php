<?php

/* layout.html */
class __TwigTemplate_dee62b09fc3262c53b7bcf318d33b2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link href='/css/font/roboto.css?v=";
        // line 4
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
        <link href=\"/assets/dichungdulich/css/bootstrap.min.css?v=";
        // line 5
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"/assets/dichungdulich/css/main.css?v=";
        // line 6
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"/assets/dichungdulich/css/home.css?v=";
        // line 7
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"/assets/dichungdulich/css/full-slider.css?v=";
        // line 8
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"/css/pace.css?v=";
        // line 9
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"/assets/dichungdulich/css/back_to_top.css?v=";
        // line 10
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"/js/jquery-1.10.1.min.js?v=";
        // line 11
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        <script src=\"/assets/dichungdulich/js/bootstrap.min.js?v=";
        // line 12
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        <script src=\"/assets/dichungdulich/js/function/function.js?v=";
        // line 13
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"/js/pace.min.js?v=";
        // line 14
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"/assets/dichungdulich/js/back_to_top.js?v=";
        // line 15
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        <script src=\"/js/sendGa.js?v=";
        // line 16
        echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
        echo "\"></script>
        ";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "seo"), "seoGheptour");
        echo "
        <script async>
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '/js/analytics.js', 'ga');
ga('create', 'UA-63170562-1', 'auto');
ga('send', 'pageview');
        </script>
        <meta name=\"p:domain_verify\" content=\"d20387d3ae9cbe116879e9bad421dcb1\"/>
        ";
        // line 34
        if ((!$this->getAttribute((isset($context["sf_user"]) ? $context["sf_user"] : null), "get_partner_id"))) {
            // line 35
            echo "        <META http-equiv=\"refresh\" content=\"0;URL=http://gheptour.vn\">
        ";
        }
        // line 37
        echo "    </head>
    <body>
        <div class=\"up_top\">
            <a class=\"toTop\" title=\"\" style=\"display: inline;\"></a>
        </div>
        ";
        // line 42
        echo get_component("home", "header_menu");
        echo "
        ";
        // line 43
        echo get_partial("home/js");
        echo "
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        ";
        echo get_partial("home/footer");
        echo "
        ";
        // line 46
        echo get_partial("home/login_modal");
        echo "
        ";
        // line 47
        echo get_partial("home/register_modal");
        echo "
        <script async type=\"text/javascript\">
            var LHCChatOptions = {};
            LHCChatOptions.opt = {widget_height: 340, widget_width: 300, popup_height: 520, popup_width: 500, domain: 'gheptour.vn'};
            (function () {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                var refferer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://') + 1)) : '';
                var location = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
                po.src = '//support.dichung.vn/index.php/vnm/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(hide_offline)/true/(top)/350/(units)/pixels/(leaveamessage)/true/(department)/5/(operator)/9/(theme)/10?r=' + refferer + '&l=' + location;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        </script>
        <script async type=\"text/javascript\">
            var _urq = _urq || [];
            _urq.push(['initSite', 'b2bc4b99-fc96-4c98-ab5d-96e14158acb7']);
            (function () {
                var ur = document.createElement('script');
                ur.type = 'text/javascript';
                ur.async = true;
                ur.src = ('https:' == document.location.protocol ? '/js/userreport.js' : '/js/userreport.js');
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ur, s);
            })();
        </script>
    </body>
</html>";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 44,  127 => 47,  123 => 46,  118 => 45,  116 => 44,  112 => 43,  108 => 42,  101 => 37,  97 => 35,  95 => 34,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  27 => 5,  23 => 4,  18 => 1,  78 => 20,  74 => 19,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  51 => 11,  49 => 12,  45 => 11,  38 => 7,  33 => 5,  29 => 3,  26 => 2,);
    }
}
