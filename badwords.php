<?php
$paragraph = $_GET['paragraph'];
$censoredword = $_GET['censoredword'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored Badwords</title>
    <!-- Main Styles -->
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>
    <div class="main">

        <div class="original">
            <h2>ORIGINAL PARAGRAPH</h2>
            <p><?php echo "$paragraph"; ?></p>

            <p> il paragrafo e' lungo <?php
                                        echo strlen("$paragraph");
                                        ?> caratteri</p>
        </div>


        <div class="censored">
            <h2>CENSORED PARAGRAPH</h2>
            <p><?php
                $paragraph_replace = str_replace($censoredword, '***', $paragraph);
                echo $paragraph_replace;



                ?></p>
            <p>Il paragrafo è ora lungo <?php
                                        echo strlen("$paragraph_replace");
                                        ?> caratteri </p>
        </div>

</body>

</html>