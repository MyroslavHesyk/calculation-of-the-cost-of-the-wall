<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прорахунок вартості стіни</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">Прорахунок вартості стіни</h1>
    <h3>Значення вводити у метрах !</h3>
    <form action="./p.php" method="POST">
        Введіть висоту: <input type="text" name="height" size=2> ,
        довжину: <input type="text" name="length" size=2> ,
        товщину: <input type="text" name="thickness" size=2> стіни <br><br>

        Введіть вартість однієї цеглини:
        <input type="text" name="brick" size=2> грн <br><br>

        <div class="input-container">
        <input type="submit" name='sub' value="Підрахувати вартість стіни !">
    </div>
    </form>
</body>

</html>