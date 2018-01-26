<?php
 if (isset($_POST['vraag1']) && isset($_POST['vraag2']) && isset($_POST['vraag3']) && isset($_POST['vraag4']) && isset($_POST['vraag5']) && isset($_POST['vraag6']) && isset($_POST['vraag7'])) {
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
            echo "Vul alsjeblieft alle velden in.";
        } else {
            echo "
    ?>
    <p>Er zijn veel mensen die niet kunnen "<?php echo "$vraag1?>. Neem nou "<?php echo "$vraag2?>. Zelfs met de hulp van een "<?php echo "$vraag4?>
    of zelfs "<?php echo "$vraag3?> kan "<?php echo "$vraag2?> niet "<?php echo "$vraag1?>. dat heeft niet te maken met een gebrek aan "<?php echo "$vraag5?> , maar met een 
    te veel aan "<?php echo "$vraag6?>. Teveel "<?php echo "$vraag6?> leidt tot "<?php echo "$vraag7?> en dat is niet goed als je wilt "<?php echo "$vraag1?>.
    Helaas voor "<?php echo "$vraag2?>.</p>
    <?php
    ";
    ?>

</body>
</html>