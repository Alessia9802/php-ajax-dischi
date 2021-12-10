<?php

$albums = [
    [
        "poster" =>  "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" ,
        "titolo" =>  "New Jersey" ,
        "autore" =>  "Bon Jovi" ,
        "genere" =>  "Rock" ,
        "anno" =>  "1988"
    ],
    [
        "poster" =>  "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg" ,
        "titolo" =>  "Vivi a Wembley 86" ,
        "autore" =>  "Regina" ,
        "genere" =>  "pop" ,
        "anno" =>  "1992"
    ],
    [
        "poster"  => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg" ,
        "titolo"  =>  "I racconti dell'evocatore di dieci" ,
        "autore"  =>  "Sting" ,
        "genere"  =>  "pop" ,
        "anno"  =>  "1993"
    ],
    [
        "poster" =>   "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg " ,
        "titolo" =>   "Steve Gadd Band" ,
        "autore" =>   "Steve Gadd Band" ,
        "genere" =>   "Jazz" ,
         "anno" =>   "2018"
    ],
    [
        "poster" =>  " https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg " ,
        "titolo" =>  "Il nuovo mondo coraggioso " ,
        "autore" =>  " Iron Maiden " ,
        "genere" =>  " Metallo " ,
        "anno" =>  " 2000 "
    ],
    [
        "poster" =>  " https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg " ,
        "titolo" =>  " Un'altra macchina, un altro raider " ,
        "autore" =>  " Eric Clapton " ,
        "genere" =>  " Rock " ,
        "anno" =>  " 2002 "
    ],
    [
        "poster" =>  " https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg " ,
        "titolo" =>  " Made in Japan " ,
        "autore" =>  " Deep Purple " ,
        "genere" =>  " Rock " ,
        "anno" =>  " 1972 "
    ],
    [
        "poster" =>  " https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg " ,
        "titolo" =>  " E giustizia per tutti " ,
        "autore" =>  " Metallica " ,
        "genere" =>  " Metallo " ,
        "anno" =>  " 1988 "
    ],
    [
        "poster" =>  " https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg " ,
        "titolo" =>  " Cablato " ,
        "autore" =>  " Dave Weckl " ,
        "genere" =>  " Jazz " ,
        "anno" =>  " 1994 "
    ],
    [
        "poster" =>  " https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg " ,
        "titolo" =>  " Cattivo " ,
        "autore" =>  " Michael Jacjson " ,
        "genere" =>  " pop " ,
        "anno" =>  " 1987 "
    ]
];

//var_dump($albums);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Disable in production -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
    <!-- Production only 
    <script src='https://cdn.jsdelivr.net/npm/vue@2.6.14'></script>-->
</head>
<body>
    <div id="site_header">
        <img class="spotify" src="./assets/img/logo.png" alt="">
    </div>
    <div id="site_main">
    <div class="container">
        
       <?php foreach ( $albums as $album) : ?>
        <div class="card">
            <img class="locandina" src="<?php echo $album['poster']; ?>" alt="">
       
      <div class="title">
        <?php echo $album['titolo']; ?>
      </div>
      <div class="author">
          <?php echo $album['autore']; ?>
      </div>
      <div class="year">
          <?php echo $album['anno']; ?>
      </div>
        </div>
        
       
    <?php  endforeach; ?>
        </div>
        
    </div>
    <div id="site_footer"></div>
</body>
</html>