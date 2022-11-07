<?php 



	$loaiphong = (isset($_GET['loaiphong'])) ? htmlspecialchars($_GET['loaiphong']) : "";

    $songuoi = (isset($_GET['songuoi'])) ? htmlspecialchars($_GET['songuoi']) : 0;

    $cond = array();

    $where = "";

   

	if(!empty($loaiphong)){

        $dm1 = $db->rawQueryOne("select id from #_baiviet_list where type=? and tenkhongdau_$lang=? ",array('dat-phong',$loaiphong));

		$where .= " and id_list=?";

        array_push($cond,$dm1['id']);

	}

    if($songuoi>0){
        $where .= " and songuoi=?";
        array_push($cond,$songuoi);
    }

	$order_by = ' order by stt asc, id desc';

	$per_page = $row_setting['page_ne'];

    $startpoint = ($page * $per_page) - $per_page;

    $limit = ' limit '.$startpoint.','.$per_page;

  	$sql = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where type in ('dat-phong') and hienthi=1 $where $order_by ".$limit;

    $tintuc = $db->rawQuery($sql,$cond);


    $sqlq = "SELECT COUNT(*) as `numb` from #_baiviet where type in ('dat-phong') and hienthi=1 $where $order_by";

    $count = $db->rawQueryOne($sqlq,$cond);

   	$total = $count['numb'];

    $url = $func->getCurrentPageURL();

	$paging = $func->pagination($total,$per_page,$page,$url);

	$title = 'Có '.$total.' kết quả được tìm thấy!';

	/* SEO */

	$seo->setSeo('h1',$title);



	$str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',array(array('alias'=>'tim-kiem'.$url_page,'name'=>'kết quả tìm kiếm')));



?>