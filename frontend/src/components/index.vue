<template>
<div>
  <header class="jumbotron" id="top">
    <div class="container">
      <h1>Pixnet Hackathon</h1>
      <div class="line"></div>
      <h5>顛覆你的旅遊體驗</h5>
    </div>
  </header>
  <section id="section_recomend">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>我們提供豐富的文章內容</h1>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="food">
            <router-link to="./recomend" id="link">
              <h4>美食</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="hotel">
            <router-link to="./recomend" id="link">
              <h4>住宿</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="spot">
            <router-link to="./recomend" id="link">
              <h4>景點</h4>
            </router-link>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="img_wrap" id="store">
            <router-link to="./construction" id="link">
              <h4>書籤與收藏</h4>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section_route">
    <router-link to="./construction" id="link">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-5 img"></div>
          <div class="col-sm-7">
            <h2>安排你的旅程</h2>
            <h5>瀏覽推薦行程、流行趨勢</h5>
            <h5>分享行程、旅遊社群</h5>
          </div>
        </div>
      </div>
    </router-link>
  </section>
  <section id="section_test">
    <div class="container-fliud">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-5 depress"></div>
        <div class="col-sm-12 col-md-7">
          <div class="container">
            <h2>來測測你適合哪種旅行</h2>
            <hr/>
            <div class="row features">
              <div class="col-sm-4"><i class="fas fa-archway"></i>
                <h5>名勝古蹟</h5>
              </div>
              <div class="col-sm-4"><i class="fab fa-pagelines"></i>
                <h5>大自然</h5>
              </div>
              <div class="col-sm-4"><i class="fas fa-cocktail"></i>
                <h5>美食行程</h5>
              </div>
            </div>
            <router-link to="./survey"><button class="btn btn-default">馬上測一測</button></router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section_like">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-12">
          <h2>將喜愛的行程加入收藏吧</h2>
        </div>
        <router-link to="./construction" id="link">
          <div class="col-sm-12">
            <div class="sec1"><i class="fas fa-heart"></i>
              <h3>收藏的景點</h3>
              <p>已加入收藏的景點能排入行程，快來試試安排近期的旅遊計畫吧！</p>
            </div>
            <div class="sec2"><i class="fas fa-bookmark"></i>
              <h3>加入書籤</h3>
              <p>你能夠隨時觀看已加入書籤的文章，讓你不會錯過任何旅遊資訊！</p>
            </div>
          </div>
        </router-link>
      </div>
    </div>
  </section>
  <footer class="jumbotron">
    <div class="container">
      <h2>讓我們一起開始旅程</h2>
      <input class="form-control" placeholder="Email"/>
      <hr/>
      <button class="btn btn-default">聯絡我們</button>
    </div>
  </footer>
</div>
</template>

<script>
export default {
  name: 'index',

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/index.scss';
</style>
