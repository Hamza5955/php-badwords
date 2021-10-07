<?php 
    $stringa = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error tempore cumque, maxime culpa a ut suscipit ipsum nostrum officia animi quasi eaque aliquam. Atque eius illum distinctio, dignissimos ea doloremque?';
    $lungezastr = strlen($stringa);
    $badWord = array('ipsum');
?>

<h1> <?php echo $stringa ?></h1>
<p> string length <?php echo $lungezastr ?></p>

<h1> <?php echo str_ireplace($badWord ,"*****", $stringa); ?> </h1>

<p> string length <?php echo strlen(str_ireplace($badWord ,"***", $stringa)); ?></p>
