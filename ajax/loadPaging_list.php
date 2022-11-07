<?php

	require_once 'ajaxConfig.php';

	$type=isset($_POST['type']) ? htmlspecialchars($_POST['type']): '';

	$table=isset($_POST['table']) ? htmlspecialchars($_POST['table']): '';

	$p=isset($_POST['p']) ? htmlspecialchars($_POST['p']): '';

	$item=isset($_POST['item']) ? htmlspecialchars($_POST['item']): '';

	$idlist = isset($_POST["idlist"]) ? htmlspecialchars($_POST["idlist"]):'';

	$typeid = isset($_POST["typeid"]) ? htmlspecialchars($_POST["typeid"]):'';
	
	$where='';
	
	if($typeid =="cat"){

		$where .= ' and id_cat='.$idlist;

	}elseif($typeid == "list"){

		$where .= ' and id_list='.$idlist;

	}

	$page=$p+1;

	$pagenext=$page+1;

	$startpointNext = ($pagenext * $item) - $item;

	$startpoint=($page * $item) - $item;

	$itemDouble = $item * 2;


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



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,photo,mucgia,giacu,sogiuong,songuoi,dientich,type";


			$table='baiviet_'.$table;



			break;



		default:



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang,type,id_list,photo,link,giaban,giacu";



			$table='baiviet';



			break;

	}

		$items= $db->rawQuery("select $field from #_$table where hienthi<>0 and type=? $where order by stt asc, id desc limit $startpoint,$item",array($type));
		$itemsNext=$db->rawQuery("select $field from #_$table where hienthi<>0 and type=? $where order by stt asc, id desc limit $startpointNext,$item",array($type));
		$result['count-list']=count($itemsNext);
		$output = '';
		foreach($items as $key => $value){

			if($key % 2 !=0){

				$checkKey = 'flex-row-reverse';

			}else{

				$checkKey = '';

			}

			if($value["mucgia"]!=0){

				$PriceNews = $func->FormatBDSMoney($value["mucgia"]);

			}else{

				$PriceNews = 'Liên hệ';

			}

			if($value["mucgia"] !=0 && $value["giacu"]!=0){

				$priceOld = $func->FormatBDSMoney($value["giacu"]);

			}else{

				$priceOld = '';
				
			}

			$output .= '<div class="col l-6 m-6 c-12 mb30 mb-t-16">

            <div class="wrapper-productdetail__category p-relative">

                <div class="wrapper-productdetail__category-outline"></div>

                <div class="wrapper-productdetail__category-img">

                    <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" title="'.$value["ten"].'" class="d-block hover-left">

                        <img src="'._upload_baiviet_l.$value["photo"].'" alt="'.$value["ten"].'" '.$func->errorImg().'>

                    </a>

                </div>

                <div class="wrapper-productdetail__category-detail">

                    <h3 class="wrapper-productdetail__category-detail-title line-2">

                        <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" title="'.$value["ten"].'">'.$value["ten"].'</a>

                    </h3>

                    <div class="wrapper-productdetail__category-detail-btn">

                        <a href="'.$value["type"].'/'.$value["tenkhongdau"].'">XEM CÁC PHÒNG</a>

                    </div>

                </div>

            </div>

            </div>';

		}

		$result["html"] = $output;
		
		echo json_encode($result);
?>