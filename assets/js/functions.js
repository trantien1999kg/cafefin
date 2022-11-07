function pushState(options,targetTitle,targetUrl) {
    window.history.pushState(options, targetTitle, targetUrl);
}
function goToByScroll(id) {
    $('body,html').animate({ scrollTop: $(id).offset().top - 100 }, 500);
}
function redirect(url){
    window.location.href=url;
}
function exists(el){
    if(el.length>0) return true;
    else return false
}
function slugConvert(slug,focus=false)
{
    slug = slug.toLowerCase();
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    slug = slug.replace(/ /gi, "-");
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    
    if(!focus)
    {
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    }

    return slug;
}
function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setTimeout(function() {
        if (direction == 'left') {
            $(element).animate({
                scrollLeft: "-=" + step
            }, "slow");
            //element.scrollLeft -= step;
        } else {
            $(element).animate({
                scrollLeft: "+=" + step
            }, "slow");
            //element.scrollLeft += step;
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            window.clearInterval(slideTimer);
        }
    }, speed);
}
function onChangeSelect(e,p){

    $.ajax({

        url: _ROOT + 'users.js',

        type: 'POST',

        data: {p: p , src:'load-place'},

        success: function(data){

            $(e).html(data);

        }

    });

}
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}


function copyToClipboardText(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
}
function isBlank(a) {
    if (a.length == 0) {
        return true
    }
    return false
}
function searchEnter(t){
    var k = t.val();

    var url;


    if(!isBlank(k)){

        url = 'keywords='+k;

        window.location.href = _ROOT + comSearch + '?' + encodeURI(url);

    }else{

        t.focus();

    }

}
function loadScrollPage(url,type,width,height,ele){

    var a=!1;

    $(window).scroll(function(){

        $(window).scrollTop()>10 && !a&&($('#'+ele).load('ajax/load_addons.php?url='+url+'&width='+width+'&height='+height+'&type='+type),a=!0)

    });

}
function isEmail(b) {
    
    var a = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    
    return a.test(b)
}
function validatePhone(b){
    
    var a=/((09|03|07|08|05)+([0-9]{8})\b)/g;
    
    return a.test(b);
}
// function onChangeCity(v,a){
//     alert(a);
//     var result = '';
//     if(a == 'city'){
//         result = 'dist';
//     }else{
//         result = 'ward';
//     }
//     $.ajax({

//         url: 'ajax/ajaxLoadPlace.php',

//         type: 'POST',

//         data: {v: v,action:a},

//         success: function(data){
//             $('#'+result).html(data);

//             // if(n==='destroy'){$('#idi').html('<option>Hãng</option>');}

//             $('.nice-select').niceSelect('update');

//         }

//     });

// }
function eventSearch(){

    var phanloai = parseInt($('.pl_active').attr('data-id'));

    var category = parseInt($('#category').val());

    var city= parseInt($('#city').val());

    var dist= parseInt($('#dist').val());

    var ward= parseInt($("#ward").val());

    var dientich = parseInt($('#acreage').val());

    var gia = parseInt($('#price').val());

    var duan = parseInt($('#project').val());

    var huong = parseInt($('#direction').val());

    

    var url='tim-kiem?';


    if(phanloai!=0 && !isNaN(phanloai)){



        url+='phanloaidat='+phanloai+'&';



    }

    if(category!=0 && !isNaN(category)){



        url+='loai='+category+'&';



    }

    if(city!=0 && !isNaN(city)){



        url+='tinh='+city+'&';



    }

    if(dist!=0 && !isNaN(dist)){



        url+='huyen='+dist+'&';



    }

    if(ward!=0 && !isNaN(ward)){



        url+='xa='+ward+'&';



    }

    if(duan!=0 && !isNaN(duan)){



        url+='duan='+duan+'&';



    }

    if(gia!=0 && !isNaN(gia)){



        url+='mucgia='+gia+'&';



    }

    if(dientich!=0 && !isNaN(dientich)){



        url+='dientich='+dientich+'&';



    }

    if(huong!=0 && !isNaN(huong)){

        url+='huong='+huong+'&';

    }



    // if(p1!='' && typeof p1 !== typeof undefined){



    //     url+='s1='+p1+'&';



    // }

    // if(p2!='' && typeof p2 !== typeof undefined){



    //     url+='s2='+p2+'&';



    // }



    redirect(url.substr(0,url.length-1));

}