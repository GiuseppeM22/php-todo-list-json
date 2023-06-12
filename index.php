<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>to-do-json</title>
</head>
<body>
    <div id="app">
        <button @click="chiamata()">cliccami per generare la lista</button>
        <div v-for="lista in todo" class="lista">
            <li>{{lista}}</li>
        </div>
    </div>
    <script src="./vue.js"></script>
</body>
</html>