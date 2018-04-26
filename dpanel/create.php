<?
include '../sys/head.php';
include 'db.php';
?>
<div class="header">
	<h1>Добавить вакансию</h1>
</div>
<?	include H . '/sys/sidebar.php'; ?>
	
	<div class="content">
<?	if(!isset($_POST['button'])) { ?>
	<p>Введите необходимые данные в форму ниже:</p>

	<form method="post">
		<p>Название специальности: <label><input type="text" name="name_special"></label></p>
		<p>Работодaтель: <label><input type="text" name="name_firma"></label></p>
		<p>Количество свободных мест: <label><input type="number" name="amout_vacancy"></label></p>
		<p>Условия: <br> <label><textarea name="condition_work" cols="80" rows="8"></textarea></label></p>
		<p>Контактная информация: <br>
			Адрес: <label><input type="text" name="address"></label><br>
			Номер телефона<span style="color: red; ">*</span>: <label><input type="number" maxlength="10" name="phone"></label>
		</p>
		<p>* - 10-значный номер (без 8 либо +7)</p>
		<p>
			<input type="submit" name="button" value="Выполнить запрос">
			<input type="reset" name="button" value="Сбросить">
		</p>
	</form>

	<?php
	}
		$name_special = $_POST['name_special'];
		$name_firma = $_POST['name_firma'];
		$amout_vacancy = $_POST['amout_vacancy'];
		$condition_work = $_POST['condition_work'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];

		$str = explode("\n", $condition_work);
		$condition_str = "";
		
		foreach($str as $s){
			if(count($str)){
				$condition_str .= $s . "<br>";
			} else {
				$condition_str .= $s;
			}	
		}

		$res = $db->prepare('INSERT INTO `firma` (`name_special`, `name_firma`, `amout_vacancy`, `condition_work`, `address`, `phone`) VALUES (?, ?, ?, ?, ?, ?)');
		$res->execute(array($name_special,$name_firma,$amout_vacancy,$condition_str,$address,$phone));
	if(isset($_POST['button'])){ ?>
		<p>Запись внесена!<p>
		<p><a href="create.php">Повторить?</a></p>

<?	}
?>
	
	</div>
	
<?include H . '/sys/foot.php'; ?>