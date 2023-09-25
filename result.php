<?php 

$censored_word = $_GET["censored_word"];

$paragraph = $_GET["text_area"];

$paragraph = trim($paragraph);

$paragraph_censored = str_replace($censored_word,"*** ",$paragraph );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
<div class="container">
      <h1><?php echo $censored_word?></h1>
      
      <!-- <p>
        <?php var_dump($paragraph);?> 
      </p> -->
      <p>
        <?php echo($paragraph);?>
        <span>
          Lunghezza:
          <?php echo strlen($paragraph);?> caratteri
        </span>
          
      </p>
      <p>
        <?php echo($paragraph_censored);?>
        <span>
          Lunghezza:
          <?php echo strlen($paragraph_censored);?> caratteri
        </span>
      </p>
      
    </div>
 

</body>
</html>