/**
 * Created by Administrator on 2017/3/6 0006.
 */

function dopost(url,param) {
    $.post(url,param,function (data) {
        return data;
    })
}


function ly(msg,code,url) {
    layer.msg(msg,{time:1000},function () {
        if(code){
            return false;
        }else{
            window.location.href=url;
        }
    })
}