<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
     <!-- Main Styles -->
     <link rel="stylesheet" href="./css/style.css" />
</head>
<body>

<form action="badwords.php" method="GET">
    <label for="paragraph">Paragrafo</label>
    <input type="text" id="paragraph" name="paragraph">

    <label for="censoredword">Parola da censurare</label>
    <input type="text" id="censoredword" name="censoredword">

    <button type="submit">Invia</button>

</form>
    
</body>
</html>