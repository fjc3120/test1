  <template>
    <div>
      <h1>这是子路由1</h1>
      <h1>名字是：{{ $route.params.username }}</h1>
      <h1>年龄是：{{ $route.params.age }}</h1>
    </div>
  </template>

  <script>
  export default{
    beforeRouteEnter(to, from, next){
      console.log('进入之前');
      next(true);
    },
    beforeRouteLeave(to, from, next){
      console.log('离开之前');
      next(true);
    },
    beforeRouteUpdate(to, from, next){

    },
  }

  </script>

  <style scoped="">

  </style>
