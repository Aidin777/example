<?php
// $link = null;

	mb_internal_encoding('utf8');

	function startup() {
		// Настройки подключения к БД.
		$conf = parse_ini_file('../../syst/app.ini');
		
		// Языковая настройка.
		setlocale(LC_ALL, 'ru_RU.UTF-8'); // Устанавливаем нужную локаль (для дат, денег, запятых и пр.)
		mb_internal_encoding('UTF-8'); // Устанавливаем кодировку строк
		
		// Подключение к БД.
		$conn = mysqli_connect($conf['host'], $conf['user'], $conf['pass'], $conf['db']);
		mysqli_query($conn, 'SET NAMES utf8');

		return $conn;


	}

	function discon(){
		$conn = startup();

		$discon = mysqli_close($conn);
		return $discon;
	}

