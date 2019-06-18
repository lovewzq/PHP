//自动提交方法，第一次上传时自动点击submit
$("input").change(function(){
    $("form").submit();
})


function preview(filename){
    //不刷新，让图片返回（预览功能）
    $("img").attr('src',"images/"+filename);
    //清空target，不再进入iframe
    $("form").attr("target","");
    //第一次提交完成时，添加一个隐藏字段，用于判断是不是二次提交
    $("form").append("<input type='hidden' name='filename' value='"+filename+"'>");
}