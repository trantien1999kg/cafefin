<?php
	require_once 'ajaxConfig.php';

    $domain=isset($_POST['domain']) ? $_POST['domain'] : '';

	$ext=isset($_POST['ext']) ? $_POST['ext'] : '';
?>
<?php 
    $result = file_get_contents(API_URL."?username=".USERNAME."&apikey=".API_KEY."&cmd=check_whois&domain=".$domain.".".$ext);
	$res['status']=$result;
	echo json_encode($res);
?>