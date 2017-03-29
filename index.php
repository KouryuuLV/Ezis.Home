<?php
include("Classes/StandartClass.php");
include("Classes/1uzd.php");
$Standart = new Standart();
$Main = new Main();

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
  
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div id="kapec">
          <h1 >
          Ežu biedrības topošā mājaslapa.
          </h1>
          <p>Ežu dzimta (Erinaceidae) ir vienīgā ežveidīgo kārtas (Erinaceomorpha) dzimta, kas apvieno 10 mūsdienās dzīvojošas ģintis un 2 izmirušas ģintis, kas savukārt tiek iedalītas 2 apakšdzimtās. Vēl nesenā pagātnē ežu dzimta tika klasificēta kukaiņēdāju kārtā (Eulipotyphla), kura mūsdienu sistemātikās vairs netiek lietota kā taksonomiskā vienība. Ežu dzimtas sugas sastopamas Āfrikā, Eiropā, Āzijā un Borneo.</p>
      </div>
  </div>
  <div class=class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
        <img src="IMG/Logo.jpg"/>
  </div>
  <div class="clear"></div>
  <div class=class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div>
          <P>
              Te tiešām nekā cita nav!
          </P>
      </div>
  </div>
</div>
<div class=class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 35px">
<P>         
</P>
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