/**
 * Created by asus on 2018/3/18.
 */
requirejs.config({
    paths:{
        jquery:'jquery-3.3.1'
    }
});
define(["jquery"],function ($) {

    function Css() {
        this.$box =  $('<div class="dialog-box" id="dialog-box1"></div>');
        this.$mask = $('<div class="dialog-mask"></div>');
        this.$container = $('<div class="dialog-container"></div>');
        this.$header = $('<div class="dialog-header"></div>');
        this.$title = $('<div class="dialog-title"></div>');
        this.$close = $('<div class="dialog-btn close">[X]</div>');
        this.$content = $('<div class="dialog-content"></div>');
        this.defaultSettings={  /*默认*/
            width:400,
            height:300,
            title:"弹框",
            content:"1234!"
        };
    }


    return Css;
})