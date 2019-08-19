<template>
<div class="container">
  <div :key="index" v-for="(question, index) in questions" class="row-survey">
    <div class="col-xs-12">
      <br> Q{{ index+1 }} {{ question.question}}
      <br>
      
      <div :key="choice" v-for="choice in question.answer" class="btn-group btn-group-vertical" data-toggle="buttons">
        <label class="btn">
          <input type="radio" name='gender1'><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> {{ choice }}</span>
        </label>
      </div>
    </div>
  </div>
    <input type="submit" class="btn btn-info" value="Submit Button">
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'survey',
  data (){
    return{
      questions: [],
    }
  },
  mounted() {
    this.question();
  },
  methods: {
    question () {
      axios({
        method: 'GET',
        url: 'http://35.193.69.171/homehome-pixnet-hackathon/public/index.php/ques'})
      .then((response) => {
        console.log(response.data);
        this.questions = response.data;
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
@import '../assets/scss/survey.scss';
</style>
