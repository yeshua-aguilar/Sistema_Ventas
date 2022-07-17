<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=containers-us-west-83.railway.app:6338;dbname=railway",
			            "root",
			            "BtPQbAjCGtxbKcCkAbOg");

		$link->exec("set names utf8");

		return $link;

	}

}
