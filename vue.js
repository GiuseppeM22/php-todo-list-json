const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        lista : 'api.php',
        todo : [],
        newTask: ""
      }
    },
    methods: {
        chiamata(){
            axios.get( this.lista ).then((risp) => {
                let risposta = risp.data
                this.todo = risposta
                console.log("cavolo")
              }); 
        },
        addNewTask() {
            const data = { newTask: this.newTask };

            axios.post(this.lista, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((risp) => {
                console.log("Dati ricevuti: ", risp.data);
                let risposta = risp.data
                this.todo = risposta
                this.newTask = "";
                console.log("questo: ", this.todo);
            });
        }
    }
  }).mount('#app')
