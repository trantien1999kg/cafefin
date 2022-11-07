<?php

	require_once 'ajaxConfig.php';

	$type=isset($_POST['type']) ? htmlspecialchars($_POST['type']): '';

	$table=isset($_POST['table']) ? htmlspecialchars($_POST['table']): '';

    $id=isset($_POST['id']) ? htmlspecialchars($_POST['id']): '';
	
	$where='';


	if($table=='baiviet'){



		$field="id,tenkhongdau_$lang,ten_$lang,photo,link,giaban,giacu";



	}

	if($table=='baiviet_list'){



		$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,photo,mucgia,giacu,sogiuong,songuoi,dientich";



	}

	switch($table){



		case 'list':



		case 'cat':



		case 'item':



		case 'sub':



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,photo,mucgia,giacu,sogiuong,songuoi,dientich";


			$table='baiviet_'.$table;



			break;



		default:

			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,mota_$lang as mota";

            $where = ' and id='.$id;

			$table='baiviet';

			break;

	}

		$items= $db->rawQueryOne("select $field from #_$table where hienthi<>0 and type=? $where order by stt asc, id desc limit 0,1",array($type));

		$output = htmlspecialchars_decode($items["mota"]);

		$result["html"] = $output;
		
		echo json_encode($result);
?>