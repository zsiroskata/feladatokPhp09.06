<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="day">Milyen napo van? </label>
        <input type="text" name="day" id="day">
        <button>Ellenőrizd!</button>
    </form>

</body>
</html>

<?php
if (isset($_POST['day'])) {
    $day =  $_POST['day'];

    switch ($day) {
        case 'hétfő':
           echo "no bueno"
            break;
        default:
            echo "nincs ilyen nap"
            break;
    }
}
?>