<?php
class Standart
{
    var $company = "EB";


    static function getLibs(){
        echo '
        <link rel="stylesheet" type="text/css" href="Lib/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="Lib/css/style.css" />
        ';
    }

    static function getJsLibs(){
        echo '
            <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="Lib/js/bootstrap.js"></script>
            <script type="text/javascript" src="js/myFunctions.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            
        ';
    }

    function showTitle(){
        echo $this->company;
    }


    static function getMenu(){
        echo '
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
                <li class="active"><a href="index.php">Sākums<span class="sr-only">(current)</span></a></li>
                <li><a href="cv.html">Par Mani<span class="sr-only">(current)</span></a></li>
                <li><a href="ezi.html">Par Ežiem</a></li>
                <li><a href="galerija.html">Galerija</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Izvēle <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php">Sākums</a></li>
                        <li><a href="anketa.html">Anketa</a></li>
                        <li><a href="galerija.html">Galerija</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="cv2.html">Par Mani</a></li>
                        <li><a href="php.php">PHP uzdevumi</a></li>
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
</nav> ';
    }

    static function getFoot(){
        echo '
        <footer class="footer navbar-fixed-bottom">
            <p>Izveidojis: <a href="cv.html">Juris Lukstiņš</a></p>
            <p>Epasts: <a class="email" href="mailto:juris@lukstins.com">juris@lukstins.com</a></p>
        </footer>';
    }

}


?>