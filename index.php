<?php
include 'sys/head.php';
?>
<div class="header">
	<h1>Главная страница</h1>
</div>
	
<?php
include 'sys/sidebar.php';
?>
	
<div class="content">
	<p>
<?	if(is_file("install.php")){ ?>
	<a href="install.php">Установка</a> |
<?	} ?>
	<a href="dpanel/create.php">Добавить вакансию на ресурс</a></p>

	<h3>Поиск вакансии на специальность</h3>
	<p>Введите необходимые данные в форму ниже:</p>
	<form action="special.php" method="post">
		<p>Название специальности:<br><label><input type="text" name="nameSpecial"></label></p>
		<p><input type="submit" name="button" value="Показать вакансии">
		<input type="reset" name="button" value="Сбросить"></p>
	</form>
</div>
	
<?php
include 'sys/foot.php';
?>