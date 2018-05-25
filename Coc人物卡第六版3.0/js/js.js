/**
 * Created by asus on 2018/5/1.
 */

let vm = new Vue({
        el:'#app',
        data(){
            return{
           prom:{
                names:"",
                sex:"",
                age:"",
                moneyall:"",
                moneybody:"",
                moneyblank:"",
                str:"",
                dex:"",
                con:"",
                int:"",
                pow:"",
                app:"",
                siz:"",
                edu:"",
                job:"",
                skill:[]
                }

            }
        },
        methods:{
                     postData() { //传给后台
                     axios.post('https://bird.ioliu.cn/v2?url=http://m.maoyan.com/movie/list.json?type=hot&offset=0&limit=10',this.prom) //v-model input select
                    .then((res)=>{
                    this.getData();
                    }).catch((res)=>{
                    console.log("error!");
            });
        },
            getData() {//导入
                axios.get('https://bird.ioliu.cn/v2?url=http://m.maoyan.com/movie/list.json?type=hot&offset=0&limit=10')
                    .then((res)=>{ //插入值

                    })
                    .catch((res)=>{
                        console.log("error!");
                    });
            }
        },
            created(){
                  this.postData();
                  //name保存过就让后端给返回正常数据，然后get。name没有保存过就返回默认数据
            },

});
$(".sbmBtn").onclick= this.postData();
let arr = ['会计学','人类学','考古学','艺术','天文学','议价','生物学','化学','攀爬','电脑使用','藏匿','手艺','信誉度','克苏鲁神话','乔装','闪躲','汽车驾驶/马车','电器维修','电子学','快速交谈','急救','拳击/厮打','地理学','擒抱','手枪','头顶','躲藏','历史','跳跃','踢','法律','图书馆','聆听','开锁','机关枪','武术','机器维修','医学','自然史','领航','神秘学','重型机械','语音：拉丁文','母语','劝说','药剂学','摄影','物理','驾驶（飞行器）','驾驶（船只）','心理分析','心理学','骑术','来复枪','散弹枪','潜行','侦查','冲锋枪','游泳','投掷','跟踪'];
// let nmb = [];
for(let i=0;i<100;i){

}

for(let i of arr){
    $("#skill").append (`       <tr><td colspan="2"><span>${i}</span></td>
                                    <td><span>**</span></td>
                                    <td><span>**</span></td>
                                    <td><span>**</span></td>
                                    <td><span>**</span></td>
                                    <td><span>**</span></td></tr>`);
}


for (let i=0; i<=99; i++){
    $("#age").append(`<option value=${i}>${i}</option>`); //  value="+data.aa+"
}
let isShow = 1;
$(".btnDisplay").click(function () {
    $(".skill-table-all").removeClass("active");
    if(isShow == 1){
        $(".skill-table-all").addClass("active");
        isShow--;
    }else{
        $(".skill-table-all").removeClass("active");
        isShow++;
    }
});

let unSelected = "#dddddd";
let selected = "#dddddd";
$(function () {
    $("select").css("color", unSelected);
    $("option").css("color", selected);
    $("select").change(function () {
        let selItem = $(this).val();
        if (selItem == $(this).find('option:first').val()) {
            $(this).css("color", unSelected);
        } else {
            $(this).css("color", selected);
        }
    });
});
//---form变ajax
//
//     $.ajax({
//         type: "GET",
//         url: "",//form的action
//         success: function (data) {
//             console.log(data);   //data即为后台返回的数据
//         }
// });

//****** axios.get（）

// function getData() {//导入
//     axios.get('')
//         .then((res)=>{
//
//         })
//         .catch((res)=>{
//             console.log("error!");
//         });
// }


//登录界面登入后 新页面加载前，post，将name传给后台，再判断下，name保存过就让后端给返回正常数据，然后get。name没有保存过就返回默认数据，然后get。
//新界面输入数据后，点保存按钮后，post传输给后台，后台返回数据再get
// function postData() { //传给后台
//     axios.post('',{}) //v-model input select
//         .then((res)=>{
//             getData();
//     }).catch((res)=>{
//         console.log("error!");
//     });
// }

