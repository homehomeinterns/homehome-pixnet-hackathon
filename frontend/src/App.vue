<template>
  <div id="app">
    <nav class="navbar fixed-top navbar-light navbar-expand"><router-link to="/" class="navbar-brand" href="#top"><i class="fas fa-umbrella-beach"></i><span>Homeinterns</span></router-link>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-sm-auto">
        <li class="nav-item px-2"><router-link to="./recomend" class="nav-link" href="#section_recommand">推薦頁面
            <div id="line"></div></router-link></li>
        <li class="nav-item px-2"><router-link to="./construction" class="nav-link" href="#section_article">文章頁面
            <div id="line"> </div></router-link></li>
        <li class="nav-item px-2"><router-link to="./construction" class="nav-link" href="#section_test">書籤頁
            <div id="line"></div></router-link></li>
        <li class="nav-item px-2"><router-link to="./survey" class="nav-link">旅遊測驗
            <div id="line"></div></router-link></li>
      </ul>
    </div>
  </nav>
    <router-view/>
  </div>
</template>

<script>
export default {
  methods: {
    navbar () {
      window.addEventListener('scroll', function() {
        let navbar = document.querySelector('.navbar');
        if (window.scrollY > 0) {
          navbar.classList.add('bg-light');
        } else {
          navbar.classList.remove('bg-light');
        }
      });
    }
  },
  mounted () {
    this.navbar();
  }
}
</script>

<style>
html {
  height: 100%;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
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
</style>
