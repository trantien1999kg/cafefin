<?php


	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}

	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");

	$hotline= $db->rawQuery("select ten_$lang as ten,phone_$lang as phone from #_map where hienthi=1 and type=? order by stt asc",array('hotline'));

	$logo= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logofooter= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logofooter'));

	$ha_slider= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('ha_slider'));

	$logo_mobile = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-mobile'));

	$logo_footer = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo-footer'));

	$bgfooter= $db->rawQueryOne("select photo_$lang as photo,link_$lang as link from #_bannerqc where hienthi=1 and type=?",array('bg-footer'));

	$bg_intro= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_intro'));

	$bg_sanpham= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_sanpham'));

	
	$bg_quytrinh= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_quytrinh'));

	$bg_video= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_video'));

	$bg_album= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_album'));

	$bg_breadcrumb= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=?",array('bg_breadcrumb'));

	

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));
	 
	// photo

	$mxh = $db->rawQuery("select photo_$lang as photo,ten_$lang as ten,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array("mxh-support"));

	$about_footer = $db->rawQuery("select ten_$lang as ten,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array("about_footer"));

	$produce_footer = $db->rawQuery("select ten_$lang as ten,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array("produce_footer"));

	//Company

	$footer = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('footer'));

	$support = $db->rawQueryOne("select mota_$lang as mota from #_company where type=?",array('support'));

	//Baiviet
	
	$chinhsach = $db->rawQuery("select type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet where type=? and hienthi=1 order by stt asc,id desc",array('chinh-sach'));
	
	$tags_tukhoa = $func->AllDataPhoto("ten_$lang as ten,linktag_$lang as linktag,",'tag-tukhoa',null,'object');                 //Lấy toàn tag từ khóa
	
	// danh mục cấp

	$list_c1_dv =$db->rawQuery("select id,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array("dich-vu"));

	$list_c1_sp =$db->rawQuery("select id , type , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array("san-pham"));

	$cate1_pro =$db->rawQuery("select id , type , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array("san-pham"));

	$sanpham_c1 =$db->rawQuery("select id , type , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau , photo from #_baiviet_list where hienthi=1 and noibat=1 and type=? order by stt asc,id desc",array("san-pham"));

	$list_c1_tt =$db->rawQuery("select id,type,ten_$lang as ten,tenkhongdau_$lang as tenkhongdau from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array("tin-tuc"));
	
	$seopro = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array('san-pham'));

	$seoalbum = $db->rawQueryOne("select * from #_seopage where type = ? limit 0,1",array('album'));
	/* $desc_seo_project=$db->rawQueryOne("select id , title_$lang as title , mota_$lang as mota , type , photo from #_seopage where type=? limit 0,1",array('du-an'));*/

	/* index*/

	$sanpham=$db->rawQuery("select id , ten_$lang as ten , mucgia , giacu , ngaytao ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where  hienthi=1 and noibat=1 and type=? limit 0,4",array('san-pham'));

	$banner_index=$db->rawQuery("select id , ten_$lang as ten ,ten2_$lang as ten2 ,mota_$lang as mota ,tenkhongdau_$lang as tenkhongdau , type , link , link2 , photo from #_baiviet where  hienthi=1 and noibat=1 and type=?",array('banner_index'));

	$quytrinh=$db->rawQuery("select id , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where  hienthi=1 and type=?  order by stt asc",array('quy-trinh'));

	$album=$db->rawQuery("select id , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau , type , photo from #_baiviet where  hienthi=1 and noibat=1 and type=?  order by stt asc",array('album'));

	$new=$db->rawQuery("select id , id_list , ten_$lang as ten ,tenkhongdau_$lang as tenkhongdau , ngaytao , type , photo from #_baiviet where  hienthi=1 and noibat=1 and type=?  order by stt asc",array('tin-tuc'));

	$video=$db->rawQueryOne("select id , ten_$lang as ten ,ten2_$lang as ten2 , type , links , link1 , link2 , video from #_video where  hienthi=1 and type=?  order by stt asc limit 0,1",array('video'));
	/* ĐÓNG SP */
?>