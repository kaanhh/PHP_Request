<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WTC Registrierung</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Registrierung</h1>
        </div>

        <form action="registration.php" method="post">
            <div>
                <label for="vorname">Vorname: </label>
                <input type="text" name="vorname" required>
            </div>
            <div>
                <label for="nachname">Nachname: </label>
                <input type="text" name="nachname" required>
            </div>
            <div>
                <label for="email">E-Mail: </label>
                <input type="text" name="email" required>
            </div>
            <div>
                <label for="firma">Firma: </label>
                <input type="text" name="firma" required>
            </div>
            <button type="submit" name="reg_benutzer">Absenden</button>
        </form>
    
    </div>
</body>
</html>