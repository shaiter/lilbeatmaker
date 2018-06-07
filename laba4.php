<?php

include 'stat.php';

setlocale(LC_ALL, 'UTF-8');

function find_collocation($text, $search_text){
    $search_text = preg_replace("/$text/ui", "<span style=\"color:red\">$0</span>",$search_text);
    echo "<p>$search_text</p>";
}

function find_word($text, $search_text){
    $search_text = preg_replace("/$text/ui", "<span style=\"color:red;\">$0</span>",$search_text);
    for ($i=1; $i<=1; $i++) {
        if (strlen($text) > 2) {
            $new_text = mb_substr($text, 0, -1);
        }
        $search_text = preg_replace("/$text/ui", "<span style=\"color:red;\">$0</span>",$search_text);
    }
    echo "<p>$search_text</p>";
}

function find_words($text, $search_text){
    $warray = explode(' ',$text);
    for ($j=0; $j<2; $j++){
        $new_text = $warray[$j];
        $search_text = preg_replace("/$new_text/ui", "<span style=\"color:red;\">$0</span>",$search_text);
        for ($i=0; $i<2; $i++) {

            if (strlen($new_text) > 2) {
                $new_text = mb_substr($new_text, 0, -1);
            }
            $search_text = preg_replace("/$new_text/ui", "<span style=\"color:red;\">$0</span>",$search_text);
        }
    }
    echo "<p>$search_text</p>";
}

$search_text = $_POST['search_text'];
$word = $_POST['word'];

if (preg_match("/('[а-яА-Я]+\s+[а-яА-Я]+')/u",$word, $matches)) {
    $text = $matches[0];
    $text = str_replace("'","",$text);
    find_collocation($text,$search_text);
} else {
    if (preg_match("/(\s*[а-яА-Я]+\s+[а-яА-Я]+)/u", $word, $matches)) {
        $text = $matches[0];
        $text = trim($text);
        find_words($text, $search_text);
    }
    else {
        find_word($word, $search_text);
    }
}
?>