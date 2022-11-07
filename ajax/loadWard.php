<?php
	require_once 'ajaxConfig.php';
		
	@$id = (int)$_POST['id'];

	$results = $db->rawQuery("select id, ten from table_place_ward where id_dist=".$id." and hienthi=1 order by id asc");

	$ch = '<option value="0">'._chonphuongxa.'</option>';
	foreach ($results as $key => $value) {
		$ch .= '<option value="'.$value['id'].'">'.$value['ten'].'</option>';
	}

	echo $ch;
?>