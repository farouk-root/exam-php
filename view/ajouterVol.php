<?php
include_once __DIR__ . '/../controller/VolController.php';
include_once __DIR__ . '/../model/Vol.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vol = new Vol($_POST['referance'], $_POST['companie'], $_POST['destination'], $_POST['date'], $_POST['heure-depart'], $_POST['heure-arrivee']);
    $volController = new VolController();
    $test = $volController->ajouterVol($vol);
    if ($test > 0){
        header('Location: afficherVols.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <fieldset>
            <legend>Reservation vol</legend>
            <label for="ref" >Ref:</label>
            <input type="text" id="ref" name="referance" value=""><br>
            <label for="companie">Companie Aeriene:</label>
            <select id="companie" name="companie">
                <option value="1">Companie1</option>
                <option value="2">Companie2</option>
                <option value="3">Companie3</option>
            </select><br>
            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" value=""><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date"><br>
            <label for="heure-depart">Heure Depart:</label>
            <input type="time" id="heure-depart" name="heure-depart"  class="styling-heure-depart"><br>
            <label for="heure-arrivee">Heure Arrivee:</label>
            <input type="time" id="heure-arrivee" name="heure-arrivee" value=""><br>
            <input type="submit" value="Réserver">
        </fieldset>
    </form>
    
</body>
</html>