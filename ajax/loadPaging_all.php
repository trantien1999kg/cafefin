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



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,photo,mucgia,giacu,sogiuong,songuoi,dientich";


			$table='baiviet_'.$table;



			break;



		default:



			$field="id,tenkhongdau_$lang as tenkhongdau,ten_$lang as ten,type,photo,mucgia,giacu";



			$table='baiviet';



			break;

	}

		$items= $db->rawQuery("select $field from #_$table where hienthi<>0 and type=? $where order by stt asc, id desc limit $startpoint,$item",array($type));
		$itemsNext=$db->rawQuery("select $field from #_$table where hienthi<>0 and type=? $where order by stt asc, id desc limit $startpointNext,$item",array($type));
		$result['count-list']=count($itemsNext);
		$output = '';

		foreach($items as $key => $value){

            if($value["mucgia"]!=0){

                $checkPrice = 'Giá từ '.$func->FormatBDSMoney($value["mucgia"]);
                
            }else{

                $checkPrice = 'Liên hệ';

            }

			$output .= '<div class="col l-6 m-12 c-12 mb30 mb-t-16 d-flex flex-column">

            <div class="wrapper-bookroom__pages-box d-flex flex-column p-relative">

                <div class="wrapper-bookroom__pages-box-outline"></div>

                <div class="wrapper-bookroom__pages-box-img">

                    <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" class="hover-left d-block" title="'.$value["ten"].'" '.$func->errorImg().'>

                        <img src="'._upload_baiviet_l.$value["photo"].'" alt="'.$value["ten"].'">

                    </a>

                </div>

                <div class="wrapper-bookroom__pages-box-detail d-flex flex-column">

                    <h3 class="wrapper-bookroom__pages-box-detail-title line-2">

                        <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" title="'.$value["ten"].'">'.$value["ten"].'</a>

                    </h3>

                    <div class="wrapper-bookroom__pages-box-detail-bookroom">

                        <span class="wrapper-bookroom__pages-box-detail-bookroom-price">'.$checkPrice.'</span>

                        <div class="wrapper-bookroom__pages-box-detail-bookroom-btn">

                            <a href="'.$value["type"].'/'.$value["tenkhongdau"].'" title="'.$value["ten"].'">ĐẶT PHÒNG</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>';

		}

		$result["html"] = $output;
		
		echo json_encode($result);
?>