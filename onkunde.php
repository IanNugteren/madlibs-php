<?php
 if (!empty($_POST['vraag1']) && !empty($_POST['vraag2']) && !empty($_POST['vraag3']) && !empty($_POST['vraag4']) && !empty($_POST['vraag5']) && !empty($_POST['vraag6']) && !empty($_POST['vraag7'])) {
    $vraag1 = $_POST['vraag1'];
    $vraag2 = $_POST['vraag2'];
    $vraag3 = $_POST['vraag3'];
    $vraag4 = $_POST['vraag4'];
    $vraag5 = $_POST['vraag5'];
    $vraag6 = $_POST['vraag6'];
    $vraag7 = $_POST['vraag7'];
 } else {
    $error = true;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php
        if ($error) {
            echo "<div class='error'>Vul alsjeblieft alle velden in.</div>";
        } else {
            echo "
    <p>Er zijn veel mensen die niet kunnen " . $vraag1 . ". Neem nou " . $vraag2 . ". Zelfs met de hulp van een " . $vraag4 . "
    of zelfs " . $vraag3 . " kan " . $vraag2 . " niet " . $vraag1 . ". dat heeft niet te maken met een gebrek aan " . $vraag5 . " , maar met een 
    te veel aan " . $vraag6 . ". Teveel " . $vraag6 . " leidt tot " . $vraag7 . " en dat is niet goed als je wilt " . $vraag1 . ".
    Helaas voor " . $vraag2 . ".</p>";
        }
    ?>

</body>
</html>