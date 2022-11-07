<?php
    require_once 'ajaxConfig.php';
    @$phone = htmlspecialchars($_POST['phone']);
    $checkPhone=$db->rawQueryOne("select id from #_booking where dienthoai=? and type=? limit 0,1",array($email,'client'));
    if($checkPhone){
        $response['status']=400;
        $response['message']=_sodienthoaitontaitronghethong;
    }else{
        $data['dienthoai']=$phone;
        $data['type']='goi-lai';
        $data['ngaytao']=time();
        $data['hienthi']=1;
        $insert=$db->insert('booking',$data);
        if($insert){
            $response['status']=200;
            $response['message']=_guithongtinthanhcong;
        }else{
            $response['status']=201;
            $response['message']=_guithongtinthatbai;
        }
    }
    
    echo json_encode($response);
?>