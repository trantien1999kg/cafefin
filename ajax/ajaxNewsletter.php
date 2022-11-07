<?php
    require_once 'ajaxConfig.php';
    if($func->isAjax()){
        @$fullname = htmlspecialchars($_POST['fullname']);
        @$email = htmlspecialchars($_POST['email']);
        @$phone = htmlspecialchars($_POST['phone']);
        @$address = htmlspecialchars($_POST['address']);
        @$services = htmlspecialchars($_POST['services']);
        @$content = htmlspecialchars($_POST['content']);
        $checkEmail=$db->rawQuery("select id from #_booking where email=? and type=? limit 0,1",array($email,'dat-lich'));
        if(count($checkEmail)>0){
            $response['status']=201;
            $response['error']='error';
            $response['message']='Email của bạn đã có trong hệ thống!';
        }else{
            $data['ten_vi']=$fullname;
            $data['email']=$email;
            $data['dienthoai']=$phone;
            $data['diachi']=$address;
            $data['id_dichvu']=$services;
            $data['noidung']=$content;
            $data['type']='dat-lich';
            $data['ngaytao']=time();
            $data['hienthi']=1;
            $insert=$db->insert('booking',$data);
            if($insert){
                $response['status']=200;
                $response['error']='success';
                $response['message']='Thêm dữ liệu thành công';
            }else{
                $response['status']=201;
                $response['error']='error';
                $response['message']='Thêm dữ liệu không thành công';
            }
        }
        echo json_encode($response);
    }
?>