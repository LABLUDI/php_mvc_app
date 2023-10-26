<?php

/**
 * Класс конфигурации базы данных
 */
class DB{
	const USER = 'labludi_cabinet';
	const PASS = 'R*%1&3k2';
	const HOST = 'localhost';
	const DB = 'labludi_cabinet';
	public static function connToDB() {
		$user = self::USER;
		$pass = self::PASS;
		$host = self::HOST;
		$db = self::DB;

		$conn = new PDO("mysql:dbname=$db;host=$host, $user, $pass");
		return $conn;
	}
}