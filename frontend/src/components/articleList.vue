<template>
  <div class="containerBox col-md-6 col-lg-3">
    <a class="block" :href="article.link" target="_blank">
      <img :src="article.thumb" class="articleImg">
      <h6>{{ article.title }}</h6>
    </a>
  </div>
</template>

<script>
export default {
  name: 'articleList',
  props: {
      article: Object,
  },
}
</script>

<style lang="scss">
  @import '../assets/scss/articleList.scss';
</style>
