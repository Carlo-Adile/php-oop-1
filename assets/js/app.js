const { createApp } = Vue

createApp({
  data(){
    return{
      productions: []
    };
  },
  mounted(){
    // get request from db.php
    axios.get('db.php')
    .then(response => {
      // assign response to array
      this.productions = response.data;
      console.log(response.data)
    })
    .catch(error => {
      console.error('Errore nella richiesta API:', error);
    });
  }
}).mount('#app')