<?php

	// check url

	$func->checkURL();

	$func->checkUrlRedirect();

	 /* Watermark */

    $wtmNews =$db->rawQueryOne("select hienthi, photo_$lang as photo,options from #_bannerqc where type=? limit 0,1",array('watermark'));


	/* Router */
	
    $router->setBasePath($config['website']['url']);

    $router->map('GET',array('i-web/','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
	$router->map('GET',array('i-web','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
    $router->map('GET|POST', '', 'index', 'home');
    $router->map('GET|POST', 'index.php', 'index', 'index');
    $router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
    $router->map('GET|POST', 'carts.js', 'carts', 'carts');
    $router->map('GET|POST', 'users.js', 'account', 'account');
	$router->map('GET|POST', '[lang:lang]/', '', '');
	$router->map('GET|POST', 'users.js', 'users', 'users');
	$router->map('GET|POST', '[a:com]', '', '');
	$router->map('GET|POST', '[lang:lang]/[a:com]', '', '');
	$router->map('GET|POST', '[lang:lang]/[a:com]/[a:act]', '', '');
	$router->map('GET|POST', '[lang:lang]/[a:com]/[a:list]/[a:act]', '', '');
	$router->map('GET|POST', '[lang:lang]/[a:com]/[a:list]/[a:cat]/[a:act]', '', '');

    $router->map('GET', _thumbs.'/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func;
        $func->createThumb($w,$h,$z,$src,null,_thumbs);
    },'thumb');

    $router->map('GET', _watermark.'/news/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func, $wtmNews;
        $func->createThumb($w,$h,$z,$src,$wtmNews,"news");
    },'watermark');
	
    $match = $router->match();

	if(is_array($match))
	{
		if(is_callable($match['target']))
		{
			call_user_func_array($match['target'], $match['params']); 
		}
		else
		{
			$com = (isset($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
			
			$lang = (isset($match['params']['lang'])) ? htmlspecialchars($match['params']['lang']) :  htmlspecialchars($match['target']);
			$list = (isset($match['params']['list'])) ? htmlspecialchars($match['params']['list']) : htmlspecialchars($match['target']);
			$cat = (isset($match['params']['cat'])) ? htmlspecialchars($match['params']['cat']) : htmlspecialchars($match['target']);
			$act = (isset($match['params']['act'])) ? htmlspecialchars($match['params']['act']) : htmlspecialchars($match['target']);
			$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 1;
		}
	}
	else
	{
		header('HTTP/1.0 404 Not Found', true, 404);
		$template = "error/404";
	}
	
	if($com != "" & $com != 'index' & ($lang == "" || $lang == $com)){
		$comlang = $slang;
		foreach($config['lang'] as $key => $value){
			foreach($translate[$key] as $k => $v){
				if($com == $v){
					$comlang = $key;
					break;
				}
			}
		}
		$lang = $comlang;
		$curlink = $comlang.'/'.$com;
		if($list != ''){$curlink .= '/'.$list;}
		if($act != ''){$curlink .= '/'.$act;} 

		$_GET['link_direct'] = $curlink;
	}	
	if($lang != '' & $lang != $com ){$_SESSION['lang'] = $lang;}else{$lang = $slang;}
	foreach ($translate[$lang] as $key => $value) {	
		if($com == $value){
			$com = $key;
			break;
		}
	}

	include_once _source."langWeb/lang_$lang.php";
	include_once _source."defaults.php";

	// rows page

	$itemPage=$deviceType!='phone' ? 8 : 4;

	/* SEO Lang */
    $seolang = $lang;

	$attr_com=array(


		array("tbl"=>"info","field"=>"id","source"=>"info","com"=>"gioi-thieu","type"=>"gioi-thieu"),

		array("tbl"=>"info","field"=>"id","source"=>"info","com"=>"ho-so-nang-luc","type"=>"ho-so-nang-luc"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"bao-gia","type"=>"bao-gia"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"bao-gia","type"=>"bao-gia"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet_cat","field"=>"idc","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"photo","field"=>"id","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"tin-tuc","type"=>"tin-tuc"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"tac-gia","type"=>"tac-gia"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"album","type"=>"album"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"chinh-sach","type"=>"chinh-sach"),

	);

	


	if($com){

		foreach($attr_com as $key => $val){


			if(isset($com) && $val['tbl']!='info' && $val['tbl']!='contact' && $com==$val["com"]){

				if($act !=''){

					$row = $db->rawQueryOne("select id from #_".$val['tbl']." where hienthi=1 and tenkhongdau_$lang='".$act."' and type='".$val['type']."'");

				}
		
				if(!empty($row)){

					$_GET[$val['field']]=$row['id'];

				}

			}

		}

	}

	switch($com){


		case 'lien-he':

			$title_seo = _lienhe;

			$type="lien-he";

			$seo->setSeo('type','object');

			$source = "contact";

			$template = "contacts/contact";

			break;

		case 'tac-gia':

			$title_seo = _tacgia;

			$type="tac-gia";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_author" : "news/news_author";

			break;

		case 'gioi-thieu':

			$title_seo = _gioithieu;

			$type = 'gioi-thieu';

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "baiviet";

			$template ="pages/baiviet";

			break;

		case 'ho-so-nang-luc':

			$title_seo = _hosonangluc;

			$type = 'ho-so-nang-luc';

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "baiviet";

			$template ="pages/baiviet";

			break;



		case 'tin-tuc':

			$title_seo = _tintuc;

			$type="tin-tuc";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news2";

			break;
			case 'album':

				$title_seo = _album;
	
				$type="album";
	
				$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
				$source = "news";
	
				$template ="news/news2";
	
				break;

		case 'san-pham':

			$title_seo = _sanpham;

			$type="san-pham";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "products/product_detail" : "products/product";

			break;

		case 'bao-gia':

			$title_seo = _baogia;

			$type="bao-gia";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		
		case 'chinh-sach':

			$title_seo = _chinhsach;

			$type="chinh-sach";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template ="news/news_static";

			break;

			case 'carts':

			$title_seo = _cart;

			$type='san-pham';

			$source="carts";

			$seo->setSeo('type',"object");

			if(!$func->isAjax()){

				$src=isset($_REQUEST['src']) ? $_REQUEST['src'] : '';

				switch($src){

					case 'gio-hang':

						if(count($_SESSION['cart'])==0){
							
							$func->transfer(_khongcosanpham,$https_config);

						}

						$title_seo=_cart;

						$template='carts/giohang';

						break;

					case 'thanh-toan':

						$title_seo=_thanhtoan;
						
						$template='carts/checkout';

						break;
					
					case 'success':

						$title_seo=_paymentcomplete;

						$template='carts/check_cart';

						break;
	

					default:

						header($_SERVER['SERVER_PROTOCOL']." 404 Not Found",true,404);

						break;
				}

				$str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ', array(array('alias'=>'carts?src='.$src,'name'=>$title_seo)));

			}else{

				include _source .'carts.php';

				die;

			}

			break;
		case 'users':

			$title_seo='user';

			$type='user';

			$source='users';

			$seo->setSeo('type',"object");
			

			if(!$func->isAjax()){

				$src=isset($_REQUEST['src']) ? $_REQUEST['src'] : '';

				switch($src){

					case 'account':

						$title_seo='Thông tin cá nhân';

						$template='users/profile';

						break;

					case 'change-passsword':

						$title_seo='Thay đổi mật khẩu';
						
						$template='users/change_passsword';

						break;

					default:

						header($_SERVER['SERVER_PROTOCOL']." 404 Not Found",true,404);

						break;
				}

				$str_breadcrumbs = $breadcrumbs->getUrl('Trang chủ', array(array('alias'=>'users?src='.$src,'name'=>$title_seo)));

			}else{

				include _source .'users.php';

				die;

			}
			break;

		case 'tim-kiem':

			$title_seo = _timkiem;

			$type='san-pham';

			$seo->setSeo('type','object');

			$source = "searchs";

			if(!$func->isAjax()){ 

				$template = "products/product";

			}else{

				$type='san-pham';

				include _source.'searchs.php';

				$template = "products/product"; 

				die;

			}

			break;

		case 'sitemap':

			include_once "sitemap.php";

			exit();


		case 'lang':

			if(isset($_GET['lang']))

			{

				switch($_GET['lang']){

					case 'vi':

						$_SESSION['lang'] = 'vi';

						break;

					case 'en':

						$_SESSION['lang'] = 'en';

						break;

					case 'jp':

						$_SESSION['lang'] = 'jp';

						break;

					case 'cn':

						$_SESSION['lang'] = 'cn';

						break;

					default:

						$_SESSION['lang'] = 'vi';

						break;

				}

			}else{

				$_SESSION['lang'] = 'vi';

			}

			$func->redirect($_SERVER['HTTP_REFERER']);

			break;

		case '': 

		case 'index': 

			$source = 'index';

			$template = 'index';

			$seo->setSeo('type','website');

			break;

		default:

			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);

			$template = "error/404";

			break;

	}

	

	include_once _lib."style.php";


	$arr_animate =array("wow animated bounce","wow animated flash","wow animated pulse","wow animated rubberBand","wow animated shake","wow animated swing","wow animated tada","wow animated wobble","wow animated jello","wow animated bounceIn","wow animated bounceInDown","wow animated bounceInLeft","wow animated bounceInRight","wow animated bounceInUp","wow animated bounceOut","wow animated bounceOutDown","wow animated bounceOutLeft","wow animated bounceOutRight","wow animated bounceOutUp","wow animated fadeIn","wow animated fadeInDown","wow animated fadeInDownBig","wow animated fadeInLeft","wow animated fadeInLeftBig","wow animated fadeInRight","wow animated fadeInRightBig","wow animated fadeInUp","wow animated fadeInUpBig","wow animated fadeOut","wow animated fadeOutDown","wow animated fadeOutDownBig","wow animated fadeOutLeft","wow animated fadeOutLeftBig","wow animated fadeOutRight","wow animated fadeOutRightBig","wow animated fadeOutUp","wow animated fadeOutUpBig","wow animated flip","wow animated flipInX","wow animated flipInY","wow animated flipOutX","wow animated flipOutY");

	if($source!="") include _source.$source.".php";

?>