<?php
	require_once 'ajaxConfig.php';
		
	@$id = (int)$_POST['id'];

	$lists = $db->rawQuery("select id, ten from table_place_dist where id_city=".$id." and hienthi=1 order by id asc");

	$ch = '<option value="0">Chọn quận huyện</option>';

	foreach ($lists as $key => $value) {

		$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
		
	}

	echo $ch;
?>