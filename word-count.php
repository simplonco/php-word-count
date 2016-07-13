<?php

function wordCount($phrase= "") {
    $phrase= "The str_word_count() function counts the number of words in a string.";
    return str_word_count(explode('', $phrase));
}

?>
