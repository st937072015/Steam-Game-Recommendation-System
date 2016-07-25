<?php
require_once "CosineSimilarity.php";

$cs = new CosineSimilarity();



$vector1 = json_decode('{
    "Extraversion": 0.54436164211538,
    "Emotional stability": -0.30778787397689,
    "Agreeableness": 0.39847700453171,
    "Conscientiousness": -0.68138135339548,
    "Openness to experience": -0.205662072461
  }',true);

$vector2 = json_decode('{
    "Extraversion": 0.5162163863054495,
    "Emotional stability": -0.33147244575432766,
    "Agreeableness": 0.36751100045076684,
    "Conscientiousness": -0.6680768509516732,
    "Openness to experience": -0.18236028161139678
  }',true);

$score = $cs ->similarity($vector1,$vector2);
     




echo $score;


/*
echo var_dump($vector2).'<br>';

$cs = new CosineSimilarity();

$re1 = $cs ->similarity($vector1,$vector2);

echo $re1;

*/

?>