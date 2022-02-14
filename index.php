<!-- PHP -->
<?php 

    $paragraph = 'Love isn\'t always a ray of sunshine. That\'s what the older girls kept telling her when she said she had found the perfect man. She had thought this was simply bitter talk on their part since they had been unable to find true love like hers. But now she had to face the fact that they may have been right. Love may not always be a ray of sunshine. That is unless they were referring to how the sun can burn.';

    // get length of the first variable
    $paragraphLenght = strlen($paragraph);

    // GET function
    $censoredWord= $_GET["word"];

    // trying to lowercase before changing words
    $lowercase = strtolower($paragraph);

    // replace censored word
    $censorship = str_replace($censoredWord, '***', $lowercase);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BADWORDS</title>
</head>
<body>
    <h1>PARAGRAPH</h1>
    <h2><?php echo $paragraph ?></h2>
    <br>
    <h2>PARAGRAPH'S LENGTH: <?php echo $paragraphLenght ?></h2>
    <br>
    <br>
    <h1>CENSORED PARAGRAPH</h1>
    <h2><?php echo $censorship ?></h2>
</body>
</html>