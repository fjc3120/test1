/**
 * Created by asus on 2018/3/17.
 */
//
define(function () {
    function sortArr(arr) {
        return arr.sort(function (a,b) {
            return b-a;
        });
    }
    return sortArr; /*返回函数声明*/
})
