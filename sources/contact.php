<?php if(!defined('_source')) die("Error");
   
	$row_contact = $db->rawQueryOne("select ten_$lang,mota_$lang ,noidung_$lang from #_company where type=? limit 0,1",array($type));
	/* SEO */
    $seopage = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array($type));
    if(!empty($seopage['title_'.$seolang])) $seo->setSeo('h1',$seopage['title_'.$seolang]);
    if(!empty($seopage['title_'.$seolang])) $seo->setSeo('title',$seopage['title_'.$seolang]);
    if(!empty($seopage['keywords_'.$seolang])) $seo->setSeo('keywords',$seopage['keywords_'.$seolang]);
    if(!empty($seopage['description_'.$seolang])) $seo->setSeo('description',$seopage['description_'.$seolang]);
    $seo->setSeo('url',$func->getCurrentPageURL());
    $img_json_bar = (isset($seopage['options']) && $seopage['options'] != '') ? json_decode($seopage['options'],true) : null;
    if($img_json_bar == null || ($img_json_bar['p'] != $seopage['photo']))
    {
        $img_json_bar = $func->getImgSize($seopage['photo'],_upload_seopage_l.$seopage['photo']);
        $seo->updateSeoDB(json_encode($img_json_bar),'seopage',$seopage['id']);
    }
    if(count($img_json_bar) > 0)
    {
        $seo->setSeo('photo',$https_config._thumbs.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'._upload_seopage_l.$seopage['photo']);
        $seo->setSeo('photo:width',$img_json_bar['w']);
        $seo->setSeo('photo:height',$img_json_bar['h']);
        $seo->setSeo('photo:type',$img_json_bar['m']);
    }

	$str_breadcrumbs =$breadcrumbs->getUrl('Trang chủ',array(array('alias'=>$type,'name'=>_lienhe)));
	
	if(!empty($_POST)){

		$capcha_code = htmlspecialchars($_POST['capchacode']);

        if($capcha_code==$_SESSION['captcha_code']){

		$data = $_POST['data'];

    	if($_POST){

    		foreach ($data as $k => $v) {

				$data[$k] = htmlspecialchars($func->magicQuote($v));

			}

    	}

    	$data['subject'] = 'Liên hệ đến từ website';

    	$data['hienthi'] = 1;

		$data['type'] = 'contact';

		$data['createdAt'] = time();

		$db->insert('contact',$data);

		if($func->sendMailIndex($row_setting['email'],"Liên hệ từ website".' website',$data['content'],array($row_setting['email']),null,null)){

			$id_insert = $db->getLastInsertId();

			if ($id_insert) {

				$result['status'] = 200;

				$result['message'] = _guithongtinthanhcong;

			}

			$func->transfer("Gửi mail thành công!!".'!', $https_config);

		}else{

			$func->transfer("Gửi mail thất bại!!!".'!', $https_config.'lien-he');

		}

	}else{

			$func->transfer(_mabaomatkhongdung.'!', $https_config.'lien-he');

		}

	}

?>