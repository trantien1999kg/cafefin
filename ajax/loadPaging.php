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



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,photo,mucgia,giacu,sogiuong,songuoi,dientich,mota_$lang as mota,type";

			$where = ' and noibat=1';

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

				$checkPriceReverse = 'wrapper-bookrom__aside-prices--reverse';

			}else{

				$checkKey = '';

				$checkPriceReverse = '';

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

			$output .= '<div class="wrapper-bookrom__aside d-flex flex-wrap '.$checkKey.' align-items-center p-relative">

            <div class="wrapper-bookrom__aside-img col-6 w-100-m p-relative">

				<div class="wrapper-bookrom__aside-prices '.$checkPriceReverse.'">

					<div class="p-relative wrapper-bookrom__aside-prices-overflow">

						<span class="block-circle"><span class="circle circle--modifiers"><span class="circle-policy"></span></span></span>

						<span class="wrapper-bookrom__aside-prices-current">'.$PriceNews.'</span>

						<del class="wrapper-bookrom__aside-prices-old">'.$priceOld.'</del>

					</div>

            	</div>


                <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" class="d-block hover-left">

                    <img src="'._upload_baiviet_l.$value["photo"].'" alt="'.$value["ten"].'" '.$func->errorImg().'>

                </a>

            </div>

            <div class="wrapper-bookrom__aside-detail w-100-m col-6">

                <div class="wrapper-bookrom__aside-detail-header t-center mb30">

                    <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" class="wrapper-bookrom__aside-detail-header-title" title="'.$value["ten"].'">

                        <span>'.$value["ten"].'</span>

                    </a>

                </div>

                <div class="wrapper-bookrom__aside-detail-body">

                    <span class="wrapper-bookrom__aside-detail-body-people"><i class="fa-solid fa-user-cowboy"></i> '.$value["songuoi"].' người'.'</span>

                    <span class="wrapper-bookrom__aside-detail-body-bed"><i class="fa-solid fa-bed-front"></i> '.$value["sogiuong"].' giường'.'</span>

                    <span class="wrapper-bookrom__aside-detail-body-area"><i class="fa-solid fa-square-dashed"></i> '.$value["dientich"].' m<sup>2</sup></span>

                </div>

                <div class="wrapper-bookrom__aside-detail-bottom t-center">

                    <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" class="wrapper-bookrom__aside-detail-bottom-view">ĐẶT PHÒNG</a>

                    <div class="wrapper-bookrom__aside-detail-bottom-content mt25">

                        <div class="wrapper-bookrom__aside-detail-bottom-des line-2">'.htmlspecialchars_decode($value["mota"]).'</div>

                    </div>

                </div>

            </div>

        </div>';
		}

		$result["html"] = $output;
		
		echo json_encode($result);
?>