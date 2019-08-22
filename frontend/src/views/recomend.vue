<template>
<div id="recomendContainer" class="container">
  <h1>流行文章</h1>
  <div class="article row">
    <!-- loading -->
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <div v-if="this.articleList==0" class="container col-md-6 col-lg-3"><div class="block"></div></div>
    <!-- loading -->
    <articleList v-for="article in articleList" :key="article.id" :article="article" />
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
  <img src="https://res.cloudinary.com/tzuhsin/image/upload/v1566400988/wave_r05oq4.png" class="bgImage">
</div>
</template>

<script>
import axios from 'axios';
import articleList from '../components/articleList';
export default {
  name: 'recomend',
  components: {
    articleList,
  },
  data (){
    return{
      articleList: [],
    }
  },
  mounted() {
      this.question();
  },
  methods: {
    question () {
      axios({
        method: 'GET',
        url: 'https://emma.pixnet.cc/blog/articles/search?format=json&key="台北美食"&type=tag&per_page=8'})
      .then((response) => {
        console.log(response.data);
        this.articleList = response.data.articles;
        console.log(this.articleList);
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
