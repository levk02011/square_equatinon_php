<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function solveQuadraticEquation($a, $b, $c)
    {
        $D = $b * $b - 4 * $a * $c;

        if ($D < 0) {
            return "Рівняння не має дійсних коренів.";
        } elseif ($D == 0) {
            $x = -$b / (2 * $a);
            return "Рівняння має один корінь: x = $x";
        } else {
            $x1 = (-$b + sqrt($D)) / (2 * $a);
            $x2 = (-$b - sqrt($D)) / (2 * $a);
            return "Рівняння має два корені: x1 = $x1, x2 = $x2";
        }
    }

    // Приклад використання:
    $a = 1;
    $b = 43;
    $c = 44;
    echo solveQuadraticEquation($a, $b, $c);

    ?>
</body>

</html>