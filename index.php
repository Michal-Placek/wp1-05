<?php
    $homelessmoney=132 ;
    $vodkaprice=119 ;

    if ($homelessmoney >= 119) {
        $answer="Vodka zakoupena!" ;
        $rest = $homelessmoney - 119 ;
    }   else {
        $answer="Nedostatek peněz!";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Cena vodky: <?=$vodkaprice?>
    <br>Bezdomovcovi peníze, před návštěvou večerky: <?=$homelessmoney?> </br>
        <br>Bezdomovec přichází do večerky a slušně žádá o flašku vodky</br>
            <br>Prodavač podává flašku a prosí o peníze</br>
                <br>Podává peníze</br>
                    <br><?=$answer?></br>
                <br>Bezdomovci po návštěvě večerky zbývá: <?=$rest?></br>    
</body>
</html>