<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>句子娘</title>

    <!-- Bootstrap -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>user_guide/_static/images/float.png">
    <link href="<?php echo base_url();?>user_guide/_static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_guide/_static/bootstrap/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_guide/_static/bootstrap/common.css">

  </head>
  <body>
        
    <script src="<?php echo base_url();?>user_guide/_static/jQuery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>user_guide/_static/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>user_guide/_static/jQuery/paging.js"></script>
    
    <script type="text/javascript"> 
      jQuery(document).ready(function() { 
      var topmenu = jQuery(".nav-container"); 
      var topmenu_top = topmenu.offset().top; 
      reset_topmenu_top(topmenu, topmenu_top); 
      jQuery(window).scroll(function() { 
        reset_topmenu_top(topmenu, topmenu_top); 
      });
          var list = document.getElementsByClassName("myitem");
          for(var i = 8;i<list.length;i++){
           list[i].style.display = "none";
           
          }
          var num = list.length;
          var page = parseInt(num/8+(num%8==0?0:1));
        $("#page").paging({
            totalPage:page,
            totalSize: num,
            callback:function (num) {
                for(var i=0;i<list.length;i++){
                    list[i].style.display = "none";
                }
                 for(var i=0;i<8;i++){
                     
                     $("#leftList #"+list[i+(num-1)*8].id).fadeIn(800);
                }
               
            }
        });


          function reset_topmenu_top(topmenu, topmenu_top) {
              var document_scroll_top = jQuery(document).scrollTop();
              if (document_scroll_top > topmenu_top) {
                  topmenu.css('top', document_scroll_top);
              }
              if (document_scroll_top <= topmenu_top) {
                  topmenu.css('top', topmenu_top);
              }

          }
      });

    
    </script>
<div class="nav-container">
    <nav>
      <ul>
        <li> <img id="logo" src="<?php echo base_url();?>user_guide/_static/images/logo.png"></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/index" class="<?php echo $page=="index"? "current":"";  ?>">主页</a></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/famous"  class="<?php echo $page=="famous"? "current":"";  ?>">名人名句</a></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/movie"  class="<?php echo $page=="movie"? "current":"";  ?>">影视美句</a></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/origin"  class="<?php echo $page=="origin"? "current":"";  ?>">原创佳句</a></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/literature"  class="<?php echo $page=="literature"? "current":"";  ?>">文学作品</a></li>
        <li><a href="<?php echo base_url();?>index.php/Controller/ancient"  class="<?php echo $page=="ancient"? "current":"";  ?>">古句欣赏</a></li>
      </ul>
      <div class="nav-left"></div>
      <div class="nav-right"></div>
      <div class="nav-above"></div>
    </nav>
  </div>
  <!-- 主体 -->
  <div class="middle">
      <img src="<?php echo base_url();?>user_guide/_static/images/float.png" class="navbar-fixed-bottom" id="floatpic">
      <div class="container">
          <!-- 左侧列表 -->
          <div class="col-md-8 content">         
              <ul id="leftList">
                  <?php $i=0; foreach ($result as $value){?>
                <li class="myitem" id="item<?php echo $i++;?>">
                    <a href="<?php echo base_url();?>index.php/Controller/single?id=<?php echo $value->id;?>" target = "_blank">
                        <p style="text-align: left;"><?php echo $value->family;?></p>
                        <p style="display: block; margin-top: -10px;text-indent: 20px;width: 100%;height: 30px;overflow: visible"><?php echo $value->context;?></p>
                        <p style="margin-top: 10px; text-align: right;">——<?php echo " ".$value->writer." ".($value->book==NULL?"":"《".$value->book."》");?></p>
                       
                    </a></li>
                <?php }?>
                  <!--                <li>Let life be beautiful like summer flowers and death like autumn leaves.</li>-->
<!--                <li>每个人都有属于自己的一片森林，也许我们 从来不曾去过，但它一直在那里，总会在那里。迷失的人迷失了，相逢的人会再相逢。</li>-->
<!--                <li>今晚月色真美。</li>-->
<!--                <li>婚姻是一座围城，城外的人想进去，城里的人想出来。</li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--                <li></li>-->
<!--                <li></li>-->
              </ul>
              <div value="1 0"></div>
              <div id="page"  class="page_div">
              </div>
          </div>
          <!-- 左侧列表结束 --> 

          <div class="col-md-4">
              <ul id="rightList">
                <li class="card">
                    <a href="<?php echo base_url();?>index.php/Controller/single?id=<?php echo $data[0]->id;?>" target = "_blank">
                  <img src="<?php echo base_url();?>user_guide/_static/picture/<?php echo $data[0]->img;?>">
                    <p><?php echo $data[0]->context;?><br><?php for($i=0;$i<28;$i++){echo "&nbsp;";}?>——<?php echo " ".$data[0]->writer." ".($data[0]->book==NULL?"":"《".$data[0]->book."》");?></p>
                    </a>
                </li>
                <li class="card">
                    <a href="<?php echo base_url();?>index.php/Controller/single?id=<?php echo $data[1]->id;?>" target = "_blank">
                  <img src="<?php echo base_url();?>user_guide/_static/picture/<?php echo $data[1]->img;?>">
                  <p><?php echo $data[1]->context;?><br><?php for($i=0;$i<28;$i++){echo "&nbsp;";}?>——<?php echo " ".$data[1]->writer." ".($data[1]->book==NULL?"":"《".$data[1]->book."》");?></p>
                    </a>
                </li>
              </ul>

          </div>
      </div>
  </div>
  <!-- 主体结束 -->

  <!-- footer -->
  <div class="bottom">
      <div class="container">
          <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-heart"></span> 这些</h3>
              <p>之所以留着</p>
          </div>
          <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-star"></span> 没有</h3>
              <p>那是因为</p>
          </div>
          <div class="col-md-4">
              <h3><span class="glyphicon glyphicon-music"></span>用处</h3>
              <p>万一有用呢</p>
          </div>
      </div>
  </div>
  <!-- footer结束 -->
  </body>
</html>