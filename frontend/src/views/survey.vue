<template>
<div class="container">

  <div :key="index" v-for="(question, index) in questions" class="row-survey">
    <div class="col-xs-12">
      <br> Q{{ index+1 }} {{ question.question }}
      <br>
      <div :key="choice" v-for="(choice, i) in question.answer" class="btn-group btn-group-vertical" data-toggle="buttons">
        <label class="btn">
          <input type="radio" v-model="test[index]" :name="index" :value="i" required><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> {{ choice }}</span>
        </label>
      </div>
    </div>
  </div>
    <input type="submit" class="btn btn-info" value="Submit Button" @click="submitAnswer()">
  <div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Loading...</h5>
          <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
      </div>
      </div>
    </div>
  </div>
  </div>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">以下是測試的結果</h5>
        <button type="button" @click="close()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a :key="result.article_url" v-for="result in results" :href="result.article_url">{{ result.spot_name }}<br></a>
        
      </div>
      <div class="modal-footer">
        <button @click="close()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
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
      questions: [],
      test: {
        0:'0',
        1:'0',
        2:'0',
        3:'0',
        4:'0',
        5:'0',
        6:'0',
        7:'0',
      },
      mapping: ["A","B","C","D"],
      results: []
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
    },

    close () {
      document.getElementById('exampleModalCenter').style.display='none';
    },
    
    submitAnswer () {
      document.getElementById('loading').style.display='block';
      document.getElementById('loading').style.opacity='1';
      var diu = Object.values(this.test)
      for(var i = 0 ; i <diu.length ; i++){
        diu[i] = this.mapping[diu[i]];
      }
      diu = diu.join();
      diu = diu.replace(/,/g,'')
      console.log(diu)
        axios({
         method: 'GET',
         url: `http://35.193.69.171/homehome-pixnet-hackathon/public/index.php/spot/${diu}`})
       .then((response) => {
         console.log(response.data);
         this.results = response.data;
        document.getElementById('loading').style.display='none';
        document.getElementById('loading').style.opacity='0';
         document.getElementById('exampleModalCenter').style.display='block';
          document.getElementById('exampleModalCenter').style.opacity='1';
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
