<?php	if(!defined('_source')) die("Error");

switch($act){

	case "man":
		$bookRoom->getMans();
		$template = "bookingroom/items";
		break;
	case "add":		
		$template = "bookingroom/item_add";
		break;
	case "edit":
		$bookRoom->getMan();
		$template = "bookingroom/item_add";
		break;
	case "save":
		$bookRoom->saveMan();
		break;
	case "delete":
		$bookRoom->deleteMan();
		break;	
	default:
		$template = "index";
}
?>