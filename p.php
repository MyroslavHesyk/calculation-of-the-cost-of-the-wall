<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Підрахунки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
$h = $_POST['height'];
$l = $_POST['length'];
$t = $_POST['thickness'];
$b = $_POST['brick'];

$v = $h*$l*$t;
$n = $v/0.002;
$c = $n*$b ;


echo 
    "
    <table align=center width=600>
        <tr align=center>
            <th> Висота </th>
            <th> Довжина </th>
            <th> Товщина </th>
            <th> Об'єм </th>
            <th> Кількість цегол </th>
            <th> Вартість стіни </th>
        </tr>
        <tr align=center> 
            <td>".$h." м</td>
            <td>".$l." м</td>
            <td>".$t." м</td>
            <td>".$v." м<sup>3</sup></td>
            <td>".$n." шт</td>
            <td>".$c." грн</td>
        </tr>
    </table>
    ";
?>
</body>
</html>

