<script type="text/javascript">
function update(id) {
    if (id > 0) {
        var sl = $('#product' + id).val();
        if (sl > 0) {
            $('#ajaxloader' + id).css('display', 'block');
            jQuery.ajax({
                type: 'POST',
                url: "ajax.php?do=cart&act=update",
                data: {
                    'id': id,
                    'sl': sl
                },
                success: function(data) {
                    $('#ajaxloader' + id).css('display', 'none');
                    var getData = $.parseJSON(data);
                    $('#id_price' + id).html(addCommas(getData.thanhtien) + '&nbsp;VNĐ');
                    $('#sum_price').html(addCommas(getData.tongtien) + '&nbsp;VNĐ');
                }
            });
        } else alert('Số lượng phải lớn hơn 0');
    }
}

function del(id) {
    if (id > 0) {
        jQuery.ajax({
            type: 'POST',
            url: "ajax.php?do=cart&act=delete",
            data: {
                'id': id
            },
            success: function(data) {
                var getData = $.parseJSON(data);
                $('#productct' + id).css('display', 'none');
                $('#sum_price').html(addCommas(getData.tongtien) + '&nbsp;VNĐ');
            }
        });
    }
}
</script>
<div class="control_frm">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
            <li><a href="index.php?com=order&act=mam"><span>Đặt phòng</span></a></li>
            <li class="current"><a href="#" onclick="return false;">Xem và phòngn</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<form name="supplier" class="form"
    action="index.php?com=bookroom&act=save<?php if($_REQUEST['id']!='') echo'&id='. $_REQUEST['id'];?>" method="post"
    enctype="multipart/form-data">
    <div class="oneOne">
        <div class="widget mtop0">

            <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
                <h6>Thông tin đặt phòng <?=@$item['room_code']?></h6>
            </div>
            <div class="oneOne mtop10">
                <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
                    <h6>THÔNG TIN ĐẶT PHÒNG</h6>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_hoten?>: <span
                            style="color: #999;"><?=@$item['fullname']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_dienthoai?>: <span
                            style="color: #999;"><?=@$item['phone']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_email?>: <span
                            style="color: #999;"><?=@$item['email']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_matkhauphong?>: <span
                            style="color: #999;"><?=@$item['password_room']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_ngayden?>: <span
                            style="color: #999;"><?=date('d/m/Y',@$item['arrival_date'])?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_ngaydi?>: <span
                            style="color: #999;"><?=date('d/m/Y',@$item['department_date'])?></span></label>
                    <div class="clear"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="oneOne">

        <div class="widget mtop0">

            <div class="oneOne mtop10">
                <div class="title"><img src="./images/icons/dark/list.png" alt="" class="titleIcon" />
                    <h6>THÔNG TIN THANH TOÁN</h6>
                </div>

                <?php 
                
                    $typeCard = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=?",array('loai-the',$item['type_card']));
                
                
                ?>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_loaithe?>: <span
                            style="color: #999;"><?=$typeCard["ten"]?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_sothe?>: <span
                            style="color: #999;"><?=@$item['card_code']?></span></label>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label style="white-space: initial;"><?=_thoigianhethan?>: <span
                            style="color: #999;"><?=@$item['expiration_month']?>/<?=@$item['expiration_year']?></span></label>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="oneOne">
        <div class="widget mtop0">
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
                <thead>
                    <tr>
                        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;"><?=_stt?></a></td>

                        <?php 
                        
                            $listName = $db->rawQueryOne("select ten_$lang as ten from #_baiviet_list where hienthi=1 and type=? and id=?",array('dat-phong',$item["id_list_room"]));

                            $roomName = $db->rawQueryOne("select ten_$lang as ten from #_baiviet where hienthi=1 and type=? and id=?",array('dat-phong',$item["id_room"]));
                        
                        ?>


                        <td align="center" class="sortCol">
                            <div>Loại phòng<span></span></div>
                        </td>
                        <td align="center" class="sortCol">
                            <div>Tên phòng<span></span></div>
                        </td>
                        <td width="150" align="center" style="text-align: center !important;">Giá phòng</td>
                        <td width="150" align="center" style="text-align: center !important;"><?=_soluongnguoi?></td>
                        <td width="150" align="center" style="text-align: center !important;">Chi phí ước tính</td>
                        <td class="tb_data_small none"><?=_thaotac?></td>
                    </tr>
                </thead>
                <tbody>
                    <tr id="productct<?=$cartOrder[$i]['id']?>">
                        <td><?=$i+1?></td>
                        <td align="center"><?=$listName["ten"]?></td>
                        <td align="center"><?=$roomName["ten"]?></td>
                        <td align="center"><?=$func->changeMoney($item["price_room"],$lang)?> đ</td>  
                        <td align="center"><?=$item["people"]?></td>  
                        <td align="center" id="id_price<?=$cartOrder[$i]['id']?>">
                            <?=$func->changeMoney($item["price_room"],$lang)?> đ</td>
                        <td class="actBtns none"><a class="smallButton tipS" original-title="Xóa sản phẩm"
                                href="javascript:del(<?=$cartOrder[$i]['id']?>)"><img
                                    src="./images/icons/dark/close.png" alt=""></a></td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <div class="pagination">Tổng tiền</div>
                        </td>
                        <td align="center">
                            <div class="pagination" style="color:#f00">
                                <b><?=$func->changeMoney($item["price_room"],$lang)?> đ<b>
                            </div>
                        </td>

                    </tr>
                </tbody>
        </table>
    </div>
</div>
    <div class="oneOne">
        <div class="widget mtop0">
            <div class="formRow">
                <label><?=_tinhtrang?></label>
                <div class="formRight">
                    <div class="selector">
                        
                        <?php

                            $tinhtrang = $db->rawQuery("SELECT * from #_tinhtrang");

                        ?>
                        <select name="data[room_status]" class="main-select" id="room_status">

                            <?php foreach($tinhtrang as $key => $value){?>

                                <option value="<?=$value['id']?>" <?php if($item['room_status']==$value['id']) echo 'selected';?>><?=$value['trangthai_'.$lang]?></option>

                            <?php }?>

                        </select>


                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="formRow">

                <label>Ghi chú</label>

                <div class="formRight">

                    <textarea name="data[content]" rows="5"><?=$item['content']?></textarea>

                </div>

            </div>

        </div>

    </div>

    <div class="formRow fixedBottom">
        <div class="formRight">
            <div class="box-admin" style="display:flex; align-items:center;justify-content:flex-end">
                <div class="box-action">
                    <button type="submit" class="btn btn-sm bg-gradient-primary text-white submit-check">
                        <i class="far fa-save mr-2"></i>Lưu
                    </button>
                    <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm
                        lại</button>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
</form>