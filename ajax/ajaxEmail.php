<?php
    require_once 'ajaxConfig.php';
    @$email = htmlspecialchars($_POST['email']);
    $checkEmail=$db->rawQueryOne("select id from #_booking where email=? and type=? limit 0,1",array($email,'client'));
    if($checkEmail>0){
        $response['status']=400;
        $response['message']=_emailtontaitronghethong;
    }else{
        $data['email']=$email;
        $data['type']='client';
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