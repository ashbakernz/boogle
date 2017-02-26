<?php

function getRandomResult($data){
 $randomArray = array_rand($data);
 return [$data[$randomArray]];
}
