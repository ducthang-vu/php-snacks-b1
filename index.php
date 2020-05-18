<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    <!-- 
    PHP Snack 1:
    
    Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60
    -->

    <?php
        $matches = [
            [
                'home' => 'Carpegna Prosciutto Basket Pesaro',
                'away' => 'Pompea Fortituto Bologna',
                'pointHome' => 72,
                'pointAway' => 80,
            ],
            [
                'home' => 'Dolomiti Energia Trentino',
                'away' => 'OriOra Pistoia',
                'pointHome' => 88,
                'pointAway' => 75,
            ],
            [
                'home' => 'Sefagredo Virtus Bologna',
                'away' => 'Virtus Roma',
                'pointHome' => 74,
                'pointAway' => 67,
            ],
            [
                'home' => 'Germani Basket Brescia',
                'away' => 'Grissin Bon Reggio Emilia',
                'pointHome' => 90,
                'pointAway' => 82,
            ],
            [
                'home' => 'Umana Reyer Venezia',
                'away' => 'Allianz Pallacanestro Trieste',
                'pointHome' => 78,
                'pointAway' => 73,
            ]
        ];
    ?>

    <h1>Matches</h1>
    <ul>
        <?php
            for ($i = 0; $i < count($matches); $i++) { ?>
                <li>
                    <?php
                        echo sprintf('%s - %s | %d-%d', 
                            $matches[$i]['home'], 
                            $matches[$i]['away'], 
                            $matches[$i]['pointHome'], 
                            $matches[$i]['pointAway']);
                    ?>
                </li>
        <?php } ?>    
    </ul>


    <!--
    PHP Snack 2:
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. che mail contenga un punto e una chiocciola
    3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    -->
    
    <h1>Accesso</h1>
    <?php
        $data = $_GET;

        if (strlen($data['name']) > 3 && strpos($data['mail'], '@') && strpos($data['mail'], '.') && is_numeric($data['age'])) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>
</body>
</html>