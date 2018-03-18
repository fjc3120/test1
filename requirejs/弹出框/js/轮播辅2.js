/**
 * Created by asus on 2018/3/18.
 */
requirejs.config({
    paths:{
        jquery:'jquery-3.3.1'
    }
});
define(["jquery"],function ($) {



    function Img() {
        // var oHul = document.getElementsByClassName("picture")[0];
        // var aSp = document.getElementsByTagName("span");
        // var aList = document.getElementsByClassName("list-ul");
        // var aListli =aList[0].getElementsByTagName("li");
        // var globalIndex=0;
        // var s;
        // var isrun =true;
        // var istimer=true;
        // // this.$box =  $('<div class="box"></div>');
        //
        // oHul.onmouseover = function () {
        //     istimer=false;
        // }
        // oHul.onmouseout =function () {
        //     istimer=true;
        // }
        // aSp[0].onclick = function () {
        //     if(isrun){
        //         clearInterval(s);
        //         left(--globalIndex);
        //     }
        // }
        // aSp[1].onclick = function () {
        //     if(isrun){
        //         clearInterval(s);
        //         right(++globalIndex);
        //     }
        // }
        // for(var i=0;i<aListli.length;i++){
        //     aListli[i].index=i;
        //     aListli[i].onmouseover = function () {
        //         if(isrun){
        //             clearInterval(s);
        //             change(this.index);
        //         }
        //     }
        // }
        // function change(bb) {
        //     if(globalIndex<(bb+0.1)) {
        //         right(bb)
        //     }
        //     else if(globalIndex>(bb+0.1)){
        //         left(bb);
        //     }
        // }
        // function right(aa) {
        //     isrun=false;
        //     s=setInterval(function () {
        //         if(oHul.offsetLeft==-3275){
        //             globalIndex = 0;
        //             aa=0;
        //             oHul.style.left=0+"px";
        //         }else{
        //             if(oHul.offsetLeft==-655*aa){
        //                 clearInterval(s);
        //                 globalIndex = aa;
        //                 isrun =true;
        //             }else{
        //                 oHul.style.left = oHul.offsetLeft-5+"px";
        //
        //             }
        //         }
        //     },10);
        // }
        // function left(aa) {
        //     isrun=false;
        //     s=setInterval(function () {
        //         if(oHul.offsetLeft==0){
        //             globalIndex = 0;
        //             aa=4;
        //             oHul.style.left=-3275+"px";
        //         }else{
        //             if(oHul.offsetLeft==-655*aa){
        //                 clearInterval(s);
        //                 globalIndex = aa;
        //                 isrun =true;
        //             }else{
        //                 oHul.style.left = oHul.offsetLeft+5+"px";
        //             }
        //         }
        //     },10);
        // }
        // this.open=function (set) {
        //     setInterval(function () {
        //         if(isrun && istimer){
        //             right(++globalIndex);
        //         }
        //     },set.time)
        // }


        /**
         * Created by asus on 2018/3/18.
         */
        this.$oHul =  $('<ul class="header-ul clearfix picture">' +
            '<li><img src="../../../xiaomiindex/images/BJ1.jpg" alt=""></li>' +
            '<li><img src="../../../xiaomiindex/images/BJ2.jpg" alt=""></li>' +
            '<li><img src="../../../xiaomiindex/images/BJ3.jpg" alt=""></li>' +
            '<li><img src="../../../xiaomiindex/images/3.png" alt=""></li>' +
            '<li><img src="../../../xiaomiindex/images/bj5.jpg" alt=""></li>' +
            '<li><img src="../../../xiaomiindex/images/BJ1.jpg" alt=""></li>' +
            '</ul>');
        // var oHul = document.getElementsByClassName("picture");
// var oHul1=aHul[0];
// var oHul2=aHul[1];
//         var aSp = document.getElementsByTagName("span");
        this.$aSp =  $('<span>&#60;</span>');
        this.$aSp1 =  $('<span>&#62;</span>');
        // var aList = document.getElementsByClassName("list-ul");
        this.$aList =  $('<ul class="list-ul">' +
            '<li>1</li>' +
            '<li>2</li>' +
            '<li>3</li>' +
            '<li>4</li>' +
            '<li>5</li>' +
            '</ul>');
        // var aListli =aList[0].getElementsByTagName("li");

        // var aListli2 = aList[1].getElementsByTagName("li");
        var globalIndex=0;
        var s;
        var isrun =true;
        var istimer=true;


            this.$oHul.onmouseover = function () {
                istimer=false;
            }
        this.$oHul.onmouseout =function () {
                istimer=true;
            }


        this.$aSp.onclick = function () {
            if(isrun){
                clearInterval(s);
                left(--globalIndex);
            }
        }


        this.$aSp1.onclick = function () {
            if(isrun){
                clearInterval(s);
                right(++globalIndex);
            }
        }
        // for(var i=0;i<aListli.length;i++){
        //     aListli[i].index=i;
        //     aListli[i].onmouseover = function () {
        //         if(isrun){
        //             clearInterval(s);
        //             change(this.index);
        //         }
        //     }
        // }
        // for(var i=0;i<aListli2.length;i++){
        //     aListli2[i].index=i;
        //     aListli2[i].onmouseover = function () {
        //         if(isrun){
        //             clearInterval(s);
        //             change(this.index);
        //         }
        //     }
        // }

        // function change(bb) {
        //     if(globalIndex<(bb+0.1)) {
        //         right(bb)
        //     }
        //     else if(globalIndex>(bb+0.1)){
        //         left(bb);
        //     }
        // }
        var This=this;
        function right(aa) {
            isrun=false;

            s=setInterval(function () {

                    if(This.$oHul.get(0).offsetLeft==-3275){
                        globalIndex = 0;
                        aa=0;
                        This.$oHul.get(0).style.left=0+"px";
                    }else{
                        if(This.$oHul.get(0).offsetLeft==-655*aa){
                            clearInterval(s);
                            globalIndex = aa;
                            isrun =true;
                        }else{

                            This.$oHul.get(0).style.left = This.$oHul.get(0).offsetLeft-5+"px";

                        }
                    }


            },10);
        }
        function left(aa) {
            isrun=false;
            s=setInterval(function () {

                    if(This.$oHul.get(0).offsetLeft==0){
                        globalIndex = 0;
                        aa=4;
                        This.$oHul.get(0).style.left=-3275+"px";
                    }else{
                        if(This.$oHul.get(0).offsetLeft==-655*aa){
                            clearInterval(s);
                            globalIndex = aa;
                            isrun =true;
                        }else{
                            This.$oHul.get(0).style.left = This.$oHul.get(0).offsetLeft+5+"px";
                        }
                    }


            },10);
        }
        this.open=function (set) {
            setInterval(function () {
                if(isrun && istimer){
                    right(++globalIndex);
                }
            },set.time)
        }


    }


    return Img;
})