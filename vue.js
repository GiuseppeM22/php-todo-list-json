const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        lista : 'api.php',
        todo : [],
        newTask: "",
        editing: ""
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

            this.genCall(data)
        },
        deleteAll(){
            const data = { 
                deleteAll : true
            };  

            this.genCall(data)
        },
        deleteSingol(i){
            const data = {
                deleteSingol : i
            }

            this.genCall(data)
        },
        editItem(i){
            const data = {
                edittext : this.editing, 
                indice : i
            }

            this.genCall(data)
        },
        genCall(data){
            axios.post(this.lista, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((risp) => {
                let risposta = risp.data
                this.todo = risposta
                this.newTask = "";
                console.log("questo: ", risp.data);
            });
        }
    },
    mounted(){
        this.chiamata()
    }
  }).mount('#app')
