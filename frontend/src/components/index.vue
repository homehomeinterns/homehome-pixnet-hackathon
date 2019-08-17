<template>
  <div>
    <nav class="navbar fixed-top navbar-light navbar-expand"><a class="navbar-brand" href="#top"><i class="fas fa-umbrella-beach"></i><span>Homeinterns</span></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-sm-auto">
        <li class="nav-item px-2"><a class="nav-link" href="#section_recommand">推薦頁面
            <div id="line"></div></a></li>
        <li class="nav-item px-2"><a class="nav-link" href="#section_article">文章頁面
            <div id="line"> </div></a></li>
        <li class="nav-item px-2"><a class="nav-link" href="#section_test">書籤頁
            <div id="line"></div></a></li>
        <li class="nav-item px-2"><a class="nav-link" href="#section_like">旅遊測驗
            <div id="line"></div></a></li>
      </ul>
    </div>
  </nav>
  <header class="jumbotron" id="top">
    <div class="container">
      <h1 data-0="transform: translateY(-40px)" data-500="transform: translateY(100px)">Pixnet Hackthon</h1>
      <div class="line"></div>
      <h5>顛覆你的旅遊體驗</h5>
    </div>
  </header>
  <section id="section_recommand">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-5 img" data-0="transform: translateX(-200px)" data-400="transform: translateY(0px)"></div>
        <div class="col-sm-7" data-300="opacity: 0" data-400="opacity: 1">
          <h2>推薦頁面</h2>
          <h5>瀏覽推薦行程、流行趨勢</h5>
          <h5>分享行程、旅遊社群</h5>
        </div>
      </div>
    </div>
  </section>
  <section id="section_article">
    <div class="container">
      <div class="row">
        <div class="col-sm-12" data-bottom-top="transform: translateY(-20px);opacity: 0" data-center="transform: translateY(0px);opacity: 1">
          <h1>我們提供豐富的文章內容</h1>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6" data-bottom-top="transform: translateY(-20px);opacity: 0" data-center="transform: translateY(0px);opacity: 1">
          <div class="img_wrap" id="food">
            <h4>美食</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6" data-bottom-top="transform: translateY(-20px);opacity: 0" data-center="transform: translateY(0px);opacity: 1">
          <div class="img_wrap" id="hotel">
            <h4>住宿</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6" data-bottom-top="transform: translateY(-20px);opacity: 0" data-center="transform: translateY(0px);opacity: 1">
          <div class="img_wrap" id="spot">
            <h4>景點</h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6" data-bottom-top="transform: translateY(-20px);opacity: 0" data-center="transform: translateY(0px);opacity: 1">
          <div class="img_wrap" id="store">
            <h4>書籤與收藏</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section_test">
    <div class="container-fliud">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-5 depress" data-bottom-top="background-size: 150%;background-position: 0% 0%" data-center="background-size: 100%;background-position: 50% 50%"></div>
        <div class="col-sm-12 col-md-7">
          <div class="container">
            <h2>來測測你適合哪種旅行</h2>
            <hr/>
            <div class="row features">
              <div class="col-sm-4" data-bottom-top="transform: scale(1.5);opacity: 0" data-center="transform: scale(1);opacity: 1"><i class="fas fa-archway"></i>
                <h5>名勝古蹟</h5>
              </div>
              <div class="col-sm-4" data-bottom-top="transform: scale(1.5);opacity: 0" data-center="transform: scale(1);opacity: 1"><i class="fab fa-pagelines"></i>
                <h5>大自然</h5>
              </div>
              <div class="col-sm-4" data-bottom-top="transform: scale(1.5);opacity: 0" data-center="transform: scale(1);opacity: 1"><i class="fas fa-cocktail"></i>
                <h5>美食行程</h5>
              </div>
            </div>
            <button class="btn btn-default">馬上測一測</button>
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
        <div class="col-sm-12">
          <div class="sec1" data-bottom-top="transform: translateX(20px);" data-center="transform: translateX(0px);"><i class="fas fa-heart"></i>
            <h3>收藏的景點</h3>
            <p>內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容。</p>
          </div>
          <div class="sec2" data-bottom-top="transform: translateX(20px);" data-center="transform: translateX(0px);"><i class="fas fa-bookmark"></i>
            <h3>加入書籤</h3>
            <p>內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容內容。</p>
          </div>
        </div>
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
<style scoped>

</style>
