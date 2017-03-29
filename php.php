<?php
include("Classes/StandartClass.php");
include("Classes/1uzd.php");
$Standart = new Standart();
$main = new Main();

?>

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

<?php Standart::getMenu(); ?>
<div class="container">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3>Uzdevums 1.</h3>
                <p>Noskaidrot, kura php versija ir uzlikta. </p>
                    <div id="result1">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->getPhpVersion(); ?></p>
                </div>

                <h3>Uzdevums 2.</h3>
                <p>Izvadīt uz ekrāna tekstu. </p>
                <div id="result2">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showText("PHP ir Vienkāršs!"); ?></p>
                </div>

                <h3>Uzdevums 3.</h3>
                <p>Saskaitīt divus skaitļus. </p>
                    <div id="result3">
                    <h4>Rezultāts:</h4>
                    <form action="php.php" method="post">
                        <div class="form-group">
                            <label for="calculation">Skaitlis 1:</label>
                            <input type="text" class="form-control" name="number1"/>
                        </div>
                        <div class="form-group">
                            <label for="calculation">Skaitlis 2:</label>
                            <input type="text" class="form-control" name="number2"/>
                        </div>
                        <button type="submit" class="btn btn-default" name="sum">Aprēķināt!</button>
                    </form>
                    <p><?php
                        if(isset($_POST['sum'])){
                            $main->sum($_POST['number1'],$_POST['number2'], "Šo skaitļu summa ir: ");
                        }
                        ?></p>
                </div>

                <h3>Uzdevums 4.</h3>
                <p>Uzrakstīt php skriptu, kas nosaka virknes garumu.</p>
                <p>Virkne: "Sveiki!"</p>
                    <div id="result4">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showLength("Sveiki!"); ?></p>
                </div>

                <h3>Uzdevums 5.</h3>
                <p> Dots teikums: „Es mācos programmēt PHP valodā.” Uzrakstīt php skriptu, kas
                    nosaka, kurā pozīcijā atrodas mazais un lielais "p" burts. </p>
                <div id="result5">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showPos(" p"); ?></p>
                    <p><?php $main->showPos(" P"); ?></p>
                </div>

                <h3>Uzdevums 6.</h3>
                <p> Uzrakstīt php skriptu, kas izvada šādi noformatētu tekstu: „<strong>PHP ir php </strong><i>skriptu valoda
                        ar kuras </i> <u> palīdzību tiek veidoti </u><strong>MySql vaicājumi.</strong>” </p>
                <div id="result6">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showDesign(); ?></p>
                </div>

                <h3>Uzdevums 7.</h3>
                <p>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 100 rindā izmantojot gan while,
                    gan for ciklus.</p>
                <div id="result7">
                    <h4>Rezultāts:</h4>
                    <p>Foor loop:</p>
                    <p><?php $main->showForLoop("1","100"); ?></p>
                    <p>While loop:</p>
                    <p><?php $main->showWhileLoop(1,100); ?></p>
                </div>

                <h3>Uzdevums 8.</h3>
                <p>Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 10 kollonā gan while, gan for
                    ciklus.</p>

                <div id="result8">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showColumn(); ?></p>
                </div>

                <h3>Uzdevums 9.</h3>
                <p>Uzrakstīt php skriptu, kas atspoguļo switch darbības principu gan skaitļiem, gan
                    tekstam.</p>
                <div id="result9">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showSwitch(1); ?></p>
                    <p><?php $main->showSwitchII("rieksti"); ?></p>
                </div>

                <h3>Uzdevums 10.</h3>
                <p>Uzrakstīt php skriptu, kas atspoguļo if..., elseif...., else konstrukciju.</p>

                <div id="result10">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showIf("Sveiki"); ?></p>
                </div>

                <h3>Uzdevums 11.</h3>
                <p>Uzrakstīt php skriptu, kas uz ekrāna izvada alfabētu.</p>

                <div id="result11">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showAlphabet(); ?></p>
                </div>

                <h3>Uzdevums 12.</h3>
                <p>Uzrakstīt php skriptu, kas uz ekrāna izvada ASCII tabulas simbolus un to
                    kodus sākot no 127. līdz 64. Piemēram, 127 = •, 26 = ~, 125 = } u.c.</p>

                <div id="result12">
                    <h4>Rezultāts:</h4>
                    <p><?php $main->showChar(); ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>

<?php Standart::getFoot(); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Lib/js/bootstrap.js"></script>
</body>
</html>