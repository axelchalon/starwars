<?php
header("Content-Type: audio/mpeg");
$voice = file_get_contents('http://translate.google.com/translate_tts?tl=fr&q='.urlencode($_GET['q']));
echo $voice;