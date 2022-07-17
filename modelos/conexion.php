<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=containers-us-west-69.railway.app;dbname=railway",
			            "root",
			            "0SlS0ot5lnTqM6MEH9wX");

		$link->exec("set names utf8");

		return $link;

	}

}
