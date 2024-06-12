<?php
include_once __DIR__ . '/../controller/VolController.php';
include_once __DIR__ . '/../model/Vol.php';
$volController = new VolController();
$vols = $volController->getAllVols();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Ref</td>
            <td>Compagnie</td>
            <td>Destination</td>
            <td>Date</td>
            <td>HDepart</td>
            <td>HArrivee</td>
        </tr>
        <?php foreach ($vols as $vol) { ?>
            <tr>
                <td><?php echo $vol['ref']; ?></td>
                <td><?php echo $vol['compagnieAerienne']; ?></td>
                <td><?php echo $vol['destination']; ?></td>
                <td><?php echo $vol['date']; ?></td>
                <td><?php echo $vol['hDepart']; ?></td>
                <td><?php echo $vol['hArivee']; ?></td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>