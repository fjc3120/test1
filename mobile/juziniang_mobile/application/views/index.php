<!DOCTYPE HTML>
<html>
    <head>
        <title>句子娘</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="<?php echo base_url('css/common.css');?>" rel="stylesheet" />
        <link href="<?php echo base_url('css/index_common.css');?>" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div id="logo" name="top" ></div>
            <div id="title">句子娘</div>
            <div style="clear: both"></div>
        </header>
        <div id="float_window">
            <img src="<?php echo base_url("img/float_logo.png");?>"></img>
        </div>
        <div id="content">
            <div class="homepage">
                <img src="<?php echo base_url("img/logo.png");?>" alt="句子娘" />
            </div>
            <div class="homenav">
                <div class="line1">
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/0'); ?>"><div class="icon xqcaliou"></div>推荐</a></div>
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/1'); ?>"><div class="icon xqcalimin"></div>名人名句</a></div>
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/2'); ?>"><div class="icon xqcaliyan"></div>影视美句</a></div>
                </div>
                <div class="line2">
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/3'); ?>"><div class="icon xqcalialb"></div>原创佳句</a></div>
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/4'); ?>"><div class="icon xqcalimei"></div>文学作品</a></div>
                    <div class="line_button"><a href="<?php echo site_url('welcome/index/5'); ?>"><div class="icon xqcalixin"></div>古句欣赏</a></div>
                </div>
            </div>
            <div class="essay_list">                                       
                <?php
                    
                    foreach ($sentence as $key => $value) {
                        echo "
                            <div class=\"essay_row\">
                                <div class=\"essay_body\">
                                    <a href=\"";
                        echo site_url('welcome/essay/'.$value['id'].'/'.$id);
                        echo "\" title=\"查看本句\" class=\"xlistju\">";
                        echo $value['context'];
                        echo "</a>
                                </div>
                                <div class=\"essay_resource\">";
                        if(isset($value['writer'])&&$value['writer']!=null)
                        {
                            echo "——<span href=\"#\" rel=\"tag\" title=\"原作者：";
                            echo $value['writer'];
                            echo "\" class=\"resource_body\">";
                            echo $value['writer'];
                            echo "</span>";
                        }
                        if(isset($value['book']))
                        {
                            echo "<span class=\"resource_body\">《";
                            echo $value['book'];
                            echo "》</span>";
                        }
                        echo "
                                </div>
                                <div class=\"essay_foot\">
                                    <div class=\"essay_func\">
                                        <a href=\"#\" class=\"flag-action like_icon\" rel=\"nofollow\" title=\"喜欢\">喜欢</a>
                                    </div>|
                                    <div class=\"essay_func\">
                                        <a href=\"#\" class=\"flag-action remark_icon\" rel=\"nofollow\" title=\"讨厌\">讨厌</a>
                                    </div>|
                                    <div class=\"essay_func\">
                                        <a href=\"#\" class=\"flag-action author_icon\" rel=\"nofollow\" title=\"作者\">";
                        echo $value['upper'];
                        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>";
                    }
                ?>
            </div>
            <div class="more-sentence">
                <a href="<?php echo site_url('welcome/index/').$id; ?>">换一批</a>
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