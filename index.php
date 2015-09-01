<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестовое задание</title>
	<meta charset="utf-8">
<head>
<body>
<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$people = array(
	array('num' => 'img1', 'n' => '0'),
	array('num' => 'img2', 'n' => '1'),
	array('num' => 'img3', 'n' => '2'),
	array('num' => 'img4', 'n' => '3'),
	array('num' => 'img5', 'n' => '4'),
	array('num' => 'img6', 'n' => '5'),
	array('num' => 'img7', 'n' => '6'),
	array('num' => 'img8', 'n' => '7'),
	array('num' => 'img9', 'n' => '8'),
	array('num' => 'img10', 'n' => '9'),
	array('num' => 'img11', 'n' => '10'),
	array('num' => 'img12', 'n' => '11'),
	array('num' => 'img13', 'n' => '12'),
	array('num' => 'img14', 'n' => '13'),
	array('num' => 'img15', 'n' => '14')

);

echo $twig->render('people.html', array('peoples' => $people));
?>
</body>
</html>