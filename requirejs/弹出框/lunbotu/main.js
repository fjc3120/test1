/**
 * Created by asus on 2018/3/18.
 */
require(["slider"],function (slider) {
    var slider1=new slider();
    slider1.init();
    var settings={
        arr:"",
        time:1000,
        content:"#div1"
    };
    var slider2=new slider();
    slider2.init(settings);
});