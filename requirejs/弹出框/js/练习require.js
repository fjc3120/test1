/**
 * Created by asus on 2018/3/18.
 */
requirejs.config({
    paths:{
        jquery:'jquery-3.3.1'
    }
});
require(["练习define","jquery"],function (Css,$) {


    $("#btn").click(function () {
        var  css1 = new Css();
        css1.open();
    })
})