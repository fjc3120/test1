/**
 * Created by asus on 2018/4/25.
 */
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex)

const state = { /*状态数据 存，不能直接改变*/
    count: 0
}
const  mutations = { /*改变，通过方法改变状态数据*///同步
    add(state, num){
      state.count += num; //不能写等两秒
    },
    reduce(state){
      state.count--;
    }
}
const getters = { //相当于computed计算属性
  count(state){
    return state.count += 10;
}
}

const actions = { /*里面要调用mutations的方法*///异步
  addAction({commit}){
    setInterval(()=>{ //等两秒
      commit('add',10)
    },2000);
  }
}
// const moduleA = {
//   state,
//   mutations,
//   getters,
//   actions
// }
export default new Vuex.Store ({
  state,
  mutations,
  getters,
  actions
})

// export default new Vuex.Store ({
//   modules:{
//   a: moduleA
//   }
// })
