/**
 * Created by asus on 2018/3/18.
 */
define(function () {
    function slider() {
        this.$box=$('<div class="slider-box"></div>');
        this.$img=$('<div class="slider-img"></div>');
        this.$nav=$('<div class="slider-nav"></div>');
        this.$btn=$('<div class="slider-btn"></div>');
        this.$ul = $('<ul></ul>');
        this.$prv=$('<li>&#60;</li>');
        this.$next=$('<li>&#62;</li>');
        // this.$ul=
            this.defaultSettings={
                arr:["bj5","BJ1","BJ2","BJ3"],
                time:1000,
                content:"#box1"
            }
//        this.init=function () {
//
//        }
    }
    slider.prototype.init=function (settings) {
        $.extend(this.defaultSettings,settings);
        this.$box.append(this.$img).append(this.$nav).append(this.$btn);
        this.$ul.append(this.$prv).append(this.$next);
        this.$btn.append(this.$ul);
        var imgHtml="<ul>";
        var navtml="<ul>";
        for(var i=0;i<this.defaultSettings.arr.length;i++){
            imgHtml+='<li><img src="'+this.defaultSettings.arr[i]+'.jpg" alt=""></li>';
            navtml+='<li>'+(i+1)+'</li>';
        }
        imgHtml+="</ul>";
        navtml+="</ul>";
        this.$img.append(imgHtml);
        this.$nav.append(navtml);
        $(this.defaultSettings.content).append(this.$box);
        $(this.$img).children("ul").children("li").eq(0).addClass("active");
        var globalIndex=0;
        var This=this;
        run();
        var timer;
        function run() {
             timer= setInterval(function () {
                if(globalIndex>3){
                    globalIndex=0;
                }
                This.changeImg();
                globalIndex++;
            },1000);
        }

        this.changeImg=function() {
            $(This.$img).find("li").removeClass("active").eq(globalIndex).addClass("active");
            $(This.$nav).find("li").removeClass("active").eq(globalIndex).addClass("active")
        }
        $(this.$nav).find("li").hover(function () { /*鼠标触发*/
            clearInterval(timer);
            globalIndex = $(this).index();
            This.changeImg();
        },function () {  /*鼠标离开*/
            run();
        })
    };


    return slider;
})