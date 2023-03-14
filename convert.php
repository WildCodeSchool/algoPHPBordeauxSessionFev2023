<?php
// Ici ton php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert</title>
</head>
<body>
<h1>Convert</h1>
<p>
</p>
Ecrire une function ( ou programme ) qui convertit une lettre en une autre et renvoie le résultat:
<ul>
    <li>La lettre "A" en "U"</li>
    <li> La lettre "T" en "D"</li>
    <li>La lettre "X" en "P"</li>
    <li>La lettre "K" en "C"</li>
</ul>
<p>
    Dans tous les autres cas, renvoyer l'élément initial.
    Si l'élément reçu n'est pas un caractère alphanumérique, renvoyer "error".
</p>

<h3>Solution</h3>
<?php
/*
function exchangeLetter(string $letter) {
    if (!ctype_alnum($letter))
        return "error";
    elseif($letter == "A")
        return $letter = "U";
    elseif($letter == "T")
        return $letter = "D";
    elseif($letter == "X")
        return $letter = "P";
    elseif($letter == "K")
        return $letter = "C";
    else
        return $letter;
}
*/
function exchangeLetter($letter)
{
    switch ($lettre) {
        case !ctype_alnum($lettre):
            return "error";
        case "A":
            return "U";
        case "T":
            return "D";
        case "X":
            return "P";
        case "K":
            return "C";
        default:
            return $lettre;
    }
}
?>
</body>
</html>