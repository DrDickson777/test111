<?php

/* base.html */
class __TwigTemplate_8944b57466f08564caa53a1988261ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <title>Тестовое задание</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"widht=device-width, initial-scale=1.0\">
\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
  <link href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"/css/main.css\" rel=\"stylesheet\">
<script>
function vibor(sv){

var stt = 're'+sv;
\tfor(var i=0; i<=14;i++)
\t{
\tvar tt = 're'+i;
\tdocument.getElementById(tt).value='0';
\t}
\t\tdocument.getElementById(stt).value='1';
\t\tvar st = '#'+'pp'+sv;
\t\t\$('.people').css('border','2px solid #ffffff');
\t\t\$(st).css('border','2px solid #ff0000');
\t

}
</script>
</head>
<body>
<section id=\"header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t
\t\t<a href=\"/\" class=\"logo\"><img src=\"/img/logo.png\" alt=\"\" /></a>
\t\t\t<ul id=\"main_menu\">
\t\t\t\t<li class=\"first\"><a href=\"#\"><b>Новости</b></a></li>
\t\t\t\t\t<li><a href=\"#\"><b>Телеканал</b></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><b>Афиша</b></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><b>Кубанотека</b></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><b>Видео</b></a></li>
\t\t\t</ul>
\t\t\t<a href=\"/\" id=\"on_air\"><img src=\"/img/on_air.png\" /></a>
\t\t\t\t<input type=\"text\" placeholder=\"Поиск\" name=\"search\" id=\"search\" value=\"\" maxlength=\"60\">
\t\t\t\t
\t\t</div>
\t</div>
</section>

<section id=\"sub1\">
\t<div class=\"container\">
\t\t<div class=\"row1\">
\t\t<b>КЛЮЧЕВЫЕ ТЕМЫ:</b>
\t\t</div>
\t\t\t<div class=\"row2\">
\t\t\t\t<ul id=\"temi\">
\t\t\t\t\t<li>Убийство Бориса Немцова</li>
\t\t\t\t\t\t<li>Опера без границ</li>
\t\t\t\t\t\t\t<li>Песни Победы</li>
\t\t\t\t\t\t\t\t<li>Рост цен на продукты</li>
\t\t\t\t\t\t\t\t\t<li>Законы и законопроекты</li>
\t\t\t\t</ul>\t\t\t
\t\t\t</div>
\t</div>
</section>\t

<section id=\"sub2\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t<b>ЛИЦА ТЕЛЕКАНАЛА</b>
\t\t</div>
\t</div>
</section>\t\t

<section id=\"main_content\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"row_left\">
\t\t\t    ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "\t\t\t</div>
\t\t\t\t<div class=\"row_right\">
\t\t\t\t\t<img src=\"/img/banner_right1.jpg\" alt=\"\" class=\"banner1\" />
\t\t\t\t\t<img src=\"/img/banner_right3.jpg\" alt=\"\" class=\"banner3\" />
\t\t\t\t\t<img src=\"/img/banner_right2.jpg\" alt=\"\" class=\"banner2\" />
\t\t\t\t</div>
\t\t</div>
\t</div>
</section>
<div class=\"clear\"></div>

<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t</div>
\t</div>
</footer>\t\t

   <script src=\"http://code.jquery.com/jquery-latest.js\"></script>
   <script src=\"/js/bootstrap.min.js\"></script>
</body>
</html>";
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  133 => 82,  130 => 81,  104 => 83,  102 => 81,  20 => 1,  68 => 15,  55 => 12,  50 => 11,  41 => 10,  36 => 9,  31 => 6,  28 => 5,);
    }
}
