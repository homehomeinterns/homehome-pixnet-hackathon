<template>
  <div id="app">
    <nav class="navbar fixed-top navbar-light navbar-expand"><router-link to="/" class="navbar-brand" href="#top"><i class="fas fa-umbrella-beach"></i><span>Homeinterns</span></router-link>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-sm-auto">
        <li class="nav-item px-2"><a class="nav-link" href="#section_recommand">推薦頁面
            <div id="line"></div></a></li>
        <li class="nav-item px-2"><a class="nav-link" href="#section_article">文章頁面
            <div id="line"> </div></a></li>
        <li class="nav-item px-2"><a class="nav-link" href="#section_test">書籤頁
            <div id="line"></div></a></li>
        <li class="nav-item px-2"><router-link to="/survey" class="nav-link">旅遊測驗
            <div id="line"></div></router-link></li>
      </ul>
    </div>
  </nav>
    <router-view/>
  </div>
</template>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
