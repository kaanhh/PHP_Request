<!-- die Datei zur Übertragung von Daten auf Server wird hier angebunden -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WTC Registrierung</title>

    <!-- Einbau von Bootstrap Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="text-center">
                <h1>Registrierung</h1>
                <h2>WTC</h2>
                </div>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="vorname">Vorname: </label>
                        <input class="form-control" type="text" placeholder="Max" name="vorname" required>
                    </div>
                    <div class="form-group">
                        <label for="nachname">Nachname: </label>
                        <input class="form-control" type="text" placeholder="Mustermann" name="nachname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail: </label>
                        <input class="form-control"  type="text" placeholder="beispiel@mail.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="firma">Firma: </label>
                        <input class="form-control" type="text" placeholder="Musterfirma" name="firma" required>
                    </div>
                    <button class="btn btn-default btn-lg" type="submit" name="reg_benutzer">Absenden</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>