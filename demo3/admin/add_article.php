<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- BootStrap的css -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 5.x图标库（检查主题以更改此内容） -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Krajee Markdown编辑器主库默认样式 -->
    <link rel="stylesheet" href="mark/css/markdown-editor.css"/>
    <!-- -突出显示代码样式插件提供的JS样式 -->
    <link rel="stylesheet" href="mark/plugins/highlight/highlight.min.css"/>


</head>
<body>


<!--<textarea id="editor" class="markdown" rows="15"   data-language ="zh" data-theme="fa4" data-bs-version="3">a</textarea>-->

<div class="container">
    <form action="add.php" method="post">
    <div class="row">
        <div class="panel">
            <h1>修 改 文 章 <small><em> 此处可对您的文章进行修改发布</em></small></h1>
            <h3><input type="text" placeholder="请输入您的标题～" name="title" class="form-control"></h3>
            <textarea id="editor" rows="15" name="content"></textarea>
        </div>
    </div>
</div>


<!--Markdown-->
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-2">
            <input type="submit" class="btn btn-block btn-primary" value=" 提交">
        </div>
        <div class="col-sm-2">
            <button type="reset" class="btn btn-block btn-default"><i class="fa fa-ban"></i> 重置</button>
        </div>
        <div class="col-sm-4"></div>
    </div>
    </form>
</div>


<!-- jQuery JS Library -->
<script src="../bootstrap/js/jquery.js"></script>

<!-- -如果您需要净化HTML输出，请包含DOM purify插件（只有在markdown-it HTML输入时才需要）被允许）。必须在markdown-editor.js之前加载。 -->
<script src="mark/plugins/purify/purify.min.js"></script>
<!-- Markdown IT主库 -->
<script src="mark/plugins/markdown-it/markdown-it.min.js"></script>
<!-- 降价IT定义列表插件 -->
<script src="mark/plugins/markdown-it/markdown-it-deflist.min.js"></script>
<!-- Markdown IT Footnote插件 -->
<script src="mark/plugins/markdown-it/markdown-it-footnote.min.js"></script>
<!-- Markdown IT缩写插件 -->
<script src="mark/plugins/markdown-it/markdown-it-abbr.min.js"></script>
<!-- Markdown IT下标插件 -->
<script src="mark/plugins/markdown-it/markdown-it-sub.min.js"></script>
<!-- Markdown IT上标插件 -->
<script src="mark/plugins/markdown-it/markdown-it-sup.min.js"></script>
<!-- Markdown IT下划线/插入文本插件 -->
<script src="mark/plugins/markdown-it/markdown-it-ins.min.js"></script>
<!-- Markdown IT Mark Plugin -->
<script src="mark/plugins/markdown-it/markdown-it-mark.min.js"></script>
<!-- Markdown IT SmartArrows插件 -->
<script src="mark/plugins/markdown-it/markdown-it-smartarrows.min.js"></script>
<!-- 降价IT复选框插件 -->
<script src="mark/plugins/markdown-it/markdown-it-checkbox.min.js"></script>
<!-- Markdown IT East Asian Characters Line Break Plugin -->
<script src="mark/plugins/markdown-it/markdown-it-cjk-breaks.min.js"></script>
<!-- Markdown IT Emoji插件 -->
<script src="mark/plugins/markdown-it/markdown-it-emoji.min.js"></script>
<!--   Twitter Emojis插件（如果你需要twitter emojis） -->
<script src="http://twemoji.maxcdn.com/2/twemoji.min.js?11.0"></script>
<!-- 突出显示代码样式的JS主插件库 -->
<script src="mark/plugins/highlight/highlight.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="mark/js/markdown-editor.js"></script>
<!-- 如果需要，可以选择包含theme.js脚本或theme.css用于不同的主题 -->
<script src="mark/themes/fa4/theme.js"></script>
<!-- 如果需要，可以选择包含您语言的本地化脚本 -->
<script src="mark/js/locales/zh.js"></script>
<script>

    $(function () {
        var options = {
            language: "zh",                //语言格式
            theme: "fa4",                   //主题 默认fa5
            bsVersion: "3",                // default (uses bs4 version)
            defaultMode: 'editor',         //默认编辑模式
            enableUndoRedo: true,          //启用撤销
            enableSplitMode: true,         //启用分离模式
            enableLivePreview: undefined,  //启用动态预览
            enableScrollSync: true,        //启用同步滚动
            startFullScreen: false,        //开启全屏幕
            enableEmojies: true,           //启用表情
            useTwemoji: true,              //用Twitter家表情
            purifyHtml: true,              //启用净化html requires purify.js plugin
            showAlerts: false,              //显示弹出框
            exportUrl: "",                 //导出url 默认为''插件在内部呈现导出表单以将其提交到exportUrl服务器操作以处理导出内容以供下载。
            exportUrlMethod: 'post',       //方法
            //  exportUrlAddlData: $h.EMPTY,   //导出url附加数据
            //  today: $h.EMPTY,               //今天 默认''
            alertFadeDuration: 2000,       //弹出淡入时间
            outputParseTimeout: 1800000,   //解析输出超时时间
            alertMsgCss: 'alert alert-danger',
            defaultButtonCss: 'btn btn-default btn-outline-secondary',
            defaultButtonGroupCss: 'btn-group md-btn-group',
            previewModeButtons: ['hint', 'fullscreen', 'mode', 'export'],
            buttonCss: {},
            buttonGroupCss: {},
            buttonAccessKeys: {},
            dropdownCss: {},
            icons: {},

        };
        var mm = $("#editor").markdownEditor(options);
        $.fn.markdownEditor.h.CREDITS = '<a class="text-info" href="http://www.baidu.com">百度一下，生活愉快</a>';
        $.fn.markdownEditor.h.CREDITS_MD = '[鱼说](http://www.baidu.com)';
        console.log($.fn.markdownEditor.h.CREDITS)
    });

    // $(".btn-primary").click(function () {
    //     alert($("#editor").val())
    // })

</script>
</body>
</html>
