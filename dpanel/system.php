<?php

if (file_exists($_SERVER ['DOCUMENT_ROOT'] . '/dpanel/system.php')) {
	define('H', $_SERVER ['DOCUMENT_ROOT']); // корневая директория сайта
}

$title = "";

function title_page(){
    $mapsTitle = [
        "/about.php" => 'Об авторе',
        "/description.php" => 'Описание',
        "/index.php" => 'Главная страница',
        "/install.php" => 'Установка web-приложения',
        "/special.php" => 'Результаты поиска',
        "/dpanel/create.php" => 'Добавление вакансии на ресурс',
        "/dpanel/create_table.php" => 'Создание структуры в бд',
    ];

    return isset($mapsTitle[$_SERVER['PHP_SELF']]) ? $mapsTitle[$_SERVER['PHP_SELF']] : "Page";
}
