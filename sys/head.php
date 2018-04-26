<?
if (file_exists($_SERVER ['DOCUMENT_ROOT'] . '/sys/head.php')) {
    define('H', $_SERVER ['DOCUMENT_ROOT']); // корневая директория сайта
}

include H . '/dpanel/system.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> <? echo title_page() ?></title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
</head>

<body>
<div class="container">
