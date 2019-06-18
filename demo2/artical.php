<?php
require_once 'sql.php';
header("content-type:text/html;charset=utf-8");
$ID = $_GET['id'];

$sql = "select * from article where aid='$ID'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
$web_title = $row[atitle];
$web_pic = $row[images];
$I = $row['ahots']+1;
$sql1 = "update article set ahots='$I' where aid='$ID'";
mysqli_query($con,$sql1);
require_once 'header.php';
?>


    <!--引入样式文件-->
    <link rel="stylesheet" href="admin/editormd/examples/css/style.css" />
    <link rel="stylesheet" href="admin/editormd/css/editormd.preview.css" />

    <!--引入js文件-->
    <script src="admin/editormd/examples/js/jquery.min.js"></script>
    <script src="admin/editormd/lib/marked.min.js"></script>
    <script src="admin/editormd/lib/prettify.min.js"></script>
    <script src="admin/editormd/lib/raphael.min.js"></script>
    <script src="admin/editormd/lib/underscore.min.js"></script>
    <script src="admin/editormd/lib/sequence-diagram.min.js"></script>
    <script src="admin/editormd/lib/flowchart.min.js"></script>
    <script src="admin/editormd/lib/jquery.flowchart.min.js"></script>
    <script src="admin/editormd/editormd.js"></script>

<body onload="mdToHml()">
<div id="testEditorMdview" style="">
    <textarea id="appendTest" style="display:none;"></textarea>
</div>
<div class="content_main">
    <textarea id="demo1" style="display: none;"><?php echo $row[content];?></textarea>
</div>
<!--js开始-->
<script type="text/javascript">

    //markDown转HTMl的方法
    function mdToHml(){

        //先对容器初始化，在需要展示的容器中创建textarea隐藏标签，
        $("#testEditorMdview").html('<textarea id="appendTest" style="display:none;"></textarea>');
        var content=$("#demo1").val();//获取需要转换的内容
        $("#appendTest").val(content);//将需要转换的内容加到转换后展示容器的textarea隐藏标签中

        //转换开始,第一个参数是上面的div的id
        editormd.markdownToHTML("testEditorMdview", {
            htmlDecode: "style,script,iframe,button", //可以过滤标签解码
            emoji: true,
            taskList:true,
            tex: true,               // 默认不解析
            flowChart:true,         // 默认不解析
            sequenceDiagram:true,  // 默认不解析
        });
    }
</script>
<!--js结束-->
<?php require_once 'footer.php';?>