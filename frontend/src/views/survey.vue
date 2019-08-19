<template>
<div class="container">
  <div class="row-survey">
    <div class="col-xs-12">
      <br> Q1
      <br>
      <div class="btn-group btn-group-vertical" data-toggle="buttons">
        <label class="btn">
          <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span>  Male</span>
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
import axios from 'axios';
export default {
  name: 'survey',
  data (){
    return{
      question: [],
    }
  },
  mounted() {

  },
  methods: {
    question () {
      axios.get()
      .then(function (response){
        this.question = response.data;
      });
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
@import '../assets/scss/survey.scss';
</style>
