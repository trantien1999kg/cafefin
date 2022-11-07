<?php 

	#=================check per===============

	$GLOBAL_LANG=true;

	$GLOBAL_PERMISSION=false;

	#=================check user===============

	$GLOBAL_USER=true;

	$GLOBAL_USER_ADMIN=true;

	$GLOBAL_USER_CLIENT=true;

	#================check member================

	$MEMBER=false;

	$CONTACT=true;

	$NEWSLETTER=false;

	$BOOKING=true;

	/** ARTICLE SETTING*/
		
	$PUBLIC = [];

	$PRIVATE = [];

	$PHOTOS = [];

	// =======================seo page======================
	
	$setting['seopage']['page']=array(

		'gioi-thieu'=>'Giới thiệu',

		'san-pham'=>'Sản phẩm',

		'album'=>'Thư viện ảnh',

		'tin-tuc'=>'Tin tức',

		'lien-he'=>'Liên hệ',

	);
	$setting['seopage']['mota'] = true;
	$setting['seopage']['mota-ckeditor'] = true;
	$setting['seopage']['noidung'] = true;
	$setting['seopage']['noidung-ckeditor'] = true;
	$setting['seopage']['img-width'] = 300;
	$setting['seopage']['img-height'] = 200;
	$setting['seopage']['img-ratio'] = 1;
	$setting['seopage']['img-b'] = 200;
	$setting['seopage']['thumb'] = '300x200x1';
	$setting['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
	
	$viewArray=array('htgh','pttt');

	#===============================Tác giả==================================================

	$nametype='tac-gia';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tác giả';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách tác giả';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị",

		"mucluc"=>"Mục lục"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 183;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 183;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['link_author'] = true;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#==================================Hình thức giao hàng====================================

	$nametype='htgh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức giao hàng';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 72;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================pttt==================== 

	$nametype='pttt';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách phương thức thanh toán';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 285;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 215;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['thongtin'] = false;

	$GLOBAL['baiviet'][$nametype]['thongtin-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#========================Sản phẩm==================== 

	$nametype='san-pham';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Sản phẩm';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;
	
	$GLOBAL['baiviet'][$nametype]['diadiem'] = "Chọn địa điểm";

	$GLOBAL['baiviet'][$nametype]['diadiem'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"noibat"=>"Nổi bật",
		
		"hienthi"=>"Hiển thị",

		"mucluc"=>"Mục lục"

	);

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['masp'] = false;

	$GLOBAL['baiviet'][$nametype]['giaban'] = false;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['giacu'] = true;

	$GLOBAL['baiviet'][$nametype]['bookroom'] = false;

	$GLOBAL['baiviet'][$nametype]['mucgia'] = true;

	$GLOBAL['baiviet'][$nametype]['songuoi'] = false;

	$GLOBAL['baiviet'][$nametype]['sogiuong'] = false;

	$GLOBAL['baiviet'][$nametype]['buaan'] = false;

	$GLOBAL['baiviet'][$nametype]['phongtam'] = false;

	$GLOBAL['baiviet'][$nametype]['phanloaidat'] = false;

	$GLOBAL['baiviet'][$nametype]['duan'] = false;

	$GLOBAL['baiviet'][$nametype]['xuatxu'] = false;

	$GLOBAL['baiviet'][$nametype]['dientich'] = false;

	$GLOBAL['baiviet'][$nametype]['huong'] = false;

	$GLOBAL['baiviet'][$nametype]['city'] = false;

	$GLOBAL['baiviet'][$nametype]['dist'] = false;

	$GLOBAL['baiviet'][$nametype]['ward'] = false;

	$GLOBAL['baiviet'][$nametype]['tukhoa']=false;

	$GLOBAL['baiviet'][$nametype]['tinhtrang'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 385;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 288;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['img-b'] = false;

	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 385,

            	"height_photo" => 288,

            	"thumb_width_photo" => 385,

            	"thumb_height_photo" => 288,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['title-seo']=true;

	$GLOBAL['baiviet'][$nametype]['keywords-seo']=true;

	$GLOBAL['baiviet'][$nametype]['description-seo']=true;

	$GLOBAL['baiviet'][$nametype]['iframe']=false;

	$GLOBAL['baiviet'][$nametype]['sodienthoai']=false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"noibat"=>"Nổi bật",

			"hienthi"=>"Hiển thị"

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 256;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 256;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 510;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 32;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 42;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

		// danh mục cấp 2

	$GLOBAL['baiviet'][$nametype]['cat'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['title'] = 'Danh mục cấp 2';

	$GLOBAL_LEVEL2['baiviet'][$nametype]['full'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['check_cat']=array(

		"mucluc"=> "Mục lục",

		"hienthi"=>"Hiển thị"
		
	);

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width'] = 87;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height'] = 56;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['brand'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['list'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['icon'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-width1'] = 87;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-height1'] = 56;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['seo'] = true;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img-qc'] = false;

	$GLOBAL_LEVEL2['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	


	
	#========================Dịch vụ==================== 

	$nametype='tin-tuc';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Tin tức';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['tags']=false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 383;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 374;

	$GLOBAL['baiviet'][$nametype]['icon'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-height1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	// danh mục cấp 1

	$GLOBAL['baiviet'][$nametype]['list'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['title'] = 'danh mục cấp 1';

		$GLOBAL_LEVEL1['baiviet'][$nametype]['full'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['check_list']=array(

			"mucluc"=> "Mục lục",

			"hienthi"=>"Hiển thị"

		);

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width'] = 256;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height'] = 256;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['dm_index'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['icon'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['link_cano'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-width'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-height'] = 510;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['banner-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-width1'] = 32;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-height1'] = 42;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['advance'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-w'] = 1200;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['adv-h'] = 310;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['mota-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noidung-ckeditor'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['seo'] = true;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['noibat'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc'] = false;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-width'] = 1270;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-height'] = 300;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img-qc-ratio'] = 1;

		$GLOBAL_LEVEL1['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#========================banner trang chủ=================================================

	$nametype='banner_index';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'banner trang chủ';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"noibat"=>"Nổi bật",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['tags']=false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['ten2'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 383;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 374;

	$GLOBAL['baiviet'][$nametype]['icon'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-height1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = true;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['motaindex'] = false;

	$GLOBAL['baiviet'][$nametype]['motaindex-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['link'] = true;

	$GLOBAL['baiviet'][$nametype]['link2'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#========================Quy trình=================================================

	$nametype='quy-trinh';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Quy trình';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách quy trình';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['tags']=false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 383;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 374;

	$GLOBAL['baiviet'][$nametype]['icon'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-height1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['motaindex'] = false;

	$GLOBAL['baiviet'][$nametype]['motaindex-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['link'] = false;

	$GLOBAL['baiviet'][$nametype]['link2'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


	#=================================Thư Viện Ảnh========================================

	$nametype='album';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Thư Viện Ảnh';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách Album ';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = false;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = false;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = false;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = false;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(


		"hienthi"=>"Hiển thị",
		"noibat"=>"Nổi Bật"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['tags']=false;

	$GLOBAL['baiviet'][$nametype]['img'] = true;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 383;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 374;

	$GLOBAL['baiviet'][$nametype]['icon'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-height1'] = 50;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['motaindex'] = false;

	$GLOBAL['baiviet'][$nametype]['motaindex-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['link'] = false;

	$GLOBAL['baiviet'][$nametype]['link2'] = false;

	$GLOBAL['baiviet'][$nametype]['alias'] = false;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;
	$GLOBAL['baiviet'][$nametype]['img-gallery'] = true;

	$GLOBAL['baiviet'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh kèm theo",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 385,

            	"height_photo" => 288,

            	"thumb_width_photo" => 385,

            	"thumb_height_photo" => 288,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	#========================Chính sách==================== 

	$nametype='chinh-sach';

	$GLOBAL['baiviet'][$nametype]['title_main'] = 'Chính sách';

	$GLOBAL['baiviet'][$nametype]['title'] = 'danh sách';

	$GLOBAL['baiviet'][$nametype]['full'] = false;

	$GLOBAL['baiviet'][$nametype]['public'] = true;

	$GLOBAL['baiviet'][$nametype]['index_robots'] = true;

	$GLOBAL['baiviet'][$nametype]['link_cano'] = true;

	$GLOBAL['baiviet'][$nametype]['tacgia'] = true;

	$GLOBAL['baiviet'][$nametype]['schema'] = true;

	$GLOBAL['baiviet'][$nametype]['check']=array(

		"mucluc"=>"Mục lục tự động",

		"hienthi"=>"Hiển thị"

	);

	$GLOBAL['baiviet'][$nametype]['tag']=true;

	$GLOBAL['baiviet'][$nametype]['img'] = false;

	$GLOBAL['baiviet'][$nametype]['img-width'] = 270;

	$GLOBAL['baiviet'][$nametype]['img-height'] = 220;

	$GLOBAL['baiviet'][$nametype]['img-ratio'] = 1;

	$GLOBAL['baiviet'][$nametype]['mota'] = false;

	$GLOBAL['baiviet'][$nametype]['mota-ckeditor'] = false;

	$GLOBAL['baiviet'][$nametype]['noidung'] = true;

	$GLOBAL['baiviet'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['baiviet'][$nametype]['job'] = false;

	$GLOBAL['baiviet'][$nametype]['seo'] = true;

	$GLOBAL['baiviet'][$nametype]['alias'] = true;

	$GLOBAL['baiviet'][$nametype]['tag'] = false;

	$GLOBAL['baiviet'][$nametype]['top_nb'] = false;

	$GLOBAL['baiviet'][$nametype]['rating'] = false;

	$GLOBAL['baiviet'][$nametype]['daytin'] = false;

	$GLOBAL['baiviet'][$nametype]['mucluc'] = true;

	$GLOBAL['baiviet'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['baiviet'][$nametype]['file_type']='doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';

	##===================Giới thiệu========================

	$nametype='gioi-thieu';

	$GLOBAL['info'][$nametype]['title_main'] = 'Giới thiệu';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Giới thiệu';

	$GLOBAL['info'][$nametype]['public'] = false;

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 487;

	$GLOBAL['info'][$nametype]['img-height'] = 340;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);

	#================================================Hồ sơ năng lực==========================================

	$nametype='ho-so-nang-luc';

	$GLOBAL['info'][$nametype]['title_main'] = 'Hồ sơ năng lực';

	$GLOBAL['info'][$nametype]['title'] = 'Quản lý Hồ sơ năng lực';

	$GLOBAL['info'][$nametype]['public'] = false;

	$GLOBAL['info'][$nametype]['full'] = false;

	$GLOBAL['info'][$nametype]['img'] = true;

	$GLOBAL['info'][$nametype]['img-width'] = 487;

	$GLOBAL['info'][$nametype]['img-height'] = 340;

	$GLOBAL['info'][$nametype]['img-ratio'] = 1;

	$GLOBAL['info'][$nametype]['img-b'] = false;

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['mota'] = true;

	$GLOBAL['info'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['noidung'] = true;

	$GLOBAL['info'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['info'][$nametype]['link'] = false;

	$GLOBAL['info'][$nametype]['seo'] = true;

	$GLOBAL['info'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	$GLOBAL['info'][$nametype]['img-gallery'] = false;

	$GLOBAL['info'][$nametype]['multi-gallery-arr']=array

	(

		$nametype=>array

			(

            	"title_main_photo" => "Hình ảnh Sản phẩm",

            	"title_sub_photo" => "Hình ảnh",

            	"width_photo" => 500,

            	"height_photo" => 500,

            	"thumb_width_photo" => 500,

            	"thumb_height_photo" => 500,

            	"thumb_ratio_photo" => 1,

            	"img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp'

         	)

	);


	#====================Slider============================

	$nametype='slider';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Slider';

	$GLOBAL['photo'][$nametype]['title'] = 'Quản lý slider';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 1440;

	$GLOBAL['photo'][$nametype]['img-height'] = 701;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['link_tag'] = true;

	$GLOBAL['photo'][$nametype]['ten2'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = true;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================Slider============================

	$nametype='introTop';
	
	$GLOBAL['photo'][$nametype]['title_main'] = 'Thông số giới thiệu';

	$GLOBAL['photo'][$nametype]['title'] = 'Thông số giới thiệu';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 85;

	$GLOBAL['photo'][$nametype]['img-height'] = 58;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['options'] = false;

	$GLOBAL['photo'][$nametype]['number'] = true;

	$GLOBAL['photo'][$nametype]['link'] = false;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['mota-ckeditor'] = true;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================mạng xã hội footer============================

	$nametype='mxh-support';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Mạng xã hội';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = true;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================Về chúng tôi footer============================

	$nametype='about_footer';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Về chúng tôi FOOTER';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Sản phẩm FOOTER============================

	$nametype='produce_footer';

	$GLOBAL['photo'][$nametype]['title_main'] = 'Sản phẩm FOOTER';

	$GLOBAL['photo'][$nametype]['title'] = 'Danh sách';

	$GLOBAL['photo'][$nametype]['full'] = false;

	$GLOBAL['photo'][$nametype]['img'] = false;

	$GLOBAL['photo'][$nametype]['img-width'] = 40;

	$GLOBAL['photo'][$nametype]['img-height'] = 40;

	$GLOBAL['photo'][$nametype]['img-ratio'] = 1;

	$GLOBAL['photo'][$nametype]['link'] = true;

	$GLOBAL['photo'][$nametype]['mota'] = false;

	$GLOBAL['photo'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================logo============================

	$nametype='logo';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 107;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 97;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo footer============================

	$nametype='logofooter';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo footer';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo footer';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 107;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 97;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================logo============================

	$nametype='logo-mobile';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'logo mobile';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý logo mobile';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 70;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 40;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background thông số============================

	$nametype='bg_intro';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background thông số';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background thông số';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background sản phẩm============================

	$nametype='bg_sanpham';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background sản phẩm';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	
#====================Background quy trình============================

$nametype='bg_quytrinh';

$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background quy trình';

$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background quy trình';

$GLOBAL['bannerqc'][$nametype]['full'] = false;

$GLOBAL['bannerqc'][$nametype]['img'] = true;

$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

$GLOBAL['bannerqc'][$nametype]['link'] = false;

$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background Video============================

	$nametype='bg_video';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background Video';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background Video';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================Background Video============================

	$nametype='bg_album';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'hình ảnh album';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình ảnh album';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
		
	#====================Background breadcrumb============================

	$nametype='bg_breadcrumb';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'background breadcrumb';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý background breadcrumb';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================popup============================

	$nametype='popup';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'popup';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý popup';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['count'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = true;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';
		

	#====================Background footer============================

	$nametype='bg-tintuc';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Background tin tức';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Background tin tức';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================hình hạt cà phê============================

	$nametype='ha_slider';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'hình slider';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý hình slider';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 1440;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 500;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================bg footer============================

	$nametype='ha-lienhe';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh liên hệ';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 570;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 300;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================hình đại diện============================

	$nametype='hinhdaidien';

	$GLOBAL['bannerqc'][$nametype]['title_main'] = 'Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['title'] = 'Quản lý Hình ảnh share link';

	$GLOBAL['bannerqc'][$nametype]['full'] = false;

	$GLOBAL['bannerqc'][$nametype]['img'] = true;

	$GLOBAL['bannerqc'][$nametype]['img-width'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-height'] = 200;

	$GLOBAL['bannerqc'][$nametype]['img-ratio'] = 1;

	$GLOBAL['bannerqc'][$nametype]['link'] = false;

	$GLOBAL['bannerqc'][$nametype]['img_type']='.swf|.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================HotLine============================

	// $nametype = "hotline";
	// $GLOBAL['map'][$nametype]['title_main'] = 'Chi nhánh';
	// $GLOBAL['map'][$nametype]['title'] = 'Quản lý hotline';
	// $GLOBAL['map'][$nametype]['phone'] = true;
	
	
	#====================booking============================

	$nametype='dat-lich';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['title'] = 'Đăng ký báo giá';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = false;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================booking============================

	$nametype='client';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['title'] = 'Đăng ký nhận tin';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = false;

	$GLOBAL['booking'][$nametype]['email'] = true;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================booking============================

	$nametype='goi-lai';

	$GLOBAL['booking'][$nametype]['title_main'] = 'Yêu cầu gọi lại';

	$GLOBAL['booking'][$nametype]['title'] = 'Yêu cầu gọi lại';

	$GLOBAL['booking'][$nametype]['full'] = false;

	$GLOBAL['booking'][$nametype]['img'] = true;

	$GLOBAL['booking'][$nametype]['img-width'] = 380;

	$GLOBAL['booking'][$nametype]['img-height'] = 260;

	$GLOBAL['booking'][$nametype]['img-ratio'] = 1;

	$GLOBAL['booking'][$nametype]['phone'] = true;

	$GLOBAL['booking'][$nametype]['email'] = false;

	$GLOBAL['booking'][$nametype]['dichvu'] = false;

	$GLOBAL['booking'][$nametype]['diachi'] = false;

	$GLOBAL['booking'][$nametype]['noidung'] = false;

	$GLOBAL['booking'][$nametype]['seo'] = false;

	$GLOBAL['booking'][$nametype]['img_type']='.doc|.docx|.pdf|.rar|.zip|.ppt|.pptx|.DOC|.DOCX|.PDF|.RAR|.ZIP|.PPT|.PPTX|.xls|.jpg|.png|.gif|.JPG|.PNG|.GIF';

	#====================footer============================

	$nametype='footer';

	$GLOBAL['company'][$nametype]['title_main'] = 'footer';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý footer';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	#====================footer============================

	$nametype='video';

	$GLOBAL['video'][$nametype]['title_main'] = 'video';

	$GLOBAL['video'][$nametype]['title'] = 'Quản lý video';

	$GLOBAL['video'][$nametype]['full'] = false;

	$GLOBAL['video'][$nametype]['upload'] = false;

	$GLOBAL['video'][$nametype]['img'] = false;

	$GLOBAL['video'][$nametype]['img-width'] = 380;

	$GLOBAL['video'][$nametype]['img-height'] = 260;

	$GLOBAL['video'][$nametype]['img-ratio'] = 1;

	$GLOBAL['video'][$nametype]['ten2'] = true;

	$GLOBAL['video'][$nametype]['link'] = true;

	$GLOBAL['video'][$nametype]['link1'] = true;

	$GLOBAL['video'][$nametype]['link2'] = true;

	$GLOBAL['video'][$nametype]['mota'] = true;

	$GLOBAL['video'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['video'][$nametype]['upload'] = true;

	$GLOBAL['video'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================footer============================

	$nametype='support';

	$GLOBAL['company'][$nametype]['title_main'] = 'Hỗ trợ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý Hỗ trợ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = false;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = true;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = false;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	

	#====================company============================

	$nametype='lien-he';

	$GLOBAL['company'][$nametype]['title_main'] = 'liên hệ';

	$GLOBAL['company'][$nametype]['title'] = 'Quản lý liên hệ';

	$GLOBAL['company'][$nametype]['full'] = false;

	$GLOBAL['company'][$nametype]['upload'] = false;

	$GLOBAL['company'][$nametype]['img'] = true;

	$GLOBAL['company'][$nametype]['img-width'] = 380;

	$GLOBAL['company'][$nametype]['img-height'] = 260;

	$GLOBAL['company'][$nametype]['img-ratio'] = 1;

	$GLOBAL['company'][$nametype]['link'] = true;

	$GLOBAL['company'][$nametype]['mota'] = false;

	$GLOBAL['company'][$nametype]['mota-ckeditor'] = true;	

	$GLOBAL['company'][$nametype]['noidung'] = true;

	$GLOBAL['company'][$nametype]['noidung-ckeditor'] = true;

	$GLOBAL['company'][$nametype]['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';

	#====================setting============================

	$GLOBAL['setting']['tieude']=true;

	$GLOBAL['setting']['diachi']=true;

	$GLOBAL['setting']['chaychu1']=false;

	$GLOBAL['setting']['chaychu2']=false;

	$GLOBAL['setting']['slogan']=false;

	$GLOBAL['setting']['mota']=false;

	$GLOBAL['setting']['mota-ckeditor']=false;

	$GLOBAL['setting']['timework']=false;

	$GLOBAL['setting']['time']=false;

	$GLOBAL['setting']['email']=true;

	$GLOBAL['setting']['hotline_advance']=true;

	$GLOBAL['setting']['hotline']=true;

	$GLOBAL['setting']['dienthoai']=true;

	$GLOBAL['setting']['page_in']=true;

	$GLOBAL['setting']['page_ne']=true;

	$GLOBAL['setting']['page_sp']=true;

	$GLOBAL['setting']['page_baogia']=true;

	$GLOBAL['setting']['page_dichvu']=true;

	$GLOBAL['setting']['page_bookroom']=false;

	$GLOBAL['setting']['page_album']=false;

	$GLOBAL['setting']['postalcode']=true;

	$GLOBAL['setting']['tax_code']=false;

	$GLOBAL['setting']['blank']=false;

	$GLOBAL['setting']['denominator']=false;

	$GLOBAL['setting']['symbol']=false;

	$GLOBAL['setting']['code']=false;

	$GLOBAL['setting']['city']=true;

	$GLOBAL['setting']['district']=true;

	$GLOBAL['setting']['message']=true;

	$GLOBAL['setting']['counter']=false;

	$GLOBAL['setting']['zalo']=true;

	$GLOBAL['setting']['website']=true;

	$GLOBAL['setting']['laisuat']=false;

	$GLOBAL['setting']['phivanchuyen']=false;

	$GLOBAL['setting']['toado']=true;

	$GLOBAL['setting']['seo']=true;

	$GLOBAL['setting']['iframe']=true;

	$GLOBAL['setting']['iframe1']=true;

	$GLOBAL['setting']['fanpage']=true;

	$GLOBAL['setting']['copyright']=false;

	$GLOBAL['setting']['faceid']=true;

	$GLOBAL['setting']['toc']=true;

	$GLOBAL['setting']['block']=false;

	$GLOBAL['setting']['slider']=true;

	$GLOBAL['setting']['checkvideo']=true;

	$GLOBAL['setting']['videofile']=true;

	$GLOBAL['setting']['youtube']=false;

	$GLOBAL['setting']['instagram']=false;

	$GLOBAL['setting']['pinterest']=false;

	$GLOBAL['setting']['slide']=true;

	$GLOBAL['setting']['nonecopy']=false;

	$GLOBAL['setting']['background']=true;

	$GLOBAL['setting']['tag']=false;

	$GLOBAL['setting']['watermark']=true;

	$GLOBAL['setting']['changedola']=false;

	$GLOBAL['setting']['slider_video']=false;

	$GLOBAL['setting']['img_type']='.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.webp';


	foreach ($GLOBAL['baiviet'] as $key => $value) {
		if($value['public']){
			array_push($PUBLIC,$key);
		}else{
			array_push($PRIVATE,$key);
		}
	}
?>
