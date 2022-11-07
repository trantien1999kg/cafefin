<?php if(!defined('_source')) die("Error");

$folder=_upload_baiviet;

$folder_img=_upload_hinhanh;

switch($act){
	case "man_list":
		$apiProduct->getMans();
		$template = "baiviet/list/items";
		break;
	case "add_list":
		$template = "baiviet/list/item_add";
		break;
	case "edit_list":
		$apiProduct->getMan();
		$template = "baiviet/list/item_add";
		break;
	case "save_list":
		$apiProduct->saveMan();
		break;
	case "delete_list":
		$apiProduct->deleteMan();
		break;
	#===================================================
	case "man_cat":
		$apiProduct->getMans();
		$apiProduct->getPageList();
		$template = "baiviet/cat/items";
		break;
	case "add_cat":
		$apiProduct->getPageList();
		$template = "baiviet/cat/item_add";
		break;
	case "edit_cat":
		$apiProduct->getMan();
		$apiProduct->getPageList();
		$template = "baiviet/cat/item_add";
		break;
	case "save_cat":
		$apiProduct->saveMan();
		break;
	case "delete_cat":
		$apiProduct->deleteMan();
		break;
	#===================================================
	case "man_item":
		$apiProduct->getMans();
		$apiProduct->getPageList();
		$template = "baiviet/item/items";
		break;
	case "add_item":
		$apiProduct->getPageList();
		$template = "baiviet/item/item_add";
		break;
	case "edit_item":
		$apiProduct->getMan();
		$apiProduct->getPageList();
		$template = "baiviet/item/item_add";
		break;
	case "save_item":
		$apiProduct->saveMan();
		break;
	case "delete_item":
		$apiProduct->deleteMan();
		break;
	#===================================================
	case "man":
		$apiProduct->getMans();
		$apiProduct->getPageList();
		$template = "baiviet/man/items";
		break;
	case "add":
		$apiProduct->getPageList();
		$template = "baiviet/man/item_add";
		break;
	case "edit":
		$apiProduct->getMan();
		$apiProduct->getPageList();
		if($table['adv']==true){
			$apiProduct->getAd();
		}
		$template = "baiviet/man/item_add";
		break;
	case "save":
		$apiProduct->saveMan();
		break;
	case "delete":
		$apiProduct->deleteMan();
		break;
	default:
		$template = "index";
}
?>
