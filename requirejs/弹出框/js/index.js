/**
 * Created by asus on 2018/3/17.
 */
requirejs.config({
    paths:{
    jquery:'jquery-3.3.1'
    }
});
require(["dialog","jquery"],function (Dialog,$) {
    // var oBtn = $("#btn");
    //     oBtn.onclick = function () {
    //         dialog.open();
    //     }
    // oBtn.on("click",function () {
    //     dialog.open();
    // })
    $("#btn").click(function () {
        var dialog1 = new Dialog();
        dialog1.open();
    })
    $("#btn2").click(function () {
        var dialog2 = new Dialog();
        dialog2.open();
    })
    //AMD
    //CMD
})