<!DOCTYPE html>
<html>

<head>
    <title>Простая форма</title>
</head>

<body>
    <form action="process.php" method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>

</html>