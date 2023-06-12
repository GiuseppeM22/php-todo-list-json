const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        lista : 'api.php',
        todo : [],
      }
    },
    methods: {
        chiamata(){
            axios.get( this.lista ).then((risp) => {
                const risposta = risp.data
                this.todo = risposta
                console.log(this.todo)
              }); 
        }
    }
  }).mount('#app')
