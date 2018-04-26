<?php
include 'sys/head.php';
?>

<div class="header">
	<h1>Настройка подключения</h1>
</div>

<?php
include 'sys/sidebar.php';
?>

<div class="content">
<?php
	if(!isset($_POST['button'])){ ?>
	<form method="post">
		<p>Введите данные:</p>
        <p>
		Сервер MySQL:<br><input type='text' name='mysql_host'><br>
        Пользователь:<br><input type='text' name='mysql_user'><br>
        Пароль :<br><input type='text' name='mysql_pass'>
        </p>
        <p>
        База данных:<br><input type='text' name='mysql_base'>
        </p>

		<p><input type="submit" name="button" value="Сохранить"></p>
	</form>
<?php
	}
	$name_mysql[] = "mysql_host";
	$name_mysql[] = "mysql_user";
	$name_mysql[] = "mysql_pass";
	$name_mysql[] = "mysql_base";

	$val_mysql[] = $_POST['mysql_host'];
	$val_mysql[] = $_POST['mysql_user'];
	$val_mysql[] = $_POST['mysql_pass'];
	$val_mysql[] = $_POST['mysql_base'];

	$file = fopen("dpanel/mysql.ini","w");

	for($i = 0; $i < count($val_mysql); $i++){
		$str = $name_mysql[$i] . " = \"" . $val_mysql[$i] . "\";\n";
		fwrite($file, $str);
	}
	fclose($file);
	if(!is_dir("sys/tmp")) {
		mkdir(H . "/sys/tmp");
	}
	if(isset($_POST['button'])){ ?>
		<p>Все прошло успешно!</p>
		<p><a href="../../dpanel/create_table.php">Создать таблицу в бд</a></p>
<?php
	}
?>

</div>

<?php
include 'sys/foot.php';
?>
