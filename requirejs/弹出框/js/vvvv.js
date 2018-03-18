/**
 * Created by asus on 2018/3/18.
 */
var oHul = document.getElementsByClassName("picture");
// var oHul1=aHul[0];
// var oHul2=aHul[1];
var aSp = document.getElementsByTagName("span");
var aList = document.getElementsByClassName("list-ul");
var aListli =aList[0].getElementsByTagName("li");
var aListli2 = aList[1].getElementsByTagName("li");
var globalIndex=0;
var s;
var isrun =true;
var istimer=true;

for(var i=0;i<2;i++){
    oHul[i].onmouseover = function () {
        istimer=false;
    }
    oHul[i].onmouseout =function () {
        istimer=true;
    }
}

aSp[0].onclick = function () {
    if(isrun){
        clearInterval(s);
        left(--globalIndex);
    }
}
aSp[2].onclick = function () {
    if(isrun){
        clearInterval(s);
        left(--globalIndex);
    }
}
aSp[1].onclick = function () {
    if(isrun){
        clearInterval(s);
        right(++globalIndex);
    }
}
aSp[3].onclick = function () {
    if(isrun){
        clearInterval(s);
        right(++globalIndex);
    }
}
for(var i=0;i<aListli.length;i++){
    aListli[i].index=i;
    aListli[i].onmouseover = function () {
        if(isrun){
            clearInterval(s);
            change(this.index);
        }
    }
}
for(var i=0;i<aListli2.length;i++){
    aListli2[i].index=i;
    aListli2[i].onmouseover = function () {
        if(isrun){
            clearInterval(s);
            change(this.index);
        }
    }
}

function change(bb) {
    if(globalIndex<(bb+0.1)) {
        right(bb)
    }
    else if(globalIndex>(bb+0.1)){
        left(bb);
    }
}
function right(aa) {
    isrun=false;
    s=setInterval(function () {
        for(var i=0;i<2;i++){
            if(oHul[i].offsetLeft==-3275){
                globalIndex = 0;
                aa=0;
                oHul[i].style.left=0+"px";
            }else{
                if(oHul[i].offsetLeft==-655*aa){
                    clearInterval(s);
                    globalIndex = aa;
                    isrun =true;
                }else{
                    oHul[i].style.left = oHul[i].offsetLeft-5+"px";

                }
            }
        }

    },10);
}
function left(aa) {
    isrun=false;
    s=setInterval(function () {
        for(var i=0;i<2;i++){
            if(oHul[i].offsetLeft==0){
                globalIndex = 0;
                aa=4;
                oHul[i].style.left=-3275+"px";
            }else{
                if(oHul[i].offsetLeft==-655*aa){
                    clearInterval(s);
                    globalIndex = aa;
                    isrun =true;
                }else{
                    oHul[i].style.left = oHul[i].offsetLeft+5+"px";
                }
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

