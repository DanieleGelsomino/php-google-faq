<?php
//phpinfo();

include ('data_faq.php');

foreach ($faq as $key => $single_faq) {
    echo( '<h2>' . $single_faq['question'] . '</h2>');

    foreach($single_faq['answer'] as $answer) {
        echo('<p>' . $answer . '</p>');
    }
}

?>