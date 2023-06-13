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
              }); 
        },
        addNewTask() {
            const data = { 
                newTask : this.newTask 
            };

            axios.post(this.lista, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((risp) => {
                let risposta = risp.data
                this.todo = risposta
                this.newTask = "";
                console.log("questo: ", risp.data);
            });
        }
    }
  }).mount('#app')
