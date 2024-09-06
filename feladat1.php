<!DOCTYPE html>
<html>
<head>
    <title>Hét Napja Ellenőrzés</title>
</head>
<body>

<form method="post" action="">
    <label for="day">Add meg a hét napját:</label>
    <input type="text" id="day" name="day">
    <input type="submit" name="submit" value="Ellenőrizd">
</form>

<?php
if (isset($_POST['submit'])) {
    $day = strtolower(trim($_POST['day'])); // Kisbetűs átalakítás és felesleges szóközök eltávolítása

    switch ($day) {
        case 'hétfő':
            echo 'hétfő a hét eleje.';
            break;
        case 'kedd':
        case 'szerda':
        case 'csütörtök':
            echo $day . ' a hét közepe.';
            break;
        case 'péntek':
            echo 'péntek a hét vége felé közeledik.';
            break;
        case 'szombat':
        case 'vasárnap':
            echo $day . ' a hét vége.';
            break;
        default:
            echo 'Érvénytelen nap! Kérjük, adj meg egy napot a hétből (pl. hétfő, kedd, stb.).';
    }
}
?>

</body>
</html>
