/**
 * Created by asus on 2018/4/11.
 */

import css from './css/main.css';
import sass from './css/style.scss';
//import $ from 'jquery';
import  info from '../info.json';
var a=0;
var str ='hello123';
var oH1 = document.getElementsByTagName("h1")[0];
oH1.innerHTML = "hello world";

setTimeout(function () {
    var path = require("path");
    console.log(path.resolve(__dirname,'dist'));
},10);

let obj ={
    test:()=>{
        console.log('11');
    }
};
console.log(obj+"hello");

$("#div5").innerHTML =  '姓名:${info.name}年龄:${info.age}学校:${info.school}';
