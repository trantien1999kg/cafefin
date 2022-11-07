<?php  if(!defined('_source')) die("Error");

    $id = isset($_GET["id"]) ? $_GET["id"] : '';

    $roomDetail = $db->rawQueryOne('select id,id_list,songuoi,mucgia,buaan from #_baiviet where hienthi=1 and type=? and id=?',array('dat-phong',$id));

    if($roomDetail){

        $listName = $db->rawQueryOne("select id,ten_$lang as ten from #_baiviet_list where hienthi=1 and type=? and id=?",array('dat-phong',$roomDetail["id_list"]));
        
    }

    $src=isset($_REQUEST['src']) ? addslashes($_REQUEST['src']) : '';

    if($src=="bookroom-handle"){

        $data = $_POST['data'];

        $capchacode = htmlspecialchars($_POST["capcha_bookroom"]);

        if($data){

            foreach($data as $key => $value){

                $_SESSION["saveForm"][$key] = $value;
            }

        }

        

        if($capchacode == $_SESSION['captcha_code']){
        
        $bookroom_n = $func->randString(7);
        
        $bookroom_code = 'ND'.$bookroom_n; 

        if($data){
            foreach ($data as $k => $v) {
                if(!empty($data[$k])){
                    $send[$k] = htmlspecialchars($v);
                }
            }
        }

        $schedule = explode(' - ',$data["arrival_date"]);

        $ngayden = strtotime($schedule[0]);

        $ngaydi = strtotime($schedule[1]);

        $send["arrival_date"] = $ngayden;

        $send["department_date"] = $ngaydi;

        $send['room_code'] = $bookroom_code;

        $send['room_status'] = 1;

        $send['ngaytao'] = time();

        $send['type'] = 'bookroom';

        $id_insert = $db->insert('bookroom', $send);

        if($id_insert){

            unset($_SESSION['saveForm']);

            $func->transfer('Thông báo!, Đặt phòng thành công!!!.', $https_config.$lang.'/');

        }

        }else{

            $func->transfer('Thông báo!, Mã bảo mật không đúng!!!.', $https_config.$lang.'/booking?id='.$data["id_room"]);

        }
    }

?>