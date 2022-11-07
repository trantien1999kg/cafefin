<?php  if(!defined('_source')) die("Error");



    @$id =  htmlspecialchars($_GET['id']);

    if($sortnews){
        $order_by = ' order by '.$sortnews;
    }else{
        $order_by = ' order by stt asc, id desc';
    }
    

    $per_page=$row_setting['page_ne'];



     if($type=='web-mau'){



        $per_page= $deviceType!='phone' ? $row_setting['page_ne'] : 4;



    }



    $subWhere="";
    
    if(!empty($id)){

            

    $row_list=$db->rawQueryOne("select id,ten_$lang,tenkhongdau_$lang as tenkhongdau,mota_$lang,noidung_$lang,options,mucluc,photo,type from #_baiviet where hienthi=1 and type=? and id=? order by stt asc, id desc",array('goi-y',$id));



    if($row_list){

        

        $subWhere.=" and id_tukhoa={$row_list['id']}";



        $startpoint = ($page * $per_page) - $per_page;



        $tintuc=$db->rawQuery("select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_tukhoa=? and type=? $order_by limit $startpoint,$per_page",array($row_list['id'],'bat-dong-san'));
        $sql= "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and id_tukhoa=? and type=? $order_by limit $startpoint,$per_page";
        $count=$db->rawQueryOne("select COUNT(*) as `numb` from #_baiviet where hienthi=1 and id_tukhoa=? and type=?", array($row_list['id'],'bat-dong-san'));

        

        $total=$count['numb'];

        

        $url = $func->getCurrentPageURL();



        $row_toc=$row_list['mucluc'];

        

        $paging = $func->pagination($total,$per_page,$page,$url);



        $data['breadcrumbs'][0] = array('alias'=>$type,'name'=>$title_seo);



        $data['breadcrumbs'][1] = $func->getArray($row_list);



        $str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ',$data['breadcrumbs']);



        $json_code .= $json_schema->ItemList($tintuc);

        

        $seoDB = $seo->getSeoDB($row_list['id'],'baiviet','man_list',$row_list['type']);



        $seo->setSeo('h1',$row_list['ten_'.$lang]);



        $seo->setSeo('subject',$row_list['mota_'.$lang]);



        $seo->setSeo('content',$row_list['noidung_'.$lang]);



        if(!empty($seoDB['title_'.$seolang])) $seo->setSeo('title',$seoDB['title_'.$seolang]);



        else $seo->setSeo('title',$row_list['ten_'.$lang]);



        if(!empty($seoDB['keywords_'.$seolang])) $seo->setSeo('keywords',$seoDB['keywords_'.$seolang]);



        if(!empty($seoDB['description_'.$seolang])) $seo->setSeo('description',$seoDB['description_'.$seolang]);



        $seo->setSeo('url',$url);



        $img_json_bar = (isset($row_list['options']) && $row_list['options'] != '') ? json_decode($row_list['options'],true) : null;



        if($img_json_bar == null || ($img_json_bar['p'] != $row_list['photo']))



        {

            $img_json_bar = $func->getImgSize($row_list['photo'],_upload_baiviet_l.$row_list['photo']);



            $seo->updateSeoDB(json_encode($img_json_bar),'baiviet_list',$row_list['id']);



        }

        if(count($img_json_bar) > 0)

        {

            $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_baiviet_l.$row_list['photo']);



            $seo->setSeo('photo:width',$img_json_bar['w']);



            $seo->setSeo('photo:height',$img_json_bar['h']);



            $seo->setSeo('photo:type',$img_json_bar['m']);



        }



        $row_catalogy=$db->rawQuery("select id,ten_$lang, tenkhongdau_$lang as tenkhongdau,photo from #_baiviet_cat where hienthi=1 and id_list=? and type=?  order by stt asc,id desc limit 0,$itemPage",array($row_list['id'],$type));



        if(count($row_catalogy)>0){


        }



    }



    }
?>