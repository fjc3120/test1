<!DOCTYPE HTML>
<html>
    <head>
        <title>句子娘</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="<?php echo base_url("css/common.css");?>" rel="stylesheet" />
        <link href="<?php echo base_url("css/essay_common.css");?>" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div id="logo" name="top"><a href="<?php echo site_url("welcome/index"); ?>" onclick="" title="返回" class="moback"></a></div>
            <div id="title">句子娘</div>
            <div style="clear: both"></div>
        </header>
       <div id="float_window">
            <img src="<?php echo base_url("img/float_logo.png");?>"></img>
        </div>
        <div id="node-1013635" class="node sentencetag">
            <div class="senbox">
                <h1 class="sentence" id="xqtitle"><?php echo $sentence['context']; ?></h1>        
                <div class="content clear-block">

                    <div id="sencon" >
                        <div class="senconwriart">
                            <?php 
                                if($sentence['writer'] != null || $sentence['book'] != null)
                                {
                                    if(isset($sentence['writer'])&&$sentence['writer']!=null)
                                    {
                                        echo "——<span href=\"#\" rel=\"tag\" title=\"原作者：";
                                        echo $sentence['writer'];
                                        echo "\" class=\"resource_body\">";
                                        echo $sentence['writer'];
                                        echo "</span>";
                                    }
                                    if(isset($sentence['book']))
                                    {
                                        echo "<span class=\"resource_body\">《";
                                        echo $sentence['book'];
                                        echo "》</span>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>    
                <div class="artandori">
                    <fieldset class="fieldgroup group-ori">
                        <div class="field field-type-content-taxonomy field-field-ori">
                            <div class="field-items">
                                <?php
                                    if($sentence['writer'] == null && $sentence['book'] == null)
                                        echo "<div class=\"field-item odd\">                    原创        </div>";
                                 ?>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <span class="submitted">
                <a href="/u/321869" title="查看用户资料" class="xqusernpop" juuid="321869"><?php echo $sentence['upper']; ?></a> 发布
                <span class="albumtemhi">于 05-31</span>
                
                
                
            </span>   
            <div class="flagandalbumwrap">
                <div class="flagandalbum">
                    <div id="anflag" class="flag-fav">
                        <a href="" class="flag-action" title="喜欢这个句子" rel="nofollow"><p class="route">我讨厌这个句子</p></a>

                    </div>
                    <div id="basic-modal">
                        <a href="" class="basic" title="把这个句子加入你的句集" rel="nofollow"><p class="route">我想关闭这个网站</p></a>
                    </div>
                    <div id="block-flag_lists-0"></div>      
                </div>
            </div>
        </div>

        <footer>
            <div id="footergotop">
                <a href="#top" id="gotop">▲ 回顶部</a>
            </div>

            <div id="switch">
                <a href="#" class="on">关停这个网站</a>
                <a href="#" class="off">电脑版</a>
            </div>

            
            <footer>
    </body>
</html>