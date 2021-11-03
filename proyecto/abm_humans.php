<?php

function humans($mysqli){
    return mysqli_query($mysqli, "SELECT name FROM human");
}