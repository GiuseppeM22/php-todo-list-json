<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>to-do-json</title>
</head>
<body>
    <div id="app">
        <button class="btn btn-primary my-4" @click="chiamata()">cliccami per generare la lista</button><br>
        <input class="me-3" v-model="newTask" type="text" name="newTask" id="" placeholder="inserisci nuova task">
        <button class="btn btn-primary me-3" @click="addNewTask">aggiungi</button>
        <button class="btn btn-primary" @click="deleteAll">cancella lista</button>
        <div v-if="todo.length" v-for="(lista, i) in todo" class="lista">
            <li class="me-3 my-4">{{lista.list}}</li> <button class="btn btn-primary me-3" @click="deleteSingol(i)">elimina</button> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Edit </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" v-model="editing" placeholder="type your change">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" @click="editItem(i)" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
    </div>
        </div>
        <p v-else>Nessun Elemento</p>
    </div>
    <!-- Modal -->
    
    <script src="./vue.js"></script>
</body>
</html>