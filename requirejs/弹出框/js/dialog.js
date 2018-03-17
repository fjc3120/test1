/**
 * Created by asus on 2018/3/17.
 */
requirejs.config({
    paths:{
        jquery:'jquery-3.3.1'
    }
});
define(["jquery"],function ($) {
                  function Dialog() {  /*对象式操作   对象也是函数*/
                  this.$box =  $('<div class="dialog-box" id="dialog-box1"></div>');
                  this.$mask = $('<div class="dialog-mask"></div>');
                  this.$container = $('<div class="dialog-container"></div>');
                  this.$header = $('<div class="dialog-header"></div>');
                  this.$title = $('<div class="dialog-title">注册</div>');
                  this.$close = $('<div class="dialog-btn close">[X]</div>');
                  this.$content = $('<div class="dialog-content"></div>');
                }
                Dialog.prototype.open=function () {
                this.$box.append(this.$mask).append(this.$container);
                this.$container.append(this.$header).append(this.$content);
                this.$header.append(this.$title).append(this.$close);
                $("body").append(this.$box);
                var This = this;
                this.$close.click(function () {
                    This.$box.remove();
                })
              };
    // var dialog={  /*dom操作*/
    //     open:function () {
              // var dialogHtml=
              //     '<div class="dialog-box" id="dialog-box1">'+
              //     '<div class="dialog-mask"></div>'+
              //     '<div class="dialog-container">'+
              //     '<div class="dialog-header">'+
              //     '<div class="dialog-title">注册</div>'+
              //     '<div class="dialog-btn close" id="close">[X]</div>'+
              //     '</div>'+
              //     '<div class="dialog-content">'+
              //     '<span>账号：  </span>'+
              //     '<input type="text" placeholder="账号">'+
              //     '<br>'+
              //     '<span>密码：  </span>'+
              //     '<input type="text" placeholder="密码">'+
              //     '<br>'+
              //     '<button>提交</button>'+
              //     '</div>'+
              //     '</div>'+
              //     '</div>';
              // document.body.innerHTML+=dialogHtml;
              // $("body").append(dialogHtml);
              // $(".close").click(function () {
              //    $(this).end().end().end().remove();
              // })
          // }
    // };
    return Dialog;
});