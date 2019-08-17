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
* {
  transition-duration: 0.3s;
  letter-spacing: 0.5px;
}

.disable {
  display: none;
}

nav.navbar.fixed-top.navbar-light.navbar-expand i {
  color: #fc5185;
}
nav.navbar.fixed-top.navbar-light.navbar-expand span {
  color: #fc5185;
  font-family: "Varela Round";
  margin-left: 5px;
}
nav.navbar.fixed-top.navbar-light.navbar-expand a {
  color: #364f6b;
  letter-spacing: 1px;
}
nav.navbar.fixed-top.navbar-light.navbar-expand a #line {
  width: 0px;
  height: 2px;
  background: #5bd6c8;
}
nav.navbar.fixed-top.navbar-light.navbar-expand a:hover #line {
  width: 100%;
  height: 2px;
  background-color: #5bd6c8;
}

header.jumbotron {
  text-align: left;
  background-image: url(https://cdn.pixabay.com/photo/2019/04/19/09/46/holiday-4138980_1280.png);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  margin-bottom: 0px;
  height: 800px;
}
header.jumbotron .container {
  padding: 200px 0px;
}
header.jumbotron hr {
  max-width: 50px;
  border: solid 2px #fc5185;
}
header.jumbotron h1 {
  letter-spacing: 2px;
  color: #364f6b;
}
header.jumbotron .line {
  width: 60px;
  height: 5px;
  background-color: #fc5185;
  margin-top: 20px;
  margin-bottom: 30px;
}
header.jumbotron h5 {
  color: rgba(0, 0, 0, 0.6);
  letter-spacing: 1px;
}

section {
  padding: 40px 0px;
}

section#section_recommand {
  background-color: #5bd6c8;
  color: #444;
}
section#section_recommand .col-sm-5.img {
  background-image: url(https://cdn.pixabay.com/photo/2018/01/31/05/43/web-3120321_1280.png);
  height: 300px;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center center;
}
section#section_recommand .col-sm-7 {
  padding-left: 40px;
}
section#section_recommand h2 {
  padding: 20px 0px;
}

section#section_article {
  padding: 30px 40px;
  color: #364f6b;
}
section#section_article h5 {
  margin-top: 10px;
  margin-bottom: 20px;
}
section#section_article #food {
  background-image: url("https://cdn.pixabay.com/photo/2017/06/16/18/35/tarte-2409958_1280.jpg");
}
section#section_article #hotel {
  background-image: url("https://cdn.pixabay.com/photo/2016/04/15/11/45/hotel-1330841_1280.jpg");
}
section#section_article #spot {
  background-image: url("https://www.penghu-nsa.gov.tw/FileDownload/Scenery/Big/20160907103937579129421.jpg");
}
section#section_article #store {
  background-image: url("https://cdn.pixabay.com/photo/2017/04/13/15/19/hands-2227857_1280.jpg");
}
section#section_article .img_wrap {
  height: 200px;
  margin: 20px 0px;
  overflow: hidden;
  border-radius: 20px;
  background-size: cover;
}
section#section_article .img_wrap:hover h4 {
  opacity: 1;
}
section#section_article .img_wrap:hover .black {
  opacity: 0.4;
}
section#section_article .img_wrap h4 {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  opacity: 0;
  color: #fff;
  letter-spacing: 2px;
  background-color: rgba(0, 0, 0, 0.4);
}

section#section_test {
  background-color: #364f6b;
  color: #fff;
  padding: 0px;
}
section#section_test .container {
  padding: 30px 20px;
}
section#section_test hr {
  border: solid 1px;
}
section#section_test .col-sm-12.col-md-5 {
  background-color: #fff;
  background-image: url(https://cdn.pixabay.com/photo/2017/06/08/17/52/compass-2384365_1280.png);
  background-repeat: no-repeat;
  height: 400px;
  background-size: 100% auto;
}
section#section_test .col-sm-12.col-md-7 {
  text-align: center;
}
section#section_test .col-sm-12.col-md-7 i {
  font-size: 40px;
  padding: 15px;
}
section#section_test .col-sm-12.col-md-7 p {
  text-align: left;
}
section#section_test .row.features {
  margin: 30px 0px;
}
section#section_test .btn {
  color: #364f6b;
  letter-spacing: 1px;
  border-radius: 35px;
}
section#section_test .btn:hover {
  opacity: 0.8;
}

section#section_like {
  color: #444;
}
section#section_like h2 {
  letter-spacing: 2px;
}
section#section_like .col-sm-12 {
  padding: 0px 40px;
}
section#section_like img {
  width: 100%;
}
section#section_like i {
  font-size: 30px;
  padding: 20px 10px;
  color: #fc5185;
}

footer.jumbotron {
  color: #444;
  text-align: center;
  background-image: url(https://cdn.pixabay.com/photo/2019/04/19/09/46/holiday-4138980_1280.png);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  margin-bottom: 0px;
}
footer.jumbotron .container {
  padding: 30px 0px;
}
footer.jumbotron hr {
  max-width: 50px;
  border: solid 2px #fc5185;
}
footer.jumbotron .btn {
  letter-spacing: 2px;
  color: #fc5185;
  background-color: rgba(255, 255, 255, 0.6);
}
footer.jumbotron .btn:hover {
  background-color: #fff;
}
footer.jumbotron input {
  margin-top: 20px;
  background-color: transparent;
  max-width: 500px;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  border: solid 1px #fc5185;
}

</style>
