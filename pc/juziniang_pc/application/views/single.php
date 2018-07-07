<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>句子娘</title>

    <!-- Bootstrap -->
     <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>user_guide/_static/images/float.png">
    <link href="<?php echo base_url();?>user_guide/_static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_guide/_static/bootstrap/single.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_guide/_static/bootstrap/common.css">
    
  </head>
  <body>
        
        <script src="<?php echo base_url();?>user_guide/_static/jQuery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>user_guide/_static/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
      jQuery(document).ready(function() { 
      var topmenu = jQuery(".nav-container"); 
      var topmenu_top = topmenu.offset().top; 
      reset_topmenu_top(topmenu, topmenu_top); 
      jQuery(window).scroll(function() { 
        reset_topmenu_top(topmenu, topmenu_top); 
      }); 
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
    </script>


<div class="nav-container">
    <nav>
      <ul>
        <li> <img id="logo" src="<?php echo base_url();?>user_guide/_static/images/logo.png"></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/index" >主页</a></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/famous">名人名句</a></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/movie">影视美句</a></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/origin">原创佳句</a></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/literature">文学作品</a></li>
          <li><a href="<?php echo base_url();?>index.php/Controller/ancient">古句欣赏</a></li>

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
              <div id="leftCard" >
               <div id="pane">
                    
                        <p class="context"><?php echo $result->context;?></p>
                        <p class="writer">
                            ——<?php echo " ".$result->writer." ".($result->book==NULL?"":"《".$result->book."》");?>
                    
                </div>
                <div class="col-md-4 content" class="btn">
                  <button type="button" class="btn btn-success">
                    <ul>
                      <li><img src="<?php echo base_url();?>user_guide/_static/images/like.png"></li>
                      <li><pane>好棒</pane></li>
                    </ul>
                  </button>
                </div>
                <div class="col-md-4 content" class="btn">
                  <button type="button" class="btn btn-warning">
                    <ul>
                      <li><img src="<?php echo base_url();?>user_guide/_static/images/dislike.png"></li>
                      <li><pane>废物</pane></li>
                    </ul>
                  </button>
                </div>
                <div class="col-md-4 content" class="btn">
                  <button type="button" class="btn btn-info">
                    <ul>
                      <li><img src="<?php echo base_url();?>user_guide/_static/images/favorite.png"></li>
                      <li><pane>带走</pane></li>
                    </ul>
                  </button>
                </div>
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