<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Dischi JSON</title>
</head>

<body>
    <!--  
Descrizione

Dobbiamo creare una web-app che permetta di leggere una 
lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a 
comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
-->


    <header>
        <img class="m-1" src="./img/logo-small.svg" alt="logo" style="width: 45px; height:45px">

    </header>

    <main>
        <div class="leftSide"></div>

        <div class="cardContent ">
            <div id="app">
                <div class=" cards d-flex">
                    <div v-for="(disk, index) in disksList" :key="disk" class="card text-center text-white fontCard">
                        <img :src="disk.poster" alt="poster-disk">
                        <h6 class="  px-3 fw-bold">
                            {{ disk.title}}
                        </h6>
                        <p>
                            {{ disk.author}}
                        </p>
                        <p>
                            {{ disk.year}}
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <div class="rightSide"> </div>
    </main>


    <script src="./js/main.js"></script>
</body>

</html>