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
            <div class="row">
                <div class="card" v-for="album in albums" :key="album.title">
                    <div>{{album.title}}</div>
                </div>
            </div>
        </div>
    </div>  
<div id="site_footer"></div>
</div>

    
  
    
</body>
</html>