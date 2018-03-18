/**
 * Created by asus on 2018/3/18.
 */
requirejs.config({
    paths:{
        jquery:'jquery-3.3.1'
    }
});
// require.config({   /*不符合AMD,CMD的引用插件*/
//     shim:({
//         aa:{
//             deps:["bb"],  /*aa页面要引用的bb*/
//             exports:'aa'   /*本页面引用的aa*/
//         }
//     })
// })
require(["jquery","轮播辅2"],function ($,Img) {
    $(".box1").load("轮播辅DOM.html",function () {  /*load结束执行function*/
        var img1=new Img();
        var set1 = {
            time:1000
        };
        img1.open(set1);
    });
    // $(".box2").load("轮播辅DOM.html",function () {
    //     var img2=new Img();
    //     var set2 = {
    //         time:200
    //     };
    //     img2.open(set2);
    // });





})
