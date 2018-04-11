/**
 * Created by asus on 2018/4/11.
 */

import css from './css/main.css'
var a=0;
var str ='hello123';
var oH1 = document.getElementsByTagName("h1")[0];
oH1.innerHTML = "hello world";

setTimeout(function () {
    var path = require("path");
    console.log(path.resolve(__dirname,'dist'));
},10)