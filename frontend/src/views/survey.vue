<template>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <br> Q1
      <br>
      <div class="btn-group btn-group-vertical" data-toggle="buttons">
        <label class="btn active">
          <input type="radio" name='gender1' checked><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Male</span>
        </label>
        <label class="btn">
          <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> Female</span>
        </label>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'survey',

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/survey.scss';
</style>
