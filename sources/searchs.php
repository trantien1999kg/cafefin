<?php
    $phanloaidat = (isset($_REQUEST['phanloaidat'])) ? addslashes($_REQUEST['phanloaidat']) : "";
   
    $loainhadat = (isset($_REQUEST['loai'])) ? addslashes($_REQUEST['loai']) : "";
    
    $idtinh = (isset($_REQUEST['tinh'])) ? addslashes($_REQUEST['tinh']) : "";

    $idquan = (isset($_REQUEST['huyen'])) ? addslashes($_REQUEST['huyen']) : "";

    $idxa = (isset($_REQUEST['xa'])) ? addslashes($_REQUEST['xa']) : "";

    $dientich = (isset($_REQUEST['dientich'])) ? addslashes($_REQUEST['dientich']) : "";

    $duan = (isset($_REQUEST['duan'])) ? addslashes($_REQUEST['duan']) : "";
    
    $mucgia = (isset($_REQUEST['mucgia'])) ? addslashes($_REQUEST['mucgia']) : "";
    
    $huong = (isset($_REQUEST['huong'])) ? addslashes($_REQUEST['huong']) : "";

    $alias = (isset($_REQUEST['alias'])) ? addslashes($_REQUEST['alias']) : "";

    $sortby = (isset($_REQUEST['sortby'])) ? addslashes($_REQUEST['sortby']) : "";

    $show = (isset($_REQUEST['show'])) ? addslashes($_REQUEST['show']) : "";

    $idl = (isset($_REQUEST['idl'])) ? addslashes($_REQUEST['idl']) : "";

    $size = (isset($_REQUEST['size'])) ? addslashes($_REQUEST['size']) : "";

    $ncu = (isset($_REQUEST['ncu'])) ? addslashes($_REQUEST['ncu']) : "";

    $price = (isset($_REQUEST['price'])) ? addslashes($_REQUEST['price']) : "";

    $keywords = (isset($_REQUEST['keywords'])) ? addslashes($_REQUEST['keywords']) : "";

    
    
    $url_page='';

    if($_GET['href']){

        $get_link=base64_decode($_GET['href']);

        $ex=explode('/',$get_link);

        $com_tag=$ex[count($ex)-2];

        $alias_tag=$ex[count($ex)-1];

    }
    if(!empty($alias_tag) && $alias_tag!=$type){

        $row_list=$db->rawQueryOne("select id from #_baiviet_list where hienthi=1 and tenkhongdau=? and type=?",array($alias_tag,$type));

        if($row_list){

            $where=' and id_list='.$row_list['id'];

        }else{

            $row_cat=$db->rawQueryOne("select id from #_baiviet_cat where hienthi=1 and tenkhongdau=? and type=?",array($alias_tag,$type));

            if($row_cat){

                $where=' and id_cat='.$row_cat['id'];

            }else{

                $row_item=$db->rawQueryOne("select id from #_baiviet_item where hienthi=1 and tenkhongdau=? and type=?",array($alias_tag,$type));

                if($row_item){

                    $where=' and id_item='.$row_item['id'];

                }

            }

        }

    }
    if(!empty($keywords)){

        $where .= " and (ten_$lang like '%".$keywords."%')";

		$url_page .= '&keywords='.$keywords;
    }
    // Phân loại đất
    if($phanloaidat!=''){
        $where .= " and id_phanloai={$phanloaidat}";

		$url_page .= '&phanloaidat='.$phanloaidat;
    }
    // Loại nhà đất
    if($loainhadat!=''){
        $where .= " and id_list={$loainhadat}";

		$url_page .= '&loai='.$loainhadat;
    }
    // Tỉnh
    if($idtinh !=''){
        $where .= " and id_city={$idtinh}";

		$url_page .= '&tinh='.$idtinh;
    }
    // Huyện
    if($idquan!=''){
        $where .= " and id_dist={$idquan}";

        $url_page .= '&huyen='.$idquan;
    }
    // Xã
    if($idxa!=''){
        $where .= " and id_ward={$idxa}";

        $url_page .= '&xa='.$idxa;
    }
    // Diện tích
    if($dientich!=''){
        $dt_details = $db->rawQueryOne("select max,min from #_baiviet where type=? and id=?",array('dien-tich',$dientich));
        if($dt_details["max"]==0){
            $where .= " and dientich > {$dt_details["min"]}";

            $url_page .= '&dientich='.$dt_details["min"];

            

        }elseif($dt_details["min"]==0){

            $where .= " and dientich < {$dt_details["max"]}";

            $url_page .= '&dientich='.$dt_details["max"];

            

        }else{

            $where .= " and dientich between {$dt_details["min"]} and {$dt_details["max"]}";
            
            $url_page .= '&dientich='.$dt_details["min"].'-'.$dt_details["max"];
            
            
        }
        
    }
    //Dự án
    if($duan !=''){

        $where .= " and id_duan={$duan}";

        $url_page .= '&duan='.$duan;

    }
    //Mức giá
    if($mucgia !=''){
        $mg_details = $db->rawQueryOne("select max,min from #_baiviet where type=? and id=?",array('loc-gia',$mucgia));
        if($mg_details["max"]==0){
            $where .= " and mucgia > {$mg_details["min"]}";

            $url_page .= '&mucgia='.$mg_details["min"];


        }elseif($mg_details["min"]==0){

            $where .= " and mucgia < {$mg_details["max"]}";

            $url_page .= '&mucgia='.$mg_details["max"];

            


        }else{

            $where .= " and mucgia between {$mg_details["min"]} and {$mg_details["max"]}";
            
            $url_page .= '&dientich='.$mg_details["min"].'-'.$mg_details["max"];
            
        }
    }
    //Hướng
    if($huong!=''){
        $where .= " and id_huong={$huong}";

		$url_page .= '&huong='.$huong;

    }
    if($idl!=''){

        $where .= " and id_list={$idl}";

		$url_page .= '&idl='.$idl;
    }

    if($ncu!=''){

        $where .= " and find_in_set($ncu,id_ncu)";

		$url_page .= '&ncu='.$ncu;
    }

    if($size!=''){

        $where .= " and find_in_set($size,kichthuoc)";

		$url_page .= '&size='.$size;
    }

    if($price!=''){

        $gia_s=$db->rawQueryOne("select giatu,giaden from #_search where type=? and id=?",array('gia',$price));

        $where .= " and giaban >={$gia_s['giatu']} and giaban<={$gia_s['giaden']}";

		$url_page .= '&keywords='.$price;
    }
    
    if(!empty($sortby)){

        if($sortby == 's-1'){

            $where.=' and khuyenmai=1';

            $url_page .= '&sortby='.$sortby;

        }elseif($sortby == 's-2'){

            $where.=' and spmoi=1';

            $url_page .= '&sortby='.$sortby;

        }else{

            $ex_sort_by = str_replace('-', ' ', $sortby);

            $order_by = ' order by '.$ex_sort_by;

            $url_page .= '&sortby='.$sortby;
        }

	}else{

		$order_by = ' order by stt asc, id desc';

    }

    if(!empty($show)){

        $per_page=$show;

    }else{

        $per_page = $row_setting['page_sp'];

    }

    $startpoint = ($page * $per_page) - $per_page;

    $limit = ' limit '.$startpoint.','.$per_page;

    $sql = "SELECT *,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? {$where} {$order_by} ".$limit;

    $tintuc = $db->rawQuery($sql,array($type));


    $sqlq = "SELECT COUNT(*) as `numb` from #_baiviet where type=? {$where} {$order_by}";

    $count = $db->rawQueryOne($sqlq,array($type));

    $total = $count['numb'];
       
    if($func->isAjax()){

        $url = base64_decode($_GET['href']).$url_page;

        $paging = $func->pagination($total,$per_page,$page,$url);

        $html['resx'] = $_GET;

        $html['col4'] = $func->getTemplateProductCol4($tintuc,4,false,false);

        $html['col5'] = $func->getTemplateProductCol4($tintuc,5,false,false);

        $html['page'] = $paging;

        $html['show'] = $show;

        echo json_encode($html);


    }else{

        $url = $func->getCurrentPageURL();

        $paging = $func->pagination($total,$per_page,$page,$url);

        $title = _ketqua.' '._co.' '.$total.' '.'sản phẩm được tìm thấy!';

    }

    $arr=array(array('alias'=>'tim-kiem'.$url_page,'name'=>'kết quả tìm kiếm'));

    $str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',$arr);

?>