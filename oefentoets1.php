<html lang="en">
    <body>
        <?php

        /*
         * OPGAVE 1
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 1</h1><br>');

        $woorden = [
            'app noot mies',
            'wie wat waar',
            'een twee drie',
        ];

        foreach($woorden as $woord) {
            print(ucwords($woord) . '<br>');
        }

        /**
         * Opgave 2
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 2</h1><br>');


        $route = [
            'Meppel Zwolle Amersfoort',
            'Lelystad Almere Utrecht'
        ];

        foreach ($route as $singleRoute) {

            $singleRoute = strtoupper(str_replace(' ', '-', $singleRoute));

            echo $singleRoute . '<br>';
        }

        /**
         * Opgave 3
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 3</h1><br>');

        $elektriciteit = TRUE;
        $gas = FALSE;
        $ikHebHetDruk = FALSE;
        $prijsVakman = 90;

        if ($elektriciteit || $gas || $ikHebHetDruk && $prijsVakman <= 100) {
            print("vakman");
        } else {
            print("ik doe het zelf");
        }

        /**
         * Opgave 4
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 4</h1><br>');

        $weekend = FALSE;
        $afstand = 9;

        if(!$weekend && $afstand > 10) print('met de auto!');
        else print('fietsen!');

        /**
         * Opgave 5
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 5</h1><br>');

        $prijsPerStuk = 1;
        $aantal = 100;
        $vasteKlant = TRUE;

        $subTotaal = $prijsPerStuk * $aantal;

        if($subTotaal < 100) {

            $verzendKosten = $aantal * 0.05;
            $totaal = $subTotaal + $verzendKosten;
        } else {
            $verzendKosten = 'gratis';
            $totaal =$subTotaal;
        }

        print('totaalprijs: ' . $subTotaal . '<br>verzendkosten: ' . $verzendKosten);

        if($vasteKlant) {

            $totaal = $totaal * 0.9;
            print('<br>totaal: ' . $totaal . '<br>korting is verwerkt!');
        }

        /**
         * Opgave 6
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 6</h1><br>');

        $maaltijd = 'diner';

        $reserveringen = [
            'ontbijt' => 10,
            'lunch' => 40,
            'diner' => 50,
        ];

        print($maaltijd . ': ' . $reserveringen[$maaltijd]);

        $reserveringen[$maaltijd]++;

        print('<br>' . $maaltijd . ': ' . $reserveringen[$maaltijd]);

        /**
         * Opgave 7
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 7</h1><br>');

        $lengteMetingen = [120, 122, 122, 127];


        $aantalGroeiMetingen = 0;
        $totaleGroei = 0;

        for ($i = 1; $i < count($lengteMetingen); $i++) {

            $groei = $lengteMetingen[$i] - $lengteMetingen[$i -1];

            $outputString = $groei . ' cm gegroeid';

            if($groei > 0) {

                $aantalGroeiMetingen++;
                $totaleGroei += $groei;

            } else {
                $outputString .= ' X';
            }

            print($outputString . '<br>');
        }

        $gemiddeld = $totaleGroei / $aantalGroeiMetingen;

        print('gemiddeld: ' . $gemiddeld);

        /**
         * Opgave 8
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 8</h1><br>');

        $tafel = 5;

        for ($i = 1; $i <= 10; $i++) {
            $vermenigvuldiging = $i * $tafel;
            print($i . ' x ' . $tafel . ' = ' . $vermenigvuldiging . '<br>');
        }

        /**
         * Opgave 9
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 9</h1><br>');

        $maximum = 50;
        $getal1 = 1;
        $getal2 = 2;

        print($getal1 . '<br>');
        print($getal2 . '<br>');

        while($getal2 < $maximum) {

            $sum = $getal1 + $getal2;
            $getal1 = $getal2;
            $getal2 = $sum;
            print($sum . '<br>');
        }

        /**
         * Opgave 10
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 10</h1><br>');

        function wandeling($afgelegdeKilometers, $kilometers) {

            if($afgelegdeKilometers >= $kilometers / 2) {
                $afTeLeggenKilometers = $kilometers - $afgelegdeKilometers;

                print('nog ' . $afTeLeggenKilometers . ' kilometer doorlopen<br>');
            } else {
                print($afgelegdeKilometers . ' kilometer teruglopen<br>');
            }
        }

        wandeling(4, 10);
        wandeling(5,10);
        wandeling(6, 10);

        /**
         * Opgave 11 & 12
         */
        print('<h1 style="border-top: 2px solid #ccc;">Opgave 11 & 12</h1><br>');

        ?>
        <form action="/oefentoets1.php" method="post">
            <div>
                <label for="aantal">Hoe vaak wil je met de dobbelstenen gooien?:</label>
                <input id="aantal" name="aantal">
            </div>
            <button type="submit">Verzenden</button>
        </form>
        <?php
            if(isset($_POST['aantal'])) {
                $aantal = $_POST['aantal'];
            } else {
                //default
                $aantal = 3;
            }


            function werpEnVoegToe() {

                $waarde = rand(1,6);

                print('<img style="margin-right: 5px;" src="' . $waarde . '.jpg">');
            }

            for ($i = 0; $i < $aantal; $i++) {

                print('<div class="throw-container">');
                print('Worp' . ($i + 1) . ': ');
                werpEnVoegToe();
                werpEnVoegToe();
                print('</div>');
            }
        ?>
    </body>
</html>





