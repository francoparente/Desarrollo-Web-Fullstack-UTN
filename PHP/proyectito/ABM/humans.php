<?php

function humans($mysqli){
    return mysqli_query($mysqli, "SELECT name FROM human");
}
/*
function insertHuman($mysqli){
    return mysqli_query($mysqli, "INSERT INTO human (name) VALUES ('Isildur')");
}
*/