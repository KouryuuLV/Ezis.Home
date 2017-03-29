<?php
class Main
{
    function getPhpVersion()
    {
        //1uzd
        echo 'Current PHP version: ' . phpversion();
        phpinfo();
    }

    function showText()
    {
        //2uzd
        $welcome = "Let's get started with PHP!";
        echo $welcome;
    }

    function sum($number1, $number2)
    {
        //3uzd
        $result = $number1 + $number2;
        echo $result;

    }

    function showLength()
    {

        //4uzd
        echo strlen("Sveiki!");

    }

    function showPos()
//($msg, $pos)
    {

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

//        $text = "Es mācos programmēt PHP valodā";
//        echo "<b>" . $msg . "</b>" . " " . strpos($text, $pos);
    }

    function showDesign()
    {
        //6uzd
        echo "<p><b>''PHP ir php</b>.<i> skriptu valoda ar kuras</i>.<u> palīdzību tiek veidoti</u>.<b> MySql vaicājumi</b>.</p>";

//        echo "<p><strong>``PHP ir php </strong><i>skriptu valoda
//                    ar kuras </i> <u> palīdzību tiek veidoti </u><strong>MySql vaicājumi”.</p>";
    }


        //7uzd
        Function PrintList($start, $end)
        {
            for ($number = $start; $number <= $end; $number++)
            {
                if ($number <= ($end - 1))
                    {
                    echo $number . ", ";
                    } else {
                        echo $number . "!";
                    }
            };
        }

    function showWhileLoop()
    {
        Function PrintList($start, $end){
            $number = $start;
            while ($number <= $end)
            {
                if ($number <= ($end - 1)) {
            echo $number . ", ";
            } else {
                echo $number . "!";
            }
            $number++;
            };
        }

//        $x = 1;
//        while ($x <= 100) {
//
//            print $x;
//            echo " ";
//            $x++;
//        }
    }

    function showColumn()
    {
        ?>

        //8uzd
        Function PrintDownList($sakums, $beigas){
        for ($leap = 0; $leap < 10; $leap = $leap + 1) {
        echo "<p>$leap</p>";
        }
        };

<!--        <table>-->
<!--            --><?php
//            for ($a = 1; $a <= 10; $a = $a + 1) {
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $a; ?><!--</td>-->
<!--                    <td>--><?php //echo $a; ?><!--</td>-->
<!--                    <td>--><?php //echo $a; ?><!--</td>-->
<!--                </tr>-->
<!---->
<!--            --><?php //}; ?>
<!---->
<!---->
<!--        </table>-->

        <?php

    }

    function showSwitch($myNum)
    {

        switch ($myNum) {
            case 1:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            case 2:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            case 3:
                echo "Jūsu meklētais skaitlis tika atrasts";
                break;
            default:
                echo "Neviens no skaitļiem netika atrasts";
        }
    }

    function showSwitchII($z) {
        switch ($z):
            case "mandarīns":
                echo "Jūsu auglis ir šajā sarakstā";
                break;
            case "apelsīns":
                echo "Jūsu auglis ir šajā sarakstā";
                break;
            default:
                echo "<p>Auglis $z sarakstā nav!</p>";
        endswitch;
    }

    function showIf($Hello){

        if (strlen($Hello) < 4) {
            echo "<p>Mainīgā Hello vērtība ir mazāka par 4</p>";
        } elseif (strlen($Hello) > 4) {
            echo "Mainīgā Hello vērtība ir lielāka par 4";
        } else {
            echo "brrrrrrrrrrrrrrrrrrrrrrrr";

        }
    }

    function showAlphabet(){
        $alfabets = range('A', 'Z');
        foreach ($alfabets as $letter) {
            print("<p>$letter\n</p>");
        }
    }

    function showChar(){
        for ($char = 127; $char >= 64; $char --) {
            echo  ("<strong>$char</strong> = ").chr("$char"); echo " ".", ";


        }
    }

}
?>


<body>

<?php

//8uzd
    Function PrintDownList($start, $end){
    for ($leap = $start; $leap < $end; $leap = $leap + 1) {
    echo "<p>$leap</p>";
    }
    };
    //9uzd
?>
