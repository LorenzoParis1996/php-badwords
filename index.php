<?php
$myText = "Never gonna give you up
    Never gonna let you down
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    Never gonna tell a lie and hurt you";

$textLength = strlen($myText);

$badWord = $_GET["badWord"];
$censorship = str_replace("$badWord", " *** ", $myText);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>Word Count: <?php echo $textLength ?></h1>
    <p><?php echo $myText ?></p>

<form action="./index.php" method="GET">
    <input type="text" name="badWord" id="badWord">
    <button type="submit">censor bad word</button>
</form>

<h1> New Word Count: <?php echo strlen($censorship) ?></h1>
<p><?php echo $censorship ?></p>
</body>
</html>