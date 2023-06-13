<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>to-do-json</title>
</head>
<body>
    <div id="app">
        <button @click="chiamata()">cliccami per generare la lista</button>
        <input v-model="newTask" type="text" name="newTask" id="" placeholder="inserisci nuova task">
        <button @click="addNewTask">aggiungi</button>
        <button @click="deleteAll">cancella lista</button>
        <div v-for="(lista, i) in todo" class="lista">
            <li>{{lista.list}}</li> <button @click="deleteSingol(i)">elimina elemento</button>
        </div>
    </div>
    <script src="./vue.js"></script>
</body>
</html>