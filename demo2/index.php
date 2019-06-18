<?php
require_once 'config.php';
require_once 'Parsedown.php';
require_once 'header.php';
$page = $_GET['page'];
if(!isset($page)){
    $page = 1;
}
$end_page = $page*4;
$start_page = $end_page-4;

$con = mysqli_connect(HOST, USER, PASS,DBNAME);

$sql = "select * from article order by aid desc limit ".$start_page.",".$end_page ;
$res = mysqli_query($con,$sql);

$sql1 = "select * from article";
$res1 = mysqli_query($con,$sql1);
$num = mysqli_num_rows($res1);

if(($num%5==0)) {
    $N = $num/5;
}else{
    if($num%5<5){
        $N = $num/5+1;
    }
}
while ($row = mysqli_fetch_array($res)){
      echo '<div class="artical_content">';
      echo '     <div class="left_part1">';
          echo '      <div class="left_part1_content">' ;
        echo '             <div class="p1"><span class="icon">&#xf017</span>&nbsp;&nbsp;发布于&nbsp;'.$row[date].'</div>';
        echo '            <div class="clear"></div>' ;
        echo '            <div class="p2"><h2>'.$row[atitle].'</h2></div>' ;
         echo '          <div class="clear"></div>'  ;
         echo '           <div class="p3"><span class="icon">&#xf06e</span>&nbsp;'.$row[ahots].'&nbsp;热度';
         echo '&nbsp;&nbsp;<strong>['.$row[atag].']</strong>&nbsp;&nbsp;&nbsp;<span class="icon">&#xf07c</span>&nbsp;'.$row[aclass].'</div>';
         echo '            <div class="clear"></div>';
         echo '            <div class="p4">';
         echo '<p> </p>';
                            echo str_replace('#','',substr($row[content],0,90));
         echo '</div>';
         echo '            <div class="clear"></div>';
         echo '           <div class="p5"></div>';
          echo '       </div>';
          echo '   </div>';
          echo '   <div class="left_part2">';
          echo '       <a target="_blank" href="artical.php?id='.$row[aid].'" >';
          echo '          <img src="update/'.$row[images].'">';
          echo '       </a>';
          echo '  </div>';
       echo '  </div>';
       echo     '<div class="blank"></div>';
       echo  '<div class="clear"></div>';
}
?>

                <ul class="pagination" style="position: absolute;right: 110px">

                    <li><a href="<?php
                        if($N>2){
                            echo "index.php?page=".($page-1);
                        }
                        ?>">«</a></li>
                    <?php
                    for($i=1;$i<=$N;$i++){
                        if($i==$page){
                            echo '<li><a class="active" href="index.php?page='.$page.'">'.$page.'</a></li>';
                        }else{
                            echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                        }
                    }
                    ?>
                    <li><a href="<?php
                        if($N>2&&$page<$N){
                            echo "index.php?page=".($page+1);
                        }
                        ?>">»</a></li>
                </ul>

<?php
require_once 'footer.php';
?>