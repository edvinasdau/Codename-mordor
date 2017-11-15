<?php

namespace uFrame;


class Menu
{

	public static function show() {

		$log = new Log();

		$db = new Database($log);
		$menuList = $db->select("SELECT * FROM pages");

		foreach ($menuList as $page) {
			echo "<a class='btn btn-outline-light' href='/" . CONFIG['site_path'] . "/" . $page['title'] . "'>" . $page['title'] . "</a>";
		}
	}

}