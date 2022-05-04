

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Google FAQ</title>
</head>
<body>
    <div class="header">
        <img class="logo" src="https://www.edigitalagency.com.au/wp-content/uploads/google-logo-png-transparent-background-large-new.png" alt="logo-google">
        <h2 class="title">Privacy e termini</h2>
    </div>
    <div class="container-faq">
        <?php

         include ('data_faq.php');

             foreach ($faq as $key => $single_faq) { ?>

                 <h2><?php echo($single_faq['question']) ?></h2>

                <?php foreach($single_faq['answer'] as $answer) { ?>
    
             <?php echo($answer) ?>
           <?php } ?>
        <?php } ?>
    </div>
</body>
</html>