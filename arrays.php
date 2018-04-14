<?php

//associative array
$names=array('mark'=>'56kg','john' => '45kg','bob' => '47kg');

echo "weight of <b> \"mark\"</b> is ".$names['mark']."<br>";

//multidimensonal array
$students=array(array('name' => 'shekhar'),
                array('age' => 22 ),
                array('weight' => '45kg'));


echo 'hello this is '.$students[0]['name'].' and I am '.$students[1]['age'].' years old.';

?>