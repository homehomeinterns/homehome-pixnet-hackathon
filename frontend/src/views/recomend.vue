<template>
<div id="recomendContainer" class="container">
  <h1 id="food">推薦美食</h1>
  <div class="article row">
    <!-- loading -->
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.foodList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <!-- loading -->
    <articleList v-for="article in foodList" :key="article.id" :article="article" />
  </div>

  <h1 id="hotel">推薦住宿</h1>
  <div class="article row">
    <!-- loading -->
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.hotelList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <!-- loading -->
    <articleList v-for="article in hotelList" :key="article.id" :article="article" />
  </div>

  <h1 id="spot">推薦景點行程</h1>
  <div class="article row">
    <!-- loading -->
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <div v-if="this.spotList==0" class="container col-md-6 col-lg-3"><div class="block1"></div></div>
    <!-- loading -->
    <articleList v-for="article in spotList" :key="article.id" :article="article" />
  </div>

  <!-- <h1>推薦行程</h1>
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
  </div> -->
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
      foodList: [],
      hotelList: [],
      spotList: [],
    }
  },
  mounted() {
      this.getFoodList();
      this.getHotelList();
      this.getSpotList();
  },
  methods: {
    getFoodList () {
      axios({
        method: 'GET',
        url: 'https://emma.pixnet.cc/blog/articles/search?format=json&key="台北美食"&content_filter=on&type=tag&per_page=8'})
      .then((response) => {
        this.foodList = response.data.articles;
      })
      .catch(function (err) {
          console.log(err);
      })
    },
    getHotelList () {
      axios({
        method: 'GET',
        url: 'https://emma.pixnet.cc/blog/articles/search?format=json&key="台北住宿"&content_filter=on&type=tag&per_page=8'})
      .then((response) => {
        this.hotelList = response.data.articles;
      })
      .catch(function (err) {
          console.log(err);
      })
    },
    getSpotList () {
      axios({
        method: 'GET',
        url: 'https://emma.pixnet.cc/blog/articles/search?format=json&key=%22%E5%8F%B0%E7%81%A3%E6%97%85%E9%81%8A%22&content_filter=on&public_after=1546300800&type=tag&per_page=8'})
      .then((response) => {
        console.log(response.data);
        this.spotList = response.data.articles;
        console.log(this.spotList);
      })
      .catch(function (err) {
          console.log(err);
      })
    },
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/recomend.scss';
</style>
