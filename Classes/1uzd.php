<?php
class Main
{
    function getPhpVersion()
    {
        //1uzd
        echo 'Pašreizējā PHP versija: ' . phpversion();

    }

    function showText($welcome)
    {
        //2uzd
        echo $welcome;
    }

    function sum($number1, $number2)
    {
        //3uzd
        $result = $number1 + $number2;
        echo $result;

    }

    function showLength($virkne)
    {

        //4uzd
        echo strlen("$virkne");

    }

    function showPos($findme)
//($msg, $pos)
    {

        //5uzd
        $mystring = 'Es mācos programmēt PHP valodā.';
        //$findme  = 'p';
        $pos = strpos($mystring, $findme);

        // Note our use of ===.  Simply == would not work as expected
        // because the position of 'a' was the 0th (first) character.
        if ($pos === false) {
            echo "Simbols '$findme' netika atrasts virknē '$mystring'";
        } else {
            echo "Simbols '$findme' tika atrasts virknē '$mystring'";
            echo " un atrodas $pos pozīcijā.";
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
    Function showForLoop()
        //Function PrintList($start, $end)
        {
//            for ($number = $start; $number <= $end; $number++)
//            {
//                if ($number <= ($end - 1))
//                    {
//                    echo $number . ", ";
//                    } else {
//                        echo $number . "!";
//                    }
//            };
            for ($i = 1; $i <= 100; $i = $i + 1) {
                print $i;
                echo " ";
            };
        }

    function showWhileLoop()
        //Function showWhileLoop($start, $end)
    {
//            $number = $start;
//            while ($number <= $end)
//            {
//                if ($number <= ($end - 1)) {
//            echo $number . ", ";
//            } else {
//                echo $number . "!";
//            }
//            $number++;
//            };
//        }

        $x = 1;
        while ($x <= 100) {

            print $x;
            echo " ";
            $x++;
        }
    }
//8uzd
    function showColumn()
    {
        ?>

        <table>
<!--            --><?php

            for ($a = 1; $a <= 10; $a = $a + 1) {
                ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $a; ?></td>
                </tr>

            <?php }; ?>


        </table>

        <?php

    }

    function showSwitch($myNum)
    {

        switch ($myNum) {
            case 1:
                echo "Man Garšo Saldējums";
                break;
            case 2:
                echo "Man Garšo putukrējums";
                break;
            case 3:
                echo "Brokoļi ir zaļi!";
                break;
            default:
                echo "Vai tas ir ēdiens?";
        }
    }

    function showSwitchII($z) {
        switch ($z):
            case "rozīnes":
                echo "Jūsu piedeva ir šajā sarakstā";
                break;
            case "rieksti":
                echo "Jūsu piedeva ir šajā sarakstā";
                break;
            default:
                echo "<p>Jūsu piedeva $z nav šajā sarakstā!</p>";
        endswitch;
    }

    function showIf($Hello){

        if (strlen($Hello) < 4) {
            echo "<p>Mainīgā Hello vērtība ir mazāka par 4</p>";
        } elseif (strlen($Hello) > 4) {
            echo "Mainīgā vērtība ir lielāka par 4";
        } else {
            echo "Uzdevums nav izoildīts";

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
