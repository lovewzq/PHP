

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加</title>
    <link href="css/tag.css" rel="stylesheet" type="text/css">

</head>

<body class="login">

<div class="login_m">
    <div class="login_logo"><img src="images/logo.png" width="196" height="46"></div>
    <div class="login_boder">
        <?php
        if($T=='add'){
            echo '<form action="deal/add_tags.php?id='.$ID.'&&type='.$type.'" method="post">';
        }
        if($T=='rw'){
            echo '<form action="deal/rw_tags.php?id='.$ID.'&&type='.$type.'" method="post">';
        }
        ?>

            <div class="login_padding">
                <h2>名称</h2>
                <label>
                    <input type="text" name="name" id="name" value="<?php echo $name;?>" class="txt_input txt_input2" required>
                </label>
                <div class="type_hid">
                    <h2>别名</h2>
                    <label>
                        <input type="text" name="rename" id="rename" value="<?php echo $rename;?>" class="txt_input txt_input2" required>
                    </label>
                    <h2>父级</h2>
                    <label>
                        <input type="text" name="fa_name" id="fa_name" value="<?php echo $fa_name;?>" class="txt_input txt_input2" >
                    </label>
                </div>
                <h2>日期</h2>
                <label>
                    <input type="date" name="date" id="date" value="<?php echo $date;?>" class="txt_input txt_input2" required>
                </label>
                <div class="rem_sub">
                    <label>
                        <input type="submit" class="sub_button" name="button" id="button" value="修改" style="opacity: 0.7;">
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
<br />
<br />
</body>
</html>