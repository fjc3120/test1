/**
 * Created by asus on 2018/3/17.
 */

//
// require(["sort"],function (sortArr) { /*【sort】引用sort js文件*/
//     var arr = [5,8,6,1,3];
//     var arr1 =   sortArr(arr);
//     console.log(arr1);
//
// })  //AMD格式
define(function (require) {
    var arr = [5,8,6,1,3];
    var sortArr = require("sort");
    console.log(sortArr(arr));
}) //CMD格式