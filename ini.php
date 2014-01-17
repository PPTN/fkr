<?php
	try {
		$db = new PDO("sqlite:".dirname(__FILE__)."/fkr.sqlite3");
	} catch (Exception $e) {
		fatal_error($e->getMessage());
	}

	function fatal_error($message)
	{
	    die("<div style='background-color: yellow; border: 2px solid red; padding: 10px; margin: 10px;'>$message</div>");
	}

