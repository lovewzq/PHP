<?php
include 'config.php';
$con = mysqli_connect(HOST, USER, PASS,DBNAME);
$sql = "select * from artical";
$res = mysqli_query($con,$sql);
$num = count($res);

?>


        <div class="artical_content">
            <div class="left_part1">
                <div class="left_part1_content">
                    <div class="p1">发布于 </div>
                    <div class="clear"></div>
                    <div class="p2"><h2></h2></div>
                    <div class="clear"></div>
                    <div class="p3"><h5>13 热度 [渗透测试]SQL注入已关闭评论</h5></div>
                    <div class="clear"></div>
                    <div class="p4">SQL注入记录 实验环境： 墨者学院 手工注入方式： 总体思路： 判断注入点： 网址会带入参数查询 ...</div>
                    <div class="clear"></div>
                    <div class="p5"></div>
                </div>
            </div>
            <div class="left_part2">
                <a href="artical.html">
                    <img src="images/2.png">
                </a>
            </div>
        </div>
        <div class="blank"></div>
        <div class="clear"></div>
        <div class="artical_content">

            <div class="right_par1">
                <div class="right_par2_content">
                    <div class="p1">发布于 2019-03-23</div>
                    <div class="clear"></div>
                    <div class="p2"><h2>[渗透测试]SQL注入</h2></div>
                    <div class="clear"></div>
                    <div class="p3"><h5>13 热度 [渗透测试]SQL注入已关闭评论</h5></div>
                    <div class="clear"></div>
                    <div class="p4">SQL注入记录 实验环境： 墨者学院 手工注入方式： 总体思路： 判断注入点： 网址会带入参数查询 ...</div>
                    <div class="clear"></div>
                    <div class="p5"></div>
                </div>
            </div>
            <div class="right_par2">
                <a href="artical.html">
                    <img src="images/2.png">
                </a>
            </div>
        </div>

    </div>
</div>
<div class="clear"></div>
<div class="blank"></div>
<div class="blank"></div>
<hr>
