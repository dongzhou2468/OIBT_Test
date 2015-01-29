/**
 * Created by hangche1 on 12/16/2014.
 */

//window.onload = function(){
//    //var login = document.getElementById("loginBtn");
//    //login.addEventListener("click", function(e){
//    //    checkLogin();
//    //});
//    document.getElementById("loginEmail").onfocus(function(){     //取消错误提示
//        removeErrorTips("login");
//    });
//
//    window.onkeydown =function(e){
//        e = window.event || e;
//        if(e.keyCode == 13){
//            checkLogin();
//        }
//    }
//}

function checkLogin(){
    var email = document.getElementById("loginEmail").value;
    var passwd = document.getElementById("loginPasswd").value;

    var checkEmailRes = checkMail(email);
    var checkPasswdRes = checkPasswd(passwd);

    if(checkEmailRes == -1){
        errorTips("login", "请填写你的登录邮箱");
        return false;
    }else if(checkEmailRes == 0){
        errorTips("login","邮箱格式错误");
        return false;
    }else if(checkPasswdRes == -1){
        errorTips("login","请填写6-20位登录密码");
        return false;
    }else if(checkPasswdRes == 0){
        errorTips("login","密码格式错误");
        return false;
    }else if(checkEmailRes == 1 && checkPasswdRes == 1) {
    //    addMask();
    //    $("#loginLoading").css("visibility", "visible");

        return login(email,passwd);
    }
}

//ajax login authentication
function login(email, loginPasswd){
    var panduan = false;

    var passwd = hex_md5(loginPasswd);

    var xmlhttp;

    if(window.XMLHttpRequest){
        //IE7+, chrome..
        xmlhttp = new XMLHttpRequest();
    }else{
        //IE5, IE6
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            if(xmlhttp.responseText == ""){                        //登录验证成功
                panduan = true;
            }else{
                errorTips("login", xmlhttp.responseText);
            }
        }
    }
    xmlhttp.open("POST", "admin.php?controller=admin&method=loginCheck", false);     //非异步，最好加个loading提示
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("useremail=" + email + "&password=" + passwd);

    return panduan;
}

function checkMail(str) {
    //-1: empty
    //0 : not a email
    //1 : success

    if(str == ""){
        return -1;
    }
    var patterns = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9\.\-]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    if(patterns.test(str))
        return 1;
    else
        return 0;
}

function checkPasswd(str){
    //-1 : length is not valid
    //0  : not a right password
    //1  : success
    //check the length is valid
    var len = str.length;
    if(!(len<=20 && len>=6))
        return -1;
    //no chinese
    var re=/[\u0391-\uFFE5]+/g;
    if (str.match(re)!=null)
        return 0;
    return 1;
}

function errorTips(type,tips){
    document.getElementById(type+"ErrorTips").innerHTML = tips;
}

function removeErrorTips(type){
    document.getElementById(type+"ErrorTips").innerHTML = "";
}

//scrow-to-top
jQuery(function($){
    $("#loginEmail, #loginPasswd").focus(function () {
        removeErrorTips("login");                ////取消错误提示
    });
    $('#scrolltop').click(function(){
        $("html,body").animate({scrollTop:0},'slow');
    });
    $(window).scroll(function(){
        if ($(document).scrollTop() > 10) $('#scrolltop').show();
        else $('#scrolltop').hide();
        if ($(document).scrollTop() >= 314) {
            if ($('#fix').length == 0) {
                var left = $('.small').offset().left;
                var clone = $('.small').clone().attr('id','fix').css({'position':'fixed','top':'0px','left':left+'px'});
                $('.small').css('visibility','hidden');
                clone.insertAfter('.small');
            }
        } else {
            $('#fix').remove();
            $('.small').css('visibility','visible');
        }
    });
    var height = $('.small').outerHeight() > $('.big').outerHeight() ? $('.small').outerHeight() : $('.big').outerHeight();
    $('.mid').height(height+126);
});