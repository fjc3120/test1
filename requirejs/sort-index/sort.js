/**
 * Created by asus on 2018/3/17.
 */
define(function () {
        function arrSort(arr) {
            return arr.sort(function (a,b) {
                return b-a;
            });
        }
   return arrSort;
})