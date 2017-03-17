<!DOCTYPE html>
<html>
<title>Ežu Biedrība</title>
<meta http-equiv="Content-Language" content="lv">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="IMG/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="Lib/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="Lib/css/style.css" />


<body>

<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Eži</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Sākums<span class="sr-only">(current)</span></a></li>
                <li><a href="cv.html">Par Mani<span class="sr-only">(current)</span></a></li>
                <li><a href="ezi.html">Par Ežiem</a></li>
                <li><a href="galerija.html">Galerija</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Izvēle <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Sākums</a></li>
                        <li><a href="anketa.html">Anketa</a></li>
                        <li><a href="galerija.html">Galerija</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="cv2.html">Par Mani</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="kont.html">Kontakti</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="kont.html">Kontakti</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
//1
<?php

    //1uzd
    echo 'Current PHP version: ' . phpversion();
        phpinfo();
    //2uzd
    $welcome = "Let's get started with PHP!";
    echo $welcome;

    //3uzd
    $summa = 5 + 6;
    echo $summa;

    //4uzd
    echo strlen("Sveiki!");

    //5uzd
    $mystring = 'Es mācos programmēt PHP valodā.';
    $findme   = 'p';
    $pos = strpos($mystring, $findme);

    // Note our use of ===.  Simply == would not work as expected
    // because the position of 'a' was the 0th (first) character.
    if ($pos === false) {
        echo "The string '$findme' was not found in the string '$mystring'";
    } else {
        echo "The string '$findme' was found in the string '$mystring'";
        echo " and exists at position $pos";
    }
    //6uzd
    echo <b>"PHP ir php"</b>.<i>" skriptu valoda ar kuras"</i>.<u>" palīdzību tiek veidoti"</u>.<b>" MySql vaicājumi"</b>;

    //7uzd
    Function PrintList($sakums, $beigas){
        $number = $sakums;
        for ($sakums = 1; $number <= $beigas; $number++)
        {
            if ($number <= ($beigas - 1) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
        };
    }

    //8uzd
    Function PrintDownList($sakums, $beigas){
    for ($leap = 0; $leap < 10; $leap = $leap + 1) {
    echo "<p>$leap</p>";
    }
    };
    //9uzd






?>
</div>
<footer class="footer navbar-fixed-bottom">
    <p>Izveidojis: <a href="cv.html">Juris Lukstiņš</a></p>
    <p>Epasts: <a class="email" href="mailto:juris.lukstins@gmail.com">juris.lukstins@gmail.com</a></p>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Lib/js/bootstrap.js"></script>
</body>
</html>