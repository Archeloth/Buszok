<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Buszjáratok vizsgálatai</title>
</head>
<body>
<h1>Budapesti buszjáratok és vizsgálataik</h1>
    <div class="menu">
        <a href="index.php?p=kezdolap"><button>Kezdőlap</button></a>
        <a href="index.php?p=osszesjarat"><button>Összes buszjárat</button></a>
        <a href="index.php?p=ujbusz"><button>Új buszjárat</button></a>
        <a href="index.php?p=ujvizsgalat"><button>Új vizsgálat</button></a>
    </div>
    <div class="content">
        <?php
            if(isset($_GET['p']))
            {
                $page=$_GET['p'];
                switch($page)
                {
                    case $page: include $page.'.php'; break;

                    default: include 'kezdolap.php'; break;
                }
            }
            else
            {
                include 'kezdolap.php';
            }
        ?>
    </div>
</body>
</html>