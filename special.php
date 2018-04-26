<?
include 'sys/head.php';
include 'dpanel/db.php';
?>
<div class="header"><h1>Списов вакансии - <? echo $_POST['nameSpecial'] ?></h1></div>
	
<?	include 'sys/sidebar.php'; ?>
	
<div class="content">
	<?

	$res = $db->prepare("SELECT `name_firma` ,  `amout_vacancy` ,  `condition_work` ,  `address` ,  `phone`
	FROM `firma` 
	WHERE `name_special` = :name");
	$res->execute(array(':name' =>  $_POST['nameSpecial']));

	if($res){
		while($row = $res->fetch(PDO::FETCH_ASSOC)){	?>
			<p>Работодaтель: <? echo $row["name_firma"] ?></p>	
			<p> - количество свободных мест на вакансию: <? echo $row["amout_vacancy"] ?></p>	
			
			<p>Условия:<br> 
			<? echo $row["condition_work"] ?></p>	
					
			<p>Контактная информация: <br>
			Адрес:  <? echo $row["address"]?><br>
			Номер телефона: <? echo "8".$row["phone"]?></p>	
			<hr>
		<? 	
		}
	} else {
		echo "<p>Запрашиваемой вакансии нет!</p>";
	}
	?>
</div>
	
<?include 'sys/foot.php'; ?>