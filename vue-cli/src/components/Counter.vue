<template>
  <div>
    <h1>{{ $store.state.count }}</h1> <!--直接写 -->
    <!--<h1>{{ $store.state.a.count }}</h1> &lt;!&ndash;module &ndash;&gt;-->
    <h1>{{ count }}</h1> <!-- 直接插值 computed 来代替 -->
    <button @click="$store.commit('add', 2)">add</button> <!--参数（方法，方法的第二个参数num） -->
    <!--<button @click="$store.commit('reduce')">reduce</button>-->
    <button @click="reduce">reduce</button> <!-- 不用$store.commit('reduce')的话，需要import mapMutations和methods -->
    <button @click="addAction">addAction</button>
    <button @click="dis">dispatch</button>  <!--//dispatch 第二种调用addAction方法-->
  </div>
</template>

<script>
  import store from '@/vuex/store.js'
  import {mapState, mapMutations ,mapGetters, mapActions} from 'vuex'
  export default{
    store,
//    computed:{
//      computedCount(){
//        return	this.$store.state.count
//        }
//    },

//    computed:mapState({
//      computedCount:state=>state.count
//    }),

    computed:{
      ...mapState(['count']),
      ...mapGetters(['count'])
    }, /*三种computed，这种最好，因为数组*/
    methods:{
      ...mapMutations (["add","reduce"]),
      ...mapActions (["addAction"]),
      dis(){ //dispatch 第二种调用addAction方法
          this.$store.dispatch('addAction');
      }
    }, /*数组里写，store.js里的方法*/
  }

</script>

<style scoped>

</style>
