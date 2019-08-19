<template>
<div class="container">
    <h1>流行文章</h1>
    <div class="row">
        <div :key="article" v-for="(article, index) in articles" class="col-md-3">
          <div class="square-service-block">
            <a :href="article">
              <h2 class="ssb-title">{{ index }}</h2>  
            </a>
          </div>
        </div>
     </div>
    <h1>推薦行程</h1>
    <div class="container-fluid">
    <div class="row">
        <div class="col">夏日玩水嗨翻天</div>
    </div>
    <div class="row">
        <div class="col">夜晚和女神一起看星星</div>
    </div>
    <div class="row">
        <div class="col">半夜不睡覺，在屋頂唱歌</div>
    </div>
    </div>
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'recomend',
  data (){
    return{
      articles: [],
    }
  },
  mounted() {
      this.question();
  },
  methods: {
    question () {
      axios({
        method: 'GET',
        url: 'https://emma.pixnet.cc/blog/articles/search?key="台北美食"&site_category_id=26&per_page=10'})
      .then((response) => {
        console.log(response.data);
        response.data.articles.forEach(element => {
            this.articles.push(element.link);
        });
      })
      .catch(function (err) {
          console.log(err);
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/recomend.scss';
</style>
