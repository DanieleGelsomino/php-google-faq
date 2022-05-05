

<!DOCTYPE html>
<html lang="it">
<?php
include ('template.php');
?>
<body>
<?php
include ('header.php');
?>
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