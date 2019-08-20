<template>
<div class="container">
  <form onsubmit="return false;">
  <div :key="index" v-for="(question, index) in questions" class="row-survey">
    <div class="col-xs-12">
      <br> Q{{ index+1 }} {{ question.question}}
      <br>
      <div :key="choice" v-for="(choice, i) in question.answer" class="btn-group btn-group-vertical" data-toggle="buttons">
        <label class="btn">
          <input type="radio" :name="index" :value="i" v-model="test.index" @change.native="insertAns()" required><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i> <span> {{ choice }}</span>
        {{ test.index }}
        </label>
      </div>
    </div>
  </div>
    <input type="submit" class="btn btn-info" value="Submit Button" @click="submitAnswer()">
  </form>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a :key="result.article_url" v-for="result in results" :href="result.article_url">{{ result.spot_name }}<br></a>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

    insertAns () {
      console.log('wtf')
      $('input[type=radio]').change(function() {
        console.log('jibai')
    });
    },
    
    submitAnswer () {
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
