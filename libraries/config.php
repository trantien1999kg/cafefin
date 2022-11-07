<?php

	if(!defined('_lib')) die("Errors");



	date_default_timezone_set('Asia/Ho_Chi_Minh');


	$config=array(



		'arrayDomainSSL' => array(),


		'online'=>true,


		'website'=>array(



			'server-name'=>$_SERVER['SERVER_NAME'],



			'url'=>'/web-cafefin/',

			

			'debug-css' => false,



			'debug-js'=>true,



			'debug-responsive'=>true,



			'error-reporting'=>false,



			'robots'=>'index,follow',



			'upload' => array(

				

				'max-width' => 1600,



				'max-height' => 1600

			),

		),

		'database'=>array(



			'type' => 'mysql',



			'host' => 'localhost',



			'username' => 'root',



			'password' => '',



			'url'=>'/web-cafefin/upload/',



			'dbname'=> 'db_cafefin',



			'port' => 3306,



			'prefix' => 'table_',



			'charset' => 'utf8'

			

		),
		

		'login-lock'=>array(

		

			'attempt'=>5,



			'delay'=>15

		),

		'lang-default' => 'vi',
		

		'mail'=>array(



			'ip'=>'103.1.238.142',



			'email'=>'no-reply@botsonquangmin.com',



			'password'=>'X14IMwga',



			'smtp' => true,



			'secure' => 'ssl',



			'port' => 465,

			

			'gmail' => false



		),

		'author'=>array(



			'name'=>'Nguyễn Hoàng Nam',



			'email'=>'kythuat.iweb@gmail.com',



			'create'=>date('d/m/Y H:i:s')



		),

		'loai'=>array(

			0=>"Còn hàng",

			1=>"Hết hàng"
			
		),

		'seo-debug'=>array(

			'index'=>'Trang chủ',

			'products/product'=>'Bảng màu',

			'news/services'=>'Dịch vụ',

			'news/news'=>'Báo giá, tin tức',

			'news/news_detail'=>'Trang chi tiết bài viết',

			'products/product_detail'=>'Bảng màu chi tiết',

			'news/news_author'=>'Trang tác giả',

			'news/news_static'=>'Chính sách',

			'contacts/contact'=>'Liên hệ',

			'pages/baiviet'=>'Trang tĩnh ( vd: giới thiệu,Hồ sơ năng lực...)'

		),

		'seo-lang'=>array(

			'vi'=>'Vi',

			'en'=>'En',

		),

		'arr_domain'=>array(



			'vn'=>'.vn',



			'com'=>'.com',



			'com.vn'=>'.com.vn',



			'net'=>'.net',



			'net.vn'=>'.net.vn',



			'org'=>'.org',



			'info'=>'.info',



			'asian'=>'.asian',



		),



		'lang'=>array(

			'vi'=>'Vi',

			'en'=>'En'
		),



		"faceid"=>"582534979152027",



		'salt'=>'^29#_%z/@$',



		'secret'=>'@287Rzx_^!*95&'

	);

	// firewall

	$fw_conf['firewall']=false;

	$fw_conf['htaccess']='.htaccess';

	$fw_conf['email_admin']='kythuat.iweb@gmail.com';

	$fw_conf['max_connect']=15;

	$fw_conf['time_limit']=10;

	$fw_conf['max_lockcount']=15;

	$fw_conf['time_wait']=15;

	$fw_conf['ip_allow']='';

	/* Error reporting */

	error_reporting(($config['website']['error-reporting']) ? E_ALL : 0);



	/* Cấu hình base */

	require_once _lib.'checkSSL.php';


	if($config['online']){

		$check_ssl = new checkSSL();

		$http = $check_ssl->getProtocol();

	}else{

		$http = "http://";

	}
	



	



	$config_url = $config['website']['server-name'].$config['website']['url'];



	$https_config = $http.$config_url;



	// cấu hình upload

	require_once _lib."constant.php";

?>