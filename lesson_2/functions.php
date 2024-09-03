<?php
// functions.php

function findMax($arr) {
    return max($arr);
}

function findMin($arr) {
    return min($arr);
}

function sumArray($arr) {
    return array_sum($arr);
}

function sortArray(&$arr) {
    sort($arr);
}

function checkInArray($arr, $value) {
    return in_array($value, $arr);
}
?>
