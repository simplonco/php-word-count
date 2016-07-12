<?php
function word_count(){
    $words = explode(" ", "olly olly in come free");
    $result = array_combine($words, array_fill(0, count($words), 0));

    foreach($words as $word) {
        $result[$word]++;
    }

    foreach($result as $word => $count) {
        echo "$word : $word \n";
    }
}
?>
