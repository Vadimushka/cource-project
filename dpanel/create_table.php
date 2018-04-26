<?php
    include '../sys/head.php';
	include 'db.php';
?>
<div class="header">
	<h1>Создание таблицы</h1>
</div>
<?php 
include H . '/sys/sidebar.php';

if(is_file("../install.php")) {
	rename("../install.php", H . "/sys/tmp/install.php");
}
$db->query("CREATE TABLE IF NOT EXISTS `firma` (
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`name_special` varchar(32) NOT NULL,
		`name_firma` varchar(70) NOT NULL,
		`amout_vacancy` int(20) NOT NULL,
		`condition_work` varchar(290) NOT NULL,
		`address` varchar(120) NOT NULL,
		`phone` varchar(11) NOT NULL,
		PRIMARY KEY(`id`)
	)ENGINE=InnoDB  DEFAULT CHARSET=utf8;");




?>
<div class="content">
<p>Структура создана!</p>
<p><a href="create.php">Создать вакансии</a><br>
<a href="import.php">Импортировать вакансии</a></p>

</div>
	
<?include H . '/sys/foot.php'; ?>