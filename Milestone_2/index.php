<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Milestone 2</title>
</head>
<body>

<div id="app">
<div id="site_header">
        <img class="spotify" src="./assets/img/logo.png" alt="">
    </div>

    <div id="site_main">
        <div class="container">
            <div class="card" v-for="album in albums" :key="album.titolo">
                    <img class="locandina" :src="album.poster" alt="" />
                    <div class="title">{{album.titolo}}</div>
                    <div class="author">{{album.autore}}</div>
                    <div class="year">{{album.anno}}</div>

                </div>
        </div>
    </div>  
<div id="site_footer"></div>
</div>

    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="./assets/js/app.js"></script>
</body>
</html>